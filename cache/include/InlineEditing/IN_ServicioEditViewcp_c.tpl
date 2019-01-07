
{if strlen($fields.cp_c.value) <= 0}
{assign var="value" value=$fields.cp_c.default_value }
{else}
{assign var="value" value=$fields.cp_c.value }
{/if}  
<input type='text' name='{$fields.cp_c.name}' 
    id='{$fields.cp_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >