<?php /* Smarty version Smarty-3.1.21, created on 2015-12-18 21:47:35
         compiled from "/home/infowmmo/public_html/whmcs/admin/templates/blend/clientssummary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30169830456747ef771b045-49894543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9570d52ea698558301375c364a0ff4f5ac45769' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/admin/templates/blend/clientssummary.tpl',
      1 => 1448441648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30169830456747ef771b045-49894543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_ADMINLANG' => 0,
    'clientsdetails' => 0,
    'notes' => 0,
    'note' => 0,
    'addons_html' => 0,
    'addon_html' => 0,
    'csrfToken' => 0,
    'contacts' => 0,
    'contact' => 0,
    'stats' => 0,
    'clientgroup' => 0,
    'signupdate' => 0,
    'clientfor' => 0,
    'lastlogin' => 0,
    'files' => 0,
    'file' => 0,
    'lastfivemail' => 0,
    'email' => 0,
    'customactionlinks' => 0,
    'customactionlink' => 0,
    'affiliateid' => 0,
    'messages' => 0,
    'statusfilterenabled' => 0,
    'itemstatuses' => 0,
    'itemstatus' => 0,
    'disabledstatuses' => 0,
    'statuslang' => 0,
    'productsummary' => 0,
    'product' => 0,
    'addonsummary' => 0,
    'addon' => 0,
    'domainsummary' => 0,
    'domain' => 0,
    'quotes' => 0,
    'quote' => 0,
    'paymentmethoddropdown' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56747ef8467cd7_38872484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56747ef8467cd7_38872484')) {function content_56747ef8467cd7_38872484($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/infowmmo/public_html/whmcs/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?><div id="clientsummarycontainer">

    <div class="clearfix">

        <div class="clientsummaryactions">
            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['settingtaxexempt'];?>
: <span id="taxstatus" class="csajaxtoggle" style="text-decoration:underline;cursor:pointer"><strong class="<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['taxstatus']=="Yes") {?>textgreen<?php } else { ?>textred<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['taxstatus'];?>
</strong></span>
            &nbsp;&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['settingautocc'];?>
: <span id="autocc" class="csajaxtoggle" style="text-decoration:underline;cursor:pointer"><strong class="<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['autocc']=="Yes") {?>textgreen<?php } else { ?>textred<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['autocc'];?>
</strong></span>
            &nbsp;&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['settingreminders'];?>
: <span id="overduenotices" class="csajaxtoggle" style="text-decoration:underline;cursor:pointer"><strong class="<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['overduenotices']=="Yes") {?>textgreen<?php } else { ?>textred<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['overduenotices'];?>
</strong></span>
            &nbsp;&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['settinglatefees'];?>
: <span id="latefees" class="csajaxtoggle" style="text-decoration:underline;cursor:pointer"><strong class="<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['latefees']=="Yes") {?>textgreen<?php } else { ?>textred<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['latefees'];?>
</strong></span>
        </div>

        <div id="userdetails" style="font-size:18px;">
            #<span id="userId"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
</span> - <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
            <div id="clientsimportantnotes">
                <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                    <div class="ticketstaffnotes">
                        <table class="ticketstaffnotestable">
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['note']->value['adminuser'];?>
</td>
                                <td align="right"><?php echo $_smarty_tpl->tpl_vars['note']->value['modified'];?>
</td>
                            </tr>
                        </table>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['note']->value['note'];?>

                            <div style="float:right;"><a href="clientsnotes.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
"><img src="images/edit.gif" width="16" height="16" align="absmiddle" /></a></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }?>

        <?php  $_smarty_tpl->tpl_vars['addon_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon_html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addons_html']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->key => $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->_loop = true;
?>
            <div style="margin-top:10px;">
                <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

            </div>
        <?php } ?>

    </div>

    <div class="row client-summary-panels">
        <div class="col-lg-3 col-sm-6">

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['infoheading'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                    <tr><td width="110"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['firstname'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['lastname'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['companyname'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>
</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['address1'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['address2'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['city'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['state'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['postcode'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['country'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['country'];?>
 - <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['countrylong'];?>
</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['phonenumber'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>
</td></tr>
                </table>
                <ul>
                    <li><a id="summary-reset-password" href="clientssummary.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&resetpw=true&token=<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"><img src="images/icons/resetpw.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['resetsendpassword'];?>
</a></li>
                    <li><a id="summary-cccard-details" href="#" onClick="openCCDetails();return false"><img src="images/icons/offlinecc.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['ccinfo'];?>
</a></li>
                    <li><a id="summary-login-as-client" href="../dologin.php?username=<?php echo urlencode($_smarty_tpl->tpl_vars['clientsdetails']->value['email']);?>
"><img src="images/icons/clientlogin.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['loginasclient'];?>
</a></li>
                </ul>
            </div>

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['contactsheading'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['contact']->key;
?>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>",altrow"),$_smarty_tpl);?>
"><td align="center"><a href="clientscontacts.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&contactid=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['lastname'];?>
</a> - <?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
</td></tr>
                <?php }
if (!$_smarty_tpl->tpl_vars['contact']->_loop) {
?>
                    <tr><td align="center"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['nocontacts'];?>
</td></tr>
                <?php } ?>
                </table>
                <ul>
                    <li><a href="clientscontacts.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&contactid=addnew"><img src="images/icons/clientsadd.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addcontact'];?>
</a></li>
                </ul>
            </div>

        </div>
        <div class="col-lg-3 col-sm-6">

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['billingheading'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                    <tr>
                        <td width="110"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['paid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numpaidinvoices'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['paidinvoicesamount'];?>
)</td>
                    </tr>
                    <tr class="altrow">
                        <td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['draft'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numDraftInvoices'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['draftInvoicesBalance'];?>
)</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['unpaid'];?>
/<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['due'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numdueinvoices'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['dueinvoicesbalance'];?>
)</td>
                    </tr>
                    <tr class="altrow">
                        <td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['cancelled'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numcancelledinvoices'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['cancelledinvoicesamount'];?>
)</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['refunded'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numrefundedinvoices'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['refundedinvoicesamount'];?>
)</td>
                    </tr>
                    <tr class="altrow">
                        <td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['collections'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numcollectionsinvoices'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['collectionsinvoicesamount'];?>
)</td>
                    </tr>
                    <tr>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['income'];?>
</strong></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['income'];?>
</strong></td>
                    </tr>
                    <tr class="altrow">
                        <td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['creditbalance'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['creditbalance'];?>
</td>
                    </tr>
                </table>
                <ul>
                    <li><a href="invoices.php?action=createinvoice&userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&token=<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"><img src="images/icons/invoicesedit.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['create'];?>
</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modalAddFunds"><img src="images/icons/addfunds.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['createaddfunds'];?>
</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modalGenerateInvoices"><img src="images/icons/ticketspredefined.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['geninvoices'];?>
</a></li>
                    <li><a href="clientsbillableitems.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&action=manage"><img src="images/icons/billableitems.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['additem'];?>
</a></li>
                    <li><a href="#" id="manageCredits" onClick="window.open('clientscredits.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
','','width=750,height=350,scrollbars=yes');return false"><img src="images/icons/income.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['managecredits'];?>
</a></li>
                    <li><a href="quotes.php?action=manage&userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><img src="images/icons/quotes.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
                </ul>
            </div>

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['otherinfoheading'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                    <tr><td width="110"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['status'];?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['clientgroup'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientgroup']->value['name'];?>
</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['signupdate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['signupdate']->value;?>
</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['clientfor'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['clientfor']->value;?>
</td></tr>
                    <tr><td width="110"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['lastlogin'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['lastlogin']->value;?>
</td></tr>
                </table>
            </div>

        </div>
        <div class="col-lg-3 col-sm-6">

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['title'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                    <tr><td width="140"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['sharedhosting'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumactivehosting'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumhosting'];?>
 Total)</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['resellerhosting'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumactivereseller'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumreseller'];?>
 Total)</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['server'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumactiveservers'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumservers'];?>
 Total)</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['other'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumactiveother'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['productsnumother'];?>
 Total)</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['domains']['title'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numactivedomains'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['numdomains'];?>
 Total)</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['acceptedquotes'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numacceptedquotes'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['numquotes'];?>
 Total)</td></tr>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['supporttickets'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numactivetickets'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stats']->value['numtickets'];?>
 Total)</td></tr>
                    <tr class="altrow"><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['affiliatesignups'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['stats']->value['numaffiliatesignups'];?>
</td></tr>
                </table>
                <ul>
                    <li><a href="orders.php?clientid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><img src="images/icons/orders.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['vieworders'];?>
</a></li>
                    <li><a href="ordersadd.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><img src="images/icons/ordersadd.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li>
                </ul>
            </div>

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['filesheading'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
                        <tr class="<?php echo smarty_function_cycle(array('values'=>",altrow"),$_smarty_tpl);?>
"><td align="center"><a href="../dl.php?type=f&id=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><i class="fa fa-file-o"></i> <?php echo $_smarty_tpl->tpl_vars['file']->value['title'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['file']->value['adminonly']) {?>(<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['fileadminonly'];?>
)<?php }?> <img src="images/icons/delete.png" align="absmiddle" border="0" onClick="deleteFile('<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
')" /></td></tr>
                    <?php }
if (!$_smarty_tpl->tpl_vars['file']->_loop) {
?>
                        <tr><td align="center"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['nofiles'];?>
</td></tr>
                    <?php } ?>
                </table>
                <ul>
                    <li><a href="#" id="addfile"><img src="images/icons/add.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['fileadd'];?>
</a></li>
                </ul>
                <div id="addfileform" style="display:none;" class="top-margin-5">
                    <form method="post" action="clientssummary.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&action=uploadfile" enctype="multipart/form-data">
                        <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                            <tr><td width="40"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['filetitle'];?>
</td><td class="fieldarea"><input type="text" name="title" style="width:90%" /></td></tr>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['filename'];?>
</td><td class="fieldarea"><input type="file" name="uploadfile" style="width:90%" /></td></tr>
                            <tr><td></td><td class="fieldarea"><input type="checkbox" name="adminonly" value="1" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['fileadminonly'];?>
 &nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['submit'];?>
" /></td></tr>
                        </table>
                    </form>
                </div>
            </div>

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['emailsheading'];?>
</div>
                <table class="clientssummarystats" cellspacing="0" cellpadding="2">
                    <?php  $_smarty_tpl->tpl_vars['email'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['email']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lastfivemail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['email']->key => $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['email']->key;
?>
                        <tr class="<?php echo smarty_function_cycle(array('values'=>",altrow"),$_smarty_tpl);?>
"><td align="center"><?php echo $_smarty_tpl->tpl_vars['email']->value['date'];?>
 - <a href="#" onClick="window.open('clientsemails.php?&displaymessage=true&id=<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
','','width=650,height=400,scrollbars=yes');return false"><?php echo $_smarty_tpl->tpl_vars['email']->value['subject'];?>
</a></td></tr>
                    <?php }
if (!$_smarty_tpl->tpl_vars['email']->_loop) {
?>
                        <tr><td align="center"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['noemails'];?>
</td></tr>
                    <?php } ?>
                </table>
            </div>

        </div>
        <div class="col-lg-3 col-sm-6">

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['actionsheading'];?>
</div>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['customactionlink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customactionlink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customactionlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customactionlink']->key => $_smarty_tpl->tpl_vars['customactionlink']->value) {
$_smarty_tpl->tpl_vars['customactionlink']->_loop = true;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['customactionlink']->value;?>
</li>
                    <?php } ?>
                    <li><a href="reports.php?report=client_statement&userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><img src="images/icons/reports.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['accountstatement'];?>
</a></li>
                    <li><a href="supporttickets.php?action=open&userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><img src="images/icons/ticketsopen.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['newticket'];?>
</a></li>
                    <li><a href="supporttickets.php?view=any&client=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><img src="images/icons/ticketsother.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['viewtickets'];?>
</a></li>
                    <li><a href="<?php if ($_smarty_tpl->tpl_vars['affiliateid']->value) {?>affiliates.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['affiliateid']->value;
} else { ?>clientssummary.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&activateaffiliate=true&token=<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;
}?>"><img src="images/icons/affiliates.png" border="0" align="absmiddle" /> <?php if ($_smarty_tpl->tpl_vars['affiliateid']->value) {
echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['viewaffiliate'];
} else {
echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['activateaffiliate'];
}?></a></li>
                    <li><a href="#" onClick="window.open('clientsmerge.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
','movewindow','width=500,height=280,top=100,left=100,scrollbars=1');return false"><img src="images/icons/clients.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['mergeclients'];?>
</a></li>
                    <li><a href="#" onClick="closeClient();return false" style="color:#000000;"><img src="images/icons/delete.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['closeclient'];?>
</a></li>
                    <li><a href="#" onClick="deleteClient();return false" style="color:#CC0000;"><img src="images/icons/delete.png" border="0" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['deleteclient'];?>
</a></li>
                </ul>
            </div>

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['sendemailheading'];?>
</div>
                <form action="clientsemails.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&action=send&type=general" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
">
                    <div align="center"><?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
 <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['go'];?>
" class="button btn btn-default"></div>
                </form>
            </div>

            <div class="clientssummarybox">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['adminnotes'];?>
</div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&action=savenotes">
                    <div align="center">
                        <textarea name="adminnotes" rows="5" class="form-control bottom-margin-5"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['notes'];?>
</textarea>
                        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['submit'];?>
" class="button btn btn-default" />
                    </div>
                </form>
            </div>

        </div>
    </div>

    <p align="right"><input type="button" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['statusfilter'];?>
: <?php if ($_smarty_tpl->tpl_vars['statusfilterenabled']->value) {
echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['on'];
} else {
echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['off'];
}?>" class="btn btn-xs btn-small<?php if ($_smarty_tpl->tpl_vars['statusfilterenabled']->value) {?> btn-success<?php }?>" onclick="toggleStatusFilter()" /></p>
    <div id="statusfilter">
        <form>
            <div class="checkall">
                <label class="checkbox-inline"><input type="checkbox" id="statusfiltercheckall" onclick="checkAllStatusFilter()"<?php if (!$_smarty_tpl->tpl_vars['statusfilterenabled']->value) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['checkall'];?>
</label>
            </div>
            <table class="datatable" width="100%" border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <th></th>
                </tr>
    <?php  $_smarty_tpl->tpl_vars['statuslang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statuslang']->_loop = false;
 $_smarty_tpl->tpl_vars['itemstatus'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['itemstatuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statuslang']->key => $_smarty_tpl->tpl_vars['statuslang']->value) {
$_smarty_tpl->tpl_vars['statuslang']->_loop = true;
 $_smarty_tpl->tpl_vars['itemstatus']->value = $_smarty_tpl->tpl_vars['statuslang']->key;
?>
                <tr>
                    <td><label class="checkbox-inline" style="display:block;"><input type="checkbox" name="statusfilter[]" value="<?php echo $_smarty_tpl->tpl_vars['itemstatus']->value;?>
" onclick="uncheckCheckAllStatusFilter()"<?php if (!in_array($_smarty_tpl->tpl_vars['itemstatus']->value,$_smarty_tpl->tpl_vars['disabledstatuses']->value)) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['statuslang']->value;?>
</label></td>
                </tr>
    <?php } ?>
                <tr>
                    <th></th>
                </tr>
            </table>
            <div class="applybtn">
                <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['apply'];?>
" class="btn btn-xs btn-small btn-primary" onclick="applyStatusFilter()" />
            </div>
        </form>
    </div>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&action=massaction">

        <table width="100%" class="form">
            <tr><td colspan="2" class="fieldarea" style="text-align:center;"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['title'];?>
</strong></td></tr>
            <tr><td align="center">

                <div class="tablebg">
                    <table class="datatable" width="100%" border="0" cellspacing="1" cellpadding="3">
                        <tr>
                            <th width="20"><input type="checkbox" id="prodsall" /></th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['product'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['billingcycle'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['signupdate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['nextduedate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</th>
                            <th width="20"></th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productsummary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
                            <tr>
                                <td><input type="checkbox" name="selproducts[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="checkprods" /></td>
                                <td><a href="clientsservices.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['idshort'];?>
</a></td>
                                <td style="padding-left:5px;padding-right:5px"><?php echo $_smarty_tpl->tpl_vars['product']->value['dpackage'];?>
 - <a href="http://<?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['amount'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['dbillingcycle'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['regdate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['nextduedate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['domainstatus'];?>
</td>
                                <td><a href="clientsservices.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src="images/edit.gif" width="16" height="16" border="0" alt="Edit"></a></td>
                            </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                            <tr>
                                <td colspan="9"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['norecordsfound'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </td></tr>
        </table>

        <table width="100%" class="form">
            <tr><td colspan="2" class="fieldarea" style="text-align:center;"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['addons']['title'];?>
</strong></td></tr>
            <tr><td align="center">

                <div class="tablebg">
                    <table class="datatable" width="100%" border="0" cellspacing="1" cellpadding="3">
                        <tr>
                            <th width="20"><input type="checkbox" id="addonsall" /></th>
                            <th>ID</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['addons']['name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['billingcycle'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['signupdate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['nextduedate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</th>
                            <th width="20"></th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addonsummary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
                            <tr>
                                <td><input type="checkbox" name="seladdons[]" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" class="checkaddons" /></td>
                                <td><a href="clientsservices.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['addon']->value['serviceid'];?>
&aid=<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['addon']->value['idshort'];?>
</a></td>
                                <td style="padding-left:5px;padding-right:5px"><?php echo $_smarty_tpl->tpl_vars['addon']->value['addonname'];?>
<br><?php echo $_smarty_tpl->tpl_vars['addon']->value['dpackage'];?>
 - <a href="http://<?php echo $_smarty_tpl->tpl_vars['addon']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['addon']->value['domain'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['addon']->value['amount'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['addon']->value['dbillingcycle'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['addon']->value['regdate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['addon']->value['nextduedate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['addon']->value['status'];?>
</td>
                                <td><a href="clientsservices.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['addon']->value['serviceid'];?>
&aid=<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
"><img src="images/edit.gif" width="16" height="16" border="0" alt="Edit"></a></td>
                            </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['addon']->_loop) {
?>
                            <tr>
                                <td colspan="9"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['norecordsfound'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </td></tr>
        </table>

        <table width="100%" class="form">
            <tr><td colspan="2" class="fieldarea" style="text-align:center;"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['domains']['title'];?>
</strong></td></tr>
            <tr><td align="center">

                <div class="tablebg">
                    <table class="datatable" width="100%" border="0" cellspacing="1" cellpadding="3">
                        <tr>
                            <th width="20"><input type="checkbox" id="domainsall" /></th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['domain'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['registrar'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['regdate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['nextduedate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['expirydate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</th>
                            <th width="20"></th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domainsummary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['domain']->key;
?>
                            <tr>
                                <td><input type="checkbox" name="seldomains[]" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
" class="checkdomains" /></td>
                                <td><a href="clientsdomains.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&domainid=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value['idshort'];?>
</a></td>
                                <td style="padding-left:5px;padding-right:5px"><a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['domain']->value['registrar'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['domain']->value['registrationdate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['domain']->value['nextduedate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['domain']->value['expirydate'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['domain']->value['status'];?>
</td>
                                <td><a href="clientsdomains.php?userid=<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
&domainid=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
"><img src="images/edit.gif" width="16" height="16" border="0" alt="Edit"></a></td>
                            </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['domain']->_loop) {
?>
                            <tr>
                                <td colspan="9"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['norecordsfound'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </td></tr>
        </table>

        <table width="100%" class="form">
            <tr><td colspan="2" class="fieldarea" style="text-align:center;"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['currentquotes'];?>
</strong></td></tr>
            <tr><td align="center">

                <div class="tablebg">
                    <table class="datatable" width="100%" border="0" cellspacing="1" cellpadding="3">
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['id'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['total'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['validuntil'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</th>
                            <th width="20"></th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['quote'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quote']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['quotes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quote']->key => $_smarty_tpl->tpl_vars['quote']->value) {
$_smarty_tpl->tpl_vars['quote']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['quote']->key;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
</td>
                                <td style="padding-left:5px;padding-right:5px"><?php echo $_smarty_tpl->tpl_vars['quote']->value['subject'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['datecreated'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['total'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['validuntil'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['stage'];?>
</td>
                                <td><a href="quotes.php?action=manage&id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
"><img src="images/edit.gif" width="16" height="16" border="0" alt="Edit"></a></td>
                            </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['quote']->_loop) {
?>
                            <tr>
                                <td colspan="7"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['norecordsfound'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </td></tr>
        </table>

        <div class="btn-container">
            <input type="button" id="massUpdateItems" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['massupdateitems'];?>
" class="button btn btn-default" onclick="$('#massupdatebox').slideToggle()" />
            <input type="submit" name="inv" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['invoiceselected'];?>
" class="button btn btn-warning" />
            <input type="submit" name="del" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['deleteselected'];?>
" class="button btn btn-danger" />
        </div>

        <div id="massupdatebox" style="width:75%;background-color:#f7f7f7;border:1px dashed #cccccc;padding:10px;margin-left:auto;margin-right:auto;display:none;">
            <h2 style="text-align:center;margin:0 0 10px 0"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['massupdateitems'];?>
</h2>
            <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">
                <tr><td width="15%" class="fieldlabel" nowrap><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['firstpaymentamount'];?>
</td><td class="fieldarea"><input type="text" size="20" name="firstpaymentamount" /></td><td width="15%" class="fieldlabel" nowrap><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['recurringamount'];?>
</td><td class="fieldarea"><input type="text" size="20" name="recurringamount" /></td></tr>
                <tr><td class="fieldlabel" width="15%"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['nextduedate'];?>
</td><td class="fieldarea"><input type="text" size="20" id="nextDueDate" name="nextduedate" class="datepick" /> &nbsp;&nbsp; <input type="checkbox" name="proratabill" id="proratabill" /> <label for="proratabill"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['createproratainvoice'];?>
</label></td><td width="15%" class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['billingcycle'];?>
</td><td class="fieldarea"><select name="billingcycle"><option value="">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['nochange'];?>
 -</option><option value="Free Account"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['free'];?>
</option><option value="One Time"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['onetime'];?>
</option><option value="Monthly"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['monthly'];?>
</option><option value="Quarterly"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['quarterly'];?>
</option><option value="Semi-Annually"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['semiannually'];?>
</option><option value="Annually"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['annually'];?>
</option><option value="Biennially"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['biennially'];?>
</option><option value="Triennially"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billingcycles']['triennially'];?>
</option></select></td></tr>
                <tr><td class="fieldlabel" width="15%"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['paymentmethod'];?>
</td><td class="fieldarea"><?php echo $_smarty_tpl->tpl_vars['paymentmethoddropdown']->value;?>
</td><td class="fieldlabel" width="15%"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</td><td class="fieldarea"><select name="status"><option value="">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['nochange'];?>
 -</option><option value="Pending"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['pending'];?>
</option><option value="Active"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['active'];?>
</option><option value="Suspended"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['suspended'];?>
</option><option value="Terminated"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['terminated'];?>
</option><option value="Cancelled"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['cancelled'];?>
</option><option value="Fraud"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['fraud'];?>
</option></select></td></tr>
                <tr><td class="fieldlabel" width="15%"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['modulecommands'];?>
</td><td class="fieldarea" colspan="3"><input type="submit" name="masscreate" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['modulebuttons']['create'];?>
" class="button btn btn-default" /> <input type="submit" name="masssuspend" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['modulebuttons']['suspend'];?>
" class="button btn btn-default" /> <input type="submit" name="massunsuspend" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['modulebuttons']['unsuspend'];?>
" class="button btn btn-default" /> <input type="submit" name="massterminate" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['modulebuttons']['terminate'];?>
" class="button btn btn-default" /> <input type="submit" name="masschangepackage" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['modulebuttons']['changepackage'];?>
" class="button btn btn-default" /> <input type="submit" name="masschangepw" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['modulebuttons']['changepassword'];?>
" class="button btn btn-default" /></td></tr>
                <tr><td class="fieldlabel" width="15%"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['overrideautosusp'];?>
</td><td class="fieldarea" colspan="3"><input type="checkbox" name="overideautosuspend" id="overridesuspend" /> <label for="overridesuspend"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['nosuspenduntil'];?>
</label> <input type="text" name="overidesuspenduntil" class="datepick" /></td></tr>
            </table>
            <br />
            <div align="center">
                <input type="submit" id="massupdate" name="massupdate" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['submit'];?>
" />
            </div>
        </div>

    </form>

</div>


    <?php echo '<script'; ?>
 language="javascript">
        $(document).ready(function(){
            $("#prodsall").click(function () {
                $(".checkprods").attr("checked",this.checked);
            });
            $("#addonsall").click(function () {
                $(".checkaddons").attr("checked",this.checked);
            });
            $("#domainsall").click(function () {
                $(".checkdomains").attr("checked",this.checked);
            });
        });
    <?php echo '</script'; ?>
>

<?php }} ?>
