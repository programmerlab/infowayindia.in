{if $contactid}

<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>

{include file="$template/pageheader.tpl" title=$LANG.clientareanavcontacts}

{include file="$template/clientareadetailslinks.tpl"}

{if $successful}
<div class="alert alert-success">
    <p>{$LANG.changessavedsuccessfully}</p>
</div>
{/if}

{if $errormessage}
<div class="alert alert-error">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}

<script type="text/javascript">
{literal}
jQuery(document).ready(function(){
    jQuery("#subaccount").click(function () {
        if (jQuery("#subaccount:checked").val()!=null) {
            jQuery("#subaccountfields").slideDown();
        } else {
            jQuery("#subaccountfields").slideUp();
        }
    });
});
{/literal}
function deleteContact() {ldelim}
if (confirm("{$LANG.clientareadeletecontactareyousure}")) {ldelim}
window.location='clientarea.php?action=contacts&delete=true&id={$contactid}&token={$token}';
{rdelim}{rdelim}
</script>

<form method="post" class="form-inline" action="{$smarty.server.PHP_SELF}?action=contacts">
<div class="alert alert-block alert-info">
<p>{$LANG.clientareachoosecontact}: <select name="contactid" onchange="submit()">
    {foreach item=contact from=$contacts}
        <option value="{$contact.id}"{if $contact.id eq $contactid} selected="selected"{/if}>{$contact.name} - {$contact.email}</option>
    {/foreach}
    <option value="new">{$LANG.clientareanavaddcontact}</option>
    </select> <input class="btn" type="submit" value="{$LANG.go}" /></p>
</div>
</form>

<form class="form-horizontal" method="post" action="{$smarty.server.PHP_SELF}?action=contacts&id={$contactid}">

<fieldset class="control-group" style="margin:0;">

<div class="control-group">
<div class="col2half">

    <div class="control-group">
        <label class="control-label" for="firstname">{$LANG.clientareafirstname}</label>
        <div class="controls">
            <input type="text" name="firstname" id="firstname" value="{$contactfirstname}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="lastname">{$LANG.clientarealastname}</label>
        <div class="controls">
            <input type="text" name="lastname" id="lastname" value="{$contactlastname}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="companyname">{$LANG.clientareacompanyname}</label>
        <div class="controls">
            <input type="text" name="companyname" id="companyname" value="{$contactcompanyname}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="email">{$LANG.clientareaemail}</label>
        <div class="controls">
            <input type="text" name="email" id="email" value="{$contactemail}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="billingcontact">{$LANG.subaccountactivate}</label>
        <div class="controls">
            <label class="checkbox">
            <input type="checkbox" name="subaccount" id="subaccount"{if $subaccount} checked{/if} /> {$LANG.subaccountactivatedesc}
            </label>
        </div>
    </div>

</div>
<div class="col2half">

    <div class="control-group">
        <label class="control-label" for="address1">{$LANG.clientareaaddress1}</label>
        <div class="controls">
            <input type="text" name="address1" id="address1" value="{$contactaddress1}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="address2">{$LANG.clientareaaddress2}</label>
        <div class="controls">
            <input type="text" name="address2" id="address2" value="{$contactaddress2}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="city">{$LANG.clientareacity}</label>
        <div class="controls">
            <input type="text" name="city" id="city" value="{$contactcity}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="state">{$LANG.clientareastate}</label>
        <div class="controls">
            <input type="text" name="state" id="state" value="{$contactstate}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="postcode">{$LANG.clientareapostcode}</label>
        <div class="controls">
            <input type="text" name="postcode" id="postcode" value="{$contactpostcode}" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="country">{$LANG.clientareacountry}</label>
        <div class="controls">
            {$countriesdropdown}
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="phonenumber">{$LANG.clientareaphonenumber}</label>
        <div class="controls">
            <input type="text" name="phonenumber" id="phonenumber" value="{$contactphonenumber}" />
        </div>
    </div>

</div>
</div>

</fieldset>

<div id="subaccountfields" class="well{if !$subaccount} hide{/if}">

<fieldset>

    <div class="control-group">
        <label class="control-label" for="password">{$LANG.clientareapassword}</label>
        <div class="controls">
            <input type="password" name="password" id="password" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="password2">{$LANG.clientareaconfirmpassword}</label>
        <div class="controls">
            <input type="password" name="password2" id="password2" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="passstrength">{$LANG.pwstrength}</label>
        <div class="controls">
            {include file="$template/pwstrength.tpl"}
        </div>
    </div>

    <div class="control-group">
        <label class="full control-label">{$LANG.subaccountpermissions}</label>
        <div class="controls">
            <ul class="inputs-list">
                {foreach $allPermissions as $permission}
                    <li class="col2half">
                        <label class="checkbox">
                            <input type="checkbox" name="permissions[]" value="{$permission}"{if in_array($permission, $permissions)} checked{/if} />
                            <span>
                                {assign var='langPermission' value='subaccountperms'|cat:$permission}{$LANG.$langPermission}
                            </span>
                        </label>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</fieldset>

</div>

<fieldset>

    <div class="control-group">
        <label class="control-label">{$LANG.clientareacontactsemails}</label>
        <div class="controls">
            <ul class="inputs-list">
                <li>
                    <label class="full control-label">
                        <input type="checkbox" name="generalemails" id="generalemails" value="1"{if $generalemails} checked{/if} />
                        <span>{$LANG.clientareacontactsemailsgeneral}</span>
                    </label>
                </li>
                <li>
                    <label class="full control-label">
                        <input type="checkbox" name="productemails" id="productemails" value="1"{if $productemails} checked{/if} />
                        <span>{$LANG.clientareacontactsemailsproduct}</span>
                    </label>
                </li>
                <li>
                    <label class="full control-label">
                        <input type="checkbox" name="domainemails" id="domainemails" value="1"{if $domainemails} checked{/if} />
                        <span>{$LANG.clientareacontactsemailsdomain}</span>
                    </label>
                </li>
                <li>
                    <label class="full control-label">
                        <input type="checkbox" name="invoiceemails" id="invoiceemails" value="1"{if $invoiceemails} checked{/if} />
                        <span>{$LANG.clientareacontactsemailsinvoice}</span>
                    </label>
                </li>
                <li>
                    <label class="full control-label">
                        <input type="checkbox" name="supportemails" id="supportemails" value="1"{if $supportemails} checked{/if} />
                        <span>{$LANG.clientareacontactsemailssupport}</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>

</fieldset>

  <div class="form-actions">
    <input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" />
    <input class="btn" type="reset" value="{$LANG.cancel}" />
    <input class="btn btn-danger" type="button" value="{$LANG.clientareadeletecontact}" onclick="deleteContact()" />
  </div>

</form>

{else}

{include file="$template/clientareaaddcontact.tpl"}

{/if}
