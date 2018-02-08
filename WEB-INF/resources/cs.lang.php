<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

// Note: escape apostrophes with THREE backslashes, like here:  choisir l\\\'option.
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

// Note to translators: Use proper capitalization rules for your language.

$i18n_language = 'Česky';
$i18n_months = array('Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');
$i18n_weekdays = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota');
$i18n_weekdays_short = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
// format mm/dd
$i18n_holidays = array('01/01', '04/13', '05/01', '05/08', '07/05', '07/06', '09/28', '10/28', '11/17', '12/24', '12/25', '12/26');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Přihlásit',
'menu.logout' => 'Odhlásit',
// TODO: translate the following.
// 'menu.forum' => 'Forum',
'menu.help' => 'Pomoc',
// TODO: translate the following.
// 'menu.create_team' => 'Create Team',
'menu.profile' => 'Profil',
// TODO: translate the following.
// 'menu.time' => 'Time',
// 'menu.expenses' => 'Expenses',
'menu.reports' => 'Sestavy',
// TODO: translate the following.
// 'menu.charts' => 'Charts',
'menu.projects' => 'Projekty',
// TODO: translate the following.
// 'menu.tasks' => 'Tasks',
'menu.users' => 'Uživatelů',
'menu.teams' => 'Týmy',
'menu.export' => 'Export',
'menu.clients' => 'Zákazníci',
// TODO: translate the following.
// 'menu.options' => 'Options',

// Footer - strings on the bottom of most pages.
// TODO: translate the following.
// 'footer.contribute_msg' => 'You can contribute to Time Tracker in different ways.',
// 'footer.credits' => 'Credits',
// 'footer.license' => 'License',
// 'footer.improve' => 'Contribute', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
// TODO: translate the following.
// 'error.access_denied' => 'Access denied.',
// 'error.sys' => 'System error.',
'error.db' => 'Chyba databáze.',
'error.field' => 'Nesprávná "{0}" data.',
'error.empty' => 'Pole "{0}" je prázdné.',
'error.not_equal' => 'Pole "{0}" neodpovídá poli "{1}".',
// TODO: translate the following.
// 'error.interval' => 'Field "{0}" must be greater than "{1}".',
'error.project' => 'Výběr projektu.',
// TODO: translate the following.
// 'error.task' => 'Select task.',
'error.client' => 'Výběr zákazníka.',
// TODO: translate the following.
// 'error.report' => 'Select report.',
// 'error.record' => 'Select record.',
'error.auth' => 'Nesprávné jméno nebo heslo.',
// TODO: translate the following.
// 'error.user_exists' => 'User with this login already exists.',
'error.project_exists' => 'Projekt tohoto jména již existuje.',
// TODO: translate the following.
// 'error.task_exists' => 'Task with this name already exists.',
// 'error.client_exists' => 'Client with this name already exists.',
// 'error.invoice_exists' => 'Invoice with this number already exists.',
// 'error.no_invoiceable_items' => 'There are no invoiceable items.',
// 'error.no_login' => 'No user with this login.',
// 'error.no_teams' => 'Your database is empty. Login as admin and create a new team.',
'error.upload' => 'Chyba přenosu souboru.',
// TODO: translate the following.
// 'error.range_locked' => 'Date range is locked.',
// 'error.mail_send' => 'Error sending mail.',
// 'error.no_email' => 'No email associated with this login.',
// 'error.uncompleted_exists' => 'Uncompleted entry already exists. Close or delete it.',
// 'error.goto_uncompleted' => 'Go to uncompleted entry.',
// 'error.overlap' => 'Time interval overlaps with existing records.',
// 'error.future_date' => 'Date is in future.',

