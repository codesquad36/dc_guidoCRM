<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Netherlands (nl-NL)',
    'moduleList' => array(
            'Home' => 'Start',
			'ResourceCalendar' => 'Bronkalender',
            'Contacts' => 'Contactpersonen',
            'Accounts' => 'Relaties',
            'Alerts' => 'Waarschuwingen',
            'Opportunities' => 'Kansen',
            'Cases' => 'Dossiers',
            'Notes' => 'Notities',
            'Calls' => 'Telefoongesprekken',
            'TemplateSectionLine' => 'Sjabloon sectie lijn',
            'Calls_Reschedule' => 'Oproepen opnieuw plannen',
            'Emails' => 'E-mails',
            'EAPM' => 'EAPM',
            'Meetings' => 'Afspraken',
            'Tasks' => 'Taken',
            'Calendar' => 'Kalender',
            'Leads' => 'Leads',
            'Currencies' => 'Valuta',
            'Activities' => 'Activiteiten',
            'Bugs' => 'Fouten',
            'Feeds' => 'RSS',
            'iFrames' => 'Mijn sites',
            'TimePeriods' => 'Termijnen',
            'TaxRates' => 'Belasting tarieven',
            'ContractTypes' => 'Contract Typen',
            'Schedulers' => 'Taakplanners',
            'Project' => 'Projecten',
            'ProjectTask' => 'Project taak',
            'Campaigns' => 'Campagnes',
            'CampaignLog' => 'Campagnes Log',
            'Documents' => 'Documenten',
            'DocumentRevisions' => 'Document Revisies',
            'Connectors' => 'Connectoren',
            'Roles' => 'Rollen',
            'Notifications' => 'Berichtgeving',
            'Sync' => 'Synchroniseer',
            'Users' => 'Gebruikers',
            'Employees' => 'Personeel',
            'Administration' => 'Beheer',
            'ACLRoles' => 'Rollen',
            'InboundEmail' => 'Inkomende e-mail',
            'Releases' => 'Uitgave',
            'Prospects' => 'Doelen',
            'Queues' => 'Wachtrij',
            'EmailMarketing' => 'E-mail Marketing',
            'EmailTemplates' => 'E-mail Sjablook',
            'SNIP' => 'E-mail Archievering',
            'ProspectLists' => 'Doelstellingen - lijsten',
            'SavedSearch' => 'Opgeslagen Zoekopdrachten',
            'UpgradeWizard' => 'Upgradewizard',
            'Trackers' => 'Traceerbare URL"s',
            'TrackerPerfs' => 'Traceer prestatie gegevens (geheugen-, database- en bestandsgebruik)',
            'TrackerSessions' => 'Tracker Sessies',
            'TrackerQueries' => 'Tracker query \'s',
            'FAQ' => 'Veel voorkomende vragen',
            'Newsletters' => 'Nieuwsbrief',
            'SugarFeed' => 'SuiteCRM feed',
            'SugarFavorites' => 'SuiteCRM Favorieten',

            'OAuthKeys' => 'OAuth consument sleutels',
            'OAuthTokens' => 'OAuth Tokens',
            'Calls_Reschedule' => 'Oproepen opnieuw plannen',
        ),

    'moduleListSingular' => array(
            'Home' => 'Start',
            'Dashboard' => 'Controlepaneel',
            'Contacts' => 'Contacten',
            'Accounts' => 'Relatie',
            'Opportunities' => 'Kansen',
            'Cases' => 'Dossiers',
            'Notes' => 'Notities',
            'Calls' => 'Telefoongesprekken',
            'Emails' => 'E-mails',
            'EmailTemplates' => 'E-mail Sjablook',
            'Meetings' => 'Afspraken',
            'Tasks' => 'Taken',
            'Calendar' => 'Kalender',
            'Leads' => 'Leads',
            'Activities' => 'Activiteiten',
            'Bugs' => 'Bugs',
            'KBDocuments' => 'Kennisbank',
            'Feeds' => 'RSS',
            'iFrames' => 'Mijn Sites',
            'TimePeriods' => 'Tijd Perioden',
            'Project' => 'Projecten',
            'ProjectTask' => 'Project Taken',
            'Prospects' => 'Doelen',
            'Campaigns' => 'Campagnes',
            'Documents' => 'Documenten',
            'SugarFollowing' => 'SuiteCRM Volgt',
            'Sync' => 'Synchroniseer',
            'Users' => 'Gebruikers',
            'SugarFavorites' => 'SuiteCRM Favorieten',

        ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Ja',
        '2' => 'Nee',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
            '' => '',
            'Analyst' => 'Analist',
            'Competitor' => 'Concurrent',
            'Customer' => 'Klant',
            'Integrator' => 'Integrator',
            'Investor' => 'Investeerder',
            'Partner' => 'Partner',
            'Press' => 'Pers',
            'Prospect' => 'Prospect',
            'Reseller' => 'Wederverkoper',
            'Other' => 'Anders',
        ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
            '' => '',
            'Apparel' => 'Kleding',
            'Banking' => 'Banken',
            'Biotechnology' => 'Biotechnologie',
            'Chemicals' => 'Chemisch',
            'Communications' => 'Communicatie',
            'Construction' => 'Bouw',
            'Consulting' => 'Advies',
            'Education' => 'Opleidingen',
            'Electronics' => 'Electronica',
            'Energy' => 'Energie',
            'Engineering' => 'Ingenieurswerk',
            'Entertainment' => 'Ontspanning',
            'Environmental' => 'Milieu',
            'Finance' => 'Financieel',
            'Government' => 'Overheid',
            'Healthcare' => 'Gezondheidszorg',
            'Hospitality' => 'Horeca',
            'Insurance' => 'Verzekeringen',
            'Machinery' => 'Machines',
            'Manufacturing' => 'Fabricage',
            'Media' => 'Media',
            'Not For Profit' => 'Non-profit',
            'Recreation' => 'Recreatie',
            'Retail' => 'Detailhandel',
            'Shipping' => 'Scheepvaart',
            'Technology' => 'Technologie',
            'Telecommunications' => 'Telecommunicatie',
            'Transportation' => 'Transport',
            'Utilities' => 'Nutsbedrijven',
            'Other' => 'Anders',
        ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
            '' => '',
            'Cold Call' => 'Koude acquisitie',
            'Existing Customer' => 'Bestaande klant',
            'Self Generated' => 'Zelf gegenereerd',
            'Employee' => 'Werknemer',
            'Partner' => 'Partner',
            'Public Relations' => 'PR',
            'Direct Mail' => 'Direct mail',
            'Conference' => 'Conferentie',
            'Trade Show' => 'Beurs',
            'Web Site' => 'Website',
            'Word of mouth' => 'Mond tot mond',
            'Email' => 'E-mail',
            'Campaign' => 'Campagnes',
            'Other' => 'Anders',
        ),
    'opportunity_type_dom' => array(
            '' => '',
            'Existing Business' => 'Bestaand bedrijf',
            'New Business' => 'Nieuw bedrijf',
        ),
    'roi_type_dom' => array(
            'Revenue' => 'Opbrengst',
            'Investment' => 'Investering',
            'Expected_Revenue' => 'Verwachte opbrengst',
            'Budget' => 'Budget',

        ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
            '' => '',
            'Primary Decision Maker' => 'Primaire besluitvormer',
            'Business Decision Maker' => 'Zakelijke besluitvormer',
            'Business Evaluator' => 'Zakelijke evaluatie',
            'Technical Decision Maker' => 'Technisch besluitvormer',
            'Technical Evaluator' => 'Technische Evaluatie',
            'Executive Sponsor' => 'Sponsor',
            'Influencer' => 'Beinvloeder',
            'Other' => 'Anders',
        ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
            '' => '',
            'Primary Contact' => 'Eerste Contactpersoon',
            'Alternate Contact' => 'Alternatief Contactpersoon',
        ),
    'payment_terms' => array(
            '' => '',
            'Net 15' => '15 dagen',
            'Net 30' => '30 dagen',
        ),
    'fts_type' => array(
        '' => '',
        'Elastic' => 'elasticsearch',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
            'Prospecting' => 'Prospectie',
            'Qualification' => 'Kwalificatie',
            'Needs Analysis' => 'Behoefte analyse',
            'Value Proposition' => 'Maken van propositie',
            'Id. Decision Makers' => 'Identificatie van beslissers',
            'Perception Analysis' => 'Perceptie analyse',
            'Proposal/Price Quote' => 'Offerte/Prijsvoorstel',
            'Negotiation/Review' => 'Onderhandeling',
            'Closed Won' => 'Gewonnen',
            'Closed Lost' => 'Verloren',
        ),
    'in_total_group_stages' => array(
        'Draft' => 'Ontwerp',
        'Negotiation' => 'Onderhandelingen',
        'Delivered' => 'Uitgeleverd',
        'On Hold' => 'In de wacht',
        'Confirmed' => 'Bevestigd',
        'Closed Accepted' => 'Gesloten geaccepteerde',
        'Closed Lost' => 'Verloren',
        'Closed Dead' => 'Gesloten niet meer actief',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
            'Call' => 'Telefoongesprek',
            'Meeting' => 'Afspraak',
            'Task' => 'Taak',
            'Email' => 'E-mail',
            'Note' => 'Notitie',
        ),
    'salutation_dom' => array(
            '' => '',
            'Mr.' => 'Dhr.',
            'Ms.' => 'Juffrouw.',
            'Mrs.' => 'Mevr.',
            'Dr.' => 'Dr.',
            'Prof.' => 'Prof.',
        ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(60 => '1 minuut ervoor',
        300 => '5 minuten ervoor',
        600 => '10 minuten ervoor',
        900 => '15 minuten ervoor',
        1800 => '30 minuten ervoor',
        3600 => '1 uur ervoor',
        7200 => '2 uur ervoor',
        10800 => '3 uur ervoor',
        18000 => '5 uur ervoor',
        86400 => '1 dag ervoor',
    ),

    'task_priority_default' => 'Gemiddeld',
    'task_priority_dom' => array(
            'High' => 'Hoog',
            'Medium' => 'Gemiddeld',
            'Low' => 'Laag',
        ),
    'task_status_default' => 'Niet gestart',
    'task_status_dom' => array(
            'Not Started' => 'Niet gestart',
            'In Progress' => 'In behandeling',
            'Completed' => 'Compleet',
            'Pending Input' => 'In afwachting van',
            'Deferred' => 'Uitgestelt',
        ),
    'meeting_status_default' => 'Gepland',
    'meeting_status_dom' => array(
            'Planned' => 'Gepland',
            'Held' => 'Gehouden',
            'Not Held' => 'Niet Gehouden',
        ),
    'extapi_meeting_password' => array(
            'WebEx' => 'WebEx',
        ),
    'meeting_type_dom' => array(
            'Other' => 'Anders',
            'Sugar' => 'SuiteCRM',
        ),
    'call_status_default' => 'Gepland',
    'call_status_dom' => array(
            'Planned' => 'Gepland',
            'Held' => 'Gehouden',
            'Not Held' => 'Niet Gehouden',
        ),
    'call_direction_default' => 'Uitgaand',
    'call_direction_dom' => array(
            'Inbound' => 'Inkomend',
            'Outbound' => 'Uitgaand',
        ),
    'lead_status_dom' => array(
            '' => '',
            'New' => 'Nieuw',
            'Assigned' => 'Toegewezen',
            'In Process' => 'In behandeling',
            'Converted' => 'Geconverteerd',
            'Recycled' => 'Opnieuw',
            'Dead' => 'Dood',
        ),
    'gender_list' => array(
            'male' => 'Mannelijk',
            'female' => 'Vrouwelijk',
        ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
            'P1' => 'Hoog',
            'P2' => 'Gemiddeld',
            'P3' => 'Laag',
        ),
    'user_type_dom' => array(
            'RegularUser' => 'Normale Gebruiker',
            'Administrator' => 'Beheerder',
        ),
    'user_status_dom' => array(
            'Active' => 'Actief',
            'Inactive' => 'Inactief',
        ),
    'employee_status_dom' => array(
            'Active' => 'Actief',
            'Terminated' => 'Beeindigd',
            'Leave of Absence' => 'Afwezig',
        ),
    'messenger_type_dom' => array(
            '' => '',
            'MSN' => 'MSN',
            'Yahoo!' => 'Yahoo!',
            'AOL' => 'AOL',
        ),
    'project_task_priority_options' => array(
        'High' => 'Hoog',
        'Medium' => 'Gemiddeld',
        'Low' => 'Laag',
    ),
    'project_task_priority_default' => 'Gemiddeld',

    'project_task_status_options' => array(
        'Not Started' => 'Niet gestart',
        'In Progress' => 'In behandeling',
        'Completed' => 'Compleet',
        'Pending Input' => 'In afwachting van',
        'Deferred' => 'Uitgestelt',
    ),
    'project_task_utilization_options' => array(
        '0' => 'geen',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Ontwerp',
        'In Review' => 'Wacht op review',
        'Underway' => 'Onderweg',
        'On_Hold' => 'In de wacht',
        'Completed' => 'Compleet',
    ),
    'project_status_default' => 'Ontwerp',

    'project_duration_units_dom' => array(
        'Days' => 'Dagen',
        'Hours' => 'Uren',
    ),

    'activity_status_type_dom' => array(''=>'--Geen--',
        'active' => 'Actief',
        'inactive' => 'Inactief',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Relaties',
    'record_type_display' => array(
            '' => '',
            'Accounts' => 'Relatie',
            'Opportunities' => 'Kansen',
            'Cases' => 'Dossiers',
            'Leads' => 'Leads',
            'Contacts' => 'Contacten', // cn (11/22/2005) added to support Emails

            'Bugs' => 'Bugs',
            'Project' => 'Projecten',

            'Prospects' => 'Doelen',
            'ProjectTask' => 'Project Taken',

            'Tasks' => 'Taken',

        ),

    'record_type_display_notes' => array(
            'Accounts' => 'Relatie',
            'Contacts' => 'Contacten',
            'Opportunities' => 'Kansen',
            'Tasks' => 'Taken',
            'Emails' => 'E-mails',

            'Bugs' => 'Bugs',
            'Project' => 'Projecten',
            'ProjectTask' => 'Project Taken',
            'Prospects' => 'Doelen',
            'Cases' => 'Dossiers',
            'Leads' => 'Leads',

            'Meetings' => 'Afspraken',
            'Calls' => 'Telefoongesprekken',
        ),

    'parent_type_display' => array(
            'Accounts' => 'Relatie',
            'Contacts' => 'Contacten',
            'Tasks' => 'Taken',
            'Opportunities' => 'Kansen',

            'Bugs' => 'Bugs',
            'Cases' => 'Dossiers',
            'Leads' => 'Leads',

            'Project' => 'Projecten',
            'ProjectTask' => 'Project Taken',

            'Prospects' => 'Doelen',

        ),

    'issue_priority_default_key' => 'Gemiddeld',
    'issue_priority_dom' => array(
            'Urgent' => 'Dringend',
            'High' => 'Hoog',
            'Medium' => 'Gemiddeld',
            'Low' => 'Laag',
        ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Geaccepteerd',
            'Duplicate' => 'Dupliceer',
            'Closed' => 'Gesloten',
            'Out of Date' => 'Verlopen',
            'Invalid' => 'Ongeldig',
        ),

    'issue_status_default_key' => 'Nieuw',
    'issue_status_dom' => array(
            'New' => 'Nieuw',
            'Assigned' => 'Toegewezen',
            'Closed' => 'Gesloten',
            'Pending' => 'Wachtend',
            'Rejected' => 'Afgewezen',
        ),

    'bug_priority_default_key' => 'Gemiddeld',
    'bug_priority_dom' => array(
            'Urgent' => 'Dringend',
            'High' => 'Hoog',
            'Medium' => 'Gemiddeld',
            'Low' => 'Laag',
        ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Geaccepteerd',
            'Duplicate' => 'Dupliceer',
            'Fixed' => 'Opgelost',
            'Out of Date' => 'Verlopen',
            'Invalid' => 'Ongeldig',
            'Later' => 'Later',
        ),
    'bug_status_default_key' => 'Nieuw',
    'bug_status_dom' => array(
            'New' => 'Nieuw',
            'Assigned' => 'Toegewezen',
            'Closed' => 'Gesloten',
            'Pending' => 'Wachtend',
            'Rejected' => 'Afgewezen',
        ),
    'bug_type_default_key' => 'Bugs',
    'bug_type_dom' => array(
            'Defect' => 'Gebroken',
            'Feature' => 'Uitbreiding',
        ),
    'case_type_dom' => array(
            'Administration' => 'Beheer',
            'Product' => 'Producten',
            'User' => 'Gebruiker',
        ),

    'source_default_key' => '',
    'source_dom' => array(
            '' => '',
            'Internal' => 'Intern',
            'Forum' => 'Discussieforums',
            'Web' => 'Web',
            'InboundEmail' => 'Inkomende e-mail',
        ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
            '' => '',
            'Accounts' => 'Relaties',
            'Activities' => 'Activiteiten',
            'Bugs' => 'Fouten',
            'Calendar' => 'Kalender',
            'Calls' => 'Telefoongesprekken',
            'Campaigns' => 'Campagnes',
            'Cases' => 'Dossiers',
            'Contacts' => 'Contactpersonen',
            'Currencies' => 'Valuta',
            'Dashboard' => 'Controlepaneel',
            'Documents' => 'Documenten',
            'Emails' => 'E-mails',
            'Feeds' => 'Feed',
            'Forecasts' => 'Vooruitzichten',
            'Help' => 'Hulp',
            'Home' => 'Start',
            'Leads' => 'Leads',
            'Meetings' => 'Afspraken',
            'Notes' => 'Notities',
            'Opportunities' => 'Kansen',
            'Outlook Plugin' => 'Outlook plugin',
            'Projects' => 'Projecten',
            'Quotes' => 'Offerten',
            'Releases' => 'Uitgave',
            'RSS' => 'RSS',
            'Studio' => 'Studio',
            'Upgrade' => 'Upgrade',
            'Users' => 'Gebruikers',
        ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
            '' => '',
            'Planning' => 'Planning',
            'Active' => 'Actief',
            'Inactive' => 'Inactief',
            'Complete' => 'Compleet',
            //'In Queue' => 'In Queue',
            //'Sending' => 'Sending',
        ),
    'campaign_type_dom' => array(
            '' => '',
            'Telesales' => 'Telesales',
            'Mail' => 'E-mail',
            'Email' => 'E-mail',
            'Print' => 'Afdrukken',
            'Web' => 'Web',
            'Radio' => 'Radio',
            'Television' => 'Televisie',
            'NewsLetter' => 'Nieuwsbrief',
        ),

    'newsletter_frequency_dom' => array(
            '' => '',
            'Weekly' => 'Wekelijks',
            'Monthly' => 'Maandelijks',
            'Quarterly' => 'Per Kwartaal',
            'Annually' => 'Jaarlijk',
        ),

    'notifymail_sendtype' => array(
            'SMTP' => 'SMTP',
        ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'januari',
        '2' => 'februari',
        '3' => 'Maart',
        '4' => 'April',
        '5' => 'Mei',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'Augustus',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'December',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'jan',
        '2' => 'feb',
        '3' => 'mar',
        '4' => 'apr',
        '5' => 'Mei',
        '6' => 'jun',
        '7' => 'jul',
        '8' => 'aug',
        '9' => 'sep',
        '10' => 'oct',
        '11' => 'nov',
        '12' => 'dec',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Zondag',
        '2' => 'Maandag',
        '3' => 'Dinsdag',
        '4' => 'Woensdag',
        '5' => 'Donderdag',
        '6' => 'Vrijdag',
        '7' => 'Zaterdag',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Zon',
        '2' => 'maa',
        '3' => 'din',
        '4' => 'woe',
        '5' => 'don',
        '6' => 'vrij',
        '7' => 'zat',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_report_types' => array(
        'tabular' => 'Rijen en kolommen',
        'summary' => 'Totalen',
        'detailed_summary' => 'Totalen met details',
        'Matrix' => 'Matrix',
    ),

    'dom_email_types' => array(
        'out' => 'Verzonden',
        'archived' => 'Gearchiveerd',
        'draft' => 'Concept',
        'inbound' => 'Inkomend',
        'campaign' => 'Campagnes',
    ),
    'dom_email_status' => array(
        'archived' => 'Gearchiveerd',
        'closed' => 'Gesloten',
        'draft' => 'Concept',
        'read' => 'Gelezen',
        'replied' => 'Beantwoord',
        'sent' => 'Verzonden',
        'send_error' => 'Verzendfout',
        'unread' => 'Ongelezen',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Gearchiveerd',
    ),

    'dom_email_server_type' => array('' => '--Geen--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Geen--',
        'createcase' => 'Nieuw verzoek',
        'bounce' => 'Bounce handling',
    ),
    'dom_email_distribution' => array('' => '--Geen--',
        'direct' => 'Direct toegewezen',
        'roundRobin' => 'Round-robin',
        'leastBusy' => 'Minst druk',
    ),
    'dom_email_errors' => array(1 => 'Selecteer alleen een gebruiker wanneer items worden toegewezen',
        2 => 'Alleen geselecteerde items kunnen worden toegewezen',
    ),
    'dom_email_bool' => array('bool_true' => 'Ja',
        'bool_false' => 'Nee',
    ),
    'dom_int_bool' => array(1 => 'Ja',
        0 => 'Nee',
    ),
    'dom_switch_bool' => array('on' => 'Ja',
        'off' => 'Nee',
        '' => '--Geen--', ),

    'dom_email_link_type' => array('sugar' => 'SuiteCRM E-mailprogramma',
        'mailto' => 'Andere E-mail Client', ),

    'dom_email_editor_option' => array('' => '--Geen--',
        'html' => 'HTML E-mail',
        'plain' => 'Plain Text E-mail', ),

    'schedulers_times_dom' => array('not run' => 'De starttijd ligt in het verleden, taak niet uitgevoerd.',
        'ready' => 'Gereed',
        'in progress' => 'In behandeling',
        'failed' => 'Mislukt',
        'completed' => 'Afgerond',
        'no curl' => 'Niet Uitgevoerd: Geen cURL beschikbaar',
    ),

    'scheduler_status_dom' => array(
            'Active' => 'Actief',
            'Inactive' => 'Inactief',
        ),

    'scheduler_period_dom' => array(
            'min' => 'Minuten',
            'hour' => 'Uren',
        ),
    'forecast_schedule_status_dom' => array(
            'Active' => 'Actief',
            'Inactive' => 'Inactief',
        ),
    'forecast_type_dom' => array(
            'Direct' => 'Direkt',
            'Rollup' => 'Verzameling',
        ),
    'document_category_dom' => array(
            '' => '',
            'Marketing' => 'Marketing',
            'Knowledege Base' => 'Kennisbank',
            'Sales' => 'Verkoop',
        ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Gearchiveerd',
        // TODO: add more categories here...
    ),
+

    'document_subcategory_dom' => array(
            '' => '',
            'Marketing Collateral' => 'Marketing organisatie',
            'Product Brochures' => 'Product brochures',
            'FAQ' => 'Veel voorkomende vragen',
        ),

    'document_status_dom' => array(
            'Active' => 'Actief',
            'Draft' => 'Ontwerp',
            'FAQ' => 'Veel voorkomende vragen',
            'Expired' => 'Verlopen',
            'Under Review' => 'Ter controle',
            'Pending' => 'Wachtend',
        ),
    'document_template_type_dom' => array(
            '' => '',
            'mailmerge' => 'Mail merge',
            'eula' => 'EULA',
            'nda' => 'NDA',
            'license' => 'Licentie overeenkomst',
        ),
    'dom_meeting_accept_options' => array(
            'accept' => 'Geaccepteerd',
            'decline' => 'Afgewezen',
            'tentative' => 'Voorlopig',
        ),
    'dom_meeting_accept_status' => array(
            'accept' => 'Geaccepteerd',
            'decline' => 'Afgewezen',
            'tentative' => 'Voorlopig',
            'none' => 'Geen',
        ),
    'duration_intervals' => array('0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '--Geen--',
        'Daily' => 'Dagelijks',
        'Weekly' => 'Wekelijks',
        'Monthly' => 'Maandelijks',
        'Yearly' => 'Jaarlijks',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dag(en)',
        'Weekly' => 'week(en)',
        'Monthly' => 'maand(en)',
        'Yearly' => 'jaar(en)',
    ),

    'duration_dom' => array(
        '' => '--Geen--',
        '900' => '15 minuten',
        '1800' => '30 minuten',
        '2700' => '45 minuten',
        '3600' => '1 uur',
        '5400' => '1.5 uren',
        '7200' => '2 uren',
        '10800' => '3 uren',
        '21600' => '6 uren',
        '86400' => '1 dag',
        '172800' => '2 dagen',
        '259200' => '3 dagen',
        '604800' => '1 week',
    ),

// deferred
    /*// QUEUES MODULE DOMs
    'queue_type_dom' => array(
        'Users' => 'Users',
        'Mailbox' => 'Mailbox',
    ),
    */
//prospect list type dom
    'prospect_list_type_dom' => array(
            'default' => 'Standaard',
            'seed' => 'Controle',
            'exempt_domain' => 'Uitsluitingen - Per domein',
            'exempt_address' => 'Uitsluitingen - Per e-mail adres',
            'exempt' => 'Uitsluitingen - Per ID',
            'test' => 'Test',
        ),

    'email_settings_num_dom' => array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        ),
    'email_marketing_status_dom' => array(
            '' => '',
            'active' => 'Actief',
            'inactive' => 'Inactief',
        ),

    'campainglog_activity_type_dom' => array(
            '' => '',
            'targeted' => 'Berichten verstuurd',
            'send error' => 'Bounced, reden onbekend',
            'invalid email' => 'Bounced, fout e-mailadres',
            'link' => 'Link aangeklikt',
            'viewed' => 'Email bekeken',
            'removed' => 'Afgemeld voor e-mail',
            'lead' => 'Lead Aangemaakt',
            'contact' => 'Contactpersoon aangemaakt',
            'blocked' => 'Onderdrukt door het adres of domein',
        ),

    'campainglog_target_type_dom' => array(
            'Contacts' => 'Contactpersonen',
            'Users' => 'Gebruikers',
            'Prospects' => 'Doelen',
            'Leads' => 'Leads',
            'Accounts' => 'Relaties',
        ),
    'merge_operators_dom' => array(
        'like' => 'Bevat',
        'exact' => 'Is precies',
        'start' => 'Begint met',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Ja',
        'false' => 'Nee',
        'required' => 'Verplicht',
    ),

    'Elastic_boost_options' => array(
        '0' => 'Uitgeschakeld',
        '1' => 'Lage boost',
        '2' => 'Gemiddelde boost',
        '3' => 'Hoge boost',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Uitgeschakeld',
        1 => 'Ingeschakeld',
    ),

    'navigation_paradigms' => array(
        'm' => 'Modulen',
        'gm' => 'Gegroepeerde Modulen',
    ),

    'projects_priority_options' => array(
        'high' => 'Hoog',
        'medium' => 'Gemiddeld',
        'low' => 'Laag',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Niet gestart',
        'inprogress' => 'In behandeling',
        'completed' => 'Afgerond',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Legenda uitklappen',
        'collapselegend' => 'Legenda inklappen',
        'clickfordrilldown' => 'Klikken voor drilldown',
        'drilldownoptions' => 'Drilldown opties',
        'detailview' => 'Detailview...',
        'piechart' => 'Cirkeldiagram',
        'groupchart' => 'Groepsdiagram',
        'stackedchart' => 'Gestapelde grafiek',
        'barchart' => 'Staafdiagram',
        'horizontalbarchart' => 'Horizontale Staafdiagram',
        'linechart' => 'Lijndiagram',
        'noData' => 'Data niet beschikbaar',
        'print' => 'Printen',
        'pieWedgeName' => 'secties',
    ),
    'release_status_dom' => array(
            'Active' => 'Actief',
            'Inactive' => 'Inactief',
        ),
    'email_settings_for_ssl' => array(
            '0' => '',
            '1' => 'SSL',
            '2' => 'TSL',
        ),
    'import_enclosure_options' => array(
            '\'' => 'Enkelvoudige quote (&#39;)',
            '"' => 'Dubbele aanhalingstekens (&#34;)',
            '' => '--Geen--',
            'other' => 'Ander:',
        ),
    'import_delimeter_options' => array(
            ',' => ',',
            ';' => ';',
            '\t' => '\t',
            '.' => '.',
            ':' => ':',
            '|' => '|',
            'other' => 'Ander:',
        ),
    'link_target_dom' => array(
            '_blank' => 'Nieuw window',
            '_self' => 'Zelfde window',
        ),
    'dashlet_auto_refresh_options' => array(
            '-1' => 'Niet automatisch verversen',
            '30' => 'Elke 30 seconden',
            '60' => 'Iedere 1 minuut',
            '180' => 'Iedere 3 minuten',
            '300' => 'Iedere 5 minuten',
            '600' => 'Iedere 10 minuten',
        ),
    'dashlet_auto_refresh_options_admin' => array(
            '-1' => 'Nooit',
            '30' => 'Elke 30 seconden',
            '60' => 'Iedere 1 minuut',
            '180' => 'Iedere 3 minuten',
            '300' => 'Iedere 5 minuten',
            '600' => 'Iedere 10 minuten',
        ),
    'date_range_search_dom' => array(
            '=' => 'Gelijk',
            'not_equal' => 'Niet op',
            'greater_than' => 'Na',
            'less_than' => 'Voor',
            'last_7_days' => 'Laaste 7 dagen',
            'next_7_days' => 'Volgende 7 dagen',
            'last_30_days' => 'Laaste 30 dagen',
            'next_30_days' => 'Volgende 30 dagen',
            'last_month' => 'Laaste maand',
            'this_month' => 'Deze maand',
            'next_month' => 'Volgende maand',
            'last_year' => 'Laaste jaar',
            'this_year' => 'Dit jaar',
            'next_year' => 'Volgend jaar',
            'between' => 'Is tussen',
        ),
    'numeric_range_search_dom' => array(
            '=' => 'Gelijk',
            'not_equal' => 'Is niet gelijk',
            'greater_than' => 'Groter dan',
            'greater_than_equals' => 'groter dan of gelijk aan',
            'less_than' => 'Kleiner dan',
            'less_than_equals' => 'minder dan of geljk aan',
            'between' => 'Is tussen',
        ),
    'lead_conv_activity_opt' => array(
            'copy' => 'Kopie',
            'move' => 'Verplaatsen',
            'donothing' => 'Doe niets ',
        ),
);

