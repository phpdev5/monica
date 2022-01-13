<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/main/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => '聯絡人未找到',
    'people_list_number_kids' => ':count child|:count children',
    'people_list_last_updated' => '最近更新:',
    'people_list_number_reminders' => ':count reminder|:count reminders',
    'people_list_blank_title' => '您還沒有任何聯絡人',
    'people_list_blank_cta' => '新增某人',
    'people_list_sort' => '排序',
    'people_list_stats' => ':count contact|:count contacts',
    'people_list_firstnameAZ' => '以名字A → Z排序',
    'people_list_firstnameZA' => '以名字 Z → A排序',
    'people_list_lastnameAZ' => '以姓A → Z排序',
    'people_list_lastnameZA' => '以姓Z → A排序',
    'people_list_lastactivitydateNewtoOld' => 'Sort by last activity date, newest to oldest',
    'people_list_lastactivitydateOldtoNew' => 'Sort by last activity date, oldest to newest',
    'people_list_filter_tag' => '擁有以下標籤的聯絡人：',
    'people_list_clear_filter' => '清除篩選',
    'people_list_contacts_per_tags' => ':count contact|:count contacts',
    'people_list_show_dead' => '顯示已故人員 (:count)',
    'people_list_hide_dead' => '隱藏已故人員 (:count)',
    'people_search' => 'Search your contacts…',
    'people_search_no_results' => '未找到任何結果',
    'people_search_next' => '下一頁',
    'people_search_prev' => 'Previous',
    'people_search_rows_per_page' => 'Rows per page',
    'people_search_of' => '/',
    'people_search_page' => '頁',
    'people_search_all' => '所有',
    'people_add_new' => '新增新的聯絡人',
    'people_list_account_usage' => '您的賬戶已聯絡人使用情況是：:current/:limit ',
    'people_list_account_upgrade_title' => '升級您的帳戶, 以開啟全部功能。',
    'people_list_account_upgrade_cta' => '立即升級',
    'people_list_untagged' => '檢視未加標籤的聯絡人',
    'people_list_filter_untag' => '所有未加標籤的聯絡人',
    'archived_contact_readonly' => 'Archived contact can’t be edited, please unarchive it first.',

    // people add
    'people_add_title' => '新增一位新的聯絡人',
    'people_add_missing' => 'No person found – add a new one now',
    'people_add_firstname' => '名字',
    'people_add_middlename' => 'Middle name (optional)',
    'people_add_lastname' => 'Last name (optional)',
    'people_add_email' => 'Email (optional)',
    'people_add_nickname' => 'Nickname (optional)',
    'people_add_cta' => '新增',
    'people_save_and_add_another_cta' => '提交併新增其他人',
    'people_add_success' => ':name 已成功建立',
    'people_add_gender' => '性別',
    'people_delete_success' => '聯絡人已被刪除',
    'people_delete_message' => '刪除聯絡人',
    'people_delete_confirmation' => 'Are you sure you want to delete :name’s contact? Deletion is immediate and permanent.',
    'people_add_birthday_reminder' => '祝: name生日快樂',
    'people_add_birthday_reminder_deceased' => 'On this date, :name would have celebrated their birthday',
    'people_add_import' => '是否要 <a href=":url">匯入您的聯絡人</a>？',
    'people_edit_email_error' => '您的聯絡人中已經有人使用此電子郵件，請更換一個',
    'people_export' => '匯出為 vCard',
    'people_add_reminder_for_birthday' => 'Create an annual birthday reminder',

    // show
    'section_contact_information' => '聯絡人資訊',
    'section_personal_activities' => '活動',
    'section_personal_reminders' => '提醒',
    'section_personal_tasks' => '任務',
    'section_personal_gifts' => '禮物',
    'section_personal_notes' => '便籤',

    // archived contacts
    'list_link_to_active_contacts' => '您正在檢視存檔的聯絡人， <a href=":url">單擊這裡</a> 來檢視活動的聯絡人列表。',
    'list_link_to_archived_contacts' => '已存檔聯絡人列表',

    // Header
    'me' => '這是你',
    'edit_contact_information' => '編輯聯絡人資訊',
    'contact_archive' => '存檔聯絡人',
    'contact_unarchive' => '取消存檔',
    'contact_archive_help' => 'Archived contacts are not be shown on the contact list, but still appear in search results.',
    'call_button' => '記錄通話',
    'set_favorite' => '您收藏的聯絡人將在聯絡人列表置頂顯示。',

    // Stay in touch
    'stay_in_touch' => '常聯絡*',
    'stay_in_touch_frequency' => '常聯絡*提醒頻率：每天|常聯絡*提醒頻率：每 {count} 天',
    'stay_in_touch_next_date' => 'Next due: {date}',
    'stay_in_touch_invalid' => '頻率必須大於0。',
    'stay_in_touch_premium' => '您需要升級到高階賬戶來使用這個功能！',
    'stay_in_touch_modal_title' => '常聯絡*',
    'stay_in_touch_modal_desc' => '我們將會用郵件提醒您與{firstname}保持聯絡。',
    'stay_in_touch_modal_label' => 'Send me an email every… {count} day|Send me an email every… {count} days',

    // Calls
    'modal_call_title' => '記錄通話',
    'modal_call_comment' => '你們說了什麼？（可選）',
    'modal_call_exact_date' => '通話日期',
    'modal_call_who_called' => '誰打來的？',
    'modal_call_emotion' => '您想記錄您在此通話中的感受嗎？(可選)',
    'calls_add_success' => '已儲存通話記錄。',
    'call_delete_confirmation' => '你確定要刪除此通話記錄嗎?',
    'call_delete_success' => '成功刪除通話記錄！',
    'call_title' => '通話記錄',
    'call_empty_comment' => '無詳細資訊',
    'call_blank_title' => '追蹤您與{name} 的通話記錄',
    'call_blank_desc' => '你打給{name}',
    'call_you_called' => '您撥出的',
    'call_he_called' => '{name} 撥出的',
    'call_emotions' => '情緒：',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS…',
    'conversation_delete_link' => '刪除對話',
    'conversation_edit_title' => '編輯對話',
    'conversation_edit_delete' => '您是否要刪除這個對話？操作無法撤銷。',
    'conversation_add_success' => '對話成功新增',
    'conversation_edit_success' => '對話成功更新',
    'conversation_delete_success' => '對話成功刪除',
    'conversation_add_title' => '記錄一個新對話',
    'conversation_add_when' => '你們何時進行的對話？',
    'conversation_add_who_wrote' => 'Who sent this message?',
    'conversation_add_how' => '你們怎麼交流？',
    'conversation_add_you' => '您',
    'conversation_add_content' => '寫下你們說的話',
    'conversation_add_what_was_said' => '您說了什麼？',
    'conversation_add_another' => '新增另一條訊息',
    'conversation_add_error' => '您必須至少新增一條資訊',
    'conversation_list_table_messages' => '訊息',
    'conversation_list_table_content' => '部分內容(最新訊息)',
    'conversation_list_title' => '對話',
    'conversation_list_cta' => '記錄對話',

    // age - birthday
    'birthdate_not_set' => 'Birthday is not set',
    'age_approximate_in_years' => '大概:age歲',
    'age_exact_in_years' => ':age歲',
    'age_exact_birthdate' => '出生:date',

    // Last called
    'last_called' => '最近通話: :date',
    'last_talked_to' => 'Last called: {date}',
    'last_called_empty' => '最近通話: 未知',
    'last_activity_date' => '最近一起的活動: :date',
    'last_activity_date_empty' => '最近一起的活動: 未知',

    // additional information
    'information_edit_success' => '紀錄更新成功',
    'information_edit_title' => '編輯 :name的個人資訊',
    'information_edit_max_size' => '最大值 :size Kb',
    'information_edit_max_size2' => '最大 {size} Kb',
    'information_edit_firstname' => '名字',
    'information_edit_lastname' => 'Last name (optional)',
    'information_edit_description' => 'Description (optional)',
    'information_edit_description_help' => '用於在聯絡人列表中新增一些元素（如有必要）',
    'information_edit_unknown' => '我不知道具體年齡',
    'information_edit_probably' => 'This person is probably…',
    'information_edit_not_year' => 'I know the day and month of this person’s birthday, but not the year…',
    'information_edit_exact' => 'I know this person’s exact birthday…',
    'information_edit_birthdate_label' => 'Birthday',
    'information_no_work_defined' => '未定義工作資訊',
    'information_work_at' => '在 :company工作',
    'work_add_cta' => '更新工作資訊',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => '更新:name的工作資訊',
    'work_edit_job' => '職位名稱 (可選)',
    'work_edit_company' => '公司 (可選)',
    'work_information' => '工作資訊',

    // food preferences
    'food_preferences_add_success' => '食品偏好已被儲存',
    'food_preferences_edit_description' => '也許:firstname或:family的家庭有過敏，或者不喜歡一瓶特定的酒等。把這些資訊列在這裡，在下次和邀請他們吃飯時可以在這裡看到這些資訊。',
    'food_preferences_edit_description_no_last_name' => '也許:firstname有過敏情況，或者不喜歡一瓶特定的酒等。把這些資訊列在這裡，在下次和邀請他們吃飯時可以在這裡看到這些資訊。',
    'food_preferences_edit_title' => '註明食物偏好',
    'food_preferences_edit_cta' => '儲存食物偏好',
    'food_preferences_title' => '食物偏好',
    'food_preferences_cta' => '新增食物偏好',

    // reminders
    'reminders_blank_title' => '您有什麼關於:name的提醒嗎？',
    'reminders_blank_add_activity' => '新增提醒',
    'reminders_add_title' => '你需要關於:name的提醒嗎？',
    'reminders_add_description' => 'Please remind me to…',
    'reminders_add_next_time' => '您希望下一次關於這個的提醒的時間是？',
    'reminders_add_once' => '僅一次',
    'reminders_add_recurrent' => '每',
    'reminders_add_starting_from' => '提醒我',
    'reminders_add_cta' => '新增提醒',
    'reminders_edit_update_cta' => '更新提醒',
    'reminders_add_error_custom_text' => '您需要為此提醒指定文字',
    'reminders_create_success' => '已成功新增提醒',
    'reminders_delete_success' => '已成功刪除提醒',
    'reminders_update_success' => '已成功更新提醒',
    'reminders_add_optional_comment' => '可選備註',

    'reminder_frequency_day' => '每:number天',
    'reminder_frequency_week' => ' 每:number星期',
    'reminder_frequency_month' => ' 每:number月',
    'reminder_frequency_year' => '每:number年',
    'reminder_frequency_one_time' => '在:date',
    'reminders_delete_confirmation' => '確實要刪除此提醒嗎？',
    'reminders_delete_cta' => '刪除',
    'reminders_next_expected_date' => '在',
    'reminders_cta' => '新增提醒',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdays can not be deleted. If you want to change those dates, edit the birthday of the contacts.',
    'reminders_one_time' => '一次性',
    'reminders_type_week' => '周',
    'reminders_type_month' => '月',
    'reminders_type_year' => '年',
    'reminders_birthday' => ':name的生日',
    'reminders_free_plan_warning' => '您當前使用的是免費版。若需要郵件提醒，請升級您的賬戶。',

    // relationships
    'relationship_form_add' => '新增一個新的關係',
    'relationship_form_edit' => '修改一個已有關係',
    'relationship_form_is_with' => 'This person is…',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => '這是與誰的關係？',
    'relationship_form_create_contact' => '新增一個新的人',
    'relationship_form_associate_contact' => '匯入一位已存在的聯絡人',
    'relationship_form_associate_dropdown' => '請從下拉選單選擇一位聯絡人',
    'relationship_form_associate_dropdown_placeholder' => '搜尋並選擇一位現有聯絡人',
    'relationship_form_also_create_contact' => '將此人建立為您的聯絡人',
    'relationship_form_add_description' => '這會讓你像其他聯絡人一樣對待這個人。',
    'relationship_form_add_no_existing_contact' => '您暫時沒有能與 :name 連結的聯絡人',
    'relationship_delete_confirmation' => '您確定要將關係刪除嗎？本操作無法撤銷。',
    'relationship_unlink_confirmation' => '您確定要將關係刪除嗎？此操作不會從您的聯絡人列表將其刪除。',
    'relationship_form_add_success' => '關係設定完成',
    'relationship_form_deletion_success' => '此關係已刪除',

    // tasks
    'tasks_title' => '任務',
    'tasks_blank_title' => '您暫時還沒任務。',
    'tasks_form_title' => '標題',
    'tasks_form_description' => '描述 (可選)',
    'tasks_add_task' => '新增任務',
    'tasks_delete_success' => '成功刪除任務！',
    'tasks_complete_success' => '成功變更任務！',

    // activities
    'activity_title' => '活動',
    'activity_type_category_simple_activities' => '一般活動',
    'activity_type_category_sport' => '運動',
    'activity_type_category_food' => '食物',
    'activity_type_category_cultural_activities' => '文化',
    'activity_type_just_hung_out' => '約會',
    'activity_type_watched_movie_at_home' => '看電影',
    'activity_type_talked_at_home' => '談心',
    'activity_type_did_sport_activities_together' => '一起打球',
    'activity_type_ate_at_his_place' => '在對方家裡做客',
    'activity_type_went_bar' => '泡吧',
    'activity_type_ate_at_home' => '在家吃飯',
    'activity_type_picnicked' => '已選擇',
    'activity_type_ate_restaurant' => '在飯店吃',
    'activity_type_went_theater' => '看戲',
    'activity_type_went_concert' => '去音樂會',
    'activity_type_went_play' => '出去玩',
    'activity_type_went_museum' => '去博物館',
    'activities_add_activity' => '新增活動',
    'activities_add_more_details' => '新增更多詳情',
    'activities_add_emotions' => '新增情緒',
    'activities_add_category' => '指定類別',
    'activities_add_participants_cta' => '新增參與者',
    'activities_item_information' => ':Activity，發生於:date',
    'activities_add_title' => '您與 {name} 一起做了什麼?',
    'activities_summary' => '描述你做了什麼',
    'activities_add_pick_activity' => 'Would you like to categorize this activity? You don’t have to, but it will give you statistics later on (optional)',
    'activities_add_date_occured' => 'The activity happened on…',
    'activities_add_participants' => '除了 {name} 之外，誰參與了這個活動？(可選)',
    'activities_add_emotions_title' => '您想記錄您在此通話中的感受嗎？(可選)',
    'activities_blank_title' => '記錄您與 {name} 之間的點滴',
    'activities_blank_add_activity' => '新增活動',
    'activities_add_success' => '已成功新增活動',
    'activities_add_error' => '新增活動時出現錯誤',
    'activities_update_success' => '活動已成功更新',
    'activities_delete_success' => '活動已成功刪除',
    'activities_who_was_involved' => '誰參與了？',
    'activities_activity' => '活動類別',
    'activities_view_activities_report' => '檢視活動報告',
    'activities_profile_title' => ':name 與您之間的活動報告',
    'activities_profile_subtitle' => '截至目前為止您與:name的活動記錄如下：近一年共 :activities_last_twelve_months次，總共 :total_activities次',
    'activities_profile_year_summary_activity_types' => ':year年活動型別彙總',
    'activities_profile_year_summary' => ':year年你們一起進行的活動',
    'activities_profile_number_occurences' => ':value 次活動',
    'activities_list_participants' => 'Participants ({total}):',
    'activities_list_emotions' => '我感覺:',
    'activities_list_date' => '發生於',
    'activities_list_category' => '分類：',

    // notes
    'notes_create_success' => '便籤已成功建立',
    'notes_update_success' => '便箋已成功儲存',
    'notes_delete_success' => '註釋已成功刪除',
    'notes_add_cta' => '新增註釋',
    'notes_favorite' => '新增/刪除喜愛標記',
    'notes_delete_title' => '刪除便籤',
    'notes_delete_confirmation' => '確實要刪除此便籤嗎？',

    // gifts
    'gifts_title' => '禮物往來',
    'gifts_add_success' => '已成功新增禮物',
    'gifts_delete_success' => '禮物已成功刪除',
    'gifts_delete_confirmation' => '是否確實要刪除此禮物？',
    'gifts_add_gift' => '新增禮物',
    'gifts_link' => '連結',
    'gifts_for' => '贈予：{name}',
    'gifts_delete_cta' => '刪除',
    'gifts_add_title' => '與:name的禮物來往',
    'gifts_add_gift_idea' => '禮品創意',
    'gifts_add_gift_already_offered' => '送出的禮物',
    'gifts_add_gift_received' => '收到的禮物',
    'gifts_add_gift_title' => '這是什麼禮物？',
    'gifts_add_gift_name' => '禮品名稱',
    'gifts_add_link' => '禮物連結 (可選)',
    'gifts_add_value' => '值 (可選)',
    'gifts_add_comment' => '備註 (可選)',
    'gifts_add_recipient' => '收件人(可選)',
    'gifts_add_recipient_field' => '收件人',
    'gifts_add_photo' => '相片(可選)',
    'gifts_add_photo_title' => '為此禮物新增一張照片',
    'gifts_add_someone' => '這份禮物特別是給{name}的家人',
    'gifts_delete_title' => '刪除禮物',
    'gifts_ideas' => '心願單',
    'gifts_offered' => '送出的禮物',
    'gifts_offered_as_an_idea' => '標記為心願單',
    'gifts_received' => '收到的禮物',
    'gifts_view_comment' => '檢視評論',
    'gifts_mark_offered' => '標記為提供',
    'gifts_update_success' => '禮物已成功更新',
    'gifts_add_date' => '日期 (選填)',

    // debts
    'debt_delete_confirmation' => '是否確實要刪除此債務？',
    'debt_delete_success' => '已成功刪除債務',
    'debt_add_success' => '已成功新增債務',
    'debt_title' => '債務',
    'debt_add_cta' => '增加債務',
    'debt_you_owe' => '您欠:amount',
    'debt_they_owe' => ':name欠您:amount',
    'debt_add_title' => '債務管理',
    'debt_add_you_owe' => ':name借給您',
    'debt_add_they_owe' => '您借給:name',
    'debt_add_amount' => '數額',
    'debt_add_reason' => '事由（可選）',
    'debt_add_add_cta' => '增加債務',
    'debt_edit_update_cta' => '更新債務',
    'debt_edit_success' => '債務已成功更新',
    'debts_blank_title' => '管理您與:name之間的債務關係',

    // tags
    'tag_edit' => '編輯標籤',
    'tag_add' => '新增標籤',
    'tag_add_search' => '新增或搜尋標籤',
    'tag_no_tags' => '還沒有標籤',

    // Introductions
    'introductions_sidebar_title' => '你們是如何認識的？',
    'introductions_blank_cta' => '您如何遇到的:name',
    'introductions_title_edit' => '你是怎麼認識:name的？',
    'introductions_additional_info' => '你在哪裡相遇',
    'introductions_edit_met_through' => '有人把你介紹給這個人嗎？',
    'introductions_no_met_through' => '沒有人',
    'introductions_first_met_date' => '第一次相見',
    'introductions_no_first_met_date' => '我不記得具體日期',
    'introductions_first_met_date_known' => '這是我們相遇的日子',
    'introductions_add_reminder' => '新增提醒以慶祝此事件發生的週年紀念',
    'introductions_update_success' => '你成功更新了關於你們相識的故事',
    'introductions_met_through' => '通過 <a href=":url">:name</a>遇到',
    'introductions_met_date' => '在:date遇到',
    'introductions_reminder_title' => '你第一次遇見的那一天的週年紀念日',

    // Deceased
    'deceased_reminder_title' => ':name的去世週年懷念',
    'deceased_mark_person_deceased' => 'Mark this as deceased',
    'deceased_know_date' => 'I know the date that this person died',
    'deceased_add_reminder' => '為此日期新增提醒',
    'deceased_label' => '逝者',
    'deceased_date_label' => '死亡日期',
    'deceased_label_with_date' => '在:date去世',
    'deceased_age' => '享年',

    // Contact information
    'contact_info_title' => '聯絡資訊',
    'contact_info_form_content' => '內容',
    'contact_info_form_contact_type' => '聯絡方式',
    'contact_info_form_personalize' => '個性化',
    'contact_info_address' => '生活在',

    // Addresses
    'contact_address_title' => '地址',
    'contact_address_form_name' => '標籤 (可選)',
    'contact_address_form_street' => '街 (可選)',
    'contact_address_form_city' => '城市 (可選)',
    'contact_address_form_province' => '省 (可選)',
    'contact_address_form_postal_code' => '郵政編碼 (可選)',
    'contact_address_form_country' => '國家 (可選)',
    'contact_address_form_latitude' => '緯度 (僅限數字) (可選)',
    'contact_address_form_longitude' => '經度 (僅限數字) (可選)',

    // Pets
    'pets_kind' => '寵物種類',
    'pets_name' => '名字 (可選)',
    'pets_create_success' => '已成功新增寵物',
    'pets_update_success' => '寵物已更新',
    'pets_delete_success' => '寵物已被刪除',
    'pets_title' => '寵物',
    'pets_reptile' => '爬行動物',
    'pets_bird' => '鳥',
    'pets_cat' => '貓',
    'pets_dog' => '狗',
    'pets_fish' => '魚',
    'pets_hamster' => '倉鼠',
    'pets_horse' => '馬',
    'pets_rabbit' => '兔子',
    'pets_rat' => '鼠',
    'pets_small_animal' => '小動物',
    'pets_other' => '其它',

    // life events
    'life_event_list_tab_life_events' => '生活事件',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => '生活事件',
    'life_event_blank' => '記錄在{name} 身上發生的事情以供將來參考',
    'life_event_list_cta' => '新增生活事件',
    'life_event_create_category' => '全部類別',
    'life_event_create_life_event' => '新增生活事件',
    'life_event_create_default_title' => '標題 (可選)',
    'life_event_create_default_story' => '故事 (可選)',
    'life_event_create_date' => 'You do not need to indicate a month or a day – only the year is mandatory.',
    'life_event_create_default_description' => '新增你知道的資訊',
    'life_event_create_add_yearly_reminder' => '為該事件新增年度提醒',
    'life_event_create_success' => '生活事件新增成功',
    'life_event_delete_title' => '刪除生活事件',
    'life_event_delete_description' => '確實要刪除此生活事件嗎？刪除是永久性的。',
    'life_event_delete_success' => '事件已刪除',
    'life_event_date_it_happened' => '發生日期',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => '開始了新的工作',
    'life_event_sentence_retirement' => '退休',
    'life_event_sentence_new_school' => '開始上學',
    'life_event_sentence_study_abroad' => '出國留學',
    'life_event_sentence_volunteer_work' => '開始志願服務',
    'life_event_sentence_published_book_or_paper' => '發表了一篇論文',
    'life_event_sentence_military_service' => '開始服役',
    'life_event_sentence_new_relationship' => '開始一段關係',
    'life_event_sentence_engagement' => '訂婚了',
    'life_event_sentence_marriage' => '結婚',
    'life_event_sentence_anniversary' => '週年紀念日',
    'life_event_sentence_expecting_a_baby' => '想要孩子',
    'life_event_sentence_new_child' => '有個孩子',
    'life_event_sentence_new_family_member' => '新增了家庭成員',
    'life_event_sentence_new_pet' => '養了寵物',
    'life_event_sentence_end_of_relationship' => '結束了一段關係',
    'life_event_sentence_loss_of_a_loved_one' => '失去了心愛的人',
    'life_event_sentence_moved' => '搬家了',
    'life_event_sentence_bought_a_home' => '買了新房子',
    'life_event_sentence_home_improvement' => '裝修了',
    'life_event_sentence_holidays' => '去度假',
    'life_event_sentence_new_vehicle' => '買了輛新車',
    'life_event_sentence_new_roommate' => '有了新室友',
    'life_event_sentence_overcame_an_illness' => '熬過了疾病',
    'life_event_sentence_quit_a_habit' => '戒掉一個習慣',
    'life_event_sentence_new_eating_habits' => '開始新的飲食習慣',
    'life_event_sentence_weight_loss' => '減肥了',
    'life_event_sentence_wear_glass_or_contact' => '開始佩戴玻璃或隱形眼鏡',
    'life_event_sentence_broken_bone' => '折斷了骨頭',
    'life_event_sentence_removed_braces' => '去掉了牙齒矯正器',
    'life_event_sentence_surgery' => '做了手術',
    'life_event_sentence_dentist' => '去看牙醫了',
    'life_event_sentence_new_sport' => '開始運動',
    'life_event_sentence_new_hobby' => '有了新愛好',
    'life_event_sentence_new_instrument' => '學會了新樂器',
    'life_event_sentence_new_language' => '學了一門新的語言',
    'life_event_sentence_tattoo_or_piercing' => '紋身了或者打了耳洞',
    'life_event_sentence_new_license' => '獲得駕照',
    'life_event_sentence_travel' => '旅遊了',
    'life_event_sentence_achievement_or_award' => '獲得成就或獎項',
    'life_event_sentence_changed_beliefs' => '改變信仰',
    'life_event_sentence_first_word' => '第一次發言',
    'life_event_sentence_first_kiss' => '第一次接吻',

    // documents
    'document_list_title' => '檔案',
    'document_list_cta' => '上載檔案',
    'document_list_blank_desc' => '在這裡, 您可以儲存與此人相關的檔案。',
    'document_upload_zone_cta' => '上傳檔案',
    'document_upload_zone_progress' => 'Uploading the document…',
    'document_upload_zone_error' => '上傳檔案時出錯，請再試一次 ！',

    // Photos
    'photo_title' => '照片',
    'photo_list_title' => '相關照片',
    'photo_list_cta' => '上傳照片',
    'photo_list_blank_desc' => '您可以儲存有關此聯絡人的影象。立即上傳一個!',
    'photo_upload_zone_cta' => '上傳照片',
    'photo_current_profile_pic' => '目前頭像',
    'photo_make_profile_pic' => '製作頭像',
    'photo_delete' => '刪除照片',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => '更換頭像',
    'avatar_question' => '您想使用哪個頭像？',
    'avatar_default_avatar' => '預設頭像',
    'avatar_adorable_avatar' => '喜愛頭像',
    'avatar_gravatar' => '此使用者的電子郵件地址 與 Gravatar 關聯 。 <a href="https://gravatar.com/">Gravatar</a> 是全球通用的頭像服務。',
    'avatar_current' => '保持當前頭像',
    'avatar_photo' => '從您上傳的照片',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => '這讓你覺得...',

    // logs
    'auditlogs_link' => '歷史',
    'auditlogs_title' => ':name 發生的所有事件',
    'auditlogs_breadcrumb' => '歷史',
    'auditlogs_author' => ':name 於 :date ',

    // contact field label
    'contact_field_label_home' => '家庭',
    'contact_field_label_work' => '工作',
    'contact_field_label_cell' => '手機',
    'contact_field_label_fax' => '傳真',
    'contact_field_label_pager' => '呼叫器',
    'contact_field_label_main' => '主要',
    'contact_field_label_other' => '其它',
    'contact_field_label_personal' => '個人',
];
