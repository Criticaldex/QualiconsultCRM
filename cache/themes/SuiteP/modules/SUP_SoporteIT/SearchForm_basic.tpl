
<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<script>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
{/literal}
</script>
<div class="row">
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='document_name_basic'> {sugar_translate label='LBL_NAME' module='SUP_SoporteIT'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{if strlen($fields.document_name_basic.value) <= 0}
{assign var="value" value=$fields.document_name_basic.default_value }
{else}
{assign var="value" value=$fields.document_name_basic.value }
{/if}  
<input type='text' name='{$fields.document_name_basic.name}' 
    id='{$fields.document_name_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='-1'      accesskey='9'  >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='tema_basic' >{sugar_translate label='LBL_TEMA' module='SUP_SoporteIT'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{html_options id='tema_basic' name='tema_basic[]' options=$fields.tema_basic.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.tema_basic.value}
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='exp_date_basic' >{sugar_translate label='LBL_DOC_EXP_DATE' module='SUP_SoporteIT'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<span class="dateTime">
{assign var=date_value value=$fields.exp_date_basic.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.exp_date_basic.name}" id="{$fields.exp_date_basic.name}" value="{$date_value}" title=''  tabindex='-1'    size="11" maxlength="10" >
    <button type="button" id="{$fields.exp_date_basic.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.exp_date_basic.name}",
form : "",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.exp_date_basic.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='prioridad_basic' >{sugar_translate label='LBL_PRIORIDAD' module='SUP_SoporteIT'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{html_options id='prioridad_basic' name='prioridad_basic[]' options=$fields.prioridad_basic.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.prioridad_basic.value}
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='estado_basic' >{sugar_translate label='LBL_ESTADO' module='SUP_SoporteIT'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{html_options id='estado_basic' name='estado_basic[]' options=$fields.estado_basic.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.estado_basic.value}
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='assigned_user_name_basic' >{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='SUP_SoporteIT'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<input type="text" name="{$fields.assigned_user_name_basic.name}"  class="sqsEnabled"   id="{$fields.assigned_user_name_basic.name}" size="" value="{$fields.assigned_user_name_basic.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_id_basic.name}" id="{$fields.assigned_user_id_basic.name}" value="{$fields.assigned_user_id_basic.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name_basic.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name_basic.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"assigned_user_id_basic","user_name":"assigned_user_name_basic"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name_basic.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.assigned_user_name_basic.name}.value = ''; this.form.{$fields.assigned_user_id_basic.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>

		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="{$APP.LBL_SEARCH_BUTTON_TITLE}" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="{$APP.LBL_SEARCH_BUTTON_LABEL}" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
			{if $HAS_ADVANCED_SEARCH && !$searchFormInPopup}
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_ADVANCED_FILTER}</a>
			{/if}
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></div>
	</div>
</div>
<script>
	{literal}
	$(document).ready(function () {
		$( '#advanced_search_link' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|advanced_search','{/literal}{$module}{literal}|basic_search');
		});
	});
	{/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}