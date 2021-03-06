<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

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

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/

 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Importbestand succesvol ingelezen',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Overgeslagen records door een fout',
    'LBL_UPDATE_SUCCESSFULLY' => 'Records zijn bijgewerkt',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Succesvol aangemaakte records ',
    'LBL_STEP_4_TITLE' => 'Stap 4: Bestand importeren',
    'LBL_STEP_5_TITLE' => 'Stap 5: Bekijk de resultaten',
    'LBL_CUSTOM_ENCLOSURE' => 'Velden aangeduid door:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Niet te publiceren. Er is een ander gepubliceerd Import map met dezelfde naam.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Het is niet mogelijk om  een kaart te un-publiceren van een andere gebruiker. U bent eigenaar van een Import kaart met dezelfde naam.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Import niet ingesteld voor dit type module',
    'LBL_IMPORT_TYPE' => 'Import Actie',
    'LBL_IMPORT_BUTTON' => 'Maak Records',
    'LBL_UPDATE_BUTTON' => 'Maken en records bijwerken',
    'LBL_CREATE_BUTTON_HELP' => 'Gebruik deze optie om nieuwe records aan te maken. NB: regels in het importbestand die waarden bevatten  die overeenkomen met ID\'s van bestaande records, worden niet geimporteerd als de waarden zijn gemapped met het ID-veld.',
    'LBL_UPDATE_BUTTON_HELP' => 'Gebruik deze optie om bestaande records bij te werken. De data in het importbestand zal worden gematched met bestaande records, gebaseerd op het record-ID in het importbestand.',
    'LBL_ERROR_INVALID_BOOL'=>'Ongeldige waarde (moet een 1 of 0)',
    'LBL_NO_ID' => 'ID verplicht',
    'LBL_PRE_CHECK_SKIPPED' => 'Pre-Check overgeslagen',
    'LBL_IMPORT_ERROR' => 'Import fouten zijn opgetreden',
    'LBL_ERROR' => 'Fout:',
    'LBL_NOLOCALE_NEEDED' => 'Geen locale conversie nodig',
    'LBL_FIELD_NAME' => 'Veldnaam',
    'LBL_VALUE' => 'Waarde',
    'LBL_ROW_NUMBER' => 'Rijnummer',
    'LBL_NONE' => 'Geen',
    'LBL_REQUIRED_VALUE' => 'Verplichte waarde ontbreekt',
    'LBL_ERROR_SYNC_USERS' => 'Ongeldige waarde om met Outlook te synchronizeren: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID bestaat al in deze tabel',
    'LBL_ASSIGNED_USER' => 'Als de gebruiker niet bestaat gebruik maken van de huidige gebruiker',
    'LBL_SHOW_HIDDEN' => 'Toon velden die normaal niet importeerbaar zijn',
    'LBL_UPDATE_RECORDS' => 'Update bestaande records in plaats van ze te importeren (geen Ongedaan maken)',
    'LBL_TEST'=> 'Test Import (geen opslag of wijzigen van gegevens)',
    'LBL_TRUNCATE_TABLE' => 'Leeg tabel voor de import (verwijder alle records)',
    'LBL_RELATED_ACCOUNTS' => 'Maak geen gerelateerde relaties aan',
    'LBL_NO_DATECHECK' => 'Sla datum check over (sneller, maar zal falen als welke datum ook verkeerd is)',
    'LBL_NO_EMAILS' => 'Geen e-mail notificaties versturen tijdens deze invoer',
    'LBL_NO_PRECHECK' => 'Native Modus',
    'LBL_STRICT_CHECKS' => 'Gebruik strikte regelset (controleren E-mailadressen en telefoonnummers ook)',
    'LBL_ERROR_SELECTING_RECORD' => 'Fout bij het selecteren record:',
    'LBL_ERROR_DELETING_RECORD' => 'Fout bij verwijderen record:',
    'LBL_NOT_SET_UP' => 'Import is niet ingesteld voor dit type module',
    'LBL_ARE_YOU_SURE' => 'Ben u zeker? Dit zal alle data in deze module verwijderen.',
    'LBL_NO_RECORD' => 'Geen record met dit ID bij te werken',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import is niet ingesteld voor dit type module',
    'LBL_DEBUG_MODE' => 'Staat debugging modus',
    'LBL_ERROR_INVALID_ID' => 'gegeven ID is te lang om te passen in het veld (maximale lengte is 36 tekens)',
    'LBL_ERROR_INVALID_PHONE' => 'Ongeldig telefoonnummer',
    'LBL_ERROR_INVALID_NAME' => 'String te lang om te passen in het veld',
    'LBL_ERROR_INVALID_VARCHAR' => 'String te lang om te passen in het veld',
    'LBL_ERROR_INVALID_DATE' => 'Ongeldige datum string',
    'LBL_ERROR_INVALID_DATETIME' => 'Ongeldige datetime',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Ongeldige datetime',
    'LBL_ERROR_INVALID_TIME' => 'Ongeldige tijd',
    'LBL_ERROR_INVALID_INT' => 'Ongeldige integer waarde',
    'LBL_ERROR_INVALID_NUM' => 'Ongeldige numerieke waarde',
    'LBL_ERROR_INVALID_EMAIL'=>'Ongeldig e-mailadres',
    'LBL_ERROR_INVALID_USER'=>'Ongeldige gebruikersnaam of ID',
    'LBL_ERROR_INVALID_TEAM' => 'Ongeldige team naam of ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Ongeldige account naam of ID',
    'LBL_ERROR_INVALID_RELATE' => 'Ongeldig relatie veld',
    'LBL_ERROR_INVALID_CURRENCY' => 'Ongeldige valutawaarde',
    'LBL_ERROR_INVALID_FLOAT' => 'Ongeldig floating-point getal',
    'LBL_ERROR_NOT_IN_ENUM' => 'Waarde niet in keuzelijst. Toegestane waarden zijn:',
    'LBL_NOT_MULTIENUM' => 'Geen MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Import is niet ingesteld voor dit type module',
    'LBL_IMPORT_MODULE_NO_USERS' => 'WAARSCHUWING: U heeft geen gebruikers gedefinieerd op uw systeem. Als u importeert zonder het toevoegen van gebruikers worden alle records in aan de beheerder toegekend.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Niet te publiceren. Er is een ander gepubliceerd Import Kaart met dezelfde naam.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Niet in staat te un-publiceren van een kaart van een andere gebruiker. U bent eigenaar van een Import Kaart met dezelfde naam.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'De map',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'bestaat niet of is niet beschrijfbaar',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Het bestand kan niet worden opgehaald (ge',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Het bestand is te groot. Maximale grootte: ',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Wijzig de string \'upload_maxsize\' in config.php',
    'LBL_MODULE_NAME' => 'Importeer',
    'LBL_TRY_AGAIN' => 'Probeer opnieuw',
    'LBL_START_OVER' => 'Start opnieuw',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Het importbestand bevat {0} rijen. Het optimale aantal rijen is {1}. Meer rijen kan het importproces vertragen. Klik op OK om door te gaan met importeren. Klik op Annuleer om het importbestand aan te passen en opnieuw te uploaden.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'U kunt een systeembeheerder gebruiker niet importeren ',
    'ERR_MULTIPLE' => 'Er zijn meerdere kolommen gedefinieerd met dezelfde veldnaam .',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Er missen verplichte velden:',
    'ERR_MISSING_MAP_NAME' => 'Ontbrekende aangepaste mapping naam',
    'ERR_SELECT_FULL_NAME' => 'U kunt \'Volledige naam\' niet selecteren als \'Voornaam\' en \'Achternaam\' zijn geselecteerd.',
    'ERR_SELECT_FILE' => 'Selecteer het te importeren bestand.',
    'LBL_SELECT_FILE' => 'Selecteer bestand:',
    'LBL_CUSTOM' => 'Eigen opmaak',
    'LBL_CUSTOM_CSV' => 'Custom komma gescheiden bestand (csv)',
    'LBL_CSV' => 'Komma gescheiden bestand',
    'LBL_EXTERNAL_SOURCE' => 'een externe applicatie of service',
    'LBL_TAB' => 'Tab gescheiden bestand',
    'LBL_CUSTOM_DELIMITED' => 'Aangepaste gescheiden bestand',
    'LBL_CUSTOM_DELIMITER' => 'Velden begrensd door:',
    'LBL_FILE_OPTIONS' => 'Bestand opties',
    'LBL_CUSTOM_TAB' => 'Custom tab gescheiden bestand (tab)',
    'LBL_DONT_MAP' => '-- Dit veld niet gebruiken --',
    'LBL_STEP_MODULE' => 'In welke module wilt u data importeren?',
    'LBL_STEP_1_TITLE' => 'Stap 1: Selecteer de bron',
    'LBL_CONFIRM_TITLE' => 'Stap {0}: bevestig import bestandseigenschappen',
    'LBL_CONFIRM_EXT_TITLE' => 'Stap {0}: bevestig externe bron eigenschappen',
    'LBL_WHAT_IS' => 'Wat is de bron van de te importeren data?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'De aangepaste mapping voor Microsoft Outlook gaan uit van een importbestand gebaseerd op comma-gescheiden (.csv). Als uw importbestand tab-gescheiden is, zal de mapping niet overeenkomstig worden aangepast.',
    'LBL_ACT' => 'ACT!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Mijn opgeslagen bronnen:',
    'LBL_PUBLISH' => 'publiceer',
    'LBL_DELETE' => 'verwijder',
    'LBL_PUBLISHED_SOURCES' => 'Gepubliceerde bronnen:',
    'LBL_UNPUBLISH' => 'Maak publiceren ongedaan',
    'LBL_NEXT' => 'Volgende >',
    'LBL_BACK' => '< Terug',
    'LBL_STEP_2_TITLE' => 'Stap 2: Ophalen van de ge-exporteerde file',
    'LBL_HAS_HEADER' => 'Koptekst boven de kolommen:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notities:',
    'LBL_NOW_CHOOSE' => 'Kies nu het te importeren bestand:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 en 2000 kunnen data in het <b>Komma gescheiden waarden</b> formaat exporteren. Dit kan gebruikt worden om data in dit systeem te importeren. Om data van vanuit Outlook te exporteren volgt u de volgende stappen:',
    'LBL_OUTLOOK_NUM_1' => 'Start <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Selecteer het <b>bestand</b> menu, daarna de <b>Importeren en exporteren ...</b> menu optie',
    'LBL_OUTLOOK_NUM_3' => 'Kies<b>Exporteer naar bestand</b> en klik op Volgende',
    'LBL_OUTLOOK_NUM_4' => 'Kies <b>Komma gescheiden waarden (Windows)</b> en klik <b>Volgende</b>.<br>  Let op: Het kan zijn dat u een melding krijgt om eerst de export component te installeren',
    'LBL_OUTLOOK_NUM_5' => 'Selecteer de <b>contactpersonen</b> map and klik <b>Volgende</b>. U kunt verschillende contactpersoon mappen selecteren. Als uw contacten in meerdere mappen zijn opgeslagen',
    'LBL_OUTLOOK_NUM_6' => 'Kies een bestandsnaam en klik op <b>Volgende</b>',
    'LBL_OUTLOOK_NUM_7' => 'Klik <b>Voltooien</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com kan data exporteren in het <b>Comma Separated Values</b> formaat. Dit kan gebruikt worden om de data te importeren in dit systeem. Om uw data op de juiste manier te exporteren vanuit Salesforce.com volgt u de volgende stappen:',
    'LBL_SF_NUM_1' => 'Open uw webbrowser en ga naar http://www.salesforce.com, log in met uw accountgegevens (e-mail adres en wachtwoord)',
    'LBL_SF_NUM_2' => 'Klik op het tabblad <b>Reports</b> aan de bovenzijde in het menu',
    'LBL_SF_NUM_3' => 'Om accounts te exporteren:</b> Klik op de <b>Active Accounts</b> link<br><b>Om contact personene te exporteren:</b> Klik op de <b>Mailing List</b> link',
    'LBL_SF_NUM_4' => 'In <b>Stap 1: Select your report type</b>, selecteer <b>Tabular Report</b>Klik <b>Next</b>',
    'LBL_SF_NUM_5' => 'In <b>Stap 2: Select the report columns</b>, Kies de kolommen die u wilt exporteren en klik <b>Next</b>',
    'LBL_SF_NUM_6' => 'In <b>Step 3: Select the information to summarize</b>, gewoon op <b>Next</b> klikken.',
    'LBL_SF_NUM_7' => 'In <b>Step 4: Order the report columns</b>, Gewoon op <b>Next</b> klikken',
    'LBL_SF_NUM_8' => 'In <b>Step 5: Select your report criteria</b>, onder <b>Start Date</b>, kies een datum ver genoeg in de tijd terug om al uw berijven/contacten te selecteren. U kunt ook een sub selectie creeeren door gebruik te maken van de geavanceerde criteria. Wanneer u klaar bent klik op <b>Run Report</b>',
    'LBL_SF_NUM_9' => 'Er wordt een rapport gegenereerd, en de pagina wordt weergegeven <b>Report Generation Status: Complete.</b> Klik nu op <b>Export to Excel</b>',
    'LBL_SF_NUM_10' => 'In <b>Export Report:</b>, voor <b>Export File Format:</b>, kies <b>Comma Delimited .csv</b>. Klik <b>Export</b>.',
    'LBL_SF_NUM_11' => 'Een dialoog venster verschijnt waarin u de locatie kunt opgeven waarnaar u het bestand wilt opslaan.',
    'LBL_IMPORT_ACT_TITLE' => 'ACT! kan gegevens exporteren in de <b>Comma Separated Values-formaat,</b> die gegevens kunnen geimporteerdworden in het systeem. ! Om uw gegevens te exporteren uit ACT, volg de onderstaande stappen:',
    'LBL_ACT_NUM_1' => 'Start <b> ACT!</b>',
    'LBL_ACT_NUM_2' => 'Selecteer het <b>Bestand</b> menu, de <b>Data Exchange</b> menu-optie, dan de menu-optie <b>Exporteren ...</b>',
    'LBL_ACT_NUM_3' => 'Selecteer het bestandstype <b>Tekst-Delimited</b>',
    'LBL_ACT_NUM_4' => 'Kies een bestandsnaam en locatie voor de geëxporteerde gegevens en klik op <b>Volgende</b>',
    'LBL_ACT_NUM_5' => 'Selecteer <b>Enkel contact records</b>',
    'LBL_ACT_NUM_6' => 'Klik op de knop <b>Opties ...</b>',
    'LBL_ACT_NUM_7' => 'Selecteer <b>komma</b> als het veld scheidingsteken',
    'LBL_ACT_NUM_8' => 'Vinke de <b>Ja, exporteer veldnamen</b> checkbox aan en klok op <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Klik op <b>Volgende</b>',
    'LBL_ACT_NUM_10' => 'Selecteer <b>alle records</b> en klik vervolgens op <b>Voltooien</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Veel software applicaties bieden de mogelijkheid om data te exporteren naar <b>Komma-gescheiden bestand (.csv)</b>. Over het algemeen moeten de volgende stappen worden gevolgd:',
    'LBL_CUSTOM_NUM_1' => 'Start de applicatie en open het te exporteren bestand',
    'LBL_CUSTOM_NUM_2' => 'Selecteer de <b>Opslaan als...</b> of <b>Exporteren...</b> menu optie',
    'LBL_CUSTOM_NUM_3' => 'Sla de file op in een <b>CSV</b> of <b>Komma gescheiden waarden</b> formaat',
    'LBL_IMPORT_TAB_TITLE' => 'Veel software applicaties bieden de mogelijkheid om data te exporteren naar <b>Tab-gescheiden bestand (.tsv of .tab)</b>. Over het algemeen moeten de volgende stappen worden gevolgd:',
    'LBL_TAB_NUM_1' => 'Start de applicatie en open het te exporteren bestand',
    'LBL_TAB_NUM_2' => 'Selecteer de <b>Opslaan als...</b> of <b>Exporteren...</b> menu optie',
    'LBL_TAB_NUM_3' => 'Sla de file op in een <b>TSV</b> of <b>Tab-gescheiden waarden</b> formaat',
    'LBL_STEP_3_TITLE' => 'Stap 3: Bevestig de velden en importeer',
    'LBL_STEP_DUP_TITLE' => 'Stap {0}: controleer op mogelijke dubbelen',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Selecteer in de lijst hieronder de juiste velden uit uw te importeren databestand die moeten worden opgeslagen onder het betreffende veld van dit systeem. Als u klaar bent klikt u op <b>Nu importeren</b>:',
    'LBL_DATABASE_FIELD' => 'Databaseveld',
    'LBL_HEADER_ROW' => 'Koptekst',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Selecteer als de bovenste regel van het importbestand een headerregel bevat met labels van velden.',
    'LBL_ROW' => 'Rij',
    'LBL_SAVE_AS_CUSTOM' => 'Sla deze indeling op als een eigen indeling:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Custom Mapping Naam:',
    'LBL_CONTACTS_NOTE_1' => 'Ofwel \'Achternaam\' of \'Volledige naam\' moeten zijn toegewezen.',
    'LBL_CONTACTS_NOTE_2' => 'Als de \'Volledige naam\' is toegewezen, dan worden \'Voornaam\' en \'Achternaam\' genegeerd.',
    'LBL_CONTACTS_NOTE_3' => 'Als de \'Volledige naam\' is toegewezen, dan wordt de data in \'Volledige naam\' opgesplitst in \'Voornaam\'  en \'Achternaam\'.',
    'LBL_CONTACTS_NOTE_4' => 'Velden in \'Adres 2\' en \'Adres 3\' worden samengevoegd met het veld \'Adres\'.',
    'LBL_ACCOUNTS_NOTE_1' => 'Relatienaam moet zijn toegewezen.',
    'LBL_REQUIRED_NOTE' => 'Verplichte veld(en):',
    'LBL_IMPORT_NOW' => 'Nu Importeren',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Kan het geimporteerde bestand niet lezen.',
    'LBL_NOT_SAME_NUMBER' => 'Er zijn niet hetzelfde aantal velden per regel in het bestand.',
    'LBL_NO_LINES' => 'Er zijn geen bestandsregels in het te importeren bestand ( bestand is leeg)',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Het import bestand is al verwerkt of bestaat niet',
    'LBL_SUCCESS' => 'Succes:',
	'LBL_FAILURE' => 'Importeren mislukt:',
    'LBL_SUCCESSFULLY' => 'Succesvol geimporteerd',
    'LBL_LAST_IMPORT_UNDONE' => 'Uw laatste import bewerking is ongedaan gemaakt',
    'LBL_NO_IMPORT_TO_UNDO' => 'Er bestaat geen import bewerking die ongedaan kan worden gemaakt.',
    'LBL_FAIL' => 'Mislukt:',
    'LBL_RECORDS_SKIPPED' => 'Er is een aantal records overgeslagen omdat er een of meer verplichte velden missen',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Er is een aantal records overgeslagen omdat de id`s als bestaan of omdat deze langer zijn dan 36 karakters',
    'LBL_RESULTS' => 'Resultaten',
    'LBL_CREATED_TAB' => 'Aangemaakte records',
    'LBL_DUPLICATE_TAB' => 'Dubbelen',
    'LBL_ERROR_TAB' => 'Fouten',
    'LBL_IMPORT_MORE' => 'Meer importeren',
    'LBL_FINISHED' => 'Klaar',
    'LBL_UNDO_LAST_IMPORT' => 'Maak de laatste import bewerking ongedaan',
    'LBL_LAST_IMPORTED'=>'Laatst geimporteerd',
    'ERR_MULTIPLE_PARENTS' => 'Er kan maar ',
    'LBL_DUPLICATES' => 'Duplicaten gevonden',
    'LNK_DUPLICATE_LIST' => 'Download Lijst van duplicaten',
    'LNK_ERROR_LIST' => 'Download lijst met fouten',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download de items die niet konden worden geimporteerd',
    'LBL_UNIQUE_INDEX' => 'Kies een index voor duplicaatvergelijking',
    'LBL_VERIFY_DUPS' => 'Verifieer dubbele items tegen geselecteerde indices',
    'LBL_INDEX_USED' => 'Indices gebruikt',
    'LBL_INDEX_NOT_USED' => 'Indices niet gebruikt',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Uploaden mislukt. Controleer de permissies van de cache map.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Unieke ID-nummer',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Naam of ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefoonnummer',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Team naam of ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Willekeurige tekst',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Willekeurige tekst',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Willekeurige tekst',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Tijd',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Datum',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datum en Tijd',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Gebruikersnaam of ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' or \'1\' ',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lijst',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-mailadres',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numeriek (geen decimaal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeriek (geen decimaal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numeriek (geen decimaal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeriek (Decimaal toegestaan)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeriek (Decimaal toegestaan)',
    'LBL_DATE_FORMAT' => 'Datum Formaat:',
    'LBL_TIME_FORMAT' => 'Tijd Formaat:',
    'LBL_TIMEZONE' => 'Tijdzone:',
    'LBL_ADD_ROW' => 'Veld toevoegen',
    'LBL_REMOVE_ROW' => 'Verwijder Veld',
    'LBL_DEFAULT_VALUE' => 'Standaardwaarde',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Toon geavanceerde opties',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Verberg geavanceerde opties',
    'LBL_SHOW_NOTES' => 'Bekijk notities',
    'LBL_HIDE_NOTES' => 'Verberg notities',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Toon preview kolommen',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Verberg preview kolommen',
    'LBL_SAVE_MAPPING_AS' => 'Opslaan als Mapping',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Enkele aanhalingsteken (\')',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dubbele aanhalingstekens (\\")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Geen',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Overig:',
    'LBL_IMPORT_COMPLETE' => 'Importeren compleet',
    'LBL_IMPORT_COMPLETED' => 'Import compleet',
    'LBL_IMPORT_RECORDS' => 'Importeren Records',
    'LBL_IMPORT_RECORDS_OF' => 'van',
    'LBL_IMPORT_RECORDS_TO' => 'tot',
    'LBL_CURRENCY' => 'Valuta',
	'LBL_CURRENCY_SIG_DIGITS' => 'Valuta significante cijfers',
    'LBL_NUMBER_GROUPING_SEP' => 'duizendtal scheidingsteken',
    'LBL_DECIMAL_SEP' => 'Decimaalteken',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Naam Display Formaat',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Voorbeeld',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '\\"s\\" Aanhef \\"f\\" Voornaam, \\"l\\" Achternaam',
    'LBL_CHARSET' => 'Bestandscodering',
    'LBL_MY_SAVED_HELP' => 'Een opgeslagen mapping specificeert een eerder gebruikte combinatie van een specifieke gegevensbron en een set van database velden mappings voor een importbestand. <br> Klik op <b>Publiceren</b> om de mapping beschikbaar te maken voor andere gebruikers. <br> Klik <b>Un-Publiceren</b> om de mapping  ontoegankelijk te maken voor andere gebruikers.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Gebruik deze optie om uw vooraf ingestelde instellingen voor het importeren,  met inbegrip van invoer eigenschappen, mappings, en alle dubbele controle-instellingen, toe te passen op deze import. <br><br> Klik op <b>Publiceren</b> om de mapping beschikbaar te maken voor andere gebruikers.<br> Klik op <b>Un-Publiceren</b> om de mapping onbeschikbaar te maken voor andere gebruikers.<br> Klik op <b>Verwijderen</b> om een  mapping te verwijderen voor alle gebruikers.',
    'LBL_MY_PUBLISHED_HELP' => 'Een opgeslagen mapping specificeert een eerder gebruikte combinatie van een specifieke gegevensbron en een set van database velden mappings voor een importbestand. ',
    'LBL_ENCLOSURE_HELP' => '<p>Het <b>qualifier teken</b> wordt gebruikt om de inhoud te omsluiten, met inbegrip van alle tekens die worden gebruikt als scheidingstekens. <br><br> Bijvoorbeeld: Als het scheidingsteken een komma (,) is en de qualifier is een aanhalingsteken (\\"), <br> Als <b>\\"Almelo, Nederland\\"</b> wordt geimporteerd in een veld in de applicatie verschijnt dit als <b>Almelo, Nederland</b> <br>  Als er geen qualifier tekens, of als een ander teken de qualifier is, <br>  <b>\\"Almelo, Nederland\\"</b> wordt geimporteerd in twee aangrenzende velden als <b>\\"Almelo </b>en<b>, Nederland\\"</b> <br><br>  Opmerking: Het import bestand bevat mogelijk geen qualifier karakters. <br>Het standaard qualifier karakter voor komma-en tab-gescheiden bestanden die zijn gemaakt in Excel is een aanhalingsteken. </p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Selecteer deze optie als het karakter dat velden scheidt in het importbestand een <b>komma,</b> is of als de bestandsextensie .csv is.',
    'LBL_DELIMITER_TAB_HELP' => 'Selecteer deze optie als het karakter dat velden scheidt in het importbestand een <b>TAB,</b> is en de bestandsextensie .txt is.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Selecteer deze optie als het karakter dat de velden scheidt in het importbestand geen komma of een TAB is en typ het teken in het veld ernaast.',
    'LBL_DATABASE_FIELD_HELP' => 'Selecteer een veld uit de lijst van alle velden bestaande in de database voor deze module.',
    'LBL_HEADER_ROW_HELP' => 'Dit zijn de veldnamen in de kopregel van het importbestand.',
    'LBL_DEFAULT_VALUE_HELP' => 'Geef een waarde aan om te gebruiken voor het veld in het record dat wordt aangemaakt of bijgewerkt, indien het veld in het importbestand geen gegevens bevat.',
    'LBL_ROW_HELP' => 'Dit zijn de gegevens in de eerste niet-kopregel van het importbestand.',
    'LBL_SAVE_MAPPING_HELP' => 'Voer een naam in voor de mapping van database velden die hierboven zijn gebruikt voor het toewijzen van de velden in het importbestand velden. <br>  De set van velden, met inbegrip van de volgorde van de velden en de gegevensbron geselecteerd in Import Stap 1, zal worden opgelsagen tijdens de importeer poging.<br>  De opgeslagen mapping kan dan worden geselecteerd in Import Stap 1 voor een volgende importer.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Geef de instellingen in het importbestand om ervoor te zorgen dat de gegevens correct worden geïmporteerd.  Deze instellingen zullen  uw voorkeuren niet overschrijven.  De records die worden gemaakt of bijgewerkt bevatten de instellingen die zijn ingesteld in uw pagina Mijn account.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Selecteer de velden in het importbestand die worden gebruikt voor het de controlere op  duplicaten.<br>  Als de gegevens in de geselecteerde velden overeenkomen met gegevens in velden van bestaande records, zullen nieuwe records niet worden gemaakt voor de rijen met de dubbele veldgegevens. <br>  De rijen met dubbele veldgegevens zullen worden geïdentificeerd in het import resultaten.',
    'LBL_IMPORT_STARTED' => 'Import gestart:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Importbestand instellingen',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Het record kon niet worden bijgewerkt vanwege een rechten probleem',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Weet u zeker dat u deze mapping wilt verwijderen ?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Als het importbestand is geexporteerd van een van de volgende bronnen, selecteer dan welke.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Selecteer het bronbestand om automatisch aangepaste mappings toe te passen om het mappingproces te vereenvoudigen (volgende stap).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Gebruik deze optie om data direct te importeren uit externe applicaties of service, zoals Gmail.',
    'LBL_EXAMPLE_FILE' => 'Download import bestand template',
    'LBL_CONFIRM_IMPORT' => 'U heeft ervoor gekozen om records bij te werken tijdens het importproces. Aanpassingen gemaakt bij bestaande records kunnen niet ongedaan gemaakt worden. Echter, records aangemaakt tijdens het importproces kunnen wel ongedaan gemaakt worden (verwijderd), indien gewenst. Klik Annuleer om alleen nieuwe records aan te maken of klik OK om door te gaan.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Waarschuwing: u heeft al een custom mapping geselecteerd voor deze import, wilt u verder gaan?',
    'LBL_EXTERNAL_FIELD' => 'Extern veld',
    'LBL_SAMPLE_URL_HELP' => 'Download een voorbeeld importbestand met een kopregel met de modulevelden. Het bestand kan worden gebruikt als een template om een importbestand aan te maken die de data bevat die u wilt importeren.',
    'LBL_AUTO_DETECT_ERROR' => 'Het veld-scheidingsteken in het importbestand kan niet worden gevonden. Controleer de instellingen in de eigenschappen van het importbestand.',
    'LBL_MIME_TYPE_ERROR_1' => 'Het geselecteerde bestand lijkt geen gescheiden lijst te bevatten. Controleer het bestandstype. Wij raden een comma-gescheiden bestand aan (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Om door te gaan met het importeren van het geselecteerde bestand, klik OK. Om een nieuw bestand te uploaden, klik Probeer opnieuw.',
    'LBL_FIELD_DELIMETED_HELP' => 'Het veld scheidingsteken specificeert het teken dat gebruikt wordt om de veld kolommen te scheiden.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Selecteer een bestand met data dat is gescheiden met een scheidingsteken, zoals een comma- of tab-gescheiden bestand. Bestanden van het type .csv zijn aanbevolen.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Niet mogelijk om de source adapter te laden, probeer het later opnieuw.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Niet mogelijk om de externe feed te laden, probeer het later opnieuw.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache map is niet schrijfbaar.',
    'LBL_ADD_FIELD_HELP' => 'Gebruik deze optie om een waarde aan een veld toe te kennen aan alle records die worden aangemaakt of gewijzigd. Selecteer het veld en kies een waarde voor dat veld in de standaard waarde kolom.',
    'LBL_MISSING_HEADER_ROW' => 'Geen kopregel gevonden',
    'LBL_CANCEL' => 'Annuleer',
    'LBL_SELECT_DS_INSTRUCTION' => 'Klaar om te beginnen met importeren? Selecteer de bron van de data die u wilt importeren.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Selecteer een bestand op uw computer die de data bevat die u wilt importeren. Of download de template om een snelle start te hebben voor het aanmaken van het importbestand.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Hier ziet u hoe de eerste regels van het importbestand eruitzien met de gedetecteerde bestandseigenschappen. Als een kopregel is herkend, wordt deze getoond in de bovenste regel van de tabel. Bekijk de eigenschappen van het importbestand om de gevonden eigenschappen aan te passen en extra instellingen te maken. Het bijwerken van de instellingen zal de data bijwerken die getoond worden in de tabel.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'De tabel hieronder bevat alle velden in de module die kunnen worden gemapped naar de data in het importbestand. Als het bestand een kopregel bevat, worden de kolommen gemapped naar de overeenkomstige velden. Controleer de mapping om er zeker van te zijn dat deze zijn wat u ervan verwacht en maak indien nodig aanpassingen. Om u te helpen met het controleren van de mapping, toont regel 1 de data in het bestand. Zorg ervoor dat alle verplichte velden gemapped worden (aangemerkt met een sterretje).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Om te voorkomen dat u dubbele records aanmaakt, selecteer welke velden u wilt mappen om te controleren op dubbele data tijdens de dataimport. Waarden binnen bestaande records in de geselecteerde velden, zullen worden gecontroleerd met de data in het importbestand. Als overeenkomstige data wordt gevonden, zullen de regels in het importbestand die de data bevatten, worden getoond samen met het importresultaat (volgende pagina). U kunt dan kiezen welke van deze regels te importeren.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Log in',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Uitloggen',
    'LBL_DUP_HELP' => 'Dit zijn de regels in het importbestand die niet zijn geimporteerd omdat ze data bevatten die overeenkomen met bestaande records, gebaseerd op de dubbelen check. De data die overeenkomt is gemarkeerd. Om deze regels opnieuw te importeren, download de lijst, maak wijzigingen en klik op Importeer opnieuw.',
    'LBL_DESELECT' => 'Deselecteren',
    'LBL_SUMMARY' => 'Samenvatting',
    'LBL_OK' => 'OK ',
    'LBL_ERROR_HELP' => 'Dit zijn de regels in het importbestand die niet zijn geimporteerd vanwege fouten. Om deze regels opnieuw te importeren, download de lijst, maak wijzigingen en klik op Importeer opnieuw.',
    'LBL_EXTERNAL_MAP_HELP' => 'De tabel hieronder bevat de velden in de externe bron en de modulevelden met wie ze zijn gemapped. Controleer de mapping om er zeker van te zijn dat ze correct zijn en maak wijzigingen indien nodig. Zorg ervoor dat u alle verplichte velden heeft gemapped (aangemerkt met een sterretje).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Er zal worden geprobeerd contactpersonen binnen alle Google contactgroups te importeren.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'De gebruikersnaam voor de nieuw aangemaakte gebruikers, zal de volledige naam van de Google contact zijn. De gebruikersnamen kunnen worden gewijzigd nadat de records zijn aangemaakt.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Klik Import now om met de import te starten. Records zullen alleen worden aangemaakt voor regels met achternaam. Records zullen niet worden aangemaakt voor data aangemerkt als dubbel, gebaseerd op naam en/of emailadres overeenkomstig bestaande records.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Deze kolommen tonen de velden in de externe bron die data bevatten die gebruikt zal worden om nieuwe records aan te maken.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Geef een waarde aan voor het veld in de aangemaakte records als het veld in de externe bron geen data bevat.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Om de nieuwe records toe te kennen aan een gebruiker anders dan uzelf, gebruik de standaard waarde kolom om een andere gebruiker te selecteren.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Om de nieuwe records toe te kennen aan een team anders dan uw standaard team(s), gebruik de standaard waarde kolom om andere team te selecteren.',
    'LBL_SIGN_IN_HELP' => 'Om deze service in te schakelen, log aub in onder de externe accountstab binnen uw gebruikersinstellingen pagina.'
);

global $timedate;
?>
