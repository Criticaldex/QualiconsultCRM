
{if strval($fields.mail_smtpauth_req.value) == "1" || strval($fields.mail_smtpauth_req.value) == "yes" || strval($fields.mail_smtpauth_req.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.mail_smtpauth_req.name}" value="0"> 
<input type="checkbox" id="{$fields.mail_smtpauth_req.name}" 
name="{$fields.mail_smtpauth_req.name}" 
value="1" title='' tabindex="1" {$checked} >