// Labels for buttons.
'button.login' => 'Přihlásit',
'button.now' => 'Teď',
'button.save' => 'Uložit',
// TODO: translate the following.
// 'button.copy' => 'Copy',
'button.cancel' => 'Zrušit',
'button.submit' => 'Uložit',
'button.add_user' => 'Přidat uživatele',
'button.add_project' => 'Přidat projekt',
// TODO: translate the following.
// 'button.add_task' => 'Add task',
'button.add_client' => 'Přidat zákazníka',
// TODO: translate the following.
// 'button.add_invoice' => 'Add invoice',
// 'button.add_option' => 'Add option',
'button.add' => 'Přidat',
'button.generate' => 'Vytvořit',
'button.reset_password' => 'Resetovat heslo',
'button.send' => 'Poslat',
'button.send_by_email' => 'Poslat e-mailem',
'button.create_team' => 'Vytvořit tým',
'button.export' => 'Exportovat tým',
'button.import' => 'Importovat tým',
// TODO: translate the following.
// 'button.close' => 'Close',
// 'button.stop' => 'Stop',

// Labels for controls on forms. Labels in this section are used on multiple forms.
// TODO: translate the following.
// 'label.team_name' => 'Team name',
// 'label.address' => 'Address',
'label.currency' => 'Měna',
// TODO: translate the following.
// 'label.manager_name' => 'Manager name',
// 'label.manager_login' => 'Manager login',
// TODO: confirm that Jméno and Název are correct translations.
'label.person_name' => 'Jméno',
'label.thing_name' => 'Název',
// TODO: translate the following.
// 'label.login' => 'Login',
'label.password' => 'Heslo',
'label.confirm_password' => 'Potvrdit heslo',
// TODO: translate the following.
// 'label.email' => 'Email',
'label.cc' => 'Cc',
// TODO: translate the following.
// 'label.bcc' => 'Bcc',
'label.subject' => 'Předmět',
'label.date' => 'Datum',
'label.start_date' => 'Počáteční datum',
'label.end_date' => 'Koncové datum',
'label.user' => 'Uživatel',
'label.users' => 'Uživatelů',
'label.client' => 'Zákazník',
'label.clients' => 'Zákazníci',
// TODO: translate the following.
// 'label.option' => 'Option',
'label.invoice' => 'Faktura',
'label.project' => 'Projekt',
'label.projects' => 'Projekty',
// TODO: translate the following.
// 'label.task' => 'Task',
// 'label.tasks' => 'Tasks',
// 'label.description' => 'Description',
'label.start' => 'Začátek',
'label.finish' => 'Konec',
'label.duration' => 'Trvání',
'label.note' => 'Poznámka',
'label.notes' => 'Poznámky',
// TODO: translate the following.
// 'label.item' => 'Item',
// 'label.cost' => 'Cost',
// 'label.day_total' => 'Day total',
'label.week_total' => 'Celkem za týden',
// TODO: translate the following.
// 'label.month_total' => 'Month total',
'label.today' => 'Dnes',
// TODO: translate the following.
// 'label.total_hours' => 'Total hours',
// 'label.total_cost' => 'Total cost',
// 'label.view' => 'View',
'label.edit' => 'Upravit',
'label.delete' => 'Smazat',
// TODO: translate the following.
// 'label.configure' => 'Configure',
'label.select_all' => 'Vybrat všechno',
'label.select_none' => 'Zrušit výběr',
// TODO: translate the following.
// 'label.day_view' => 'Day view',
// 'label.week_view' => 'Week view',
// 'label.id' => 'ID',
'label.language' => 'Jazyk',
// TODO: translate the following.
// 'label.decimal_mark' => 'Decimal mark',
// 'label.date_format' => 'Date format',
// 'label.time_format' => 'Time format',
// 'label.week_start' => 'First day of week',
'label.comment' => 'Komentář',
'label.status' => 'Status',
'label.tax' => 'DPH',
// TODO: translate the following.
// 'label.subtotal' => 'Subtotal',
'label.total' => 'Celkem',
// TODO: translate the following.
// 'label.client_name' => 'Client name',
// 'label.client_address' => 'Client address',
'label.or' => 'nebo',
// TODO: translate the following.
// 'label.error' => 'Error',
// 'label.ldap_hint' => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
'label.required_fields' => '* nutno vyplnit',
// TODO: translate the following.
// 'label.on_behalf' => 'on behalf of',
'label.role_manager' => '(manažer)',
'label.role_comanager' => '(co-manažer)',
'label.role_admin' => '(administrator)',
// TODO: translate the following.
// 'label.page' => 'Page',
// 'label.condition' => 'Condition',
// 'label.yes' => 'yes',
// 'label.no' => 'no',
// Labels for plugins (extensions to Time Tracker that provide additional features).
// TODO: translate the following.
// 'label.custom_fields' => 'Custom fields',
// 'label.monthly_quotas' => 'Monthly quotas',
// 'label.type' => 'Type',
// 'label.type_dropdown' => 'dropdown',
// 'label.type_text' => 'text',
// 'label.required' => 'Required',
'label.fav_report' => 'Oblíbená sestava',
// TODO: translate the following.
// 'label.cron_schedule' => 'Cron schedule',
// 'label.what_is_it' => 'What is it?',
// 'label.expense' => 'Expense',
// 'label.quantity' => 'Quantity',
// 'label.paid_status' => 'Paid status',
// 'label.paid' => 'Paid',
// 'label.mark_paid' => 'Mark paid',
// 'label.week_note' => 'Week note',
// 'label.week_list' => 'Week list',

// Form titles.
'title.login' => 'Přihlásit',
// TODO: translate the following.
// 'title.teams' => 'Teams',
// 'title.create_team' => 'Creating Team',
// 'title.edit_team' => 'Editing Team',
// 'title.delete_team' => 'Deleting Team',
'title.reset_password' => 'Resetovat heslo',
// TODO: translate the following.
// 'title.change_password' => 'Changing Password',
// 'title.time' => 'Time',
'title.edit_time_record' => 'Upravit časový záznam',
'title.delete_time_record' => 'Smazat časový záznam',
// TODO: translate the following.
// 'title.expenses' => 'Expenses',
// 'title.edit_expense' => 'Editing Expense Item',
// 'title.delete_expense' => 'Deleting Expense Item',
// 'title.predefined_expenses' => 'Predefined Expenses',
// 'title.add_predefined_expense' => 'Adding Predefined Expense',
// 'title.edit_predefined_expense' => 'Editing Predefined Expense',
// 'title.delete_predefined_expense' => 'Deleting Predefined Expense',
'title.reports' => 'Sestavy',
// TODO: translate the following.
// 'title.report' => 'Report',
// 'title.send_report' => 'Sending Report',
'title.invoice' => 'Faktura',
// TODO: translate the following.
// 'title.send_invoice' => 'Sending Invoice',
// 'title.charts' => 'Charts',
'title.projects' => 'Projekty',
'title.add_project' => 'Pridat projekt',
'title.edit_project' => 'Upravit projekt',
'title.delete_project' => 'Smazat projekt',
// TODO: translate the following.
// 'title.tasks' => 'Tasks',
// 'title.add_task' => 'Adding Task',
// 'title.edit_task' => 'Editing Task',
// 'title.delete_task' => 'Deleting Task',
'title.users' => 'Uživatelů',
// TODO: translate the following.
// 'title.add_user' => 'Adding User',
// 'title.edit_user' => 'Editing User',
// 'title.delete_user' => 'Deleting User',
'title.clients' => 'Zákazníci',
'title.add_client' => 'Přidat zákazníka',
'title.edit_client' => 'Upravit zákazníka',
'title.delete_client' => 'Smazat zákazníka',
'title.invoices' => 'Faktury',
// TODO: translate the following.
// 'title.add_invoice' => 'Adding Invoice',
// 'title.view_invoice' => 'Viewing Invoice',
// 'title.delete_invoice' => 'Deleting Invoice',
// 'title.notifications' => 'Notifications',
// 'title.add_notification' => 'Adding Notification',
// 'title.edit_notification' => 'Editing Notification',
// 'title.delete_notification' => 'Deleting Notification',
// 'title.monthly_quotas' => 'Monthly Quotas',
// 'title.export' => 'Exporting Team Data',
// 'title.import' => 'Importing Team Data',
// 'title.options' => 'Options',
'title.profile' => 'Profil',
// TODO: translate the following.
// 'title.cf_custom_fields' => 'Custom Fields',
// 'title.cf_add_custom_field' => 'Adding Custom Field',
// 'title.cf_edit_custom_field' => 'Editing Custom Field',
// 'title.cf_delete_custom_field' => 'Deleting Custom Field',
// 'title.cf_dropdown_options' => 'Dropdown Options',
// 'title.cf_add_dropdown_option' => 'Adding Option',
// 'title.cf_edit_dropdown_option' => 'Editing Option',
// 'title.cf_delete_dropdown_option' => 'Deleting Option',
// NOTE TO TRANSLATORS: Locking is a feature to lock records from modifications (ex: weekly on Mondays we lock all previous weeks).
// It is also a name for the Locking plugin on the Team profile page.
// 'title.locking' => 'Locking',
// 'title.week_view' => 'Week View',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- vše ---',
'dropdown.no' => '--- nic ---',
'dropdown.current_day' => 'dnes',
'dropdown.previous_day' => 'včera',
'dropdown.selected_day' => 'den',
'dropdown.current_week' => 'tento týden',
'dropdown.previous_week' => 'minulý týden',
'dropdown.selected_week' => 'týden',
'dropdown.current_month' => 'tento měsíc',
'dropdown.previous_month' => 'minulý měsíc',
'dropdown.selected_month' => 'měsíc',
'dropdown.current_year' => 'tento rok',
'dropdown.previous_year' => 'minulý rok',
'dropdown.selected_year' => 'rok',
'dropdown.all_time' => 'od počátku',
'dropdown.projects' => 'projekty',
// TODO: translate the following.
// 'dropdown.tasks' => 'tasks',
'dropdown.clients' => 'zákazníci',
// TODO: translate the following.
// 'dropdown.select' => '--- select ---',
// 'dropdown.select_invoice' => '--- select invoice ---',
// 'dropdown.status_active' => 'active',
// 'dropdown.status_inactive' => 'inactive',
// 'dropdown.delete'=>'delete',
// 'dropdown.do_not_delete'=>'do not delete',
// 'dropdown.paid' => 'paid',
// 'dropdown.not_paid' => 'not paid',

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Zapomenuté heslo?',
// TODO: translate the following.
// 'form.login.about' =>'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> is a simple, easy to use, open source time tracking system.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'Zaslán požadavek k vymazání hesla.', // TODO: add "by email" to match the English string.
'form.reset_password.email_subject' => 'Anuko Time Tracker požadavek na vymazání hesla',
// TODO: translate the following.
// 'form.reset_password.email_body' => "Dear User,\n\nSomeone, possibly you, requested your Anuko Time Tracker password reset. Please visit this link if you want to reset your password.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit https://www.anuko.com for more information.\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
// TODO: translate the following.
// 'form.change_password.tip' => 'Type new password and click on Save.',

