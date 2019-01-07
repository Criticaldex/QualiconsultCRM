<?php
$viewdefs ['Calls'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Reminders/Reminders.js',
        ),
      ),
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
          1 => '<input type="hidden" name="send_invites">',
          2 => '<input type="hidden" name="user_invitees">',
          3 => '<input type="hidden" name="lead_invitees">',
          4 => '<input type="hidden" name="contact_invitees">',
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id="SAVE_HEADER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.calls.fill_invitees();document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\'; {/if}formSubmitCheck();;" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" id="SAVE_SEND_HEADER" class="button" onclick="document.EditView.send_invites.value=\'1\';SUGAR.calls.fill_invitees();document.EditView.action.value=\'Save\';document.EditView.return_action.value=\'EditView\';document.EditView.return_module.value=\'{$smarty.request.return_module}\';formSubmitCheck();;" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
          ),
          3 => 
          array (
            'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" id="CLOSE_CREATE_HEADER" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="SUGAR.calls.fill_invitees(); document.EditView.status.value=\'Held\'; document.EditView.action.value=\'Save\'; document.EditView.return_module.value=\'Calls\'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value=\'EditView\'; document.EditView.return_id.value=\'{$fields.id.value}\'; formSubmitCheck();" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
        ),
        'buttons_footer' => 
        array (
          0 => 
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id ="SAVE_FOOTER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.calls.fill_invitees();document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\'; {/if} formSubmitCheck();"type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" id="save_and_send_invites_footer" class="button" onclick="document.EditView.send_invites.value=\'1\';SUGAR.calls.fill_invitees();document.EditView.action.value=\'Save\';document.EditView.return_action.value=\'EditView\';document.EditView.return_module.value=\'{$smarty.request.return_module}\'; formSubmitCheck();"type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
          ),
          3 => 
          array (
            'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" id="close_and_create_new_footer" class="button" onclick="SUGAR.calls.fill_invitees(); document.EditView.status.value=\'Held\'; document.EditView.action.value=\'Save\'; document.EditView.return_module.value=\'Meetings\'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value=\'EditView\'; document.EditView.return_id.value=\'{$fields.id.value}\'; formSubmitCheck();"type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
        ),
        'headerTpl' => 'modules/Calls/tpls/header.tpl',
        'footerTpl' => 'modules/Calls/tpls/footer.tpl',
      ),
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
      'javascript' => '{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim}
function formSubmitCheck(){ldelim}var duration=true;if(typeof(isValidDuration)!="undefined"){ldelim}duration=isValidDuration();{rdelim}if(check_form(\'EditView\') && duration){ldelim}SUGAR.ajaxUI.submitForm("EditView");{rdelim}{rdelim}</script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CALL_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_call_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'displayParams' => 
            array (
              'updateCallback' => 'SugarWidgetScheduler.update_time();',
            ),
            'label' => 'LBL_DATE_TIME',
          ),
          1 => 
          array (
            'name' => 'tipoc_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOC',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'direction',
              ),
              1 => 
              array (
                'name' => 'status',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'colaborador_c',
            'studio' => 'visible',
            'label' => 'LBL_COLABORADOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'contacts_calls_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'of_oferta_calls_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>