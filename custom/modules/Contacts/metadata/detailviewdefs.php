<?php
$viewdefs ['Contacts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                'name' => 'Manage Subscriptions',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
          'AOP_CREATE' => 
          array (
            'customCode' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'createPortalUser\';" value="{$MOD.LBL_CREATE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CREATE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'createPortalUser\';',
                'name' => 'buttonCreatePortalUser',
                'id' => 'createPortalUser_button',
              ),
              'template' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_DISABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'disablePortalUser\';" value="{$MOD.LBL_DISABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'disablePortalUser\';',
                'name' => 'buttonDisablePortalUser',
                'id' => 'disablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
          'AOP_ENABLE' => 
          array (
            'customCode' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'enablePortalUser\';" value="{$MOD.LBL_ENABLE_PORTAL_USER}"> {/if}',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
                'class' => 'button',
                'onclick' => 'this.form.action.value=\'enablePortalUser\';',
                'name' => 'buttonENablePortalUser',
                'id' => 'enablePortalUser_button',
              ),
              'template' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
            ),
          ),
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
          'file' => 'modules/Leads/Lead.js',
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
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
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
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
        8 => 
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
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        10 => 
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
        11 => 
        array (
          0 => 
          array (
            'name' => 'report_to_name',
            'label' => 'LBL_REPORTS_TO',
          ),
          1 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        12 => 
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
