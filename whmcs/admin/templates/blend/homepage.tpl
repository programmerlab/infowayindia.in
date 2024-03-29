{if $viewincometotals}
    <div id="incometotals" class="home-income-stats">
        <a href="transactions.php">
            <img src="images/icons/transactions.png" align="absmiddle" border="0">
            <strong>{$_ADMINLANG.billing.income}</strong>
        </a>
        <img src="images/loading.gif" align="absmiddle" />
        {$_ADMINLANG.global.loading}
    </div>
{/if}

<div class="clearfix"></div>

{if $maintenancemode}
    <div class="errorbox" style="font-size:14px;">
        {$_ADMINLANG.home.maintenancemode}
    </div>
    <br />
{/if}

{$infobox}

<p>{$_ADMINLANG.global.welcomeback} {$admin_username}!</p>

{foreach from=$addons_html item=addon_html}
    <div style="margin-bottom:15px;">
        {$addon_html}
    </div>
{/foreach}

<div class="row">
    <div class="col-sm-6">
        <div class="homecolumn left" id="homecol1">
            <div class="homewidget" id="sysinfo">
                <div class="widget-header">{$_ADMINLANG.global.systeminfo}</div>
                <div class="widget-content">
                    <table width="100%">
                        <tr>
                            <td width="20%" style="text-align:right;padding-right:5px;">{$_ADMINLANG.license.regto}</td>
                            <td width="35%">{$licenseinfo.registeredname}</td>
                            <td width="10%" style="text-align:right;padding-right:5px;">{$_ADMINLANG.license.expires}</td>
                            <td width="35%">{$licenseinfo.expires}</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;padding-right:5px;">{$_ADMINLANG.license.type}</td>
                            <td>{$licenseinfo.productname}</td>
                            <td style="text-align:right;padding-right:5px;">{$_ADMINLANG.global.version}</td>
                            <td>{$licenseinfo.currentversion}{if $licenseinfo.updateavailable} <span class="textred"><strong>{$_ADMINLANG.license.updateavailable}</strong></span>{/if}</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;padding-right:5px;">{$_ADMINLANG.global.staffonline}</td>
                            <td colspan="3">{$adminsonline}</td>
                        </tr>
                    </table>
                </div>
            </div>

            {foreach from=$widgets item=widget}
                <div class="homewidget" id="{$widget.name}">
                    <div class="widget-header">{$widget.title}</div>
                    <div class="widget-content">
                        {$widget.content}
                    </div>
                </div>
            {/foreach}

        </div>
    </div>
    <div class="col-sm-6">
        <div class="homecolumn right" id="homecol2">
        </div>
    </div>
</div>

{$generateInvoices}
{$creditCardCapture}
