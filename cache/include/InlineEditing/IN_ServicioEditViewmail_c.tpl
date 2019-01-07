
{if strlen($fields.mail_c.value) <= 0}
{assign var="value" value=$fields.mail_c.default_value }
{else}
{assign var="value" value=$fields.mail_c.value }
{/if}  
<input type='text' name='{$fields.mail_c.name}' 
    id='{$fields.mail_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >