<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/Contacts/JS/customJS.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lidnummer_c',
            'label' => 'LBL_LIDNUMMER',
          ),
          1 => 
          array (
            'name' => 'geslacht_c',
            'studio' => 'visible',
            'label' => 'LBL_GESLACHT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'voorletters_c',
            'label' => 'LBL_VOORLETTERS',
          ),
          1 => 
          array (
            'name' => 'tussenvoegsels_c',
            'label' => 'LBL_TUSSENVOEGSELS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'Contact fax number',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'huisnummer_c',
            'label' => 'LBL_HUISNUMMER_c',
          ),
          1 => 
          array (
            'name' => 'toevoeging_c',
            'label' => 'LBL_TOEVOEGING_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'klantnummeryuniokraamzorg_c',
            'label' => 'LBL_KLANTNUMMERYUNIOKRAAMZORG',
          ),
          1 => 
          array (
            'name' => 'actiecode_c',
            'label' => 'LBL_ACTIECODE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'gebruikersnaam_c',
            'label' => 'LBL_GEBRUIKERSNAAM',
          ),
          1 => 
          array (
            'name' => 'wachtwoord_c',
            'label' => 'LBL_WACHTWOORD',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'ik_ben_lid_van_ledenpanel_c',
            'label' => 'LBL_IK_BEN_LID_VAN_LEDENPANEL',
          ),
          1 => array (
            'name' => 'Ik_ben_lid_van_ledenservice_c',
            'label' => 'LBL_IK_BEN_LID_VAN_LEDENSERVICE_C',
            'displayParams' =>
            array (
              'field' =>
              array (
                'onChange' => 'lidnummerShowHide()',
              ),
            ),
            ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'functie_c',
            'label' => 'LBL_FUNCTIE_C',
          ),
          1 => 
          array (
            'name' => 'collectiviteitsnaam_c',
            'label' => 'LBL_COLLECTIVITEITSNAAM_C',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'zorg_schadeverzekeraar_c',
            'label' => 'LBL_ZORG_SCHADEVERZEKERAAR_C',
          ),
          1 => 
          array (
            'name' => 'polisnummer_c',
            'label' => 'LBL_POLISNUMMER_C',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'mantelzorger_c',
            'label' => 'LBL_MANTELZORGER_C',
          ),
          1 => 
          array (
            'name' => 'bewindvoerder_c',
            'label' => 'LBL_BEWINDVOERDER_C',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'project_name',
            'label' => 'LBL_PROJECT_NAME',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 'campaign_name',
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'collectiefindividueel_c',
            'studio' => 'visible',
            'label' => 'LBL_COLLECTIEFINDIVIDUEEL',
          ),
          1 => 
          array (
            'name' => 'lidmaatschap_c',
            'studio' => 'visible',
            'label' => 'LBL_LIDMAATSCHAP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'aanmelddatum_c',
            'label' => 'LBL_AANMELDDATUM',
          ),
          1 => 
          array (
            'name' => 'statuslid_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUSLID ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aantalgratismaanden_c',
            'label' => 'LBL_AANTALGRATISMAANDEN',
          ),
          1 => 
          array (
            'name' => 'iban_c',
            'label' => 'LBL_IBAN',
            'displayParams' =>
            array (
              'field' =>
              array (
                'onmouseleave' => 'validateIBAN()',
              ),
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'personeelsnummer_c',
            'label' => 'LBL_PERSONEELSNUMMER',
          ),
          1 => 
          array (
            'name' => 'welkomstgeschenk_c',
            'studio' => 'visible',
            'label' => 'LBL_WELKOMSTGESCHENK',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'hoekentuons_c',
            'studio' => 'visible',
            'label' => 'LBL_HOEKENTUONS',
          ),
          1 => 
          array (
            'name' => 'namelijk_c',
            'label' => 'LBL_NAMELIJK',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'automatischeincasso_c',
            'label' => 'LBL_AUTOMATISCHEINCASSO',
          ),
          1 => 
          array (
            'name' => 'incassodatumondertekening_c',
            'label' => 'LBL_INCASSODATUMONDERTEKENING ',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'zorgverzekeraar_c',
            'studio' => 'visible',
            'label' => 'LBL_ZORGVERZEKERAAR',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'lidgewordeninmedipwinkel_c',
            'label' => 'LBL_LIDGEWORDENINMEDIPWINKEL',
          ),
          1 => 
          array (
            'name' => 'lidgewordeninvegrowinkel_c',
            'label' => 'LBL_LIDGEWORDENINVEGROWINKEL',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
        1 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