$app_strings = array(
    'LBL_TEST_SETTINGS'     => 'Test Instellingen', //PR3333
    'LBL_TOUR_NEXT' => 'Volgend',
    'LBL_TOUR_SKIP' => 'Overslaan',
    'LBL_TOUR_BACK' => 'Terug',
    'LBL_TOUR_CLOSE' => 'Sluiten',
    'LBL_TOUR_TAKE_TOUR' => 'Neem de rondleiding',
    'LBL_MY_AREA_LINKS' => 'Mijn gebieden links: ' /*for 508 compliance fix*/,
    'LBL_GETTINGAIR' => 'Het krijgen van lucht' /*for 508 compliance fix*/,
    'LBL_WELCOMEBAR' => 'Welkom' /*for 508 compliance fix*/,
    'LBL_ADVANCEDSEARCH' => 'Geavanceerd zoeken' /*for 508 compliance fix*/,
    'LBL_MOREDETAIL' => 'Meer details' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Bewerk inline' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Bekijk' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_PROJECT_MINUS' => 'Verwijder' /*for 508 compliance fix*/,
    'LBL_PROJECT_PLUS' => 'Toevoegen' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_1' => 'Kolom' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_2' => '2 Kolommen' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_3' => '3 Kolommen' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Toevoegn' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Verberg/Bekijk' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Verwijder' /*for 508 compliance fix*/,
    'LBL_PLUS_INLINE' => 'Toevoegen' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Wissen' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Verwijder' /*for 508 compliance fix*/,
    'LBL_ADD' => 'Toevoegen' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Bedrijfslogo' /*for 508 compliance fix*/,
    'LBL_JS_CALENDAR' => 'Kalender' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Gavanceerd',
    'LBL_BASIC' => 'Standaard',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MODULE_FILTER' => 'Filter op',
    'LBL_CONNECTORS_POPUPS' => 'Verbindingslijnen Popups',
    'LBL_CLOSEINLINE' => 'Sluiten',
    'LBL_EDITINLINE' => 'Bewerk',
    'LBL_VIEWINLINE' => 'Bekijk',
    'LBL_INFOINLINE' => 'Informatie',
    'LBL_POWERED_BY_SUGARCRM' => 'Powered door SugarCRM',
    'LBL_PRINT' => 'Afdrukken',
    'LBL_HELP' => 'Hulp',
    'LBL_ID_FF_SELECT' => 'Selecteer',
    'DEFAULT' => 'Standaard', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Sorteren',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Toevoegen server...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Inschakelen SMTP over SSL of TLS?',
    'LBL_NO_ACTION' => 'Er is geen actie bij deze naam.',
    'LBL_NO_SHORTCUT_MENU' => 'Er zijn geen acties beschikbaar.',
    'LBL_NO_DATA' => 'Geen data',
    'LBL_ROUTING_ADD_RULE' => 'Regel Toevoegen',
    'LBL_ROUTING_ALL' => 'Alles',
    'LBL_ROUTING_ANY' => 'Elke',
    'LBL_ROUTING_BREAK' => '-',
    'LBL_ROUTING_BUTTON_CANCEL' => 'Annuleren',
    'LBL_ROUTING_BUTTON_SAVE' => 'Regel opslaan',

    'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopieer e-mail',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Verwijder SuiteCRM object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Verwijder bestand',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Verwijder e-mail',
    'LBL_ROUTING_ACTIONS_FORWARD' => 'Doorsturen',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Markeren',
    'LBL_ROUTING_ACTIONS_MARK_READ' => 'Markeer gelezen',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Markeer ongelezen',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Verplaats e-mail',
    'LBL_ROUTING_ACTIONS_PEFORM' => 'Voer de volgende acties uit',
    'LBL_ROUTING_ACTIONS_REPLY' => 'Beantwoorden aan e-mail',

    'LBL_ROUTING_CHECK_RULE' => 'Er heeft zich een fout voorgedaan',
    'LBL_ROUTING_CHECK_RULE_DESC' => 'Controleer alle gemarkeerde velden',
    'LBL_ROUTING_CONFIRM_DELETE' => 'Regel verwijderen? Deze actie kan niet ongedaan worden gemaakt',

    'LBL_ROUTING_FLAGGED' => 'gemarkeerd',
    'LBL_ROUTING_FORM_DESC' => 'Opgeslagen regels zijn direct actief',
    'LBL_ROUTING_FW' => 'FW:',
    'LBL_ROUTING_LIST_TITLE' => 'Regels',
    'LBL_ROUTING_MATCH' => 'Als',
    'LBL_ROUTING_MATCH_2' => 'aan een van de volgende condities wordt voldaan',
    'LBL_NOTIFICATIONS' => 'Notificaties',
    'LBL_ROUTING_MATCH_CC_ADDR' => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION' => 'Body inhoud',
    'LBL_ROUTING_MATCH_FROM_ADDR' => 'Van',
    'LBL_ROUTING_MATCH_NAME' => 'Onderwerp',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Hoge prioriteit',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Normale prioriteit',
    'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Lage prioriteit',
    'LBL_ROUTING_MATCH_TO_ADDR' => 'Aan',
    'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Bevat',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Bevat geen',

    'LBL_ROUTING_NAME' => 'Naam regel',
    'LBL_ROUTING_NEW_NAME' => 'Nieuwe regel',
    'LBL_ROUTING_ONE_MOMENT' => 'Een moment a.u.b...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Origneel bericht volgt.',
    'LBL_ROUTING_RE' => 'RE: ',
    'LBL_ROUTING_SAVING_RULE' => 'Regel opslaan...',
    'LBL_ROUTING_SUB_DESC' => 'Aangevinkte regels zijn actief. Klik om te wijzigen.',
    'LBL_ROUTING_TO' => 'naar',
    'LBL_ROUTING_TO_ADDRESS' => 'naar adres',
    'LBL_ROUTING_WITH_TEMPLATE' => 'met sjabloon',
    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'U heeft momenteel waarden in het formulier voor de telefoonnummers en adres velden. Om deze waarden te  overschrijven met de telefoon / adres gegevens van de het bedrijf dat u heeft geselecteerd, klikt u op \\"OK\\". Om de huidige waarden te behouden, klikt u op \\"Annuleren\\".',
    'LBL_DROP_HERE' => '[Sleep hier]',
    'LBL_EMAIL_ACCOUNTS_EDIT' => 'Bewerk',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Stel Gmail standaardwaarden in',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Naam',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Uitgaan e-mail server',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Mailserver systeem',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Gebruik SMTP authenticatie?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP wachtwoord',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Gebruik SSL verbinding',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP gebruikersnaam',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Standaard',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Waarschuwing: Ontbrekende gebruikersnaam en wachtwoord voor uitgaande e-mail account.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'SMTP-gebruikersnaam is vereist',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'SMTP-wachtwoord is vereist',
    'LBL_EMAIL_ACCOUNTS_TITLE' => 'E-mail account beheer',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Mail Server Protocol van het type POP3 zal niet worden ondersteund in de volgende release. Alleen IMAP wordt ondersteund.',
    'LBL_INCOMING_EMAIL' => 'Inkomende e-mail', //PR3333
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Instellen van Mail-accounts om binnenkomende e-mails van uw e-mailaccounts te bekijken.',
    'LBL_OUTGOING_EMAIL' => 'Uitgaande e-mail', //PR3333
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Geef SMTP-mailserver informatie in voor gebruik van uitgaande e-mail in Mail Accounts.',
    'LBL_EMAIL_ADD' => 'Adres toevoegen',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Klaar',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Wissen',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Aan:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Aan/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Nieuwe lijst',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-mail adres',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Alleen contactpersonen kunnen op het moment worden gewijzigd.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Voornaam/Bedrijfsnaam',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Achternaam',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Mijn contactpersonen',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Mijn mailing lijsten',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Naam',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Geen adres gevonden',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Opslaan & Toevoegen aan adresboek',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Zoeken',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Selecteer e-mail items',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresboek',
    'LBL_EMAIL_REPORTS_TITLE' => 'Rapportages',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', '', null, null, '.gif', 'Address Book').'Adresboek',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, '.gif', ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Let op! De uitgaande account die u probeert te verwijderen is gekoppeld aan een bestaande inkomende account. Weet u zeker dat u wilt doorgaan?',
    'LBL_EMAIL_ADDRESSES' => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-mail adres',
    'LBL_EMAIL_ADDRESSES_TITLE' => 'E-mail adresen',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Importeer in SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Toekennen',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Toevoegen',
    'LBL_EMAIL_ATTACHMENT' => 'Toevoegen',
    'LBL_EMAIL_ATTACHMENTS' => 'Van locale computer',
    'LBL_EMAIL_ATTACHMENTS2' => 'Van SuiteCRM documenten',
    'LBL_EMAIL_ATTACHMENTS3' => 'Sjabloon toevoegen',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Bestand',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Ingesloten',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Anuleren',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Tekenset',
    'LBL_EMAIL_CHECK' => 'Controleer e-mail',
    'LBL_EMAIL_CHECKING_NEW' => 'Controleren op nieuw e-mail',
    'LBL_EMAIL_CHECKING_DESC' => 'Een moment a.u.b... <br><br>De eerste keer kan dit even duren.',
    'LBL_EMAIL_CLOSE' => 'Sluiten',
    'LBL_EMAIL_COFFEE_BREAK' => 'Controleren op nieuw e-mail. <br><br>Grote e-mails kunnen even duren.',
    'LBL_EMAIL_COMMON' => 'Veelvoorkomend',

    'LBL_EMAIL_COMPOSE' => 'E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Vul a.u.b. minstens een ontvanger in.',
    'LBL_EMAIL_COMPOSE_LINK_TO' => 'Associeren met',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Deze e-mail heeft geen body. Toch verzenden?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Deze e-mail heeft geen onderwerp. Toch verzenden?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(geen onderwerp)',
    'LBL_EMAIL_COMPOSE_READ' => 'E-mail lezen en opstellen',
    'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Verzende vanaf account',
    'LBL_EMAIL_COMPOSE_OPTIONS' => 'Opties',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Vul a.u.b. een geldig adres voor Naar, CC en BCC in.',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Deze e-mail annuleren?',
    'LBL_EMAIL_CONFIRM_DELETE' => 'Items uit uw adresboek verwijderen?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Weet u zeker dat u deze handtekening wilt verwijderen?',

    'LBL_EMAIL_CREATE_NEW' => '--Maken bij opslaan--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Meerdere',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Leeg',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum verzonden door verzender',
    'LBL_EMAIL_DATE_RECEIVED' => 'Datum ontvangen',
    'LBL_EMAIL_ASSIGNED_TO_USER' => 'Toegewezen aan gebruiker',
    'LBL_EMAIL_DATE_TODAY' => 'Vandaag',
    'LBL_EMAIL_DATE_YESTERDAY' => 'Gisteren',
    'LBL_EMAIL_DD_TEXT' => 'e-mails geselecteerd.',
    'LBL_EMAIL_DEFAULTS' => 'Standaardwaarden',
    'LBL_EMAIL_DELETE' => 'Verwijderen',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Verwijder geselecteerde berichten?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-mail verwijderd.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'E-mail verwijderen...',
    'LBL_EMAIL_DETAILS' => 'Details',
    'LBL_EMAIL_DISPLAY_MSG' => 'E-mail adres(sen) {0} - {1} van {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Bekijk e-mail adres(sen) {0} - {1} van {2}',

    'LBL_EMAIL_EDIT_CONTACT' => 'Wijzig contactpersoon',
    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Alleen het primaire adres zal worden gebruikt.',
    'LBL_EMAIL_EDIT_MAILING_LIST' => 'Wijzig verzendlijst',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Prullenbak verwijderen...',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Verwijderen uitgaande server',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Verwijderen cache bestanden',
    'LBL_EMAIL_EMPTY_MSG' => 'Geen e-mailadressen om te laten zien',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Geen e-mailadressen om weer te geven.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Map naam moet uniek zijn en niet leeg. Probeer het opnieuw',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kan map niet verwijderen. Deze map (of een submap hiervan) heeft een associatie met een e-mail account.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Kan de bedoelde mapnaam niet uit de context halen. Probeer opnieuw.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Check a.u.b. uw instellingen.',
    'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Zorg ervoor dat u een achternaam invult.',
    'LBL_EMAIL_ERROR_DESC' => 'Er zijn fouten opgetreden: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'U heeft geen toegang tot deze functie. Neem contact op met uw systeembeheerder.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM map namen moeten unique zijn',
    'LBL_EMAIL_ERROR_EMPTY' => 'Vul a.u.b. zoekcriteria in.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Er is een fout opgetreden.',
    'LBL_EMAIL_ERROR_LIST_NAME' => 'Er bestaat reeds een e-maillijst met die naam.',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Bericht van de server verwijderd.',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Of verwijderd van de server of verplaatst naar een andere map.',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'De verbinding met e-mail server is mislukt. Raadpleeg de systeembeheerder.',
    'LBL_EMAIL_ERROR_MOVE' => 'Verplaatsen tussen servers wordt momenteel niet ondersteund.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Fout bij verplaatsen',
    'LBL_EMAIL_ERROR_NAME' => 'Een naam is verplicht',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => '"Van" adres is verplicht.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Geef a.u.b. een bestand op.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP mappen hernoemen wordt momenteel niet ondersteund.',
    'LBL_EMAIL_ERROR_SERVER' => 'Een e-mail server adres is verplicht',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Deze e-mail account is wellicht niet opgeslagen.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Fout bij communicatie met de server.',
    'LBL_EMAIL_ERROR_USER' => 'Een login naam is verplicht.',
    'LBL_EMAIL_ERROR_PASSWORD' => 'Een wachtwoord is verplicht.',
    'LBL_EMAIL_ERROR_PORT' => 'Een e-mail server poort is verplicht.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Een server protocol is verplicht.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Gemonitorde map is verplicht.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Prullenbak map is verplicht.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Deze informatie is niet beschikbaar.',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Geen uitgaande mail server opgegeven.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '').'Mappen',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ACTIONS' => 'Verplaats naar',
    'LBL_EMAIL_FOLDERS_ADD' => 'Toevoegen',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Nieuwe map toevoegen',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Map hernoemen',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Opslaan',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Deze map toevoegen aan',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Deze map niet worden gewijzigd',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Weet u zeker dat u deze map wilt verwijderen?\nDit proces kan niet ongedaan gemaakt worden.\nMap verwijderingen zullen ook alle onderliggende mappen verwijderen.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nieuwe mapnaam',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Selecteer a.u.b. eerst een map voordat u doorgaat.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Mappen beheren',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Gebruikt groep',

    'LBL_EMAIL_FORWARD' => 'Doorsturen',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Gedownload [[count]] van [[total]] e-mails',
    'LBL_EMAIL_FOUND' => 'Gevonden',
    'LBL_EMAIL_FROM' => 'Van',
    'LBL_EMAIL_GROUP' => 'groep',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groep',
    'LBL_EMAIL_HOME_FOLDER' => 'Start',
    'LBL_EMAIL_HTML_RTF' => 'Verzend HTML',
    'LBL_EMAIL_IE_DELETE' => 'E-mail account verwijderen...',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Handtekening verwijderen',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Weet u zeker dat u dit e-mail account wilt verwijderen?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Verwijderen succesvol.',
    'LBL_EMAIL_IE_SAVE' => 'E-mail account informatie opslaan...',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'E-mails importeren...',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importeer in SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Import instellingen',
    'LBL_EMAIL_INVALID' => 'Ongeldig',
    'LBL_EMAIL_LOADING' => 'Laden...',
    'LBL_EMAIL_MARK' => 'Markeren',
    'LBL_EMAIL_MARK_FLAGGED' => 'Als belangrijk',
    'LBL_EMAIL_MARK_READ' => 'Als gelezen',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Als niet belangrijk',
    'LBL_EMAIL_MARK_UNREAD' => 'Als ongelezen',
    'LBL_EMAIL_ASSIGN_TO' => 'Toewijzen aan',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Maak map',
    'LBL_EMAIL_MENU_COMPOSE' => 'Opstellen naar',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Verwijder map',
    'LBL_EMAIL_MENU_EDIT' => 'Wijzigen',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Leeg prullenbak',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniseer',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Cache bestanden verwijderen',
    'LBL_EMAIL_MENU_REMOVE' => 'Verwijderen',
    'LBL_EMAIL_MENU_RENAME' => 'Hernoemen',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Hernoem map',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Map hernoemen...',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Maak a.u.b. een selectie voordat u deze aktie uitvoert.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Aanmaken map (remote of in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Archiveer deze email(s) naar SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'E-mail geselecteerde lijsten',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'E-mail deze contactpersoon',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Contactpersoon verwijderen',
    'LBL_EMAIL_MENU_HELP_DELETE' => 'Verwijder deze e-mails',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Verwijder een map (remote of in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Wijzig een contactpersoon',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Wijzig een adreslijst',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Verwijdert alle prullenbakken van uw account.',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Markeer deze e-mails als belangrijk',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Markeer deze e-mails als gelezen',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Markeer deze e-mails als niet belangrijk',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Markeer deze e-mails als ongelezen',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Verwijder adreslijst',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Hernoemen map (remote of in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY' => 'Beantwoord deze e-mail(s)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Allen beantwoorden',

    'LBL_EMAIL_MESSAGES' => 'berichten',

    'LBL_EMAIL_ML_NAME' => 'Lijst naam',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Geselecteerde adreslijsten',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Beschikbare adreslijsten',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> om meerdere te selecteren<br />(Mac: <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Nee',
    'LBL_EMAIL_NOT_SENT' => 'Systeem is niet in staat om uw aanvraag te verwerken. Neem contact op met de systeembeheerder.',

    'LBL_EMAIL_OK' => 'OK ',
    'LBL_EMAIL_ONE_MOMENT' => 'Even geduld a.u.b...',
    'LBL_EMAIL_OPEN_ALL' => 'Open meerdere berichten',
    'LBL_EMAIL_OPTIONS' => 'Opties',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Snel samenstellen',
    'LBL_EMAIL_OPT_OUT' => 'Afgemeld voor e-mail',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Niet deelnemer en ongeldig',
    'LBL_EMAIL_PAGE_AFTER' => 'van {0}',
    'LBL_EMAIL_PAGE_BEFORE' => 'Pagina',
    'LBL_EMAIL_PERFORMING_TASK' => 'Taak uitvoeren...',
    'LBL_EMAIL_PRIMARY' => 'Primaire',
    'LBL_EMAIL_PRINT' => 'Afdrukken',

    'LBL_EMAIL_QC_BUGS' => 'Bugs',
    'LBL_EMAIL_QC_CASES' => 'Dossier',
    'LBL_EMAIL_QC_LEADS' => 'Leads',
    'LBL_EMAIL_QC_CONTACTS' => 'Contactpersoon',
    'LBL_EMAIL_QC_TASKS' => 'Taak',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Kans',
    'LBL_EMAIL_QUICK_CREATE' => 'Snel aanmaken',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Mappen opnieuw opbouwen',
    'LBL_EMAIL_RELATE_TO' => 'Relateren',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Bekijk relaties',
    'LBL_EMAIL_RECORD' => 'E-mail record',
    'LBL_EMAIL_REMOVE' => 'Verwijderen',
    'LBL_EMAIL_REPLY' => 'Beantwoord',
    'LBL_EMAIL_REPLY_ALL' => 'Alleen beantwoorden',
    'LBL_EMAIL_REPLY_TO' => 'Beantwoord-aan',
    'LBL_EMAIL_RETRIEVING_LIST' => 'E-mail lijst ophalen...',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Bericht ophalen',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Ophalen e-mail record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Selecteer slechts één email',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Terug naar de vorige module?',
    'LBL_EMAIL_REVERT' => 'Terugdraaien',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relateer e-mail',

    'LBL_EMAIL_RULES_TITLE' => 'Regel beheer',

    'LBL_EMAIL_SAVE' => 'Opslaan',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Opslaan & beantwoorden',
    'LBL_EMAIL_SAVE_DRAFT' => 'Concept opslaan',

    'LBL_EMAIL_SEARCHING' => 'Zoekopdracht uitvoeren...',
    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_ADVANCED' => 'Geavanceerde zoekmethode',
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datum vanaf',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datum tot',
    'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Body tekst',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Geen resultaten.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Zoekresultaten',
    'LBL_EMAIL_SEARCH_TITLE' => 'Simpel zoeken',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Zoek e-mail accounts',

    'LBL_EMAIL_SELECT' => 'Selecteer',

    'LBL_EMAIL_SEND' => 'Verzenden',
    'LBL_EMAIL_SENDING_EMAIL' => 'E-mail versturen',

    'LBL_EMAIL_SETTINGS' => 'Instellingen',
    'LBL_EMAIL_SETTINGS_2_ROWS' => '2 rijen',
    'LBL_EMAIL_SETTINGS_3_COLS' => '3 kolommen',
    'LBL_EMAIL_SETTINGS_LAYOUT' => 'Layout stijl',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-mail accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Formulier legen',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'E-mail importeren bij openen',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Checken op nieuwe e-mail',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Gebruik voorbeeldscherm',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Gebruik popup scherm',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Aantal e-mails per pagina',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Wijzig e-mail account',
    'LBL_EMAIL_SETTINGS_FOLDERS' => 'Mappen',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Van adres',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-mail adres voor test bericht:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Naar e-mail adres',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Van naam',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Antwoord aan adres',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Volledig scherm',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniseer alle e-mail accounts',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Een e-mail is verzonden naar het opgegeven e-mailadres met behulp van de opgegeven uitgaande e-mail instellingen. Controleer of de e-mail ontvangen is om te controleren of de instellingen correct zijn.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Deze aktie zal alle accounts en hun inhoud synchroniseren.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Volledig synchronisatie uitvoeren?\nDit kan even duren bij grote e-mails (5 minuten).',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Klik op Shift of Control om meerdere mappen te selecteren. ',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Algemeen',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Beshikbare groepsmappen',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Maak groep map',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Groep mappen opslaan',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Groep map ophalen...',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Wijzig groep map',

    'LBL_EMAIL_SETTINGS_NAME' => 'Naam',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Deze wijzigingen vereisen een complete refresh (F5) voordat ze actief worden.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'E-mail account ophalen...',
    'LBL_EMAIL_SETTINGS_RULES' => 'Regels',
    'LBL_EMAIL_SETTINGS_SAVED' => 'De instellingen zijn opgeslagen\n\nRefresh de pagina om deze actief te maken.',
    'LBL_EMAIL_SETTINGS_SAVED_NO_REFRESH' => 'The settings have been saved.', //PR3333
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Verzend e-mail als platte tekst',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Actief',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Aantal e-mails per pagina',
    'LBL_EMAIL_SETTINGS_TAB_POS' => 'Plaats tabs op de onderkant',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuele instellingen',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Voorkeuren',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Toon geavanceerde opties',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Beschikbare gebruikersmappen',
    'LBL_EMAIL_ERROR_PREPEND' => 'Fout:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'De geselecteerde uitgaande mailserver voor het e-mail account dat u gebruikt, is ongeldig. Controleer de instellingen of selecteer een ander e-mail server voor het e-mail account.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Er is geen uitgaande mail server geconfigureerd voor uitgaande e-mail voor het e-mail account dat u gebruikt. Selecteer of voeg een uitgaande mail server voor dit e-mail account toe.',
    'LBL_EMAIL_SHOW_READ' => 'Laat alles zien',
    'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Laat alleen ongelezen zien',
    'LBL_EMAIL_SIGNATURES' => 'Handtekeningen',
    'LBL_EMAIL_SIGNATURE_CREATE' => 'Maak ondertekening aan',
    'LBL_EMAIL_SIGNATURE_NAME' => 'Ondertekening naam',
    'LBL_EMAIL_SIGNATURE_TEXT' => 'Ondertekening inhoud',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ander',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Mappen op afstand ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM mappen ]',
    'LBL_EMAIL_SUBJECT' => 'Onderwerp',
    'LBL_EMAIL_SUCCESS' => 'Succesvol',
    'LBL_EMAIL_SUGAR_FOLDER' => 'SuiteCRM Map',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-mail sjabloon is leeg',
    'LBL_EMAIL_TEMPLATES' => 'Sjablonen',
    'LBL_EMAIL_TEXT_FIRST' => 'Eerste pagina',
    'LBL_EMAIL_TEXT_PREV' => 'Vorige pagina',
    'LBL_EMAIL_TEXT_NEXT' => 'Volgende pagina',
    'LBL_EMAIL_TEXT_LAST' => 'Laatste pagina',
    'LBL_EMAIL_TEXT_REFRESH' => 'Ververs',
    'LBL_EMAIL_TO' => 'Aan',
    'LBL_EMAIL_TOGGLE_LIST' => 'Schakel lijst',
    'LBL_EMAIL_VIEW' => 'Bekijk',
    'LBL_EMAIL_VIEWS' => 'Overzichten',
    'LBL_EMAIL_VIEW_HEADERS' => 'Laat headers zien',
    'LBL_EMAIL_VIEW_PRINTABLE' => 'Afdruk versie',
    'LBL_EMAIL_VIEW_RAW' => 'Laat ruwe e-mail zien',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Deze functie is niet beschikbaar icm POP3',
    'LBL_DEFAULT_LINK_TEXT' => 'Standaard hyperlink tekst.',
    'LBL_EMAIL_YES' => 'Ja',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Stuur test e-mail',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test e-mail verzonden',
    'LBL_EMAIL_MESSAGE_NO' => 'Bericht geen',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import geslaagd',
    'LBL_EMAIL_IMPORT_FAIL' => 'Import is mislukt omdat ofwel het bericht al is ingevoerd of verwijderd van de server',

    'LBL_LINK_NONE' => 'Neen',
    'LBL_LINK_ALL' => 'Alles',
    'LBL_LINK_RECORDS' => 'Items',
    'LBL_LINK_SELECT' => 'Selecteer',
    'LBL_LINK_ACTIONS' => 'Acties', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LINK_MORE' => 'Meer',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Bevestig',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Wilt u deze #module# sluiten?',
    'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Geef dit bericht niet weer in de toekomst:',
    'LBL_INVALID_FILE_EXTENSION' => 'Ongeldige bestands extensie',

    'ERR_AJAX_LOAD' => 'Er is een fout opgetreden:',
    'ERR_AJAX_LOAD_FAILURE' => 'Er was een fout bij het verwerken van uw request, probeer het later nog eens.',
    'ERR_AJAX_LOAD_FOOTER' => 'Als deze fout zich blijft voordoen, laat uw beheerder danAjax voor deze module uitschakelen',
    'ERR_CREATING_FIELDS' => 'Foutmelding bij het invullen van aanvullende detail velden: ',
    'ERR_CREATING_TABLE' => 'Foutmelding bij het creeren van de tabel:',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Het decimaalteken mag niet gelijk zijn aan het scheidingsteken voor de duizendtallen.\n\n Wijzig de waarden.',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze RSS Nieuwsfeed te verwijderen',
    'ERR_EXPORT_DISABLED' => 'Exporteren is uitgeschakeld.',
    'ERR_EXPORT_TYPE' => 'Fout bij exporteren ',
    'ERR_INVALID_AMOUNT' => 'Voer een geldig bedrag in a.u.b.',
    'ERR_INVALID_DATE_FORMAT' => 'Het datum formaat moet zijn: jjjj-mm-dd',
    'ERR_INVALID_DATE' => 'Voer een geldige datum in a.u.b.',
    'ERR_INVALID_DAY' => 'Voer een geldige dag in a.u.b.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Dit is geen geldig E-mailadres.',
    'ERR_INVALID_FILE_REFERENCE' => 'Ongeldige bestandsreferentie',
    'ERR_INVALID_HOUR' => 'Voer een geldig uur in a.u.b.',
    'ERR_INVALID_MONTH' => 'Voer een geldige maand in a.u.b.',
    'ERR_INVALID_TIME' => 'Voer een geldige tijd in a.u.b.',
    'ERR_INVALID_YEAR' => 'Voer een geldig 4 cijferig jaartal in.',
    'ERR_NEED_ACTIVE_SESSION' => 'Om te kunnen exporteren moet u een actieve sessie hebben.',
    'ERR_NO_HEADER_ID' => 'Deze functie is niet beschikbaar in dit thema.',
    'ERR_NOT_ADMIN' => 'Ongeauthoriseerde toegang tot configuratie',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Verplicht veld ontbreekt:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Ongeldig verplicht veld:',
    'ERR_INVALID_VALUE' => 'Ongeldige waarden:',
    'ERR_NO_SUCH_FILE' => 'Bestand bestaat niet op systeem',
    'ERR_NO_SINGLE_QUOTE' => 'Kan het enkelvoudige aanhalingsteken niet gebruiken voor ',
    'ERR_NOTHING_SELECTED' => 'Maak een selectie voor je doorgaat.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Er bestaat al een kans met de naam %s. Voer een andere naam voor de kans in.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Er is geen kansnaam ingevuld. Voer hieronder de naam voor de kans in.',
    'ERR_POTENTIAL_SEGFAULT' => 'Er is een Apache segmentatie fout opgetreden. Informeer uw systeem beheerder om dit te bevestigen en laat dit rapporteren aan SuiteCRM',
    'ERR_SELF_REPORTING' => 'Een gebruiker kan niet naar zichzelf rapporteren.',
    'ERR_SINGLE_QUOTE' => 'Kan het enkelvoudige aanhalingsteken niet gebruiken voor dit veld. Verander de waarde.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Geen match voor veld: ',
    'ERR_SQS_NO_MATCH' => 'Geen match',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the metadata definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Fout: De naam van de Portal is al toegewezen aan een ander contactpersoon.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Waarde voldoet niet aan opgegeven precisie',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Er is een fout opgetreden bij het opslaan op de externe relatie.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Er is een fout opgetreden bij het uploaden. Zorg ervoor dat het bestand dat u wilt uploaden is niet leeg.',
    'ERR_NO_DB' => 'Geen verbinding met de database mogelijk. Kijk voor details in de error log van SuiteCRM',
    'ERR_DB_FAIL' => 'Database fout. Kijk voor details in de error log van SuiteCRM',
    'ERR_EXTERNAL_API_403' => 'Toestemming geweigerd. Bestandstype wordt niet ondersteund.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth Access Token ontbreekt.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} bestanden mogen alleen worden gebruikt met een SuiteCRM {1} database.',

    'LBL_ACCOUNT' => 'Relatie',
    'LBL_OLD_ACCOUNT_LINK' => 'Oude relatie',
    'LBL_ACCOUNTS' => 'Relaties',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Bekijk samenvatting',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Bekijk samenvatting',
    'LBL_ADD_BUTTON_KEY' => 'Toev',
    'LBL_ADD_BUTTON_TITLE' => 'Toevoegen',
    'LBL_ADD_BUTTON' => 'Toevoegen',
    'LBL_ADD_DOCUMENT' => 'Document Toevoegen',
    'LBL_REPLACE_BUTTON' => 'Vervangen',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'Lijst',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Voeg toe aan de verzendlijst',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Voeg toe aan de verzendlijst',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Contacten toevoegen aan de doellijst',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klik om te Sluiten',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Sluiten',
    'LBL_ADDITIONAL_DETAILS' => 'Aanvullende details',
    'LBL_ADMIN' => 'Beheer',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiveer',
    'LBL_ASSIGNED_TO_USER' => 'Toegewezen aan gebruiker',
    'LBL_ASSIGNED_TO' => 'Toegewezen aan:',
    'LBL_BACK' => 'Terug',
    'LBL_BILL_TO_ACCOUNT' => 'Factureer naar bedrijf',
    'LBL_BILL_TO_CONTACT' => 'Factureer naar contactpersoon',
    'LBL_BILLING_ADDRESS' => 'Facturatie adres',
    'LBL_QUICK_CREATE_TITLE' => 'Snel aanmaken',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Fouten',
    'LBL_BY' => 'door',
    'LBL_CALLS' => 'Telefoongesprekken',
    'LBL_CALL' => 'Telefoongesprek',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Verzend de campage e-mail in de wachtrij',
    'LBL_SUBMIT_BUTTON_LABEL' => 'OK',
    'LBL_CASE' => 'Dossier',
    'LBL_CASES' => 'Dossiers',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Verander wachtwoord',
    'LBL_CHANGE_BUTTON_LABEL' => 'Veranderen',
    'LBL_CHANGE_BUTTON_TITLE' => 'Veranderen',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Selecteer alles',
    'LBL_CITY' => 'Plaats',
    'LBL_CLEAR_BUTTON_KEY' => 'Wis',
    'LBL_CLEAR_BUTTON_LABEL' => 'Wissen',
    'LBL_CLEAR_BUTTON_TITLE' => 'Wissen',
    'LBL_CLEARALL' => 'Wis alles',
    'LBL_CLOSE_BUTTON_TITLE' => 'Sluiten', // As in closing a task
    'LBL_CLOSE_BUTTON_KEY' => 'Sluit',
    'LBL_CLOSE_WINDOW' => 'Sluit venster',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Sluit',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Sluit alle',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Sluit alle',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Sluiten en nieuwe maken', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Sluiten en nieuwe maken', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'Sluit',
    'LBL_OPEN_ITEMS' => 'Artikel openen',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'Mail',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'E-mailbericht opstellen',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'E-mailbericht opstellen',
    'LBL_SEARCH_DROPDOWN_YES' => 'Ja',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nee',
    'LBL_CONTACT_LIST' => 'Contactpersonen',
    'LBL_CONTACT' => 'Contactpersoon',
    'LBL_CONTACTS' => 'Contactpersonen',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'Contracten',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATE_BUTTON_LABEL' => 'Nieuw', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Aangemaakt door gebruiker',
    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_CREATED_ID' => 'Gemaakt door ID',
    'LBL_CREATED' => 'Gemaakt door',
    'LBL_CURRENT_USER_FILTER' => 'Alleen mijn items:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Documenten',
    'LBL_DATE_ENTERED' => 'Aangemaakt:',
    'LBL_DATE_MODIFIED' => 'Laatste wijziging:',
    'LBL_EDIT_BUTTON' => 'Bewerk',
    'LBL_DUPLICATE_BUTTON' => 'Dupliceer',
    'LBL_DELETE_BUTTON' => 'Verwijder',
    'LBL_DELETE' => 'Verwijder',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_DIRECT_REPORTS' => 'Directe Rapportages',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Klaar',
    'LBL_DONE_BUTTON_TITLE' => 'Klaar',
    'LBL_DST_NEEDS_FIXIN' => 'Voor deze applicatie is het nodig dat de zomertijd fix wordt toegepast. Gan naar de Repareer link in de Admin pagina en voer de Zomertijd fix uit.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Wijzig als nieuw',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Wijzig als niew',
    'LBL_FAVORITES' => 'Favorieten',
    'LBL_FILTER_MENU_BY' => 'Filter menu up',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Selecteer a.u.n een vCard bestand',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard heeft niet alle verplichte velden voor deze module. Kijk in de suitecrm.log voor details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Het geuploade bestand is groter dan 30000 bytes de bestandslimiet welke is gespecificeerd in het HTML formulier.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Er was een fout met het uploaden van het vCard bestand. Kijk in de suitecrm.log voor details.',
    'LBL_IMPORT_VCARD' => 'Importeer vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importeer vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importeer vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Bekijk',
    'LBL_VIEW_BUTTON_TITLE' => 'Bekijk',
    'LBL_VIEW_BUTTON' => 'Bekijk',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-mail als PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-mail als PDF',
    'LBL_EMAILS' => 'E-mails',
    'LBL_EMPLOYEES' => 'Personeel',
    'LBL_ENTER_DATE' => 'Datum',
    'LBL_EXPORT_ALL' => 'Exporteer alle',
    'LBL_EXPORT' => 'Exporteren',
    'LBL_FAVORITES_FILTER' => 'Mijn Favorieten:',
    'LBL_GO_BUTTON_LABEL' => 'Ga',
    'LBL_GS_HELP' => 'De velden in deze module gebruikt in deze zoekopdracht verschijnen hierhoven. De gemarkeerde tekst komt overeen met uw zoek criteria.',
    'LBL_HIDE' => 'Verberg',
    'LBL_ID' => 'Id',
    'LBL_IMPORT' => 'Importeer',
    'LBL_IMPORT_STARTED' => 'Importeren gestart: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Moet een kolom delimiter opgeven.',
    'LBL_LAST_VIEWED' => 'Laatst bekeken',
    'LBL_SHOW_LESS' => 'Bekijk minder',
    'LBL_SHOW_MORE' => 'Bekijk maar',
    'LBL_TODAYS_ACTIVITIES' => 'Vandaag',
    'LBL_LEADS' => 'Leads',
    'LBL_LESS' => 'minder',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNLOG' => 'Campagnes Log',
    'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Geen',
    'LBL_SITEMAP' => 'Sitemap',
    'LBL_THEME' => 'Thema:',
    'LBL_THEME_PICKER' => 'Pagina opmaak',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Waarschuwing: Internet Explorer 6 wordt niet ondersteund door het gekozen thema. Klik op OK om het toch te selecteren of klik op Annuleren om een ander thema te selecteren.',
    'LBL_FOUND_IN_RELEASE' => 'Gevonden in release',
    'LBL_FIXED_IN_RELEASE' => 'Gefixt in release',
    'LBL_LIST_ACCOUNT_NAME' => 'Bedrijfsnaam',
    'LBL_LIST_ASSIGNED_USER' => 'Gebruiker',
    'LBL_LIST_CONTACT_NAME' => 'Contactpersoon',
    'LBL_LIST_CONTACT_ROLE' => 'Rol contactpersoon',
    'LBL_LIST_DATE_ENTERED' => 'Datum aangemaakt',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_OF' => 'van',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
    'LBL_LIST_USER_NAME' => 'Gebruikersnaam',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Weet u zeker dat u de volledige lijst wilt wijzigen ?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Selecteer minimaal 1 rij om door te gaan.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Selecteer a.u.b. minstens 2 om verder te gaan.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Selecteer a.u.b. minder dan 10 om verder te gaan.',
    'LBL_LISTVIEW_ALL' => 'Alles',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Geselecteerde records',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Geselecteerd: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Janssen',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dhr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'CEO',
    'LBL_LOGIN_TO_ACCESS' => 'Log in om toegang te krijgen tot dit gedeelte.',
    'LBL_LOGOUT' => 'Uitloggen',
    'LBL_PROFILE' => 'Profiel',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Mail merge',
    'LBL_MASS_UPDATE' => 'Massa update',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Er zijn geen velden beschikbaar voor de mass update opdracht',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt-out primaire e-mailadres',
    'LBL_MEETINGS' => 'Afspraken',
    'LBL_MEETING' => 'Afspraak',
    'LBL_MEETING_GO_BACK' => 'Ga terug naar de afspraak',
    'LBL_MEMBERS' => 'Leden',
    'LBL_MEMBER_OF' => 'Leden van',
    'LBL_MODIFIED_BY_USER' => 'Gewijzigd door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
    'LBL_MORE' => 'meer',
    'LBL_MY_ACCOUNT' => 'Mijn account',
    'LBL_NAME' => 'Naam',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Nieuw',
    'LBL_NEW_BUTTON_TITLE' => 'Nieuw',
    'LBL_NEXT_BUTTON_LABEL' => 'Volgende',
    'LBL_NONE' => '--Geen--',
    'LBL_NOTES' => 'Notities',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Open alle',
    'LBL_OPENALL_BUTTON_TITLE' => 'Open alle',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Openen in: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Openen in:',
    'LBL_OPPORTUNITIES' => 'Kansen',
    'LBL_OPPORTUNITY_NAME' => 'Kansnaam',
    'LBL_OPPORTUNITY' => 'Kans',
    'LBL_OR' => 'OF',
    'LBL_LOWER_OR' => 'of',
    'LBL_PANEL_OVERVIEW' => 'Doel informatie', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Anders', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Meer informatie', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Gerelateerd aan type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Fase',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Provincie:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primair adres 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primair adres 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + huisnummer:',
    'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',

    'LBL_BILLING_STREET' => 'Straat:',
    'LBL_SHIPPING_STREET' => 'Straat:',

    'LBL_PROSPECTS' => 'Prospecten',
    'LBL_PRODUCT_BUNDLES' => 'Product bundel',
    'LBL_PRODUCTS' => 'Producten',
    'LBL_PROJECT_TASKS' => 'Project taak',
    'LBL_PROJECTS' => 'Projecten',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Offerte omzetten naar Kans',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Offerte omzetten naar Kans',
    'LBL_QUOTES_SHIP_TO' => 'Verzendkosten',
    'LBL_QUOTES' => 'Offertes',

    'LBL_RELATED' => 'Gerelateerd',
    'LBL_RELATED_INFORMATION' => 'Gerelateerde informatie',
    'LBL_RELATED_RECORDS' => 'Gerelateerde records',
    'LBL_REMOVE' => 'Verwijderen',
    'LBL_REPORTS_TO' => 'Rapporteert aan',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Vereist een verplicht veld',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Klaar',
    'LBL_SAVE_AS_BUTTON_KEY' => 'Toev',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Opslaan als',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Opslaan als',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Volledig formulier',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Volledig formulier',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Opslaan en nieuwe aanmaken',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Opslaan en nieuwe aanmaken',
    'LBL_SAVE_OBJECT' => 'Opslaan {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Sluit',
    'LBL_SEARCH_BUTTON_LABEL' => 'Filter',
    'LBL_SEARCH_BUTTON_TITLE' => 'Filter',
    'LBL_SEARCH' => 'Filter',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_TIPS' => 'Druk de zoek knop of klik enter om een exacte match te krijgen.',
    'LBL_SEARCH_TIPS_2' => 'Druk de zoek knop of klik enter om een exacte match te krijgen',
    'LBL_SEARCH_MORE' => 'meer',
    'LBL_SEE_ALL' => 'Zie alles',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Ongeldig bestands formaat, alleen een afbeelding kan worden opgeslagen.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Selecteer',
    'LBL_SELECT_BUTTON_TITLE' => 'Selecteer',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Toevoegen Team(s)',
    'LBL_SELECT_TEAMS_TITLE' => 'Toevoegen Teams(s)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Bladeren in documenten',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Bladeren in documenten',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selecteer contactpersoon',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selecteer contactpersoon',
    'LBL_GRID_SELECTED_FILE' => 'geselecteerd bestand',
    'LBL_GRID_SELECTED_FILES' => 'geselecteerde bestanden',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selecteer uit rapporten',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Selecteer rapporten',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Selecteer gebruiker',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Selecteer gebruiker',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Wissen selectie',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Wissen selectie',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Wissen selectie',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Wissen selectie',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Selecteer bestand',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'selecteer bestand',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Wissen bestand',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Wissen bestand',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Selecteer gebruiker',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Selecteer gebruiker',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Wissen gebruiker',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Wissen gebruiker',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'Toev',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Selecteer relatie',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Selecteer relatie',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Wissen relatie',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Wissen relatie',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Selecteer campagne',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Selecteer campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Wissen campagne ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Wissen campagne',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'Wis',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Selecteer contactpersoon',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Selecteer contactpersoon',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Wissen contactpersoon',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Wissen contactpersoon',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Selecteer Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Selecteer Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Wissen Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Wissen Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Items gebruikt om deze pagina te maken (queries, bestanden)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'seconden.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server reactie tijd:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Server geheugen gebruik: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Gebruik: - module: {0} - actie: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server hoogste geheugen verbruik: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT' => 'Verzend naar bedrijf',
    'LBL_SHIP_TO_CONTACT' => 'Verzend naar contactpersoon',
    'LBL_SHIPPING_ADDRESS' => 'Verzendadres',
    'LBL_SHORTCUTS' => 'Snelkoppeling',
    'LBL_SHOW' => 'Toon',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Provincie of regio:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Je status voor deze gebeurtenis is bijgewerkt!',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Straat',
    'LBL_SUBJECT' => 'Onderwerp',

    'LBL_INBOUNDEMAIL_ID' => 'Inkomend e-mail Id',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2014 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',

    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '© 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink"> SugarCRM Inc.</a> Alle rechten voorbehouden. < br / > SugarCRM is een handelsmerk van SugarCRM, Inc. Alle andere namen van bedrijfs- en productnamen zijn mogelijk handelsmerken van de respectieve bedrijven waarmee ze in verband worden gebracht.',

    'LBL_SCENARIO_SALES' => 'Verkoop',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Financieel',
    'LBL_SCENARIO_SERVICE' => 'Dienst',
    'LBL_SCENARIO_PROJECT' => 'Projectmanagement',

    'LBL_SCENARIO_SALES_DESCRIPTION'=>'Dit scenario vergemakkelijkt het beheer van verkoopartikelen',
    'LBL_SCENARIO_MAKETING_DESCRIPTION'=>'Dit scenario vergemakkelijkt het beheer van marketing artikelen',
    'LBL_SCENARIO_FINANCE_DESCRIPTION'=>'Dit scenario vergemakkelijkt het beheer van Financiën aanverwante artikelen',
    'LBL_SCENARIO_SERVICE_DESCRIPTION'=>'Dit scenario vergemakkelijkt het beheer van dienst aanverwante artikelen',
    'LBL_SCENARIO_PROJECT_DESCRIPTION'=>'Dit scenario vergamekelijkt het beheer van aan het project aanverwante items',

    'LBL_SYNC' => 'Synchroniseer',
    'LBL_TABGROUP_ALL' => 'Alles',
    'LBL_TABGROUP_ACTIVITIES' => 'Activiteiten',
    'LBL_TABGROUP_COLLABORATION' => 'Samenwerking',
    'LBL_TABGROUP_HOME' => 'Start',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Mijn portaal',
    'LBL_TABGROUP_OTHER' => 'Anders',
    'LBL_TABGROUP_REPORTS' => 'Rapportages',
    'LBL_TABGROUP_SALES' => 'Verkopen',
    'LBL_TABGROUP_SUPPORT' => 'Ondersteuning',
    'LBL_TABGROUP_TOOLS' => 'Gereedschappen',
    'LBL_TASKS' => 'Taken',
    'LBL_TEAMS_LINK' => 'Team',
    'LBL_THEME_COLOR' => 'Kleur',
    'LBL_THEME_FONT' => 'Lettertype',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-mail archiveren',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-mail archiveren',
    'LBL_UNAUTH_ADMIN' => 'Ongeauthoriseerde toegang tot configuratie',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Verwijderen ongedaan maken',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Verwijderen ongedaan maken',
    'LBL_UNDELETE_BUTTON' => 'Verwijderen ongedaan maken',
    'LBL_UNDELETE' => 'Verwijderen ongedaan maken',
    'LBL_UNSYNC' => 'Niet Synchroniseren',
    'LBL_UPDATE' => 'Bijwerken',
    'LBL_USER_LIST' => 'Gebruikers',
    'LBL_USERS_SYNC' => 'Gebruiker synchroniseren',
    'LBL_USERS' => 'Gebruikers',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Kijken of emailadres bestaat...',
    'LBL_VERIFY_PORTAL_NAME' => 'Kijken of portal naam bestaat...',
    'LBL_VIEW_IMAGE' => 'Toon',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Opslaan als PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Opslaan als PDF',

    'LNK_ABOUT' => 'Over ons',
    'LNK_ADVANCED_FILTER' => 'Geavanceerd filter',
    'LNK_BASIC_FILTER' => 'Snelfilter',
    'LBL_ADVANCED_SEARCH' => 'Geavanceerd filter',
    'LBL_QUICK_FILTER' => 'Snelfilter',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Toona alle resultaten',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Toon alles',
    'LNK_CLOSE' => 'Sluiten',
    'LBL_MODIFY_CURRENT_SEARCH' => 'Huidig filter wijzigen',
    'LBL_MODIFY_CURRENT_FILTER' => 'Huidig filter wijzigen',
    'LNK_SAVED_VIEWS' => 'Opgeslagen zoekopdracht & layout',
    'LNK_DELETE_ALL' => 'Alles verwijderen',
    'LNK_DELETE' => 'Verwijder',
    'LNK_EDIT' => 'Bewerken',
    'LNK_GET_LATEST' => 'Haal nieuwste',
    'LNK_GET_LATEST_TOOLTIP' => 'Vervang met laatste versie',
    'LNK_HELP' => 'Hulp',
    'LNK_CREATE' => 'Nieuw',
    'LNK_LIST_END' => 'Einde',
    'LNK_LIST_NEXT' => 'Volgende',
    'LNK_LIST_PREVIOUS' => 'Vorige',
    'LNK_LIST_RETURN' => 'Ga terug naar de lijst',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED' => 'Teken',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Vervang met ondertekend document',
    'LNK_PRINT' => 'Afdrukken',
    'LNK_BACKTOTOP' => 'Terug naar boven',
    'LNK_REMOVE' => 'Verwijderen',
    'LNK_RESUME' => 'Vervolg',
    'LNK_VIEW_CHANGE_LOG' => 'Bekijk wijzigings log',

    'NTC_CLICK_BACK' => 'Klikt u a.u.b. op de [terug] knop in uw browser en los het probleem op.',
    'NTC_DATE_FORMAT' => '(jjjj-mm-dd 24:00)',
    'NTC_DATE_TIME_FORMAT' => '(jjjj-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Weet je zeker dat je de geselecteerde records wilt verwijderen?',
    'NTC_TEMPLATE_IS_USED' => 'Het sjabloon wordt gebruikt in ten minste één e-mail marketing. Weet u zeker dat u het wilt verwijderen?',
    'NTC_TEMPLATES_IS_USED' => 'De volgende sjablonen worden gebruikt in e-mail marketing records. Ben je zeker dat je ze wilt verwijderen?',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Weet u zeker dat u deze items wilt verwijderen?',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Weet u zeker dat u deze items wilt updaten?',
    'NTC_DELETE_SELECTED_RECORDS' => 'Geselecteerde record(s)',
    'NTC_LOGIN_MESSAGE' => 'Eerst inloggen a.u.b.',
    'NTC_NO_ITEMS_DISPLAY' => 'geen',
    'NTC_REMOVE_CONFIRMATION' => 'Weet je zeker dat je deze Relatie wilt verwijderen?',
    'NTC_REQUIRED' => 'Geeft een verplicht veld aan',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Welkom',
    'NTC_YEAR_FORMAT' => '(jjjj)',
    'LOGIN_LOGO_ERROR' => 'Gelieve de SuiteCRM logos te vervangen.',
    'WARN_ONLY_ADMINS' => 'Alleen beheerders kunnen inloggen.',
    'WARN_UNSAVED_CHANGES' => 'U staat op het punt dit record te verlaten zonder de wijzigingen op te slaan die u heeft gemaakt bij dit record. Bent u zeker dat u weg wilt navigeren van deze pagina?',
    'ERROR_NO_RECORD' => 'Fout bij ophalen van record. De record bestaat niet, of u heeft geen toegang.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Waarschuwing:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 24.0<li>Safari 5.1<li>Chrome 29</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Waarschuwing:</b> Your browser is in IE compatibility view which is not supported.',
    'ERROR_TYPE_NOT_VALID' => 'Fout. Dit type is niet geldig.',
    'ERROR_NO_BEAN' => 'Mislukt om een bean te krijgen.',
    'LBL_DUP_MERGE' => 'Vind duplicaten',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Aanmeldingen beheren',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Aanmeldingen beheren voor ',
    'LBL_SUBSCRIBE' => 'Aanmelden',
    'LBL_UNSUBSCRIBE' => 'Afmelden',
    // Ajax status strings
    'LBL_LOADING' => 'Laden ...',
    'LBL_SEARCHING' => 'Zoeken...',
    'LBL_SAVING_LAYOUT' => 'Layout opslaan ...',
    'LBL_SAVED_LAYOUT' => 'Layout is opgeslagen.',
    'LBL_SAVED' => 'Opgeslagen',
    'LBL_SAVING' => 'Opslaan ...',
    'LBL_FAILED' => 'Mislukt!',
    'LBL_DISPLAY_COLUMNS' => 'Kolommen weergeven',
    'LBL_HIDE_COLUMNS' => 'Kolommen verbergen',
    'LBL_SEARCH_CRITERIA' => 'Zoekcriteria',
    'LBL_SAVED_VIEWS' => 'Opgeslagen views',
    'LBL_PROCESSING_REQUEST' => 'Verwerken ...',
    'LBL_REQUEST_PROCESSED' => 'Klaar',
    'LBL_AJAX_FAILURE' => 'Ajax programma fout',
    'LBL_MERGE_DUPLICATES' => 'Duplicaten samenvoegen',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Mijn Filters',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mijn Filters',
    'LBL_SEARCH_POPULATE_ONLY' => 'Voer een zoekopdracht uit met bovenstaand formulier',
    'LBL_DETAILVIEW' => 'Detail view',
    'LBL_LISTVIEW' => 'Lijst view',
    'LBL_EDITVIEW' => 'Wijzigings view',
    'LBL_SEARCHFORM' => 'Zoeken',
    'LBL_SAVED_SEARCH_ERROR' => 'Geef alstublieft een naam voor deze view.',
    'LBL_DISPLAY_LOG' => 'Laat log zien',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Configuratie',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessie timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Uw sessie zal over 2 minuten verlopen! Sla a.u.b. uw werk op.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Uw sessie is verlopen',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Afspraak',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Telefoongesprek',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Tijd: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Locatie: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Omschrijving: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Gerelateerd aan: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "Klik op OK om deze oproep te bekijken of klik op Annuleren om dit bericht te negeren.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Klik op OK om deze afspraak te bekijken of klik op Annuleren om dit bericht te negeren.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evenement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Gebeurtenis is niet ingesteld.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Locatie niet ingesteld.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start datum onbekend.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Geen resultaten gevonden.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Geen resultaten gevonden... Misschien verander uw zoekcriteria en probeer het opnieuw?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Geen resultaat gevonden voor <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Aanmaken <item1> als een nieuw <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'of wijzig uw zoekcriteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'U heeft op dit moment geen records opgeslagen. <item2> of <item3> een nu.',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' => '<item4> om meer te weten te komen over <item1> module. Ga naar het help menu.',

    'LBL_CLICK_HERE' => 'Klik hier',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Toevoegen aan mijn favorieten',
    'LBL_MARK_AS_FAVORITES' => 'Markeren als favoriet',
    'LBL_CREATE_CONTACT' => 'Nieuw contactpersoon',
    'LBL_CREATE_CASE' => 'Nieuw dosssier',
    'LBL_CREATE_NOTE' => 'Nieuwe notitie',
    'LBL_CREATE_OPPORTUNITY' => 'Nieuwe kans',
    'LBL_SCHEDULE_CALL' => 'Telefoongesprek inplannen',
    'LBL_SCHEDULE_MEETING' => 'Vergadering plannen',
    'LBL_CREATE_TASK' => 'Nieuwe taak',
    'LBL_REMOVE_FROM_FAVORITES' => 'Verwijderen van mijn favorieten',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Genereer formulier',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Webformulier opslaan',
    'LBL_AVAILABLE_FIELDS'=>'Bechikbare velden',
    'LBL_FIRST_FORM_COLUMN'=>'Eerste kolom van de vorm',
    'LBL_SECOND_FORM_COLUMN'=>'Tweede vorm kolom',
    'LBL_ASSIGNED_TO_REQUIRED'=>'Verplicht veld ontbreekt: Toegewezen aan',
    'LBL_RELATED_CAMPAIGN_REQUIRED'=>'Verplicht veld ontbreekt: Gerelateerde Campagne',
    'LBL_TYPE_OF_PERSON_FOR_FORM'=>'Webformulier maken ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC'=>'Als je dit formulier verzend, zal het gemaakt worden ',

    'LBL_PLEASE_SELECT' => 'Selecteer a.u.b.',
    'LBL_REDIRECT_URL' => 'Omleidings-URL',
    'LBL_RELATED_CAMPAIGN' => 'Gerelateerde campagne',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Alle velden toevoegen',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset alle velden',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Verwijder alle velden',
    'LBL_NEXT_BTN' => 'Volgend',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Alleen afbeeldingen kunnen worden ingevoegd',
    'LBL_TRAINING' => 'Ondersteuningsforum',
    'ERR_DATABASE_CONN_DROPPED' => 'Fout bij het uitvoeren de query. Mogelijk heeft uw database de connectie verbroken. Vernieuw deze pagina, mogelijk moet je webserver opnieuw worden opgestart.',
    'ERR_MSSQL_DB_CONTEXT' => 'Database context is veranderd naar',
    'ERR_MSSQL_WARNING' => 'Waarschuwing:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Waarschuwing: veld [[field]] heeft een toegewezen vermelding niet in het [moduleDir] vardefs.php bestand',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Fout: Bestand [[file]] ontbreekt.  Kan het niet maken omdat er geen overeenkomstige HTML-bestand is gevonden.',
    'ERR_CANNOT_FIND_MODULE' => 'Fout: Module [module] bestaat niet.',
    'LBL_ALT_ADDRESS' => 'Alt. adres:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Fout: Er zijn een ongelijk aantal elementen van het \'key\' en \'copy\' in het displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Ontbrekende index in displayParams Array voor: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Algemeen',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Alleen mijn items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Toon rijen',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Nieuwe pagina maken ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'U heeft een nieuwe pagina aangemaakt. Voeg inhoud toe met de optie "Dashlet toevoegen" in het menu.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Weet u zeker dat u deze pagina wilt verwijderen?',
    'LBL_SAVING_PAGE_TITLE' => 'Pagina titel opslaan ...',
    'LBL_RETRIEVING_PAGE' => 'Pagina ophalen ...',
    'LBL_MAX_DASHLETS_REACHED' => 'U heeft het maximaal aantal Dashlets door de administrator vastgesteld bereikt. Verwijder een Dashlet alvorens een nieuwe toe te voegen.',
    'LBL_ADDING_DASHLET' => 'Bezig met het toevoegen van een SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet toegevoegd',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Weet u zeker dat u deze SuiteCRM Dashlet wilt verwijderen?',
    'LBL_REMOVING_DASHLET' => 'Bezig met het verwijderen van een SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Verwijderd',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Pagina toevoegen',
    'LBL_DELETE_PAGE' => 'Pagina verwijderen',
    'LBL_CHANGE_LAYOUT' => 'Verander indeling',
    'LBL_RENAME_PAGE' => 'Pagina hernoemen',

    'LBL_LOADING_PAGE' => 'Pagina wordt geladen, een moment...',

    'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()">Vernieuw dit scherm</a> om deze SuiteCRM Dashlet te gebruiken.',
    'LBL_ADD_DASHLETS' => 'Dashlet toevoegen',
    'LBL_CLOSE_DASHLETS' => 'Sluiten',
    'LBL_OPTIONS' => 'Opties',
    'LBL_NUMBER_OF_COLUMNS' => 'Klik op een icoon om het aantal kolommen te selecteren',
    'LBL_1_COLUMN' => '1 kolom',
    'LBL_2_COLUMN' => '2 kolommen',
    'LBL_3_COLUMN' => '3 kolommen',
    'LBL_PAGE_NAME' => 'Pagina naam',

    'LBL_SEARCH_RESULTS' => 'Zoekresultaten',
    'LBL_SEARCH_MODULES' => 'Modulen',
    'LBL_SEARCH_CHARTS' => 'Grafieken',
    'LBL_SEARCH_REPORT_CHARTS' => 'Rapportage grafieken',
    'LBL_SEARCH_TOOLS' => 'Gereedschappen',
    'LBL_SEARCH_HELP_TITLE' => 'Zoek Tips',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Sluiten',
    'LBL_SEARCH_RESULTS_FOUND' => 'Het zoeken heeft geen resultaten opgeleverd',
    'LBL_SEARCH_RESULTS_TIME' => 'Mevr.',
    'ERR_BLANK_PAGE_NAME' => 'Vul aub een pagina naam in.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Geen afbeelding',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopieer adres van links:',
    'LBL_SAVE_AND_CONTINUE' => 'Opslaan en doorgaan',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Klik op de waarden om een attribuut te selecteren.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad.  For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Fout: Query limiet van $limit gehaald voor $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Fout: ResourceObserver->notify() moet overschreven worden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Fout: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Fout: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Fout: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Fout: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor ID',
    'LBL_USER_ID' => 'Gebruiker ID',
    'LBL_MODULE_NAME' => 'Module naam',
    'LBL_ITEM_ID' => 'Item ID',
    'LBL_ITEM_SUMMARY' => 'Item samenvatting',
    'LBL_ACTION' => 'Actie',
    'LBL_SESSION_ID' => 'Sessie ID',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack gemaakt voor de user-id {0}',
    'LBL_VISIBLE' => 'Record zichtbaar',
    'LBL_DATE_LAST_ACTION' => 'Datum van laatste aktie',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is niet voor',
    'MSG_IS_MORE_THAN' => 'is groter dan',
    'MSG_IS_LESS_THAN' => 'is minder dan',
    'MSG_SHOULD_BE' => 'moet zijn',
    'MSG_OR_GREATER' => 'of groter',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welkom bij SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is een framework dat geeft real-time inzage in dossiers, bugs & nieuwsbrieven etc. aan klanten. Dit is een externe interface voor SuiteCRM die kan worden gebruikt in iedere website.',
    'LBL_LIST' => 'Lijst',
    'LBL_CREATE_BUG' => 'Nieuwe bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 records gevonden -',

    'DATA_TYPE_DUE' => 'Vervalt:',
    'DATA_TYPE_START' => 'Start:',
    'DATA_TYPE_SENT' => 'Verzonden:',
    'DATA_TYPE_MODIFIED' => 'Gewijzigd:',

    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Tellen',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'Afbeeling object',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Selecteer datum',

    'LBL_VALIDATE_RANGE' => 'valt niet binnen het geldige bereik',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Kies a.u.b. een start en eind datum binnen het bereik',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Kies a.u.b. een start en eind bereik',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Alles',

    'LBL_OPERATOR_IN_TEXT' => 'is een van de volgende:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'is niet een van de volgende:',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Fout: De Array count van de bean parameter komt niet overeen met de Array count van het resultaat.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Fout: Ontbrekende mapping ingave van de module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Fout: Kan geen gegevens voor connector {0} binnen halen. De service is momenteel niet toegankelijk of de configuratie-instellingen zijn ongeldig. Connector foutmelding: ({1}).',
    'LBL_MERGE_CONNECTORS' => 'Gegevens ophalen',
    'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
    'LBL_REMOVE_MODULE_ENTRY' => 'Weet u zeker dat u de connector integratie wilt uitschakelen voor deze module?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Voor optimale gebruik met IIS / FastCGI sapi, stel fastcgi.logging in op 0 in het php.ini bestand.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Sorry, kan  het global team niet verwijderen Annuleren',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Dit privé team [{0}] kan niet verwijderd worden totdat gebruiker [{1}] is verwijderd. ',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'U heeft Abobe Flash uitgeschakeld of maakt gebruik van een oudere versie van de Adobe Flash Player. Om de meest recente versie van de Flash Player te downloaden,   <a href=\\"http://www.adobe.com/go/getflashplayer/\\">klik hier</a>',
    //Collection Field
    'LBL_COLLECTION_NAME' => 'Naam',
    'LBL_COLLECTION_PRIMARY' => 'Primaire',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Leeg verplicht veld',
    'LBL_COLLECTION_EXACT' => 'Exact',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_DESCRIPTION' => 'Omschrijving',

    'LBL_YESTERDAY' => 'gisteren',
    'LBL_TODAY' => 'vandaag',
    'LBL_TOMORROW' => 'morgen',
    'LBL_NEXT_WEEK' => 'volgende week',
    'LBL_NEXT_MONDAY' => 'volgende week maandag',
    'LBL_NEXT_FRIDAY' => 'volgende week vrijdag',
    'LBL_TWO_WEEKS' => 'twee weken',
    'LBL_NEXT_MONTH' => 'volgende maand',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'eerste dag van volgende maand',
    'LBL_THREE_MONTHS' => 'drie maanden',
    'LBL_SIXMONTHS' => 'zes maanden',
    'LBL_NEXT_YEAR' => 'volgend jaar',
    'LBL_FILTERED' => 'Gefilterd',

    //Datetimecombo fields
    'LBL_HOURS' => 'Uren',
    'LBL_MINUTES' => 'Minuten',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Datum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatisch verversen',

    'LBL_DURATION_DAY' => 'dag',
    'LBL_DURATION_HOUR' => 'uur',
    'LBL_DURATION_MINUTE' => 'minuut',
    'LBL_DURATION_DAYS' => 'dagen',
    'LBL_DURATION_HOURS' => 'uren',
    'LBL_DURATION_MINUTES' => 'minuten',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Kies maand',
    'LBL_ENTER_YEAR' => 'Voer jaar in',
    'LBL_ENTER_VALID_YEAR' => 'Voer a.u.b. een geldig jaar in',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Voer een numerieke Amerikaans telefoonnummer in, inclusief netnummer.',

    //File write error label
    'ERR_FILE_WRITE' => 'Fout: Kon niet schrijven naar bestand {0}. Controlleer systeem en webserver permissies.',
    'ERR_FILE_NOT_FOUND' => 'Fout: Kon bestand niet laden {0}. Controlleer systeem en webserver permissies.',

    'LBL_AND' => 'En',
    'LBL_BEFORE' => 'Voor',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Uploaden van uw computer',
    'LBL_SEARCH_EXTERNAL_API' => 'Bestand op externe bron',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Beveiliging',
    'LBL_SHARE_PRIVATE' => 'Prive',
    'LBL_SHARE_COMPANY' => 'Bedrijf',
    'LBL_SHARE_LINKABLE' => 'Koppelbaar',
    'LBL_SHARE_PUBLIC' => 'Openbare',

    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS-Feed',
    'LBL_RSS_RECORDS_FOUND' => 'record (s) gevonden',
    'ERR_RSS_INVALID_INPUT' => 'RSS is geen geldige input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS is geen geldige response_type voor deze methode',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs biedt geen ondersteuning voor de bestandsindeling die u verstrekt.',

    'LBL_EMPTY' => 'Leeg',
    'LBL_IS_EMPTY' => 'Is leeg',
    'LBL_IS_NOT_EMPTY' => 'Is niet leeg',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Dit is een voorbeeld import bestand dat een voorbeeld van de te verwachten inhoud van een bestand dat klaar is voor import"."Het bestand is een door komma\'s gescheiden CSV-bestand, met behulp van aanhalingstekens als de veld qualifier."

"De kopregel is de bovenste rij in het bestand en bevat de veld labels zoals u ze zou zien in de toepassing."
"Deze labels worden gebruikt voor het mappen van de gegevens in het bestand naar de velden in de applicatie."

"Opmerkingen: De database namen kunnen ook worden gebruikt in de kopregel Dit is handig wanneer u gebruik maakt van phpMyAdmin of een andere database tool om een geëxporteerde lijst met gegevens te importeren."
"De kolom volgorde is niet belangrijk omdat het import proces de gegevens naar de juiste velden matched op basis van de kopregel."


"Om dit bestand te gebruiken als een sjabloon, doet u het volgende:"
"1. Verwijder de voorbeeld rijen met gegevens"
"2. Verwijder de hulp tekst die u nu leest."
"3. Voer uw eigen gegevens in de juiste rijen en.. kolommen"
"4. Sla het bestand op een bekende locatie op uw systeem "
"5. Klik op de importeren optie in het menu Acties in de toepassing en kies het bestand om te uploaden"   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen aan',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen gebruiker',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Rapporteert aan ID',
    'LBL_EXPORT_FULL_NAME' => 'Volledige naam',
    'LBL_EXPORT_TEAM_ID' => 'Team Id',
    'LBL_EXPORT_TEAM_NAME' => 'Team',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set Id',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigeren... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Notificaties',
    'LBL_NOTIFICATIONS_NONE' => 'Er zijn geen huidige notificaties',
    'LBL_ALT_ADD_TEAM_ROW' => 'Voeg een nieuwe team regel toe',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Verwijder team',
    'LBL_ALT_SPOT_SEARCH' => 'Spot zoeken',
    'LBL_ALT_SORT_DESC' => 'Sorteer aflopend',
    'LBL_ALT_SORT_ASC' => 'Sorteer oplopend',
    'LBL_ALT_SORT' => 'Sorteer',
    'LBL_ALT_SHOW_OPTIONS' => 'Toon opties',
    'LBL_ALT_HIDE_OPTIONS' => 'Verberg opties',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Verplaats geselecteerde item naar de rechter lijst',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Verplaats geselecteerde item naar de linker lijst',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Verplaats geselecteerde item omhoog in de getoonde lijst volgorde',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Verplaats geselecteerde item omlaag in de getoonde lijst volgorde',
    'LBL_ALT_INFO' => 'Informatie',
    'MSG_DUPLICATE' => 'De {0} record die u gaat maken creëert misschien een duplicaat van een {0} record dat al bestaat. {1} records met vergelijkbare namen worden hieronder vermeld. Klik op {1} om door te gaan het creëren van deze nieuwe {0}, of selecteer een bestaande {0} hieronder vermeld.',
    'MSG_SHOW_DUPLICATES' => 'De {0} record die u gaat maken creëert misschien een duplicaat van een {0} record dat al bestaat. {1} records met vergelijkbare namen worden hieronder vermeld. Klik op Opslaan om door te gaan het creëren van deze nieuwe {0}, of klik op Annuleer om terug te keren naar de module zonder de {0} te creëren.',
    'LBL_EMAIL_TITLE' => 'e-mail adres',
    'LBL_EMAIL_OPT_TITLE' => 'opt out email adres',
    'LBL_EMAIL_INV_TITLE' => 'ongeldig email adres',
    'LBL_EMAIL_PRIM_TITLE' => 'primair email adres',
    'LBL_SELECT_ALL_TITLE' => 'Selecteer alles',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Selecteer deze rij',
    'LBL_TEAM_SELECTED_TITLE' => 'Team geselecteerd ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Selecteer om dit team primair te maken',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'Fout: Er was een fout tijden het uploaden. Fout code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Fout: Er was een fout tijden het uploaden. Fout code: {0} - {1}. De upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'Fout: Er was een fout tijden het uploaden, neem kontakt op met de beheerder voor help.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Grote van de upload ({0} bytes) overtreft het toegestane maximum: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'Er is een fout opgetreden. Ververs de pagana (F5) en probeer het opnieuw.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Bewerk',
    'LBL_EDIT_BUTTON_TITLE' => 'Bewerk',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dupliceren',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dupliceren',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Verwijderen',
    'LBL_DELETE_BUTTON_TITLE' => 'Verwijder',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Bulk actie', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Actie', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Opslaan',
    'LBL_SAVE_BUTTON_TITLE' => 'Opslaan',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annuleren',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annuleren',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Keyboard Snelkoppelingen',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Formulier funtionaliteit - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector matrix in {0} zijn onjuist gedefinieerd of leeg en kan niet gebruikt worden.',
    'ERR_SUHOSIN' => 'Upload stream wordt geblokkeerd door Suhosin, voeg alstublieft &quot;upload&quot; aan suhosin.executor.include.whitelist (Zie suitecrm.log voor meer informatie)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Slechte reactie van de server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Offerte',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Unit',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Handmatig',
        '5' => 'Iedere 5 minuten',
        '15' => 'Elke 15 minuten',
        '30' => 'Elke 30 minuten',
        '60' => 'Elk uur',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Een herinnering is leeg of niet correct.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Herinnering is niet ingesteld voor een popup of email',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Geen genodigden voor herinnering',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Herinnering omvat niet alle genodigden, wilt u de herinnering verwijderen?',
    'LBL_DELETE_REMINDER' => 'Herinnering verwijderen',
    'LBL_OK' => 'Oké',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Kies kolommen',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Wijzigingen opslaan',
    'LBL_DISPLAYED' => 'Weergegeven',
    'LBL_HIDDEN' => 'Verborgen',
    'ERR_EMPTY_COLUMNS_LIST' => 'In ieder geval één element vereist',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',
    'LBL_SEARCH_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Categorie',
    'LBL_LIST_CATEGORY' => 'Categorie',

);

$app_list_strings['moduleList']['Library'] = 'Bibliotheek';
$app_list_strings['library_type'] = array('Books' => 'Boek', 'Music' => 'Muziek', 'DVD' => 'DVD', 'Magazines' => 'Tijdschrift');
$app_list_strings['moduleList']['EmailAddresses'] = 'E-mailadres';
$app_list_strings['project_priority_default'] = 'Gemiddeld';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Hoog',
    'Medium' => 'Gemiddeld',
    'Low' => 'Laag',
);

$app_list_strings['kbdocument_status_dom'] = array(
    'Draft' => 'Ontwerp',
    'Expired' => 'Verlopen',
    'In Review' => 'Wacht op review',
    'Published' => 'Gepubliceerd',
);

$app_list_strings['kbadmin_actions_dom'] =
    array(
        '' => '--Admin acties--',
        'Create New Tag' => 'Nieuwe tag',
        'Delete Tag' => 'Verwijder tag',
        'Rename Tag' => 'Hernoem tag',
        'Move Selected Articles' => 'Verplaats geselecteerde artikelen',
        'Apply Tags On Articles' => 'Tags op artikelen toepassen',
        'Delete Selected Articles' => 'Verwijder geselecteerde artikelen',
    );

$app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        '' => '',
        'some' => 'Bevat attachments',
        'none' => 'None',
        'mime' => 'Specificeer MIME type',
        'name' => 'Specificeer naam',
    );

$app_list_strings['moduleList']['KBDocuments'] = 'Kennisbank';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Maak artikel';
$app_list_strings['kbdocument_viewing_frequency_dom'] =
    array(
        '' => '',
        'Top_5' => 'Top 5',
        'Top_10' => 'Top 10',
        'Top_20' => 'Top 20',
        'Bot_5' => 'Laatste 5',
        'Bot_10' => 'Laatste 10',
        'Bot_20' => 'Laatste 20',
    );

$app_list_strings['kbdocument_canned_search'] =
    array(
        'all' => 'Alle',
        'added' => 'Toegevoegd in de laatste 30 dagen',
        'pending' => 'Wachtend op mijn goedkeuring',
        'updated' => 'Gewijzigd in de laatste 30 dagen',
        'faqs' => 'Veelgestelde vragen',
    );
$app_list_strings['kbdocument_date_filter_options'] =
    array(
        '' => '',
        'on' => 'Aan ',
        'before' => 'Voor',
        'after' => 'Na',
        'between_dates' => 'Is tussen',
        'last_7_days' => 'Laaste 7 dagen',
        'next_7_days' => 'Volgende 7 dagen',
        'last_month' => 'Laaste maand',
        'this_month' => 'Deze maand',
        'next_month' => 'Volgende maand',
        'last_30_days' => 'Laaste 30 dagen',
        'next_30_days' => 'Volgende 30 dagen',
        'last_year' => 'Laaste jaar',
        'this_year' => 'Dit jaar',
        'next_year' => 'Volgend jaar',
        'isnull' => 'Is null',
    );

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'Afghanistan',
    'ALBANIA' => 'Albanië',
    'ALGERIA' => 'Algerije',
    'AMERICAN SAMOA' => 'AMERIKAANS-SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'Argentinië',
    'ARMENIA' => 'Armenië',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'Australië',
    'AUSTRIA' => 'Oostenrijk',
    'AZERBAIJAN' => 'Azerbeidzjan',
    'BAHAMAS' => 'BAHAMA \'S',
    'BAHRAIN' => 'Bahrein',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'Wit-Rusland',
    'BELGIUM' => 'Belgie',
    'BELIZE' => 'Belize',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'Bolivië',
    'BOSNIA' => 'BOSNIË',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET EILAND',
    'BRAZIL' => 'Brazilië',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITS TERRITORIUM IN ANTARCTICA',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'CANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',

    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'KROATIË',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'Tsjechische Republiek',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'Denemarken',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINICAANSE REPUBLIEK',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPTE',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAAL-GUINEA',
    'ESTONIA' => 'ESTLAND',
    'ETHIOPIA' => 'ETHIOPIË',
    'FAEROE ISLANDS' => 'FAERÖER',
    'FALKLAND ISLANDS' => 'FALKLAND EILANDEN',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANKRIJK',
    'FRENCH GUIANA' => 'FRANS-GUYANA',
    'FRENCH POLYNESIA' => 'FRANS-POLYNESIË',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIË',
    'GERMANY' => 'Duitsland',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRIEKENLAND',
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEE',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAÏTI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HONGARIJE',
    'ICELAND' => 'IJSLAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIE',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IERLAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALIE',
    'IVORY COAST' => 'IVOOR KUST',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDANIE',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'ZUID KOREA',
    'KUWAIT' => 'KOEWEIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETLAND',
    'LEBANON' => 'LIBANON',
    'LEEWARD ISLANDS' => 'LEEWARD EILANDEN',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBIË',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITOUWEN',
    'LUXEMBOURG' => 'LUXEMBURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIË',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALEISIË',
    'MALDIVES' => 'MALEDIVEN',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIË',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIË',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDAVIË',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MOGOLIË',
    'MOROCCO' => 'MAROCCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIE',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'Nederland',
    'NETHERLANDS ANTILLES' => 'NEDERLANDSE ANTILLEN',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NEDERLANDSE ANTILLEN NEUTRALE ZONE',
    'NEW CALADONIA' => 'NIEUWE CALADONIA',
    'NEW HEBRIDES' => 'NIEUWE HEBRIDEN',
    'NEW ZEALAND' => 'NIEUW-ZEELAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NOORWEGEN',
    'OMAN' => 'OMAN',
    'OTHER' => 'OVERIGE',
    'PACIFIC ISLAND' => 'PACIFIC EILAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPOEA-NIEUW-GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPPIJNEN',
    'POLAND' => 'POLEN',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'OOST-TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIEK BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIEK VAN ZUID-AFRIKA',
    'REUNION' => 'REÜNIE',
    'ROMANIA' => 'ROEMENIË',
    'RUSSIA' => 'RUSLAND',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RIUKIU-EILANDEN',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI-ARABIË',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERVIË',
    'SEYCHELLES' => 'SEYCHELLEN',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOWAKIJE',
    'SLOVENIA' => 'SLOVENIË',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'ZUID-AFRIKA',
    'SOUTH YEMEN' => 'ZUID-JEMEN',
    'SPAIN' => 'SPANJE',
    'SPANISH SAHARA' => 'SPAANSE SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS EN NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SOEDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'SW AFRIKA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'ZWEDEN',
    'SWITZERLAND' => 'ZWITSERLAND',
    'SYRIA' => 'SYRIË',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TADZJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNESIË',
    'TURKEY' => 'TURKIJE',
    'UGANDA' => 'OEGANDA',
    'UKRAINE' => 'OEKRAÏNE',
    'UNITED ARAB EMIRATES' => 'VERENIGDE ARABISCHE EMIRATEN',
    'UNITED KINGDOM' => 'VERENIGD KONINKRIJK',

    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'AMERIKAANSE PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'AMERIKAANSE MAAGDENEILANDEN',
    'USA' => 'VERENIGDE STATEN',
    'UZBEKISTAN' => 'OEZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATICAANSTAD',
    'VENEZUELA' => 'VENUZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE EILAND',
    'WEST INDIES' => 'WEST-INDIË',
    'WESTERN SAHARA' => 'WESTELIJKE SAHARA',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAÏRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan en Hongkong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Cp1251 (MS cyrillisch)',
    'CP1252' => 'CP1252 (MS West Europese & U.S.)',
    'EUC-CN' => 'EUC-CN (vereenvoudigde Chinees GB2312)',
    'EUC-JP' => 'EUC-JP (Japans Unix)',
    'EUC-KR' => 'EUC-KR (Koreaans)',
    'EUC-TW' => 'EUC-TW (Taiwanees)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japans)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreaans)',
    'ISO-8859-1' => 'ISO-8859-1 (West-Europees en VS)',
    'ISO-8859-2' => 'ISO-8859-2 (Centraal- en Oost-Europese)',
    'ISO-8859-3' => 'ISO-8859-3 (Latijn 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latijnse 4)',
    'ISO-8859-5' => 'ISO-8859-5 (cyrillisch)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabisch)',
    'ISO-8859-7' => 'ISO-8859-7 (Grieks)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebreeuws)',
    'ISO-8859-9' => 'ISO-8859-9 (Latijn 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latijnse 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latijnse 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latijnse 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latijnse 9)',
    'KOI8-R' => 'KOI8-R (Cyrillisch Russisch)',
    'KOI8-U' => 'KOI8-U (Cyrillisch Oekraine)',
    'SJIS' => 'SJIS (MS Japans)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Algiers',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Kaapverdië',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/Ndjamena',
    'Indian/Comoro' => 'Indische/Comorese',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazzaville',
    'Africa/Abidjan' => 'Afrika/Abidjan',
    'Africa/Djibouti' => 'Afrika/Djiboutiaanse',
    'Africa/Cairo' => 'Afrika/Cairo',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Asmera',
    'Africa/Addis_Ababa' => 'Afrika/Addis Abeba',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Banjul' => 'Afrika/Banjul',
    'Africa/Accra' => 'Afrika/Accra',
    'Africa/Conakry' => 'Afrika/Conakry',
    'Africa/Bissau' => 'Afrika/Bissau',
    'Africa/Nairobi' => 'Afrika/Nairobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'Indische/Antananarivo',
    'Africa/Blantyre' => 'Afrika/Blantyre',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nouakchott',
    'Indian/Mauritius' => 'Indische/Mauritiaanse',
    'Indian/Mayotte' => 'Indische/Mayotte',
    'Africa/Casablanca' => 'Afrika/Casablanca',
    'Africa/El_Aaiun' => 'Afrika/El Aaiún',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Windhoek' => 'Afrika/Windhoek',
    'Africa/Niamey' => 'Afrika/Niamey',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Indian/Reunion' => 'Indische/reünie',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Atlantic/St_Helena' => 'ATLANTIC/ST.HELENA',
    'Africa/Sao_Tome' => 'Afrika/Sao Tome',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'Indische/Mahe',
    'Africa/Freetown' => 'Afrika/Freetown',
    'Africa/Mogadishu' => 'Afrika/Mogadishu',
    'Africa/Johannesburg' => 'Afrika/Johannesburg',
    'Africa/Khartoum' => 'Afrika/Khartoum',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar es Salaam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunesie',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indische/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/Dumont Durville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Azië/Kabul',
    'Asia/Yerevan' => 'Azië/Yerevan',
    'Asia/Baku' => 'Azië/Bakoe',
    'Asia/Bahrain' => 'Azië/Bahrein',
    'Asia/Dhaka' => 'Azië/Dhaka',
    'Asia/Thimphu' => 'Azië/Thimphu',
    'Indian/Chagos' => 'India/Chagos',
    'Asia/Brunei' => 'Azië/Brunei',
    'Asia/Rangoon' => 'Azië/Rangoon',
    'Asia/Phnom_Penh' => 'Azië/Phnom Penh',
    'Asia/Beijing' => 'Azië/Beijing',
    'Asia/Harbin' => 'Azië/Harbin',
    'Asia/Shanghai' => 'Azië/Shanghai',
    'Asia/Chongqing' => 'Azië/Chongqing',
    'Asia/Urumqi' => 'Azië/Urumqi',
    'Asia/Kashgar' => 'Azië/Kashgar',
    'Asia/Hong_Kong' => 'Azië/Hong Kong',
    'Asia/Taipei' => 'Azië/Taipei',
    'Asia/Macau' => 'Azië/Macau',
    'Asia/Nicosia' => 'Azië/Nicosia',
    'Asia/Tbilisi' => 'Azië/Tbilisi',
    'Asia/Dili' => 'Azië/Dili',
    'Asia/Calcutta' => 'Azië/Calcutta',
    'Asia/Jakarta' => 'Azië/Jakarta',
    'Asia/Pontianak' => 'Azië/Pontianak',
    'Asia/Makassar' => 'Azië/Makassar',
    'Asia/Jayapura' => 'Azië/Jayapura',
    'Asia/Tehran' => 'Azië/Teheran',
    'Asia/Baghdad' => 'Azië/Bagdad',
    'Asia/Jerusalem' => 'Azië/Jeruzalem',
    'Asia/Tokyo' => 'Azië/Tokyo',
    'Asia/Amman' => 'Azië/Amman',
    'Asia/Almaty' => 'Azië/Almaty',
    'Asia/Qyzylorda' => 'Azië/Qyzylorda',
    'Asia/Aqtobe' => 'Azië/Aqtobe',
    'Asia/Aqtau' => 'Azië/Aqtau',
    'Asia/Oral' => 'Azië/Oral',
    'Asia/Bishkek' => 'Azië/Bisjkek',
    'Asia/Seoul' => 'Azië/Seoul',
    'Asia/Pyongyang' => 'Azië/Pyongyang',
    'Asia/Kuwait' => 'Azië/Koeweit',
    'Asia/Vientiane' => 'Azië/Vientiane',
    'Asia/Beirut' => 'Azië/Beiroet',
    'Asia/Kuala_Lumpur' => 'Azië/Kuala Lumpur',
    'Asia/Kuching' => 'Azië/Kuching',
    'Indian/Maldives' => 'Indische/Maldiven',
    'Asia/Hovd' => 'Azië/Hovd',
    'Asia/Ulaanbaatar' => 'Azië/Ulaanbaatar',
    'Asia/Choibalsan' => 'Azië/Tsjojbalsan',
    'Asia/Katmandu' => 'Azië/Katmandu',
    'Asia/Muscat' => 'Azië/Muscat',
    'Asia/Karachi' => 'Azië/Karachi',
    'Asia/Gaza' => 'Azië/Gaza',
    'Asia/Manila' => 'Azië/Manilla',
    'Asia/Qatar' => 'Azië/Qatar',
    'Asia/Riyadh' => 'Azië/Riyadh',
    'Asia/Singapore' => 'Azië/Singapore',
    'Asia/Colombo' => 'Azië/Colombo',
    'Asia/Damascus' => 'Azië/Damascus',
    'Asia/Dushanbe' => 'Azië/Dushanbe',
    'Asia/Bangkok' => 'Azië/Bangkok',
    'Asia/Ashgabat' => 'Azië/Ashgabat',
    'Asia/Dubai' => 'Azië/Dubai',
    'Asia/Samarkand' => 'Azië/Samarkand',
    'Asia/Tashkent' => 'Azië/Tasjkent',
    'Asia/Saigon' => 'Azië/Saigon',
    'Asia/Aden' => 'Azië/Aden',
    'Australia/Darwin' => 'Australië/Darwin',
    'Australia/Perth' => 'Australië/Perth',
    'Australia/Brisbane' => 'Australië/Brisbane',
    'Australia/Lindeman' => 'Australië/Lindeman',
    'Australia/Adelaide' => 'Australië/Adelaide',
    'Australia/Hobart' => 'Australië/Hobart',
    'Australia/Currie' => 'Australië/Currie',
    'Australia/Melbourne' => 'Australië/Melbourne',
    'Australia/Sydney' => 'Australië/Sydney',
    'Australia/Broken_Hill' => 'Australië/Broken Hill',
    'Indian/Christmas' => 'India/Kerst',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'India/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Europa/London',
    'Europe/Dublin' => 'Europa/Dublin',
    'WET' => 'NAT',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tirane',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Wenen',
    'Europe/Minsk' => 'Europa/Minsk',
    'Europe/Brussels' => 'Europa/Brussel',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Praag',
    'Europe/Copenhagen' => 'Europa/Kopenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
    'America/Scoresbysund' => 'Amerika/Scoresbysund',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Thule' => 'Amerika/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Parijs',
    'Europe/Berlin' => 'Europa/Berlijn',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Athens' => 'Europa/Athene',
    'Europe/Budapest' => 'Europa/Boedapest',
    'Atlantic/Reykjavik' => 'Atlantisch/Reykjavik',
    'Europe/Rome' => 'Europa/Rome',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Luxemburg',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Chisinau',
    'Europe/Monaco' => 'Europa/Monaco',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europa/Warschau',
    'Europe/Lisbon' => 'Europa/Lissabon',
    'Atlantic/Azores' => 'Atlantisch/Azoren',
    'Atlantic/Madeira' => 'Atlantisch/Madeira',
    'Europe/Bucharest' => 'Europa/Bucharest',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Moskou',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Azië/Jekaterinenburg',
    'Asia/Omsk' => 'Azië/Omsk',
    'Asia/Novosibirsk' => 'Azië/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Azië/Krasnojarsk',
    'Asia/Irkutsk' => 'Azië/Irkoetsk',
    'Asia/Yakutsk' => 'Azië/Yakutsk',
    'Asia/Vladivostok' => 'Azië/Vladivostok',
    'Asia/Sakhalin' => 'Azië/Sachalin',
    'Asia/Magadan' => 'Azië/Magadan',
    'Asia/Kamchatka' => 'Azië/Kamtsjatka',
    'Asia/Anadyr' => 'Azië/Anadyr',
    'Europe/Belgrade' => 'Europa/Belgrado',
    'Europe/Madrid' => 'Europa/Madrid',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlantisch/Canarische',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurich',
    'Europe/Istanbul' => 'Europa/Istanbul',
    'Europe/Kiev' => 'Europa/Kiev',
    'Europe/Uzhgorod' => 'Europa/Oezjhorod',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europa/Simferopol',
    'America/New_York' => 'Amerika/New York',
    'America/Chicago' => 'Amerika/Chicago',
    'America/North_Dakota/Center' => 'Amerika/North Dakota/Center',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los Angeles',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Yakutat',
    'America/Anchorage' => 'Amerika/Anchorage',
    'America/Nome' => 'Amerika/Nome',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'Amerika/Phoenix',
    'America/Boise' => 'Amerika/Boise',
    'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amerika/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amerika/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amerika/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amerika/Kentucky/Monticello',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Menominee' => 'Amerika/Menominee',
    'America/St_Johns' => 'Amerika/St. Johns',
    'America/Goose_Bay' => 'Amerika/Goose Bay',
    'America/Halifax' => 'Amerika/Halifax',
    'America/Glace_Bay' => 'Amerika/Glace Bay',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Thunder_Bay' => 'Amerika/Thunder Bay',
    'America/Nipigon' => 'Amerika/Nipigonmeer',
    'America/Rainy_River' => 'Amerika/Rainy River',
    'America/Winnipeg' => 'Amerika/Winnipeg',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Swift Current',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Vancouver' => 'Amerika/Vancouver',
    'America/Dawson_Creek' => 'Amerika/Dawson Creek',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Iqaluit' => 'Amerika/Iqaluit',
    'America/Coral_Harbour' => 'Amerika/Coral Harbour',
    'America/Rankin_Inlet' => 'Amerika/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amerika/Cambridge Bay',
    'America/Yellowknife' => 'Amerika/Yellowknife',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Whitehorse',
    'America/Dawson' => 'Amerika/Dawson',
    'America/Cancun' => 'Amerika/Cancun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterrey',
    'America/Mexico_City' => 'Amerika/Mexico Stad',
    'America/Chihuahua' => 'Amerika/Chihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tijuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nassau',
    'America/Barbados' => 'Amerika/Barbadaanse',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Atlantisch/Bermuda',
    'America/Cayman' => 'Amerika/Cayman',
    'America/Costa_Rica' => 'Amerika/Costa Rica',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominica',
    'America/Santo_Domingo' => 'Amerika/Santo Domingo',
    'America/El_Salvador' => 'Amerika/El Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Guadeloupe',
    'America/Guatemala' => 'Amerika/Guatemala',
    'America/Port-au-Prince' => 'Amerika/Port-au-Prince',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Jamaica' => 'Amerika/Jamaica',
    'America/Martinique' => 'Amerika/Martinique',
    'America/Montserrat' => 'Amerika/Montserrat',
    'America/Managua' => 'Amerika/Managua',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'Amerika/Puerto_Rico',
    'America/St_Kitts' => 'Amerika/St. Kitts',
    'America/St_Lucia' => 'Amerika/St. Lucia',
    'America/Miquelon' => 'Amerika/Miquelon',
    'America/St_Vincent' => 'Amerika/St. Vincent',
    'America/Grand_Turk' => 'Amerika/Grand Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argentinië/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amerika/Argentinië/Cordoba',
    'America/Argentina/Tucuman' => 'Amerika/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'Amerika/Argentinië/La_Rioja',
    'America/Argentina/San_Juan' => 'Amerika/Argentinië/San_Juan',
    'America/Argentina/Jujuy' => 'Amerika/Argentinië/Jujuy',
    'America/Argentina/Catamarca' => 'Amerika/Argentinië/Catamarca',
    'America/Argentina/Mendoza' => 'Amerika/Argentinië/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argentinië/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amerika/Argentina/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La Paz',
    'America/Noronha' => 'Amerika/Noronha',
    'America/Belem' => 'Amerika/Belem',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Recife',
    'America/Araguaina' => 'Amerika/Araguaina',
    'America/Maceio' => 'Amerika/Maceio',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Sao_Paulo' => 'Amerika/Sao Paulo',
    'America/Campo_Grande' => 'Amerika/Campo Grande',
    'America/Cuiaba' => 'Amerika/Cuiaba',
    'America/Porto_Velho' => 'Amerika/Porto_Velho',
    'America/Boa_Vista' => 'Amerika/Boa Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Eirunepe',
    'America/Rio_Branco' => 'Amerika/Rio Branco',
    'America/Santiago' => 'Amerika/Santiago',
    'Pacific/Easter' => 'Pacific/Pasen',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Curacao',
    'America/Guayaquil' => 'Amerika/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantisch/Stanley',
    'America/Cayenne' => 'Amerika/Cayenne',
    'America/Guyana' => 'Amerika/Guyaanse',
    'America/Asuncion' => 'Amerika/Asuncion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantisch/South Georgia',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/Port-van-Spain',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/Caracas',
);

