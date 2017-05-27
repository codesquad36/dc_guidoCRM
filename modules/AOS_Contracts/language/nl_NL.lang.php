<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_CONTRACT_ACCOUNT' => 'Opdrachtgever',
    'LBL_OPPORTUNITY' => 'Kans',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd',
    'LBL_MODIFIED_ID' => 'Gewijzigd door Id',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door',
    'LBL_CREATED' => 'Gemaakt',
    'LBL_CREATED_ID' => 'Gemaakt door ID',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Contract naam',
    'LBL_CREATED_USER' => 'Aangemaakt door',
    'LBL_MODIFIED_USER' => 'Gewijzigd door',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_FORM_TITLE' => 'Contracten lijst',
    'LBL_MODULE_NAME' => 'Contracten',
    'LBL_MODULE_TITLE' => 'Contracten: Home',
    'LBL_HOMEPAGE_TITLE' => 'Mijn contracten',
    'LNK_NEW_RECORD' => 'Maak contract',
    'LNK_LIST' => 'Bekijk contracten',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Importeer contracten',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek contracten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Contracten',
    'LBL_NEW_FORM_TITLE' => 'Nieuw contract',
    'LBL_CONTRACT_NAME' => 'Contract naam',
    'LBL_REFERENCE_CODE ' => 'Referentie code',
    'LBL_START_DATE' => 'Start datum',
    'LBL_END_DATE' => 'Eind datum',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract waarde',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Datum ondertekening',
    'LBL_COMPANY_SIGNED_DATE' => 'Datum ondertekening',
    'LBL_RENEWAL_REMINDER_DATE' => 'Herinneringsdatum',
    'LBL_CONTRACT_TYPE' => 'Contract type',
    'LBL_CONTACT' => 'Contacten',
    'LBL_ADD_GROUP' => 'Toevoegen groep',
    'LBL_DELETE_GROUP' => 'Verwijderen groep',
    'LBL_GROUP_NAME' => 'Groep naam',
    'LBL_GROUP_TOTAL' => 'Groep total',
    'LBL_PRODUCT_QUANITY' => 'Hoeveelheid',
    'LBL_PRODUCT_NAME' => 'Producten',
    'LBL_PART_NUMBER' => 'Onderdeel Nummer',
    'LBL_PRODUCT_NOTE' => 'Notitie',
    'LBL_PRODUCT_DESCRIPTION' => 'Omschrijving',
    'LBL_LIST_PRICE' => 'Lijst',
    'LBL_DISCOUNT_TYPE' => 'Type',
    'LBL_DISCOUNT_AMT' => 'Korting',
    'LBL_UNIT_PRICE' => 'Verkoop prijs',
    'LBL_TOTAL_PRICE' => 'Totaal',
    'LBL_VAT' => 'BTW',
    'LBL_VAT_AMT' => 'BTW bedrag',
    'LBL_SERVICE_NAME' => 'Dienst',
    'LBL_SERVICE_LIST_PRICE' => 'Lijst',
    'LBL_SERVICE_PRICE' => 'Verkoop prijs',
    'LBL_SERVICE_DISCOUNT' => 'Korting',
    'LBL_LINE_ITEMS' => 'Lijn items',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotaal',
    'LBL_DISCOUNT_AMOUNT' => 'Korting',
    'LBL_TAX_AMOUNT' => 'BTW',
    'LBL_SHIPPING_AMOUNT' => 'Verzendkosten',
    'LBL_TOTAL_AMT' => 'Totaal',
    'LBL_GRAND_TOTAL' => 'Totaal',
    'LBL_SHIPPING_TAX' => 'BTW verzendkosten',
    'LBL_SHIPPING_TAX_AMT' => 'BTW verzendkosten',
    'LBL_ADD_PRODUCT_LINE' => 'Toevoegen product lijn',
    'LBL_ADD_SERVICE_LINE' => 'Toevoegen service lijn ',
    'LBL_PRINT_AS_PDF' => 'Printen als PDF',
    'LBL_EMAIL_PDF' => 'E-mail PDF',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Contract voor',
    'LBL_NO_TEMPLATE' => 'Fout\nGeen sjabloon gevonden. Indien u geen Contract sjabloon gecreëerd heeft, ga dan naar de PDF sjabloon module en maak er een',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contractwaarde (standaardvaluta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotaal (Standaard valuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Korting (Standaard valuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Standaard valuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Verzendkosten (Standaard valuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totaal (Standaard valuta)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'BTW verzendkosten (Standaard valuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'BTW verzendkosten (Standaard valuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totaal (Standaard valuta)',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Post groepen',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product offertes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offertes: Contracten',
    'LBL_AOS_CONTRACTS' => 'Contracten',
);
?>
