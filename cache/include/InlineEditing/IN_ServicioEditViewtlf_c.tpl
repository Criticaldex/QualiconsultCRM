
{if strlen($fields.tlf_c.value) <= 0}
{assign var="value" value=$fields.tlf_c.default_value }
{else}
{assign var="value" value=$fields.tlf_c.value }
{/if}  
<input type='text' name='{$fields.tlf_c.name}' 
    id='{$fields.tlf_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >