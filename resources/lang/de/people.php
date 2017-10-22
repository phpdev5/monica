<?php

return [

    //index
    'people_list_number_kids' => '{0} 0 Kinder|{1,1} 1 Kind|{2,*} :count Kinder',
    'people_list_last_updated' => 'Zuletzt geändert:',
    'people_list_number_reminders' => '{0} 0 Erinnerungen|{1,1} 1 Erinnerung|{2, *} :count Erinnerungen',
    'people_list_blank_title' => 'Du hast noch niemanden in deinem Konto angelegt',
    'people_list_blank_cta' => 'Jemand hinzufügen',
    'people_list_sort' => 'Sortieren',
    'people_list_stats' => ':count Kontakte',
    'people_list_firstnameAZ' => 'Nach Vorname sortieren A → Z',
    'people_list_firstnameZA' => 'Nach Vorname sortieren Z → A',
    'people_list_lastnameAZ' => 'Nach Nachname sortieren A → Z',
    'people_list_lastnameZA' => 'Nach Nachname sortieren Z → A',
    'people_list_filter_tag' => 'Zeige alle Kontakte mit Tag: <span class="pretty-tag">:name</span>',
    'people_list_clear_filter' => 'Filter löschen',
    'people_list_contacts_per_tags' => '{0} 0 Kontakte|{1,1} 1 Kontakt|{2,*} :count Kontakte',
    'people_search' => 'Suche in deinen Kontakten...',
    'people_search_no_results' => 'Keine passenden Kontakte gefunden :(',
    'people_list_account_usage' => 'Dein Account nutzt: :current/:limit Kontakte',
    'people_list_account_upgrade_title' => 'Führe ein Upgrade aus um das vollständige Potential zu entfalten.',
    'people_list_account_upgrade_cta' => 'Upgrade jetzt',

    // people add
    'people_add_title' => 'Person hinzufügen',
    'people_add_firstname' => 'Vorname',
    'people_add_middlename' => 'zweiter Vorname (Optional)',
    'people_add_lastname' => 'Nachname (Optional)',
    'people_add_cta' => 'Person hinzufügen',
    'people_add_gender' => 'Geschlecht',
    'people_delete_success' => 'Der Kontakt wurde gelöscht',
    'people_delete_message' => 'Wenn du den Kontakt entfernen möchtest,',
    'people_delete_click_here' => 'klick hier',
    'people_delete_confirmation' => 'Möchtest du den Kontakt wirklich löschen? Es gibt kein Zurück.',
    'people_add_birthday_reminder' => 'Gratuliere :name zum Geburtstag',
    'people_add_import' => 'Möchtest du Kontakte <a href="/settings/import">importieren</a>?',

    // show
    'section_personal_information' => 'Persönliche Informationen',
    'section_personal_activities' => 'Aktivitäten',
    'section_personal_reminders' => 'Erinnerungen',
    'section_personal_tasks' => 'Aufgaben',
    'section_personal_gifts' => 'Geschenke',

    //
    'link_to_list' => 'Personenliste',

    // Header
    'edit_contact_information' => 'Kontaktinformationen bearbeiten',
    'call_button' => 'Telefonat vermerken',

    // Calls
    'modal_call_title' => 'Telefonat vermerken',
    'modal_call_comment' => 'Worüber habt ihr geredet? (optional)',
    'modal_call_date' => 'Das Telefonat war heute.',
    'modal_call_change' => 'Ändern',
    'modal_call_exact_date' => 'Das Telefonat war am',
    'calls_add_success' => 'Telefonat gespeichert.',
    'call_delete_confirmation' => 'Möchstest du das Telefonat wirklich löschen?',
    'call_delete_success' => 'Das Telfonat wurde erfolgreich gelöscht',
    'call_title' => 'Telefonate',
    'call_empty_comment' => 'Keine Details',
    'call_blank_title' => 'Behalte deine Telefonate mit :name im Auge',
    'call_blank_desc' => 'Du hast :name angerufen',

    // age - birthday
    'birthdate_not_set' => 'Geburstag noch nicht gesetzt',
    'age_approximate_in_years' => 'ungefähr :age Jahre alt',
    'age_exact_in_years' => ':age Jahre alt',
    'age_exact_birthdate' => 'geboren am :date',

    // Last called
    'last_called' => 'Letztes Telefonat: :date',
    'last_called_empty' => 'Letztes Telefonat: unbekannt',
    'last_activity_date' => 'Letzte gemeinsame Aktivität: :date',
    'last_activity_date_empty' => 'Letzte gemeinsame Aktivität: unbekannt',

    // additional information
    'information_edit_success' => 'Das Profil wurde erfolgreich aktualisiert',
    'information_edit_title' => 'Ändere :name\'s persönliche informations',
    'information_edit_avatar' => 'Foto/Avatar des Kontakts',
    'information_edit_max_size' => 'Max :size Mb.',
    'information_edit_firstname' => 'Vorname',
    'information_edit_lastname' => 'Nachname (Optional)',
    'information_edit_facebook' => 'Facebook-Profile (optional)',
    'information_edit_twitter' => 'Twitter-Profile (optional)',
    'information_edit_linkedin' => 'LinkedIn-Profile (optional)',
    'information_edit_street' => 'Straße (optional)',
    'information_edit_province' => 'Bezirk (optional)',
    'information_edit_postalcode' => 'Postleitzahl (optional)',
    'information_edit_city' => 'Stadt (optional)',
    'information_edit_country' => 'Land (optional)',
    'information_edit_email' => 'E-Mail-Adresse (optional)',
    'information_edit_phone' => 'Telefonnummer (optional)',
    'information_edit_probably' => 'Diese Person ist wahrscheinlich',
    'information_edit_probably_yo' => 'Jahre alt',
    'information_edit_exact' => 'Ich kenne den Geburstag der Person',
    'information_edit_help' => 'Wenn du einen genauen Geburtstag eingibst, erstellen wir für dich automatisch eine Erinnerung, so dass du jedes Jahr daran erinnert wirst dieser Person zu gratulieren.',
    'information_no_address_defined' => 'keine Adresse angegeben',
    'information_no_email_defined' => 'keine E-Mail-Adresse angegeben',
    'information_no_phone_defined' => 'keine Telefonnummer angegeben',
    'information_no_facebook_defined' => 'Facebook nicht angegeben',
    'information_no_twitter_defined' => 'Twitter nicht angegeben',
    'information_no_linkedin_defined' => 'LinkedIn nicht angegeben',
    'information_no_work_defined' => 'keine Arbeitsplatz-Informationen angegeben',
    'information_work_at' => 'bei :company',
    'work_add_cta' => 'Ändere Arbeitsplatz-Informationen',
    'work_edit_success' => 'Arbeitsplatz-Informationen wurden erfolgreich aktualisiert',
    'work_edit_title' => 'Änderer :name\'s Arbeitsplatz-Informationen',
    'work_edit_job' => 'Position (optional)',
    'work_edit_company' => 'Firma (optional)',

    // food preferencies
    'food_preferencies_add_success' => 'Essensvorlieben gespeichert',
    'food_preferencies_edit_description' => 'Vielleicht hat :firstname oder jemand in der :family Familie eine Allergie oder mag einen bestimmten Wein nicht. Vermerke so etwas hier, damit du dich beim der nächsten Einladung zum Abendessen daran erinnerst',
    'food_preferencies_edit_description_no_last_name' => 'Vielleicht hat :firstname eine Allergie oder mag einen bestimmten Wein nicht. Vermerke so etwas hier, damit du dich beim der nächsten Einladung zum Abendessen daran erinnerst',
    'food_preferencies_edit_title' => 'Gib Essensvorlieben an',
    'food_preferencies_edit_cta' => 'Speichere Essensvorlieben',
    'food_preferencies_title' => 'Essensvorlieben',
    'food_preferencies_cta' => 'Essensvorlieben hinzufügen',

    // reminders
    'reminders_blank_title' => 'Gibt es etwas woran du über :name erinnert werden willst?',
    'reminders_blank_add_activity' => 'Erinnerung hinzufügen',
    'reminders_add_title' => 'Woran würdest du gerne über :name erinnert werden?',
    'reminders_add_description' => 'Erinnere mich daran...',
    'reminders_add_predefined' => 'Voreingestellte Erinnerung',
    'reminders_add_custom' => 'Benutzerdefinierte Erinnerung',
    'reminders_add_next_time' => 'Wann möchtest du das nächste mal daran erinnert werden?',
    'reminders_add_once' => 'Erinnere mich daran nur einmal',
    'reminders_add_recurrent' => 'Erinnere mich daran jeden',
    'reminders_add_starting_from' => 'angefangen vom oben angegebenen Datum',
    'reminders_add_cta' => 'Erinnerung hinzufügen',
    'reminders_add_error_custom_text' => 'Du musst einen Text für die Erinnerung angeben',
    'reminders_create_success' => 'Die Erinnerung wurde erfolgreich hinzugefügt',
    'reminders_delete_success' => 'Die Erinnerung wurde erfolgreich gelöscht',

    'reminder_frequency_week' => 'jede Woche|alle :number Wochen',
    'reminder_frequency_month' => 'jeden Monat|alle :number Monate',
    'reminder_frequency_year' => 'jedes jahr|alle :number Jahre',
    'reminder_frequency_one_time' => 'am :date',
    'reminders_delete_confirmation' => 'Möchtest du diese Erinnerung wirklich löschen?',
    'reminders_delete_cta' => 'löschen',
    'reminders_next_expected_date' => 'am',
    'reminders_cta' => 'Erinnerung hinzufügen',
    'reminders_description' => 'Wir werden eine E-Mail für jede der unten stehenden Erinnerungn verschicken. Erinnerungen werden immer morgens verschickt. Erinnerungn, die automatisch für Geburtstage angelegt wurden, können nicht gelöscht werden. Wenn du dieses Datum ändern willst, dann ändere den Geburtstag des Kontakts.',
    'reminders_one_time' => 'Einmal',
    'reminders_type_week' => 'Woche',
    'reminders_type_month' => 'Monat',
    'reminders_type_year' => 'Jahr',
    'reminders_free_plan_warning' => 'Du befindest dich im freiem Angebot. Hier werden keine Emails versendet. Um die Erinnerungs Emails zu erhalten upgrade deinen Account.',

    // significant other
    'significant_other_sidebar_title' => 'Lebensgefährte',
    'significant_other_cta' => 'Lebensgefährte hinzufügen',
    'significant_other_add_title' => 'Wer ist der Lebensgefährte von :name?',
    'significant_other_add_firstname' => 'Name',
    'significant_other_add_unknown' => 'Ich kenne das Alter dieser Person nicht',
    'significant_other_add_probably' => 'Diese Person ist wahrscheinlich',
    'significant_other_add_probably_yo' => 'Jahre alt',
    'significant_other_add_exact' => 'Ich kenne den Geburtstag dieser Person',
    'significant_other_add_help' => 'Wenn du einen genauen Geburtstag eingibst, erstellen wir für dich automatisch eine Erinnerung, so dass du jedes Jahr daran erinnert wirst dieser Person zu gratulieren.',
    'significant_other_add_cta' => 'Lebensgefährte hinzufügen',
    'significant_other_edit_cta' => 'Lebensgefährte bearbeiten',
    'significant_other_delete_confirmation' => 'Möchtest du diesen Lebensgefährten wirklich löschen? Es gibt kein Zurück.',
    'significant_other_unlink_confirmation' => 'Möchtest du diese Beziehung wirklich löschen? Der Lebensgefährte wird nicht gelöscht - nur die Beziehung zwischen den beiden.',
    'significant_other_add_success' => 'Lebensgefährte wurde erfolgreich hinzugefügt',
    'significant_other_edit_success' => 'Lebensgefährte wurde erfolgreich aktualisiert',
    'significant_other_delete_success' => 'Lebensgefährte wurde erfolgreich gelöscht',
    'significant_other_add_birthday_reminder' => 'Gratuliere :name zum Geburstag, :contact_firstname\'s Lebensgefährte',
    'significant_other_add_person' => 'Person hinzufügen',
    'significant_other_link_existing_contact' => 'Existierenden Kontakt wählen',
    'significant_other_add_no_existing_contact' => 'Du hast derzeit keine Kontakte, die :name\'s Lebensgefährte werden könnten.',
    'significant_other_add_existing_contact' => 'Wähle einen existierenden Kontakt als Lebensgefährte für :name',
    'contact_add_also_create_contact' => 'Erstelle einen neuen Kontakt für diese Person.',
    'contact_add_add_description' => 'Dies erlaubt dir den Lebensgefährten wie jeden anderen Kontakt zu verwalten.',

    // kids
    'kids_sidebar_title' => 'Kinder',
    'kids_sidebar_cta' => 'Kind hinzufügen',
    'kids_blank_cta' => 'Kind hinzufügen',
    'kids_add_title' => 'Kind hinzufügen',
    'kids_add_boy' => 'Junge',
    'kids_add_girl' => 'Mädchen',
    'kids_add_gender' => 'Geschlecht',
    'kids_add_firstname' => 'Vorname',
    'kids_add_firstname_help' => 'Wir vermuten der Nachname ist :name',
    'kids_add_lastname' => 'Nachname (optional)',
    'kids_add_also_create' => 'Erstelle ebenfalls einen Kontakt eintrag für diese Person.',
    'kids_add_also_desc' => 'Das lässt dich das Kind wie jede andere Persion behandeln.',
    'kids_add_no_existing_contact' => 'Du hast keinen Kontakt der ein Kind von :name\'s seien kann.',
    'kids_add_existing_contact' => 'Wähle einen existierenden Kontakt als Kind von :name aus.',
    'kids_add_probably' => 'Das Kind ist wahrscheinlich',
    'kids_add_probably_yo' => 'Jahre alt',
    'kids_add_exact' => 'Ich kenne den Geburtstag dieses Kindes',
    'kids_add_help' => 'Wenn du einen genauen Geburtstag eingibst, erstellen wir für dich automatisch eine Erinnerung, so dass du jedes Jahr daran erinnert wirst diesem Kind zu gratulieren.',
    'kids_add_cta' => 'Kind hinzufügen',
    'kids_edit_title' => 'Informationen über :name bearbeiten',
    'kids_delete_confirmation' => 'Möchtest du dieses Kind wirklich löschen? Es gibt kein Zurück',
    'kids_add_success' => 'Das Kind wurde erfolgreich hinzugefügt',
    'kids_update_success' => 'Das Kind wurde erfolgreich aktualisiert',
    'kids_delete_success' => 'Das Kind wurde erfolgreich gelöscht',
    'kids_add_birthday_reminder' => 'Gratuliere :name zum Geburtstag, :contact_firstname\'s Kind',
    'kids_unlink_confirmation' => 'Bist Du dir sicher, dass du diese Verbindung lösen möchtest? Das Kind wird nicht gelöscht nur die Verbindung zwischen beiden Kontakten.',

    // tasks
    'tasks_desc' => 'Behalte Aufgaben für :name im Auge',
    'tasks_blank_title' => 'Es scheint als hättest du noch keine Aufgaben für :name',
    'tasks_blank_add_activity' => 'Aufgabe hinzufügen',
    'tasks_add_title_page' => 'Neue Aufgabe für :name hinzufügen',
    'tasks_add_title' => 'An welche Aufgabe möchtest du erinnert werden?',
    'tasks_add_optional_comment' => 'Kommentar (optional)',
    'tasks_add_cta' => 'Aufgabe hinzufügen',
    'tasks_add_success' => 'Die Aufgabe wurde erfolgreich hinzugefügt',
    'tasks_delete' => 'Löschen',
    'tasks_reactivate' => 'Reaktivieren',
    'tasks_mark_complete' => 'Als erledigt markieren',
    'tasks_add_task' => 'Aufgabe hinzufügen',
    'tasks_added_on' => 'hinzugefügt am :date',
    'tasks_delete_confirmation' => 'Möchtest du diese Aufgabe wirklich löschen?',
    'tasks_delete_success' => 'Die Aufgabe wurde erfolgreich gelöscht',
    'tasks_complete_success' => 'Der Status der Aufgabe wurder erfolgreich geändert',

    // activities
    'activity_title' => 'Aktivitäten',
    'activity_type_group_simple_activities' => 'Einfache Aktivitäten',
    'activity_type_group_sport' => 'Sport',
    'activity_type_group_food' => 'Essen',
    'activity_type_group_cultural_activities' => 'Kulturelle Aktivitäten',
    'activity_type_just_hung_out' => 'einfach zusammen Zeit verbracht',
    'activity_type_watched_movie_at_home' => 'zu Hause einen Film gesehen',
    'activity_type_talked_at_home' => 'zu Hause geredet',
    'activity_type_did_sport_activities_together' => 'zusammen Sport gemacht',
    'activity_type_ate_at_his_place' => 'bei Ihm gegessen',
    'activity_type_ate_at_her_place' => 'bei Ihr gegessen',
    'activity_type_went_bar' => 'in eine Bar gegangen',
    'activity_type_ate_at_home' => 'zu Hause gegessen',
    'activity_type_picknicked' => 'Picknick gemacht',
    'activity_type_went_theater' => 'ins Theater gegangen',
    'activity_type_went_concert' => 'zu einem Konzert gegangen',
    'activity_type_went_play' => 'ein Theaterstück angesehen',
    'activity_type_went_museum' => 'ins Museum gegangen',
    'activity_type_ate_restaurant' => 'im Restaurant gegessen',
    'activities_add_activity' => 'Aktivität hinzufügen',
    'activities_more_details' => 'Mehr Details',
    'activities_hide_details' => 'Weniger Details',
    'activities_delete_confirmation' => 'Möchtest du diese Aktivität wirklich löschen?',
    'activities_item_information' => ':Activity. Fand am :date statt',
    'activities_add_title' => 'Was hast du mit :name gemacht?',
    'activities_summary' => 'Beschreibe, was ihr gemacht habt',
    'activities_add_pick_activity' => '(Optional) Möchtest du die Aktivität in eine Kategorie einordnen? Es ist keine Pflicht, aber so kannst du später Statisiken einsehen',
    'activities_add_date_occured' => 'Datum der Aktivität',
    'activities_add_optional_comment' => 'Optionaler Kommentar',
    'activities_add_cta' => 'Aktivität aufzeichnen',
    'activities_blank_title' => 'Behalte im Auge, was du mit :name unternommen hast und worüber ihr geredet habt',
    'activities_blank_add_activity' => 'Aktivität hinzufügen',
    'activities_add_success' => 'Aktivität erfolgreich hinzugefügt',
    'activities_update_success' => 'Aktivität erfolgreich aktualisiert',
    'activities_delete_success' => 'Aktivität erfolgreich gelöscht',
    'activities_who_was_involved' => 'Wer war beteiligt?',

    // notes
    'notes_create_success' => 'Die Notiz wurde erfolgreich hinzugefügt',
    'notes_update_success' => 'Die Notiz wurde erfolgreich aktualisiert',
    'notes_delete_success' => 'Die Notiz wurde erfolgreich gelöscht',
    'notes_add_title' => 'Füge eine Notiz über :name hinzu',
    'notes_add_cta' => 'Notiz hinzufügen',
    'notes_edit_title' => 'Notiz über :name ändern',
    'notes_edit_cta' => 'Notiz speichern',
    'notes_written_on' => 'Geschrieben am :date',
    'notes_add_one_more' => 'Weitere Notiz hinzufügen',
    'notes_title' => 'Notizen',
    'notes_blank_link' => 'Notiz hinzufügen',
    'notes_blank_name' => 'über :name',
    'notes_delete_confirmation' => 'Möchtest du diese Notiz wirklich löschen?',

    // gifts
    'gifts_blank_title' => 'Verwalte deine Geschenkideen und bereits an :name gemachte Geschenke',
    'gifts_blank_add_gift' => 'Geschenk hinzufügen',
    'gifts_add_success' => 'Geschenk erfolgreich hinzugefügt',
    'gifts_delete_success' => 'Geschenk erfolgreich gelöscht',
    'gifts_delete_confirmation' => 'Möchtest du das Geschenk wirklich löschen?',
    'gifts_add_gift' => 'Geschenk hinzufügen',
    'gifts_link' => 'Link',
    'gifts_added_on' => 'Hinzugefügt am :date',
    'gifts_delete_cta' => 'Löschen',
    'gifts_offered' => 'verschenkt',
    'gifts_add_title' => 'Geschenkverwaltung für :name',
    'gifts_add_gift_idea' => 'Geschenkidee',
    'gifts_add_gift_already_offered' => 'Bereits verschenkt',
    'gifts_add_gift_title' => 'Was ist es für ein Geschenk?',
    'gifts_add_link' => 'Link zur Website (optional)',
    'gifts_add_value' => 'Wert (optional)',
    'gifts_add_comment' => 'Kommentar (optional)',
    'gifts_add_someone' => 'Dieses Geschenk ist für jemanden in :name\'s Familie',
    'gifts_add_cta' => 'Hinzufügen',
    'gifts_gift_idea' => 'Geschenkidee',
    'gifts_gift_already_offered' => 'Verschenkte Geschenke',
    'gifts_table_date_added' => 'Hinzugefügt am',
    'gifts_table_description' => 'Beschreibung',
    'gifts_table_actions' => 'Aktionen',

    // debts
    'debt_delete_confirmation' => 'Möchtest du die Schulden wirklich löschen?',
    'debt_delete_success' => 'Die Schulden wurden erfolgreich gelöscht',
    'debt_add_success' => 'Die Schulden wurden erfolgreich hinzugefügt',
    'debt_title' => 'Schulden',
    'debt_add_cta' => 'Schulden hinzufügen',
    'debt_you_owe' => 'Du schuldest :amount',
    'debt_they_owe' => ':name schuldet dir :amount',
    'debt_add_title' => 'Schuldenverwaltung',
    'debt_add_you_owe' => 'Du schuldest :name',
    'debt_add_they_owe' => ':name schuldet dir',
    'debt_add_amount' => 'eine Summe von',
    'debt_add_reason' => 'aus folgendem Grund (optional)',
    'debt_add_add_cta' => 'Schulden hinzufügen',
    'debt_edit_update_cta' => 'Schulden bearbeiten',
    'debt_edit_success' => 'Die Schulden wurden erfolgreich aktualisiert',
    'debts_blank_title' => 'Verwalte die Schulden, die du :name schuldest oder:name dir schuldet',

    // tags
    'tag_edit' => 'Tag bearbeiten',
];