$app_list_strings['moduleList']['Sugar_Favorites'] = 'Favorieten';
$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google contactpersonen',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Verzoek',
    2 => 'Toegang',
    3 => 'Ongeldig',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagnes',
    'email' => 'E-mails',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagnes',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagnes',
    'email' => 'E-mails',
);
$app_strings ['documentation'] = array(
    'LBL_DOCS' => 'Documentatie',
    'ULT' => '02_Sugar_Ultimate',
    'ENT' => '02_Sugar_Enterprise',
    'CORP' => '03_Sugar_Corporate',
    'PRO' => '04_Sugar_Professional',
    'COM' => '05_Sugar_Community_Edition',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Kennisbank'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB-Categorieën'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Ontwerp';
$app_list_strings['aok_status_list']['Expired'] = 'Verlopen';
$app_list_strings['aok_status_list']['In_Review'] = 'Wacht op review';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Prive';
$app_list_strings['aok_status_list']['published_public'] = 'Openbare';

$app_list_strings['moduleList']['FP_events'] = 'Evenementen';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locaties';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Uitgenodigd';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Niet uitgenodigd';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Bijwonen';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Niet bijwonen';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Geaccepteerd';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Afgewezen';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Geen Antwoord';

$app_strings['LBL_STATUS_EVENT'] = 'Status uitnodiging';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accepteer status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Huidige pagina';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Complete lijst';
$app_strings['LBL_LISTVIEW_NONE'] = 'geen';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indexeer Evenement';
$app_list_strings['moduleList']['AOD_Index'] = 'Indexeer';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Dossier Evenementen';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Verzoeklijst bijwerken';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Dossier Evenementen';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Verzoeklijst bijwerken';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Reageer boven deze lijn ==========';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Geopend',
        'Closed' => 'Gesloten',
    );
