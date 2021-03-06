<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_first_name' => 'LBL_LIST_FIRST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_title' => 'LBL_LIST_TITLE', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze lead te verwijderen.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Relatie beschrijving',
    'LBL_ACCOUNT_ID' => 'Relatie ID',
    'LBL_ACCOUNT_NAME' => 'Relatienaam:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADD_BUSINESSCARD' => 'Visitekaartje toevoegen',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ALT_ADDRESS_CITY' => 'Plaats',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Land',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Postcode',
    'LBL_ALT_ADDRESS_STATE' => 'Provincie',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatief adres 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatief adres 3',
    'LBL_ALT_ADDRESS_STREET' => 'Straat + huisnummer',
    'LBL_ALTERNATE_ADDRESS' => 'Alt. adres:',
    'LBL_ALT_ADDRESS' => 'Andere Adres:',
    'LBL_ANY_ADDRESS' => '(Deel van) adres:',
    'LBL_ANY_EMAIL' => 'Willekeurige e-mail:',
    'LBL_ANY_PHONE' => '(Deel van) telefoonnummer',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan naam',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker:',
    'LBL_BACKTOLEADS' => 'Terug naar leads',
    'LBL_BUSINESSCARD' => 'Lead converteren',
    'LBL_CITY' => 'Plaats:',
    'LBL_CONTACT_ID' => 'Contactpersoon ID',
    'LBL_CONTACT_INFORMATION' => 'Lead gegevens', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Leadnaam:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Kans:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERTED_ACCOUNT' => 'Relatie geconverteerd:',
    'LBL_CONVERTED_CONTACT' => 'Contactpersoon geconverteerd:',
    'LBL_CONVERTED_OPP' => 'Kans Geconverteerd:',
    'LBL_CONVERTED' => 'Geconverteerd',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Lead converteren',
    'LBL_CONVERTLEAD' => 'Lead converteren',
    'LBL_CONVERTLEAD_WARNING' => 'Waarschuwing: De status van de Lead die wilt u converteren is \\"Geconverteerd\\". Contact en / of Account records zijn mogelijk al gemaakt op basis van de Lead. Als u wilt doorgaan met het converteren van de Lead, klikt u op Opslaan. Om terug te gaan naar de Lead zonder deze te converteren, klikt u op Annuleren.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mogelijk contact:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_NEW' => 'Maak een nieuwe aan',
    'LBL_CREATED_ACCOUNT' => 'Nieuwe relatie aangemaakt',
    'LBL_CREATED_CALL' => 'Nieuw telefoongesprek aangemaakt',
    'LBL_CREATED_CONTACT' => 'Nieuwe contactpersoon aangemaakt',
    'LBL_CREATED_MEETING' => 'Nieuwe afspraak aangemaakt',
    'LBL_CREATED_OPPORTUNITY' => 'Nieuwe kans aangemaakt',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving informatie',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DO_NOT_CALL' => 'Niet bellen:',
    'LBL_DUPLICATE' => 'Vergelijkbare leads',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Bestaande relatie gebruikt',
    'LBL_EXISTING_CONTACT' => 'Bestaande contactpersoon gebruikt',
    'LBL_EXISTING_OPPORTUNITY' => 'Bestaande kans gebruikt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Voornaam:',
    'LBL_FULL_NAME' => 'Volledige naam:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_HOME_PHONE' => 'Priv',
    'LBL_IMPORT_VCARD' => 'Importeer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatisch een nieuwe lead toevoegen door een vCard te importeren van uw PC.',
    'LBL_INVALID_EMAIL' => 'Ongeldige E-mail:',
    'LBL_INVITEE' => 'Directe Rapportages',
    'LBL_LAST_NAME' => 'Achternaam:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Omschrijving bron voor lead:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Acceptatie status',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_CONTACT_NAME' => 'Leadnaam',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Voornaam',
    'LBL_VIEW_FORM_TITLE' => 'Hoofdoverzicht',
    'LBL_LIST_FORM_TITLE' => 'Leads',
    'LBL_LIST_LAST_NAME' => 'Achternaam',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Leadbron omschrijving',
    'LBL_LIST_LEAD_SOURCE' => 'Lead bron',
    'LBL_LIST_MY_LEADS' => 'Mijn leads',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_REFERED_BY' => 'Aanbevolen door',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Titel',
    'LBL_MOBILE_PHONE' => 'Mobiel:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Leads: Start',
    'LBL_NAME' => 'Naam:',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe lead',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nieuw portal wachtwoord:',
    'LBL_OFFICE_PHONE' => 'Telefoon (Werk):',
    'LBL_OPP_NAME' => 'Kansnaam:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Kansomvang:',
    'LBL_OPPORTUNITY_ID' => 'Kans ID',
    'LBL_OPPORTUNITY_NAME' => 'Kansnaam:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternatief e-mailadres:',
    'LBL_OTHER_PHONE' => 'Bgg:',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_PORTAL_ACTIVE' => 'Portal actief:',
    'LBL_PORTAL_APP' => 'Portal Applicatie',
    'LBL_PORTAL_INFORMATION' => 'Portal gegevens',
    'LBL_PORTAL_NAME' => 'Portal naam:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal wachtwoord is gezet:',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_STREET' => 'Straat',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Provincie',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primair adres 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primair adres 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + huisnummer',
    'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',
    'LBL_REFERED_BY' => 'Aanbevolen door:',
    'LBL_REPORTS_TO_ID' => 'Rapporteert aan ID',
    'LBL_REPORTS_TO' => 'Rapporteert aan:',
    'LBL_REPORTS_FROM' => 'Rapporten van:',
    'LBL_SALUTATION' => 'Aanhef',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_CREATED_ID' => 'Gemaakt door ID',
    'LBL_SEARCH_FORM_TITLE' => 'Lead zoeken',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Kies geselecteerde leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Kies geselecteerde leads',
    'LBL_STATE' => 'Provincie of regio:', //For address fields
    'LBL_STATUS_DESCRIPTION' => 'Statusomschrijving:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Titel:',
    'LNK_IMPORT_VCARD' => 'Aanmaken vanaf vCard',
    'LNK_LEAD_LIST' => 'Leads',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
    'LNK_NEW_CONTACT' => 'Nieuw contactpersoon',
    'LNK_NEW_LEAD' => 'Nieuwe lead',
    'LNK_NEW_NOTE' => 'Nieuwe notitie',
    'LNK_NEW_TASK' => 'Maak taak',
    'LNK_NEW_CASE' => 'Maak verzoek',
    'LNK_NEW_CALL' => 'Log telefoongesprek',
    'LNK_NEW_MEETING' => 'Vergadering plannen',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LNK_SELECT_ACCOUNTS' => '<b>OF</b> Selecteer Bedrijf',
    'LNK_SELECT_CONTACTS' => ' <b>OF</b> Selecteer Contactpersoon',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copieer alt. adres naar hoofdadres',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copieer hoofdadres naar alt. adres',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Voor het aanmaken van een kans is een bedrijf nodig. Maak een nieuwe relatie aan of kies een bestaande relatie waaraan u deze kans wilt koppelen.',
    'NTC_REMOVE_CONFIRMATION' => 'Weet u zeker dat u deze lead bij dit verzoek wilt verwijderen?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen als \'direct report\'?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Succesvolle campagne:',
    'LBL_TARGET_BUTTON_LABEL' => 'Gericht aan',
    'LBL_TARGET_BUTTON_TITLE' => 'Gericht aan',
    'LBL_TARGET_BUTTON_KEY' => 'T',
    'LBL_CAMPAIGN' => 'Campagnes:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_PROSPECT_LIST' => 'Prospect Lijst',
    'LBL_CAMPAIGN_LEAD' => 'Campagnes',
    'LBL_BIRTHDATE' => 'Verjaardag:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Dank u voor uw opgave.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Het spijt ons, de server is momenteel niet beschikbaar, probeer het later opnieuw.',
    'LBL_ASSISTANT_PHONE' => 'Telefoon assistent ',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_REGISTRATION' => 'Registratie',
    'LBL_MESSAGE' => 'Vul aub uw informatie hieronder in. Informatie en/of een account zal worden aangemaakt, wachtend op goedkeuring.',
    'LBL_SAVED' => 'Bedankt voor het registeren. Uw account wordt aangemaakt en spoedig neemt iemand contact met u op.',
    'LBL_CLICK_TO_RETURN' => 'Terug naar portal',
    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Verplicht',
    'LBL_CONVERT_SELECT' => 'Laat selectie toe',
    'LBL_CONVERT_COPY' => 'Kopiëren gegevens',
    'LBL_CONVERT_EDIT' => 'Bewerken',
    'LBL_CONVERT_DELETE' => 'Verwijderen',
    'LBL_CONVERT_ADD_MODULE' => 'Voeg module toe',
    'LBL_CREATE' => 'Creëren',
    'LBL_SELECT' => '<b>OF</b> Selecteer',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importeer leads',
    'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Opmerking: het huidige Converteer Lead scherm bevat aangepaste velden. Wanneer u het Converteren Lead scherm in Studio voor de eerste keer aanpast, moet u aangepaste velden toevoegen aan de lay-out(indien van toepassing). De aangepaste velden zullen niet automatisch worden weergegeven in de lay-out, zoals ze eerder deden.',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'De module om een nieuw record in te creëren',
    'LBL_REQUIRED_TIP' => 'Vereiste modules moeten worden gemaakt of geselecteerd voordat het lead kan worden omgezet.',
    'LBL_COPY_TIP' => 'Indien aangevinkt, zal velden uit de lead worden gekopieerd naar velden met dezelfde naam in de nieuw aangemaakte records.',
    'LBL_SELECTION_TIP' => 'Modules met een gerelateerd veld in Contacten kunnen worden geselecteerd in plaats van gemaakt tijdens het  proces van converteren leads.',
    'LBL_EDIT_TIP' => 'Wijzig de convert lay-out  voor deze module.',
    'LBL_DELETE_TIP' => 'Verwijder deze module uit de converteren lay-out.',

    'LBL_ACTIVITIES_MOVE' => 'Verplaats activiteiten naar',
    'LBL_ACTIVITIES_COPY' => 'Kopieer activiteiten naar',
    'LBL_ACTIVITIES_MOVE_HELP' => "Selecteer het record waarnaar de lead-activiteiten worden verplaatst. Taken, telefoongesprekken, afspraken, notities en emails zullen worden verplaatst naar de geselecteerde records(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecteer het record waarvoor kopieen van de activiteiten van de lead worden aangemaakt. Nieuwe taken, telefoongesprekken, afspraken en notities worden aangemaakt voor elk van geselecteerde records. Emails zullen worden gerelateerd aan geselecteerde records.",
    //For export labels
    'LBL_PHONE_HOME' => 'Telefoon thuis',
    'LBL_PHONE_MOBILE' => 'Telefoon mobiel',
    'LBL_PHONE_WORK' => 'Telefoon werk',
    'LBL_PHONE_OTHER' => 'Telefoon overig',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen gebruikersnaam',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen gebruikers-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door IB',
    'LBL_EXPORT_CREATED_BY' => 'Gemaakt door ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Telefoon mobiel',
    'LBL_EXPORT_EMAIL2' => 'Emailadres anders',
    'LBL_EDITLAYOUT' => 'Wijzig lay-out' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Geef datum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Laden' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Wijzig' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Evenementen',
    'LBL_WWW' => 'WWW',
);
?>