// Time form. See example at https://timetracker.anuko.com/time.php.
// TODO: translate the following.
// 'form.time.duration_format' => '(hh:mm or 0.0h)',
'form.time.billable' => 'K fakturaci',
// 'form.time.uncompleted' => 'Uncompleted',
// 'form.time.remaining_quota' => 'Remaining quota',
// 'form.time.over_quota' => 'Over quota',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
// TODO: translate the following.
// 'form.time_edit.uncompleted' => 'This record was saved with only start time. It is not an error.',

// Week view form. See example at https://timetracker.anuko.com/week.php.
// TODO: translate the following.
// 'form.week.new_entry' => 'New entry',

// Reports form. See example at https://timetracker.anuko.com/reports.php
// TODO: translate the following.
// 'form.reports.save_as_favorite' => 'Save as favorite',
'form.reports.confirm_delete' => 'Opravdu chceš vymazat tuto položku z oblíbených?',
'form.reports.include_billable' => 'k fakturaci',
'form.reports.include_not_billable' => 'mimo fakturaci',
// TODO: translate the following.
// 'form.reports.include_invoiced' => 'invoiced',
// 'form.reports.include_not_invoiced' => 'not invoiced',
'form.reports.select_period' => 'Výberte období',
'form.reports.set_period' => 'nebo určete dny',
'form.reports.show_fields' => 'Zobrazit pole',
'form.reports.group_by' => 'Seskupit podle',
// TODO: translate the following.
// 'form.reports.group_by_no' => '--- no grouping ---',
'form.reports.group_by_date' => 'datum',
'form.reports.group_by_user' => 'uživatel',
'form.reports.group_by_client' => 'zákazník',
'form.reports.group_by_project' => 'projekt',
// TODO: translate the following.
// 'form.reports.group_by_task' => 'task',
'form.reports.totals_only' => 'Pouze součty',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'Exportovat',
// TODO: translate the following.
// 'form.report.assign_to_invoice' => 'Assign to invoice',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
// TODO: translate the following.
// 'form.invoice.number' => 'Invoice number',
// 'form.invoice.person' => 'Person',
// 'form.invoice.invoice_to_delete' => 'Invoice to delete',
// 'form.invoice.invoice_entries' => 'Invoice entries',
// 'form.invoice.confirm_deleting_entries' => 'Please confirm deleting invoice entries from Time Tracker.',

// Charts form. See example at https://timetracker.anuko.com/charts.php
// TODO: translate the following.
// 'form.charts.interval' => 'Interval',
// 'form.charts.chart' => 'Chart',

// Projects form. See example at https://timetracker.anuko.com/projects.php
// TODO: translate the following.
// 'form.projects.active_projects' => 'Active Projects',
// 'form.projects.inactive_projects' => 'Inactive Projects',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
// TODO: translate the following.
// 'form.tasks.active_tasks' => 'Active Tasks',
// 'form.tasks.inactive_tasks' => 'Inactive Tasks',

// Users form. See example at https://timetracker.anuko.com/users.php
// TODO: translate the following.
// 'form.users.active_users' => 'Active Users',
// 'form.users.inactive_users' => 'Inactive Users',
// 'form.users.uncompleted_entry' => 'User has an uncompleted time entry',
// 'form.users.role' => 'Role',
// 'form.users.manager' => 'Manager',
// 'form.users.comanager' => 'Co-manager',
// 'form.users.rate' => 'Rate',
// 'form.users.default_rate' => 'Default hourly rate',

// Clients form. See example at https://timetracker.anuko.com/clients.php
// TODO: translate the following.
// 'form.clients.active_clients' => 'Active Clients',
// 'form.clients.inactive_clients' => 'Inactive Clients',

// Deleting Client form. See example at https://timetracker.anuko.com/client_delete.php
// TODO: translate the following.
// 'form.client.client_to_delete' => 'Client to delete',
// 'form.client.client_entries' => 'Client entries',

// Exporting Team Data form. See example at https://timetracker.anuko.com/export.php
// TODO: translate the following.
// 'form.export.hint' => 'You can export all team data into an xml file. It could be useful if you are migrating data to your own server.',
'form.export.compression' => 'Komprese',
// TODO: translate the following.
// 'form.export.compression_none' => 'none',
'form.export.compression_bzip' => 'bzip',

// Importing Team Data form. See example at https://timetracker.anuko.com/imort.php (login as admin first).
// TODO: translate the following.
// 'form.import.hint' => 'Import team data from an xml file.',
// 'form.import.file' => 'Select file',
// 'form.import.success' => 'Import completed successfully.',

