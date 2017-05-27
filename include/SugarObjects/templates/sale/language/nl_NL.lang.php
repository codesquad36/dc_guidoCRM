<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Verkoop',
    'LBL_MODULE_TITLE' => 'Verkoop',
    'LBL_SEARCH_FORM_TITLE' => 'Zoeken',
    'LBL_VIEW_FORM_TITLE' => 'Verkoop bekijken',
    'LBL_LIST_FORM_TITLE' => 'Verkoop lijst',
    'LBL_SALE_NAME' => 'Verkoop naam:',
    'LBL_SALE' => 'Verkoop:',
    'LBL_NAME' => 'Verkoop naam',
    'LBL_LIST_SALE_NAME' => 'Naam',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_AMOUNT' => 'Bedrag',
    'LBL_LIST_DATE_CLOSED' => 'Sluiten',
    'LBL_LIST_SALE_STAGE' => 'Verkoopstadium',
    'LBL_ACCOUNT_ID' => 'Relatie ID',
    'LBL_CURRENCY_ID' => 'Valuta ID',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
    //END DON'T CONVERT
    'UPDATE' => 'Verkoop - Valuate update',
    'UPDATE_DOLLARAMOUNTS' => 'Update US Dollar waarden',
    'UPDATE_VERIFY' => 'Verifieer bedragen',
    'UPDATE_VERIFY_TXT' => 'Controleert of dat de waarden van het bedrag in de verkoop geldig decimale getallen met alleen numerieke characters(0-9) en decimals(.) zijn',
    'UPDATE_FIX' => 'Repareer bedragen',
    'UPDATE_FIX_TXT' => 'Probeert ongeldige decimale waarden te herstellen. De originele waarden worden gebackup-ed in het database veld \'bedrag backup\'. Wanneer u deze functie gebruikt en u stuit op fouten, start de actie dan pas op nieuw nadat u de backup terug hebt gezet.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update de U.S. Dollar bedragen voor kansen gebaseerd op de huidige set van wisselkoersen. Deze waarde wordt gebruikt voor de berekening van grafieken en valuta lijsten.',
    'UPDATE_CREATE_CURRENCY' => 'Nieuwe valuta:',
    'UPDATE_VERIFY_FAIL' => 'Controle van record mislukt:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Huidig bedrag:',
    'UPDATE_VERIFY_FIX' => 'Na herstel wordt dit',
    'UPDATE_INCLUDE_CLOSE' => 'Inclusief gesloten records',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nieuw bedrag:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nieuwe valuta:',
    'UPDATE_DONE' => 'Klaar',
    'UPDATE_BUG_COUNT' => 'Fouten gevonden en geprobeerd op te lossen:',
    'UPDATE_BUGFOUND_COUNT' => 'Gevonden fouten:',
    'UPDATE_COUNT' => 'Bijgewerkte records:',
    'UPDATE_RESTORE_COUNT' => 'Records waarvan bedragen zijn teruggezet:',
    'UPDATE_RESTORE' => 'Bedragen terugzetten',
    'UPDATE_RESTORE_TXT' => 'Zet bedragen terug uit de backup die is gemaakt gedurende het herstel.',
    'UPDATE_FAIL' => 'Kon niet worden bijgewerkt- ',
    'UPDATE_NULL_VALUE' => 'Bedrag is NULL, wordt op 0 gezet -',
    'UPDATE_MERGE' => 'Valuta samenvoegen',
    'UPDATE_MERGE_TXT' => 'Meerdere valuta\'s samenvoegen met een eenheidsmunt. Als er meerdere valuta records zijn van dezelfde valuta, kunt u deze vervolgens samenvoegen. Dit zal ook het samenvoegen van de valuta\'s voor alle andere modules.',
    'LBL_ACCOUNT_NAME' => 'Relatienaam:',
    'LBL_AMOUNT' => 'Bedrag:',
    'LBL_AMOUNT_USDOLLAR' => 'Bedrag USD:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Verwachte afsluitdatum:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_NEXT_STEP' => 'Volgende stap:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_SALES_STAGE' => 'Verkoopstadium:',
    'LBL_PROBABILITY' => 'Waarschijnlijkheid (%):',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DUPLICATE' => 'Mogelijke dubbele verkoop',
    'MSG_DUPLICATE' => 'Door het aanmaken van deze deal maak je mogelijk een duplicaat record. Verkooprecords met dezelfde naam zijn hier weergegeven. <br> Klik op opslaan om verder te gaan met het creëren van deze verkoop, of op annuleren om terug naar de module te gaan zonder deze verkoop te creëren.',
    'LBL_NEW_FORM_TITLE' => 'Maak Verkoop',
    'LNK_NEW_SALE' => 'Maak Verkoop',
    'LNK_SALE_LIST' => 'Verkoop',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze verkoop te verwijderen.',
    'LBL_TOP_SALES' => 'Mijn Top Open verkoop',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen van deze verkoop?',
    'SALE_REMOVE_PROJECT_CONFIRM' => 'Weet je zeker dat je deze verkoop uit het Project wilt verwijderen?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verkoop',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_RAW_AMOUNT' => 'Ruw bedrag',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_MY_CLOSED_SALES' => 'Afgesloten verkopen',
    'LBL_TOTAL_SALES' => 'Totaal verkopen',
    'LBL_CLOSED_WON_SALES' => 'Gesloten gewonnen verkoop',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan ID',
    'LBL_CREATED_ID' => 'Gemaakt door ID',
    'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door gebruikersnaam',
    'LBL_SALE_INFORMATION' => 'Verkoop informatie',
    'LBL_CURRENCY_NAME' => 'Valuta naam',
    'LBL_CURRENCY_SYMBOL' => 'Valuta symbool',
    'LBL_EDIT_BUTTON' => 'Bewerken',
    'LBL_REMOVE' => 'Verwijderen',

);
