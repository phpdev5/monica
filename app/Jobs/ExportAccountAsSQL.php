<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;

class ExportAccountAsSQL
{
    use Dispatchable, SerializesModels;

    protected $ignoredTables = [
        'activity_type_groups',
        'activity_types',
        'cache',
        'countries',
        'currencies',
        'failed_jobs',
        'jobs',
        'migrations',
        'password_resets',
        'sessions',
        'statistics',
        'accounts'
    ];

    protected $file = '';
    protected $path = '';

    /**
     * Create a new job instance.
     *
     * @param string|null $file
     * @param string|null $path
     */
    public function __construct($file = null, $path = null)
    {
        $this->path = $path ?? 'exports/';
        $this->file = rand() . '.sql';
    }

    /**
     * Execute the job.
     *
     * @return string
     */
    public function handle()
    {
        $downloadPath = $this->path . $this->file;

        $user = auth()->user();
        $account = $user->account;

        $sql = "# ************************************************************
# " . $user->first_name . " " . $user->last_name . " dump of data
# {$this->file}
# Export date: " . Carbon::now() . "
# ************************************************************

" . PHP_EOL;




        $tables = DB::select('SELECT table_name FROM information_schema.tables WHERE table_schema="monica"');

        // Looping over the tables
        foreach ($tables as $table) {
            $tableName = $table->table_name;

            if (in_array($tableName, $this->ignoredTables)) {
                continue;
            }

            $tableData = DB::table($tableName)->get();

            // Looping over the rows
            foreach ($tableData as $data) {

                $newSQLLine = 'INSERT INTO ' . $tableName . ' (';
                $tableValues = [];
                $skipLine = false;

                // Looping over the column names
                $tableColumnNames = [];
                foreach ($data as $columnName => $value) {
                    array_push($tableColumnNames, $columnName);
                }

                $newSQLLine .= implode(',', $tableColumnNames) . ') VALUES (';

                // Looping over the values
                foreach ($data as $columnName => $value) {

                    if ($columnName == 'account_id') {
                        if ($value !== $account->id) {
                            $skipLine = true;
                            break;
                        }
                    }

                    if (is_null($value)) {
                        $value = 'NULL';
                    } elseif (!is_numeric($value)) {
                        $value = "'" . addslashes($value) . "'";
                    }

                    array_push($tableValues, $value);
                }

                if ($skipLine == false) {
                    $newSQLLine .= implode(',', $tableValues) . ');' . PHP_EOL;
                    $sql .= $newSQLLine;
                }
            }
        }

        // Specific to `accounts` table
        // TODO: simplify this
        foreach ($tables as $table) {
            $tableName = $table->table_name;

            if ($tableName !== 'accounts') {
                continue;
            }

            $tableData = DB::table($tableName)->get();

            foreach ($tableData as $data) {

                $newSQLLine = 'INSERT INTO ' . $tableName . ' VALUES (';
                $tableValues = [];
                $skipLine = false;

                foreach ($data as $columnName => $value) {

                    if ($columnName == 'id') {
                        if ($value !== $account->id) {
                            $skipLine = true;
                            break;
                        }
                    }

                    if (is_null($value)) {
                        $value = 'NULL';
                    } elseif (!is_numeric($value)) {
                        $value = "'" . addslashes($value) . "'";
                    }

                    array_push($tableValues, $value);
                }

                if ($skipLine == false) {
                    $newSQLLine .= implode(',', $tableValues) . ');' . PHP_EOL;
                    $sql .= $newSQLLine;
                }
            }
        }

        Storage::disk('public')->put($downloadPath, $sql);

        return $downloadPath;
    }
}