$app_list_strings['case_status_default_key'] = 'Open nieuw';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nieuw',
        'Open_Assigned' => 'Toegewezen',
        'Closed_Closed' => 'Gesloten',
        'Open_Pending Input' => 'In afwachting van',
        'Closed_Rejected' => 'Afgewezen',
        'Closed_Duplicate' => 'Dupliceer',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Enige gebruiker',
        'Account' => 'Account gebruiker',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Gebruik AOP standaard',
    'singleUser' => 'Enige Gebruiker',
    'roundRobin' => 'Round-robin',
    'leastBusy' => 'Minst druk',
    'random' => 'Willekeurig',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapportages';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Rapport condities';
$app_list_strings['moduleList']['AOR_Charts'] = 'Rapportage grafieken';
$app_list_strings['moduleList']['AOR_Fields'] = 'Rapport velden';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Geplande rapporten';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Gelijk aan';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Niet gelijk aan';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Groter dan';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Kleiner dan';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Groter dan of gelijk aan';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Kleiner dan of gelijk aan';
$app_list_strings['aor_operator_list']['Contains'] = 'Bevat';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Begint met';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Eindigt met';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Jmd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'En';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OF';
$app_list_strings['aor_condition_type_list']['Value'] = 'Waarde';
$app_list_strings['aor_condition_type_list']['Field'] = 'Veld';
$app_list_strings['aor_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Een van ';
$app_list_strings['aor_condition_type_list']['Period'] = 'Periode';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Huidige gebruiker';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuten';
$app_list_strings['aor_date_type_list']['hour'] = 'Uren';
$app_list_strings['aor_date_type_list']['day'] = 'Dagen';
$app_list_strings['aor_date_type_list']['week'] = 'Weken';
$app_list_strings['aor_date_type_list']['month'] = 'Maanden';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Kantoor uren';
$app_list_strings['aor_date_options']['now'] = 'Nu';
$app_list_strings['aor_date_options']['field'] = 'Dit veld';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Oplopend';
$app_list_strings['aor_sort_operator']['DESC'] = 'Aflopend';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Tellen';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Som';
$app_list_strings['aor_function_list']['AVG'] = 'Gemiddelde';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Tellen';
$app_list_strings['aor_total_options']['SUM'] = 'Som';
$app_list_strings['aor_total_options']['AVG'] = 'Gemiddelde';
$app_list_strings['aor_chart_types']['bar'] = 'Staaf diagram';
$app_list_strings['aor_chart_types']['line'] = 'Lijn diagram';
$app_list_strings['aor_chart_types']['pie'] = 'Taart diagram';
$app_list_strings['aor_chart_types']['radar'] = 'Radar diagram';
$app_list_strings['aor_chart_types']['polar'] = 'Polair diagram';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Gestapelde balk';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Gegroepeerde balk';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Maandelijks';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Wekelijks';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Dagelijks';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Actief';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inactief';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mails';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Toegewezen aan naam';
$app_list_strings['aor_email_type_list']['Users'] = 'Gebruikers';
$app_list_strings['aor_assign_options']['all'] = 'Alle gebruikers';
$app_list_strings['aor_assign_options']['role'] = 'Alle gebruikers in rol';
$app_list_strings['aor_assign_options']['security_group'] = 'Alle gebruikers in SecurityGroup';
$app_list_strings['date_time_period_list']['today'] = 'Vandaag';
$app_list_strings['date_time_period_list']['yesterday'] = 'Gisteren';
$app_list_strings['date_time_period_list']['this_week'] = 'Deze week';
$app_list_strings['date_time_period_list']['last_week'] = 'Afgelopen week';
$app_list_strings['date_time_period_list']['last_month'] = 'Laaste maand';
$app_list_strings['date_time_period_list']['this_month'] = 'Deze maand';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Aankomend kwartaal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Afgelopen kwartaal';
$app_list_strings['date_time_period_list']['this_year'] = 'Dit jaar';
$app_list_strings['date_time_period_list']['last_year'] = 'Afgelopen jaar';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'aan';
$app_strings['LBL_CRON_AT'] = 'op';
$app_strings['LBL_CRON_RAW'] = 'Gavanceerd';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Uur';
$app_strings['LBL_CRON_DAY'] = 'Dag';
$app_strings['LBL_CRON_MONTH'] = 'Maand';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Dagelijks';
$app_strings['LBL_CRON_WEEKLY'] = 'Wekelijks';
$app_strings['LBL_CRON_MONTHLY'] = 'Maandelijks';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contracten';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Facturen';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - sjablonen';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Productcategorieën';
$app_list_strings['moduleList']['AOS_Products'] = 'Producten';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Lijn items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Post groepen';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Offertes';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klant';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investeerder';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Pers';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Wederverkoper';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Anders';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Ontwerp';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Onderhandelingen';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Uitgeleverd';
$app_list_strings['quote_stage_dom']['On Hold'] = 'In de wacht';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Bevestigd';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Gesloten geaccepteerde';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Verloren';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Gesloten niet meer actief';
$app_list_strings['quote_term_dom']['Net 15'] = '15 dagen';
$app_list_strings['quote_term_dom']['Net 30'] = '30 dagen';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Goedgekeurd';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Niet goedgekeurd';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = '%';
$app_list_strings['discount_list']['Amount'] = 'Aantal';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klant';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investeerder';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Pers';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Wederverkoper';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Anders';
$app_list_strings['invoice_status_dom']['Paid'] = 'Betaald';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Onbetaald';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Geannuleerd';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Niet Gefactureerd';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Gefactureerd';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'JJJJ';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Goed';
$app_list_strings['product_type_dom']['Service'] = 'Dienst';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Offertes';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Facturen';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contracten';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Offertes';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Facturen';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contracten';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Relaties';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contactpersonen';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Leads';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Niet gestart';
$app_list_strings['contract_status_list']['In Progress'] = 'In behandeling';
$app_list_strings['contract_status_list']['Signed'] = 'Ondertekend';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_GENERATE_LETTER'] = 'Genereer Brief';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Selecteer een Template a.u.b.';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nGeen templates gevonden.\nGa a.u.b. naar de PDF templates module en maak er een aan';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Workflow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow condities';
$app_list_strings['moduleList']['AOW_Processed'] = 'Proces audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Acties';
$app_list_strings['aow_status_list']['Active'] = 'Actief';
$app_list_strings['aow_status_list']['Inactive'] = 'Inactief';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Gelijk aan';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Niet gelijk aan';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Groter dan';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Kleiner dan';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Groter dan of gelijk aan';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Kleiner dan of gelijk aan';
$app_list_strings['aow_operator_list']['Contains'] = 'Bevat';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Begint met';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Eindigt met';
$app_list_strings['aow_operator_list']['is_null'] = 'Is null';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Compleet';
$app_list_strings['aow_process_status_list']['Running'] = 'Lopend';
$app_list_strings['aow_process_status_list']['Pending'] = 'Wachtend';
$app_list_strings['aow_process_status_list']['Failed'] = 'Mislukt';
$app_list_strings['aow_condition_operator_list']['And'] = 'En';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OF';
$app_list_strings['aow_condition_type_list']['Value'] = 'Waarde';
$app_list_strings['aow_condition_type_list']['Field'] = 'Veld';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Elke wijziging';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In autorisatiegroep';
$app_list_strings['aow_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Een van ';
$app_list_strings['aow_action_type_list']['Value'] = 'Waarde';
$app_list_strings['aow_action_type_list']['Field'] = 'Veld';
$app_list_strings['aow_action_type_list']['Date'] = 'Datum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round-robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Minst druk';
$app_list_strings['aow_action_type_list']['Random'] = 'Willekeurig';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Waarde';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Veld';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuten';
$app_list_strings['aow_date_type_list']['hour'] = 'Uren';
$app_list_strings['aow_date_type_list']['day'] = 'Dagen';
$app_list_strings['aow_date_type_list']['week'] = 'Weken';
$app_list_strings['aow_date_type_list']['month'] = 'Maanden';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Kantoor uren';
$app_list_strings['aow_date_options']['now'] = 'Nu';
$app_list_strings['aow_date_options']['today'] = 'Vandaag';
$app_list_strings['aow_date_options']['field'] = 'Dit veld';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Alle gebruikers';
$app_list_strings['aow_assign_options']['role'] = 'Alle gebruikers in rol';
$app_list_strings['aow_assign_options']['security_group'] = 'Alle gebruikers in SecurityGroup';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mails';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Registreer E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Gerelateerd veld';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Toegewezen aan naam';
$app_list_strings['aow_email_type_list']['Users'] = 'Gebruikers';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Veld';
$app_list_strings['aow_email_to_list']['to'] = 'Aan';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Alle records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nieuwe Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Gewijzigde Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Altijd';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Allen bij opslaan';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Alleen in de planner';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Project-sjablonen';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project taak sjablonen';
$app_list_strings['relationship_type_list']['FS'] = 'Van einde tot start';
$app_list_strings['relationship_type_list']['SS'] = 'Start tot start';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Project vakantiedagen';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Contactpersonen';
$app_list_strings['holiday_resource_dom']['Users'] = 'Gebruikers';
$app_list_strings['duration_unit_dom']['Days'] = 'Dagen';
$app_list_strings['duration_unit_dom']['Hours'] = 'Uren';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Toon Gantt-diagram';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Toon Gantt-diagram';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail'; //PR 2248
$app_strings['LBL_DETAIL_BUTTON_TITLE'] = 'View Detail'; //PR 2248
$app_strings['LBL_CREATE_PROJECT'] = 'Nieuw project';

//gmaps
$app_strings['LBL_MAP'] = 'Kaart';
$app_strings['LBL_MAPS'] = 'Kaarten';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Lengtegraad';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Breedtegraad';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adres';
$app_strings['LBL_BUG_FIX'] = 'Bug Fix';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kaarten';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Kaarten - markeringen';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Kaarten - gebieden';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Kaarten - adres Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Mijlen';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometer';

$app_list_strings['map_module_type_list']['Accounts'] = 'Relaties';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contactpersonen';
$app_list_strings['map_module_type_list']['Cases'] = 'Dossiers';
$app_list_strings['map_module_type_list']['Leads'] = 'Leads';
$app_list_strings['map_module_type_list']['Meetings'] = 'Afspraken';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Kansen';
$app_list_strings['map_module_type_list']['Project'] = 'Projecten';
$app_list_strings['map_module_type_list']['Prospects'] = 'Doelen';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Relatie';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacten';
$app_list_strings['map_relate_type_list']['Cases'] = 'Dossiers';
$app_list_strings['map_relate_type_list']['Leads'] = 'Leads';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Afspraken';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Kansen';
$app_list_strings['map_relate_type_list']['Project'] = 'Projecten';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Doelen';

$app_list_strings['marker_image_list']['accident'] = 'Ongeluk';
$app_list_strings['marker_image_list']['administration'] = 'Beheer';
$app_list_strings['marker_image_list']['agriculture'] = 'Landbouw';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Vliegtuig klein';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Vliegtuig toerisme';
$app_list_strings['marker_image_list']['airport'] = 'Vliegveld';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Appartement';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Boog';
$app_list_strings['marker_image_list']['atm'] = 'Pinnen';
$app_list_strings['marker_image_list']['audio'] = 'Geluid';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pond';
$app_list_strings['marker_image_list']['bar'] = 'Balk';
$app_list_strings['marker_image_list']['beach'] = 'Strand';
$app_list_strings['marker_image_list']['beautiful'] = 'Mooi';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Fietsen parkeerplaats';
$app_list_strings['marker_image_list']['big_city'] = 'Grote Stad';
$app_list_strings['marker_image_list']['bridge'] = 'Brug';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Brug Modern';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Kabelbaan';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Auto verhuur';
$app_list_strings['marker_image_list']['carrepair'] = 'Garage';
$app_list_strings['marker_image_list']['castle'] = 'Kasteel';
$app_list_strings['marker_image_list']['cathedral'] = 'Kathedraal';
$app_list_strings['marker_image_list']['chapel'] = 'Kapel';
$app_list_strings['marker_image_list']['church'] = 'Kerk';
$app_list_strings['marker_image_list']['city_square'] = 'Stadsplein';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Koffie';
$app_list_strings['marker_image_list']['community_centre'] = 'Buurthuis';
$app_list_strings['marker_image_list']['company'] = 'Bedrijf';
$app_list_strings['marker_image_list']['conference'] = 'Conferentie';
$app_list_strings['marker_image_list']['construction'] = 'Bouw';
$app_list_strings['marker_image_list']['convenience'] = 'Gemak';
$app_list_strings['marker_image_list']['court'] = 'Rechtbank';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Geldwissel';
$app_list_strings['marker_image_list']['customs'] = 'Douane';
$app_list_strings['marker_image_list']['cycling'] = 'Fiets';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['days_dim'] = 'Dagen Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Dagen Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Dagen Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Dagen Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Dagen Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Dagen Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Dagen Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Dagen Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Dagen Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Dagen Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Dagen Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Dagen Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Dagen Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Dagen Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Dagen Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Dagen Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Dagen Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Tandarts';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Warenhuis';
$app_list_strings['marker_image_list']['disability'] = 'Invaliden';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Invaliden parkeerplaats';
$app_list_strings['marker_image_list']['doctor'] = 'Dokter';
$app_list_strings['marker_image_list']['dog_leash'] = 'Hondenlijn';
$app_list_strings['marker_image_list']['down'] = 'Beneden';
$app_list_strings['marker_image_list']['down_left'] = 'Links beneden';
$app_list_strings['marker_image_list']['down_right'] = 'Rechts beneden';
$app_list_strings['marker_image_list']['down_then_left'] = 'Beneden dan links';
$app_list_strings['marker_image_list']['down_then_right'] = 'Beneden dan rechts';
$app_list_strings['marker_image_list']['drugs'] = 'Medicijnen';
$app_list_strings['marker_image_list']['elevator'] = 'Lift';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Deskundige';
$app_list_strings['marker_image_list']['factory'] = 'Fabriek';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Vallende stenen';
$app_list_strings['marker_image_list']['fast_food'] = 'Fastfood';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Bos';
$app_list_strings['marker_image_list']['fountain'] = 'Fontijn';
$app_list_strings['marker_image_list']['friday'] = 'Vrijdag';
$app_list_strings['marker_image_list']['garden'] = 'Tuin';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzine Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geiser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadeaus';
$app_list_strings['marker_image_list']['gourmet'] = 'Gastronomische';
$app_list_strings['marker_image_list']['grocery'] = 'Kruidenierswinkel';
$app_list_strings['marker_image_list']['hairsalon'] = 'Kapper';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Snelweg';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historische wijk';
$app_list_strings['marker_image_list']['home'] = 'Start';
$app_list_strings['marker_image_list']['hospital'] = 'Ziekenhuis';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Ster';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Sterren';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Sterren';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Sterren';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Sterren';
$app_list_strings['marker_image_list']['info'] = 'Informatie';
$app_list_strings['marker_image_list']['justice'] = 'Gerechtigheid';
$app_list_strings['marker_image_list']['lake'] = 'Meer';
$app_list_strings['marker_image_list']['laundromat'] = 'Wasserij';
$app_list_strings['marker_image_list']['left'] = 'Links';
$app_list_strings['marker_image_list']['left_then_down'] = 'Links dan naar beneden';
$app_list_strings['marker_image_list']['left_then_up'] = 'Links dan naar boven';
$app_list_strings['marker_image_list']['library'] = 'Bibliotheek';
$app_list_strings['marker_image_list']['lighthouse'] = 'Vuurtoren';
$app_list_strings['marker_image_list']['liquor'] = 'Slijterij';
$app_list_strings['marker_image_list']['lock'] = 'Sluis';
$app_list_strings['marker_image_list']['main_road'] = 'Hoofdweg';
$app_list_strings['marker_image_list']['massage'] = 'Bericht';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobiele telefoonmast';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderne toren';
$app_list_strings['marker_image_list']['monastery'] = 'Klooster';
$app_list_strings['marker_image_list']['monday'] = 'Maandag';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Moskee';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorfiets';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Muziek Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Hefboom van de oliepomp';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Paleis';
$app_list_strings['marker_image_list']['panoramic'] = 'Panorama';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Carpool';
$app_list_strings['marker_image_list']['parking'] = 'Parkeerplaats';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Picknick';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Plaatsen niet bezocht';
$app_list_strings['marker_image_list']['places_visited'] = 'Plaatsen bezocht';
$app_list_strings['marker_image_list']['playground'] = 'Speelplaats';
$app_list_strings['marker_image_list']['police'] = 'Politie';
$app_list_strings['marker_image_list']['port'] = 'Poort';
$app_list_strings['marker_image_list']['postal'] = 'Post';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Hoogspanningsmast';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektriciteitscentrale';
$app_list_strings['marker_image_list']['power_substation'] = 'Elektriciteit verdeelstation';
$app_list_strings['marker_image_list']['public_art'] = 'Publieke kunst';
$app_list_strings['marker_image_list']['rain'] = 'Regen';
$app_list_strings['marker_image_list']['real_estate'] = 'Makelaar';
$app_list_strings['marker_image_list']['regroup'] = 'Hergroeperen';
$app_list_strings['marker_image_list']['resort'] = 'Her sorteren';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant Afrikaans';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant, Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinees';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Vis';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Vis/Friet';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gourmet Restaurant';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant Grieks';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indiaas';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant Italiaans';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant Japans';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Koreaans';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterraans';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexicaans';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantisch';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thais';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turks';
$app_list_strings['marker_image_list']['right'] = 'Rechts';
$app_list_strings['marker_image_list']['right_then_down'] = 'Rechts dan naar beneden';
$app_list_strings['marker_image_list']['right_then_up'] = 'Rechts dan naar boven';
$app_list_strings['marker_image_list']['satursday'] = 'Zaterdag';
$app_list_strings['marker_image_list']['school'] = 'School';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Winkelcentrum';
$app_list_strings['marker_image_list']['shore'] = 'Kust';
$app_list_strings['marker_image_list']['sight'] = 'Zicht';
$app_list_strings['marker_image_list']['small_city'] = 'Kleine stad';
$app_list_strings['marker_image_list']['snow'] = 'Sneeuw';
$app_list_strings['marker_image_list']['spaceport'] = 'Ruimtehaven';
$app_list_strings['marker_image_list']['speed_100'] = 'Snelheid 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Snelheid 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Snelheid 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Snelheid 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Snelheid 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Snelheid 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Snelheid 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Snelheid 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Snelheid 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Snelheid 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Snelheid 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Snelheid 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Verkeersdrempel';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Standbeeld';
$app_list_strings['marker_image_list']['steam_train'] = 'Stoomtrein';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplicht';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Zon';
$app_list_strings['marker_image_list']['sunday'] = 'Zondag';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarkt';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoge';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxibaan';
$app_list_strings['marker_image_list']['teahouse'] = 'Theehuis';
$app_list_strings['marker_image_list']['telephone'] = 'Telefoon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Tempel Hindoe';
$app_list_strings['marker_image_list']['terrace'] = 'Terras';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Thema Park';
$app_list_strings['marker_image_list']['thursday'] = 'Donderdag';
$app_list_strings['marker_image_list']['toilets'] = 'Toiletten';
$app_list_strings['marker_image_list']['toll_station'] = 'Tol station';
$app_list_strings['marker_image_list']['tower'] = 'Toren';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Verkeerscamera';
$app_list_strings['marker_image_list']['train'] = 'Trein';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Vrachtwagen';
$app_list_strings['marker_image_list']['tuesday'] = 'Dinsdag';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Linksaf';
$app_list_strings['marker_image_list']['turn_right'] = 'Rechtsaf';
$app_list_strings['marker_image_list']['university'] = 'Universiteit';
$app_list_strings['marker_image_list']['up'] = 'Boven';
$app_list_strings['marker_image_list']['up_left'] = 'Naar boven links';
$app_list_strings['marker_image_list']['up_right'] = 'Naar boven rechts';
$app_list_strings['marker_image_list']['up_then_left'] = 'Naar boven dan naar links';
$app_list_strings['marker_image_list']['up_then_right'] = 'Naar boven dan naar rechts';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Water';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterval';
$app_list_strings['marker_image_list']['watermill'] = 'Watermolen';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertoren';
$app_list_strings['marker_image_list']['wednesday'] = 'Woensdag';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Windturbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmolen';
$app_list_strings['marker_image_list']['winery'] = 'Wijnmakerij';
$app_list_strings['marker_image_list']['work_office'] = 'Kantoor';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Werelderfgoed';
$app_list_strings['marker_image_list']['zoo'] = 'Dierentuin';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Buiten kantoor';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In een Afspraak';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Opnieuw plannen';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Voer informatie in voor het verzetten';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Datum:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Reden:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Selecteer een geldige datum';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Selecteer reden';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Opnieuw plannen';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Bel pogingen geschiedenis';
$app_strings['LBL_RESCHEDULE_COUNT'] = '\'Bel pogingen';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Groep Beheer';
$app_strings['LBL_LOGIN_AS'] = 'Log in als';
$app_strings['LBL_LOGOUT_AS'] = 'Log uit als';
$app_strings['LBL_SECURITYGROUP'] = 'Veiligheidsgroep';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Uitgaande e-mailaccounts';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook gebruiker';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter gebruiker';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed detail';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Nieuwe relatie';
$app_strings['LBL_QUICK_CONTACT'] = 'Nieuw contactpersoon';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Nieuwe kans';
$app_strings['LBL_QUICK_LEAD'] = 'Nieuwe lead';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Nieuw document';
$app_strings['LBL_QUICK_CALL'] = 'Telefoongesprek inplannen';
$app_strings['LBL_QUICK_TASK'] = 'Nieuwe taak';
$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Tabblad aanmaken ';
$app_strings['LBL_EDIT_TAB'] = 'Wijzig tabs';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Dashboard'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Geef Dashboard naam';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Aantal Kolommen';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Weet u zeker dat u wilt verwijderen de';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'Dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Aanmaken Dashboard pagina';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Verwijder huidige Dashboard pagina';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Hernoem Dashboard pagina';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Acties'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Ontdek SuiteCRM';

$app_list_strings['collection_temp_list'] = array('Tasks' => 'Taken', 'Meetings' => 'Afspraken', 'Calls' => 'Telefoongesprekken', 'Notes' => 'Notities', 'Emails' => 'E-mails');

$app_list_strings['moduleList']['TemplateEditor'] = 'Sjabloon deel Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "U wilt een gewijzigd veld sluiten zonder op te slaan. Klik ok indien u deze wijzigingen niet wenst op te slaan of annuleren indien u verder wilt met bewerken";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Er was een fout bij het laden van het veld. Uw sessie kan zijn verlopen. Log opnieuw in om dit te bevestigen";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Verkoop',
    'getAccountsSpotsData' => 'Relaties',
    'getLeadsSpotsData' => 'Leads',
    'getServiceSpotsData' => 'Dienst',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Marketing activiteiten',
    'getActivitiesSpotsData' => 'Activiteiten',
    'getQuotesSpotsData' => 'Offertes'
);

$app_list_strings['moduleList']['Spots'] = 'Vlekken';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Kantoor uren';
$app_list_strings['business_hours_list']['0'] = '0:00  uur';
$app_list_strings['business_hours_list']['1'] = '01:00 uur';
$app_list_strings['business_hours_list']['2'] = '02:00 uur';
$app_list_strings['business_hours_list']['3'] = '03:00 uur';
$app_list_strings['business_hours_list']['4'] = '04:00 uur';
$app_list_strings['business_hours_list']['5'] = '05:00 uur';
$app_list_strings['business_hours_list']['6'] = '06:00 uur';
$app_list_strings['business_hours_list']['7'] = '07:00 uur';
$app_list_strings['business_hours_list']['8'] = '08:00 uur';
$app_list_strings['business_hours_list']['9'] = '09:00 uur';
$app_list_strings['business_hours_list']['10'] = '10:00 uur';
$app_list_strings['business_hours_list']['11'] = '11:00 uur';
$app_list_strings['business_hours_list']['12'] = '12:00 uur';
$app_list_strings['business_hours_list']['13'] = '13:00 uur';
$app_list_strings['business_hours_list']['14'] = '14:00 uur';
$app_list_strings['business_hours_list']['15'] = '15:00 uur';
$app_list_strings['business_hours_list']['16'] = '16:00 uur';
$app_list_strings['business_hours_list']['17'] = '17:00 uur';
$app_list_strings['business_hours_list']['18'] = '18:00 uur';
$app_list_strings['business_hours_list']['19'] = '19:00 uur';
$app_list_strings['business_hours_list']['20'] = '20:00 uur';
$app_list_strings['business_hours_list']['21'] = '21:00 uur';
$app_list_strings['business_hours_list']['22'] = '22:00 uur';
$app_list_strings['business_hours_list']['23'] = '23:00 uur';
$app_list_strings['day_list']['Monday'] = 'Maandag';
$app_list_strings['day_list']['Tuesday'] = 'Dinsdag';
$app_list_strings['day_list']['Wednesday'] = 'Woensdag';
$app_list_strings['day_list']['Thursday'] = 'Donderdag';
$app_list_strings['day_list']['Friday'] = 'Vrijdag';
$app_list_strings['day_list']['Saturday'] = 'Zaterdag';
$app_list_strings['day_list']['Sunday'] = 'Zondag';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Brief';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Juridisch';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portret';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Landschap';
$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'A report you have selected is targeting a module you do not have access to. Please select a report with a target module you have access to.';