// Teams form. See example at https://timetracker.anuko.com/admin_teams.php (login as admin first).
// TODO: translate the following. This part is not translated accurately from English:
// "Vytvořit nový tým prostřednictvím účtu týmového manažera." Improve and check the entire string for accuracy.
'form.teams.hint' => 'Vytvořit nový tým prostřednictvím účtu týmového manažera.<br>Můžete také importovat týmová data z xml souboru z jiného time tracker serveru (nejsou povoleny shody login).',



// TODO: refactoring ongoing down from here.

"form.admin.profile.title" => 'týmy',
"form.admin.profile.noprofiles" => 'vaše databáze je prázdná. přihlašte se jako admin a vytvořte nový tým.',
"form.admin.profile.comment" => 'smazat tým',
"form.admin.profile.th.id" => 'id',
"form.admin.profile.th.active" => 'aktovní',

// my time form attributes
"form.mytime.total" => 'součet hodin: ',
"form.mytime.del_yes" => 'časový záznam úspěšně odstraněn',
"form.mytime.no_finished_rec" => 'záznam byl uložen pouze s časem zahájení. není to chyba. můžete se odhlásit, potřebujete-li.',
"form.mytime.warn_tozero_rec" => 'tento záznam musí být smazán, neboť období je uzamčeno',

// profile form attributes
// Note to translators: we need a more accurate translation of form.profile.create_title
"form.profile.create_title" => 'vytvořit nový manažerský účet',
"form.profile.edit_title" => 'upravit profil',

"form.profile.showchart" => 'zobrazuj grafy',

// people form attributes
"form.people.ppl_str" => 'pracovnící',
"form.people.createu_str" => 'vytváření nového uživatele',
"form.people.edit_str" => 'nastavení uživatele',
"form.people.del_str" => 'smazat uživatele',
"form.people.th.role" => 'role',
"form.people.th.rate" => 'sazba',
"form.people.manager" => 'manažer',
"form.people.comanager" => 'spolumanažer',

"form.people.rate" => 'hodinová sazba',
"form.people.comanager" => 'spolumanažer',

// report attributes
"form.report.totals_only" => 'pouze součty',
"form.report.total" => 'součty hodin',

// mail form attributes
"form.mail.from" => 'od',
"form.mail.to" => 'komu',
"form.mail.above" => 'poslat sestavu e-mailem',
// Note to translators: this string needs to be translated.
// "form.mail.footer_str" => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="https://www.anuko.com">www.anuko.com</a> for more information.',
"form.mail.sending_str" => '<b>zpráva odeslána</b>',

// invoice attributes
"form.invoice.title" => 'faktura',
"form.invoice.caption" => 'faktura',
"form.invoice.above" => 'fakturační informace',
"form.invoice.select_cust" => 'výběr firmy',
"form.invoice.fillform" => 'vyplňte pole',
"form.invoice.number" => 'faktura číslo',
"form.invoice.th.username" => 'osoba',
"form.invoice.th.time" => 'hodin',
"form.invoice.th.rate" => 'sazba',
"form.invoice.th.summ" => 'množství',
"form.invoice.subtotal" => 'subtotal',
"form.invoice.mailinv_above" => 'poslat fakturu e-mailem',
"form.invoice.sending_str" => '<b>faktura odeslána</b>',

"form.migration.file" => 'výběr souboru',
"form.migration.import.title" => 'importovat data',
"form.migration.import.success" => 'import byl úspěšně dokončen',
"form.migration.import.text" => 'importovat týmová data z xml souboru',
"form.migration.export.title" => 'exportovat data',
"form.migration.export.success" => 'export byl úspěšně dokončen',
"form.migration.export.text" => 'můžete exportova týmová data do xml souboru. může se to hodit pro přesun na jiný server.',
);
