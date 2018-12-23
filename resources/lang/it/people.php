<?php

return [

    //index
    'people_list_number_kids' => '1 bambino|:count bambini',
    'people_list_last_updated' => 'Consultati per ultimi:',
    'people_list_number_reminders' => ':count promemoria',
    'people_list_blank_title' => 'Non ci sono contatti nel tuo account',
    'people_list_blank_cta' => 'Aggiungi qualcuno',
    'people_list_sort' => 'Ordina',
    'people_list_stats' => '1 contatto|:count contatti',
    'people_list_firstnameAZ' => 'Ordina per nome A → Z',
    'people_list_firstnameZA' => 'Ordina per nome Z → A',
    'people_list_lastnameAZ' => 'Ordina per cognome A → Z',
    'people_list_lastnameZA' => 'Ordina per cognome Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Ordina per data dell\'ultima attività, più recente → meno recente',
    'people_list_lastactivitydateOldtoNew' => 'Ordina per data dell\'ultima attività, meno recente → più recente',
    'people_list_filter_tag' => 'Tutti i contatti etichettati con',
    'people_list_clear_filter' => 'Reimposta filtro',
    'people_list_contacts_per_tags' => '1 contatto|:count contatti',
    'people_list_show_dead' => 'Show deceased people (:count)',
    'people_list_hide_dead' => 'Hide deceased people (:count)',
    'people_search' => 'Cerca nei tuoi contatti...',
    'people_search_no_results' => 'Nessun contatto trovato :(',
    'people_list_account_usage' => 'Utilizzo account: :current/:limit contatti',
    'people_list_account_upgrade_title' => 'Effettua l\'upgrade del tuo account per poter usufruire delle sue piene funzionalitá.',
    'people_list_account_upgrade_cta' => 'Effettua l\'upgrade ora',
    'people_list_untagged' => 'Mostra contatti senza etichette',
    'people_list_filter_untag' => 'Tutti i contatti senza etichette',

    // people add
    'people_add_title' => 'Aggiungi una persona',
    'people_add_missing' => 'Nessuna persona trovata, aggiungine una',
    'people_add_firstname' => 'Nome',
    'people_add_middlename' => 'Secondo nome (facoltativo)',
    'people_add_lastname' => 'Cognome (facoltativo)',
    'people_add_nickname' => 'Nickname (Optional)',
    'people_add_cta' => 'Aggiungi questa persona',
    'people_save_and_add_another_cta' => 'Salva e aggiungi un\'altra persona',
    'people_add_success' => 'Contatto creato con successo',
    'people_add_gender' => 'Sesso',
    'people_delete_success' => 'Il contatto è stato rimosso',
    'people_delete_message' => 'Delete contact',
    'people_delete_confirmation' => 'Rimuovere questo contatto? Questo cambio è permanente.',
    'people_add_birthday_reminder' => 'Fai gli auguri di compleanno a :name',
    'people_add_import' => 'Vuoi <a href=":url">importare i tuoi contatti</a>?',
    'people_edit_email_error' => 'Esiste già un contatto nel tuo account con questo indirizzo email. Scegline un altro, per favore.',
    'people_export' => 'Esporta in formato vCard',
    'people_add_reminder_for_birthday' => 'Crea un promemoria annuale per il compleanno',

    // show
    'section_contact_information' => 'Informazioni sul contatto',
    'section_personal_activities' => 'Attività',
    'section_personal_reminders' => 'Promemoria',
    'section_personal_tasks' => 'Cose da fare',
    'section_personal_gifts' => 'Regali',
    'section_personal_notes' => 'Note',

    // archived contacts
    'list_link_to_active_contacts' => 'You are viewing archived contacts. See the <a href=":url">list of active contacts</a> instead.',
    'list_link_to_archived_contacts' => 'List of archived contacts',

    // Header
    'edit_contact_information' => 'Modifica informazioni del contatto',
    'contact_archive' => 'Archive contact',
    'contact_unarchive' => 'Unarchive contact',
    'contact_archive_help' => 'Archived contacts will not be shown on the contact list, but still appear in search results.',
    'call_button' => 'Aggiungi chiamata',
    'set_favorite' => 'Favorite contacts are placed at the top of the contact list',

    // Stay in touch
    'stay_in_touch' => 'Rimani in contatto',
    'stay_in_touch_frequency' => 'Rimani in contatto ogni giorno|Rimani in contatto ogni {count} giorni',
    'stay_in_touch_invalid' => 'La frequenza dev\'essere un numero maggiore di 0.',
    'stay_in_touch_premium' => 'Devi fare l\'upgrade al tuo account per usare questa funzione',
    'stay_in_touch_modal_title' => 'Rimani in contatto',
    'stay_in_touch_modal_desc' => 'Possiamo ricordarti di rimanere in contatto con {firstname} tramite email a intervalli regolari.',
    'stay_in_touch_modal_label' => 'Inviami una mail ogni...',

    // Calls
    'modal_call_title' => 'Aggiungi chiamata',
    'modal_call_comment' => 'Di cosa avete parlato? (facoltativo)',
    'modal_call_exact_date' => 'La chiamata é stata fatta il',
    'modal_call_who_called' => 'Who called?',
    'modal_call_emotion' => 'Do you want to log how you felt during this call? (optional)',
    'calls_add_success' => 'La chiamata é stata salvata.',
    'call_delete_confirmation' => 'Rimuovere questa chiamata?',
    'call_delete_success' => 'La chiamata é stata rimossa',
    'call_title' => 'Chiamate',
    'call_empty_comment' => 'Nessuna informazione',
    'call_blank_title' => 'Keep track of the phone calls you’ve done with {name}',
    'call_blank_desc' => 'You called {name}',
    'call_you_called' => 'You called',
    'call_he_called' => '{name} called',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS, ...',
    'conversation_delete_link' => 'Delete the conversation',
    'conversation_edit_title' => 'Edit conversation',
    'conversation_edit_delete' => 'Are you sure you want to delete this conversation? Deletion is permanent.',
    'conversation_add_success' => 'The conversation has been successfully added.',
    'conversation_edit_success' => 'The conversation has been successfully updated.',
    'conversation_delete_success' => 'The conversation has been successfully deleted.',
    'conversation_add_title' => 'Record a new conversation',
    'conversation_add_when' => 'When did you have this conversation?',
    'conversation_add_who_wrote' => 'Who said this message?',
    'conversation_add_how' => 'How did you communicate?',
    'conversation_add_you' => 'You',
    'conversation_add_content' => 'Write down what was said',
    'conversation_add_what_was_said' => 'What did you say?',
    'conversation_add_another' => 'Add another message',
    'conversation_list_table_messages' => 'Messages',
    'conversation_list_table_content' => 'Partial content (last message)',
    'conversation_list_title' => 'Conversations',
    'conversation_list_cta' => 'Log conversation',

    // age - birthday
    'birthdate_not_set' => 'Data di nascita assente',
    'age_approximate_in_years' => 'circa :age anni',
    'age_exact_in_years' => ':age anni',
    'age_exact_birthdate' => 'nato :date',

    // Last called
    'last_called' => 'Last called: :date',
    'last_called_empty' => 'Last called: unknown',
    'last_activity_date' => 'Last activity together: :date',
    'last_activity_date_empty' => 'Last activity together: unknown',

    // additional information
    'information_edit_success' => 'Il profilo è stato aggiornato',
    'information_edit_title' => 'Modifica le informazioni personali di :name',
    'information_edit_avatar' => 'Foto/avatar del contatto',
    'information_edit_max_size' => 'Max :size Kb.',
    'information_edit_firstname' => 'Nome',
    'information_edit_lastname' => 'Cognome (facoltativo)',
    'information_edit_description' => 'Description (Optional)',
    'information_edit_description_help' => 'Used on the contact list to add some context, if necessary.',
    'information_edit_linkedin' => 'Profilo LinkedIn (facoltativo)',
    'information_edit_unknown' => 'Non conosco l\'età di questa persona',
    'information_edit_probably' => 'Questa persona probabilmente ha',
    'information_edit_not_year' => 'Conosco il giorno e il mese della data di nascita, ma non l\'anno…',
    'information_edit_exact' => 'Conosco la data di nascita esatta di questa persona, che è il',
    'information_no_linkedin_defined' => 'Nessun profilo LinkedIn',
    'information_no_work_defined' => 'Nessuna informazione professionale',
    'information_work_at' => 'alla :company',
    'linkedin_profile' => 'LinkedIn profile',
    'work_add_cta' => 'Aggiorna informazioni professionali',
    'work_edit_success' => 'Le informazioni professionali sono state aggiornate.',
    'work_edit_title' => 'Aggiorna informazioni professionali di :name',
    'work_edit_job' => 'Titolo (facoltativo)',
    'work_edit_company' => 'Azienda (facoltativa)',
    'work_information' => 'Informazioni professionali',

    // food preferencies
    'food_preferencies_add_success' => 'Le preferenze alimentari sono state salvate',
    'food_preferencies_edit_description' => 'Magari :firstname o qualcuno nella famiglia :family ha un\'allergia. O non gli piace un certo vino. Indica queste cose qui così da ricordarle la prossima volta che li inviti a cena',
    'food_preferencies_edit_description_no_last_name' => 'Magari :firstname ha un\'allergia. O non gli piace un certo vino. Indica queste cose qui così da ricordarle la prossima volta che li inviti a cena',
    'food_preferencies_edit_title' => 'Indica le preferenze alimentari',
    'food_preferencies_edit_cta' => 'Salva preferenze alimentari',
    'food_preferencies_title' => 'Preferenze alimentari',
    'food_preferencies_cta' => 'Aggiunti preferenze alimentari',

    // reminders
    'reminders_blank_title' => 'C\'è qualcosa di cui ti vuoi ricordare riguardo a :name?',
    'reminders_blank_add_activity' => 'Aggiungi un promemoria',
    'reminders_add_title' => 'Cosa vorresti ricordare a proposito di :name?',
    'reminders_add_description' => 'Ricordami per piacere di...',
    'reminders_add_next_time' => 'Quando vorresti ti fosse ricordato?',
    'reminders_add_once' => 'Ricordamelo una sola volta',
    'reminders_add_recurrent' => 'Ricordamelo ogni',
    'reminders_add_starting_from' => 'a partire dalla data specificata qui sopra',
    'reminders_add_cta' => 'Aggiungi promemoria',
    'reminders_edit_update_cta' => 'Aggiorna promemoria',
    'reminders_add_error_custom_text' => 'Devi scrivere qualcosa per questo promemoria',
    'reminders_create_success' => 'Il promemoria è stato creato',
    'reminders_delete_success' => 'Il promemoria è stato rimosso',
    'reminders_update_success' => 'The reminder has been updated successfully',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'ogni settimana|ogni :number settimane',
    'reminder_frequency_month' => 'ogni mese|ogni :number mesi',
    'reminder_frequency_year' => 'ogni anno|ogni :number anni',
    'reminder_frequency_one_time' => 'il :date',
    'reminders_delete_confirmation' => 'Rimuovere questo promemoria?',
    'reminders_delete_cta' => 'Rimuovi',
    'reminders_next_expected_date' => 'il',
    'reminders_cta' => 'Aggiungi un promemoria',
    'reminders_description' => 'Ti invieremo una email per ognuno dei promemoria qui sotto. I promemoria vengono inviati ogni mattina in cui l\'evento ha luogo. I promemoria aggiunti automaticamente per i compleanni non possono essere rimossi. Se vuoi cambiare quelle date, cambia le date di compleanno di quei contatti.',
    'reminders_one_time' => 'Una volta',
    'reminders_type_week' => 'settimana',
    'reminders_type_month' => 'mese',
    'reminders_type_year' => 'anno',
    'reminders_birthday' => 'Compleanno di :name',
    'reminders_free_plan_warning' => 'Nella versione gratuita di Monica non vengono inviate email. Per ricevere promemoria via email, effettua l\'upgrade.',

    // relationships
    'relationship_form_add' => 'Aggiungi relazione',
    'relationship_form_edit' => 'Modifica una relazione esistente',
    'relationship_form_is_with' => 'Questa persona è...',
    'relationship_form_add_choice' => 'Con chi è la relazione?',
    'relationship_form_create_contact' => 'Aggiungi persona',
    'relationship_form_associate_contact' => 'Un contatto esistente',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => 'Aggiungi questa persona anche come Contatto.',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => 'Al momento non hai contatti che possono essere una relazione :name.',
    'relationship_delete_confirmation' => 'Rimuovere relazione? Questo cambio è permanente.',
    'relationship_unlink_confirmation' => 'Rimuovere questa relazione? Il contatto non sará cancellato – solo la relazione.',
    'relationship_form_add_success' => 'Relazione impostata correttamente.',
    'relationship_form_deletion_success' => 'La relazione è stata eliminata.',

    // tasks
    'tasks_blank_title' => 'Nulla da fare.',
    'tasks_form_title' => 'Titolo',
    'tasks_form_description' => 'Descrizione (facoltativa)',
    'tasks_add_task' => 'Aggiungi compito',
    'tasks_delete_success' => 'Compito rimosso',
    'tasks_complete_success' => 'Compito completato',

    // activities
    'activity_title' => 'Attività',
    'activity_type_category_simple_activities' => 'Simple activities',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Food',
    'activity_type_category_cultural_activities' => 'Cultural activities',
    'activity_type_just_hung_out' => 'siamo usciti',
    'activity_type_watched_movie_at_home' => 'visto un film, a casa',
    'activity_type_talked_at_home' => 'parlato, a casa',
    'activity_type_did_sport_activities_together' => 'fatto sport assieme',
    'activity_type_ate_at_his_place' => 'mangiato a casa sua/loro',
    'activity_type_went_bar' => 'andati al bar',
    'activity_type_ate_at_home' => 'mangiato a casa',
    'activity_type_picknicked' => 'fatto un picnic',
    'activity_type_ate_restaurant' => 'mangiato al ristorante',
    'activity_type_went_theater' => 'andati a teatro',
    'activity_type_went_concert' => 'andati a un concerto',
    'activity_type_went_play' => 'andati a una rappresentazione teatrale',
    'activity_type_went_museum' => 'andati al museo',
    'activities_add_activity' => 'Aggiungi attività',
    'activities_more_details' => 'Mostra dettagli',
    'activities_hide_details' => 'Nascondi dettagli',
    'activities_delete_confirmation' => 'Rimuovere questa attività?',
    'activities_item_information' => ':Activity il :date',
    'activities_add_title' => 'Cosa hai fatto con :name?',
    'activities_summary' => 'Descrivi cosa avete fatto',
    'activities_add_pick_activity' => '(Facoltativo) Vorresti assegnare una categoria a questa attività? Non è obbligatorio, ma più avanti ti permetterà di vedere delle statistiche',
    'activities_add_date_occured' => 'Data dell\'attività',
    'activities_add_optional_comment' => 'Commenti aggiuntivi',
    'activities_add_cta' => 'Salva attività',
    'activities_blank_title' => 'Tieni traccia di quello che tu e :name avete fatto, e ciò di cui avete parlato',
    'activities_blank_add_activity' => 'Agginugi attività',
    'activities_add_success' => 'Attività aggiunta',
    'activities_add_error' => 'Error when adding the activity',
    'activities_update_success' => 'Attività aggiornata',
    'activities_delete_success' => 'Attività rimossa',
    'activities_who_was_involved' => 'Chi era coinvolto?',
    'activities_activity' => 'Categoria dell\'attività',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activity with :name in total and :activities_last_twelve_months in the last 12 months so far.|You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',

    // notes
    'notes_create_success' => 'Nota creata',
    'notes_update_success' => 'Nota aggiornata',
    'notes_delete_success' => 'Nota rimossa',
    'notes_add_cta' => 'Aggiungi nota',
    'notes_favorite' => 'Aggiungi/rimuovi dalle note preferite',
    'notes_delete_title' => 'Rimuovi nota',
    'notes_delete_confirmation' => 'Rimuovere nota? Questo cambio è permanente.',

    // gifts
    'gifts_title' => 'Regali',
    'gifts_add_success' => 'Regalo aggiunto',
    'gifts_delete_success' => 'Regalo rimosso',
    'gifts_delete_confirmation' => 'Rimuovere regalo?',
    'gifts_add_gift' => 'Aggiungi regalo',
    'gifts_link' => 'Collegamento',
    'gifts_for' => 'Per:',
    'gifts_delete_cta' => 'Rimuovi',
    'gifts_add_title' => 'Gestione dei regali a :name',
    'gifts_add_gift_idea' => 'Idea regalo',
    'gifts_add_gift_already_offered' => 'Regalo già consegnato',
    'gifts_add_gift_received' => 'Regalo ricevuto',
    'gifts_add_gift_title' => 'Cos\'è questo regalo?',
    'gifts_add_link' => 'Link alla pagina web (facoltativo)',
    'gifts_add_value' => 'Valore (facoltativo)',
    'gifts_add_comment' => 'Commenti (facoltativo)',
    'gifts_add_someone' => 'Questo regalo è per qualcuno in particolare nella famiglia di :name',
    'gifts_ideas' => 'Idee regalo',
    'gifts_offered' => 'Regali offerti',
    'gifts_offered_as_an_idea' => 'Segna come idea',
    'gifts_received' => 'Regali ricevuti',
    'gifts_view_comment' => 'Visualizza commento',
    'gifts_mark_offered' => 'Segna come offerto',
    'gifts_update_success' => 'Regalo modificato',

    // debts
    'debt_delete_confirmation' => 'Rimuovere questo debito?',
    'debt_delete_success' => 'Debito rimosso',
    'debt_add_success' => 'Debito aggiunto',
    'debt_title' => 'Debiti',
    'debt_add_cta' => 'Aggiungi debito',
    'debt_you_owe' => 'Devi :amount',
    'debt_they_owe' => ':name ti deve :amount',
    'debt_add_title' => 'Gestione dei debiti',
    'debt_add_you_owe' => 'devi a :name',
    'debt_add_they_owe' => ':name ti deve',
    'debt_add_amount' => 'l\'ammontare di',
    'debt_add_reason' => 'per questo motivo (facoltativo)',
    'debt_add_add_cta' => 'Aggiungi debito',
    'debt_edit_update_cta' => 'Aggiorna debito',
    'debt_edit_success' => 'Debito aggiornato',
    'debts_blank_title' => 'Gestisci ciò che devi a :name e quello che :name ti deve',

    // tags
    'tag_edit' => 'Modifica etichetta',
    'tag_add' => 'Add tags',
    'tag_add_search' => 'Add or search tags',
    'tag_no_tags' => 'No tags yet',

    // Introductions
    'introductions_sidebar_title' => 'Come vi siete conosciuti',
    'introductions_blank_cta' => 'Indica come hai conosciuto :name',
    'introductions_title_edit' => 'Come hai conosciuto :name?',
    'introductions_additional_info' => 'Spiega come e dove vi siete conosciuti',
    'introductions_edit_met_through' => 'Qualcuno ti ha presentato a questa persona?',
    'introductions_no_met_through' => 'Nessuno',
    'introductions_first_met_date' => 'Data in cui vi siete conosciuti',
    'introductions_no_first_met_date' => 'Non ricordo la data in cui ci siamo conosciuti',
    'introductions_first_met_date_known' => 'Questo é il giorno in cui si siamo conosciuti',
    'introductions_add_reminder' => 'Aggiungi un promemoria per celebrare questo incontro nel suo anniversario',
    'introductions_update_success' => 'Informazioni sull\'incontro con questa persona aggiornate',
    'introductions_met_through' => 'Conosciuto/a attraverso <a href=":url">:name</a>',
    'introductions_met_date' => 'Incontrato/a il :date',
    'introductions_reminder_title' => 'Anniversario del giorno in cui vi siete conosciuti',

    // Deceased
    'deceased_reminder_title' => 'Anniversario della morte di :name',
    'deceased_mark_person_deceased' => 'Contrassegna questa persona come deceduta',
    'deceased_know_date' => 'Conosco il giorno in cui questa persona é deceduta',
    'deceased_add_reminder' => 'Aggiungi un promemoria per questa data',
    'deceased_label' => 'Deceduto/a',
    'deceased_label_with_date' => 'Decesso il :date',
    'deceased_age' => 'Età di decesso',

    // Contact information
    'contact_info_title' => 'Informazioni di contatto',
    'contact_info_form_content' => 'Contenuti',
    'contact_info_form_contact_type' => 'Tipo di contatto',
    'contact_info_form_personalize' => 'Personalizza',
    'contact_info_address' => 'Vive in',

    // Addresses
    'contact_address_title' => 'Indirizzi',
    'contact_address_form_name' => 'Etichetta (facoltativa)',
    'contact_address_form_street' => 'Via (facoltativa)',
    'contact_address_form_city' => 'Cittá (facoltativa)',
    'contact_address_form_province' => 'Provincia (facoltativa)',
    'contact_address_form_postal_code' => 'Codice postale (facoltativa)',
    'contact_address_form_country' => 'Regione (facoltativa)',
    'contact_address_form_latitude' => 'Latitude (numbers only) (optional)',
    'contact_address_form_longitude' => 'Longitude (numbers only) (optional)',

    // Pets
    'pets_kind' => 'Tipo di animale domestico',
    'pets_name' => 'Nome (facoltativo)',
    'pets_create_success' => 'Animale domestico aggiunto con successo',
    'pets_update_success' => 'Animale domestico modificato',
    'pets_delete_success' => 'Animale domestico rimosso',
    'pets_title' => 'Animali domestici',
    'pets_reptile' => 'Rettile',
    'pets_bird' => 'Uccello',
    'pets_cat' => 'Gatto',
    'pets_dog' => 'Cane',
    'pets_fish' => 'Pesce',
    'pets_hamster' => 'Criceto',
    'pets_horse' => 'Cavallo',
    'pets_rabbit' => 'Coniglio',
    'pets_rat' => 'Topo/Ratto',
    'pets_small_animal' => 'Animale di piccole dimensioni',
    'pets_other' => 'Altro',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, ...',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day - only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Add a yearly reminder for this event',
    'life_event_create_success' => 'The life event has been added',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Started military service',
    'life_event_sentence_new_relationship' => 'Started a relationship',
    'life_event_sentence_engagement' => 'Got engaged',
    'life_event_sentence_marriage' => 'Got married',
    'life_event_sentence_anniversary' => 'Anniversary',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Had a child',
    'life_event_sentence_new_family_member' => 'Added a family member',
    'life_event_sentence_new_pet' => 'Got a pet',
    'life_event_sentence_end_of_relationship' => 'Ended a relationship',
    'life_event_sentence_loss_of_a_loved_one' => 'Lost a loved one',
    'life_event_sentence_moved' => 'Moved',
    'life_event_sentence_bought_a_home' => 'Bought a home',
    'life_event_sentence_home_improvement' => 'Made a home improvement',
    'life_event_sentence_holidays' => 'Went on holidays',
    'life_event_sentence_new_vehicle' => 'Got a new vehicle',
    'life_event_sentence_new_roommate' => 'Got a roomate',
    'life_event_sentence_overcame_an_illness' => 'Overcam an illness',
    'life_event_sentence_quit_a_habit' => 'Quit a habit',
    'life_event_sentence_new_eating_habits' => 'Started new eating habits',
    'life_event_sentence_weight_loss' => 'Lost weight',
    'life_event_sentence_wear_glass_or_contact' => 'Started to wear glass or contact lenses',
    'life_event_sentence_broken_bone' => 'Broke a bone',
    'life_event_sentence_removed_braces' => 'Removed braces',
    'life_event_sentence_surgery' => 'Got a surgery',
    'life_event_sentence_dentist' => 'Went to the dentist',
    'life_event_sentence_new_sport' => 'Started a sport',
    'life_event_sentence_new_hobby' => 'Started a hobby',
    'life_event_sentence_new_instrument' => 'Learned a new instrument',
    'life_event_sentence_new_language' => 'Learned a new language',
    'life_event_sentence_tattoo_or_piercing' => 'Got a tattoo or piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Spoke for the first time',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Documents',
    'document_list_cta' => 'Upload document',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Upload a file',
    'document_upload_zone_progress' => 'Uploading the document...',
    'document_upload_zone_error' => 'There was an error uploading the document. Please try again below.',

    // Photos
    'photo_list_title' => 'Related photos',
    'photo_list_cta' => 'Upload photo',
    'photo_list_blank_desc' => 'You can store images about this contact. Upload one now!',
    'photo_upload_zone_cta' => 'Upload a photo',
    'photo_delete' => 'Delete photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',
];
