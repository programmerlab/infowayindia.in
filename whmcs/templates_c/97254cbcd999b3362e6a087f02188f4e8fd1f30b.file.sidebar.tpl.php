<?php /* Smarty version Smarty-3.1.21, created on 2015-12-18 21:14:36
         compiled from "/home/infowmmo/public_html/whmcs/admin/templates/blend/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2961700835674773cc955f3-40681524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97254cbcd999b3362e6a087f02188f4e8fd1f30b' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/admin/templates/blend/sidebar.tpl',
      1 => 1448441648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2961700835674773cc955f3-40681524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    '_ADMINLANG' => 0,
    'licenseinfo' => 0,
    'inticket' => 0,
    'userid' => 0,
    'clientgroupcolour' => 0,
    'clientname' => 0,
    'contactid' => 0,
    'contactname' => 0,
    'departments' => 0,
    'department' => 0,
    'deptid' => 0,
    'staff' => 0,
    'staffmember' => 0,
    'flag' => 0,
    'adminid' => 0,
    'priority' => 0,
    'staffinvolved' => 0,
    'staffname' => 0,
    'ticketfilterdata' => 0,
    'ticketsawaitingreply' => 0,
    'ticketsflagged' => 0,
    'ticketsallactive' => 0,
    'ticketstatuses' => 0,
    'status' => 0,
    'ticketdepts' => 0,
    'dept' => 0,
    'inticketlist' => 0,
    'tagcloud' => 0,
    'text_reports' => 0,
    'filename' => 0,
    'reporttitle' => 0,
    'browserlinks' => 0,
    'link' => 0,
    'csrfToken' => 0,
    'addon_module_sidebar' => 0,
    'addon_modules' => 0,
    'addontitle' => 0,
    'adminsonline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5674773d3df1d8_64840193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674773d3df1d8_64840193')) {function content_5674773d3df1d8_64840193($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sidebar']->value=="home") {?>

<span class="header"><img src="images/icons/linktracking.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['shortcuts'];?>
</span>
<ul class="menu">
    <li><a href="clientsadd.php"><img src="images/icons/clientsadd.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>
</a></li>
    <li><a href="ordersadd.php"><img src="images/icons/ordersadd.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li>
    <li><a href="quotes.php?action=manage"><img src="images/icons/quotes.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
    <li><a href="todolist.php"><img src="images/icons/todolist.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolistcreatenew'];?>
</a></li>
    <li><a href="supporttickets.php?action=open"><img src="images/icons/tickets.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li>
    <li><a href="whois.php"><img src="images/icons/domains.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modalGenerateInvoices"><img src="images/icons/invoices.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['geninvoices'];?>
</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modalCreditCardCapture"><img src="images/icons/offlinecc.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['attemptcccaptures'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/home.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['systeminfo'];?>
</span>
<div class="smallfont"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['regto'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['registeredname'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['type'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['productname'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['expires'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['expires'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['version'];?>
: <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['currentversion'];
if ($_smarty_tpl->tpl_vars['licenseinfo']->value['updateavailable']) {?><br /><span class="textred"><b><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['updateavailable'];?>
</b></span><?php }?><br /><br /></div>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="clients") {?>

<span class="header"><img src="images/icons/clients.png" class="absmiddle" alt="Clients" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['title'];?>
</span>
<ul class="menu">
    <li><a href="clients.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['viewsearch'];?>
</a></li>
    <li><a href="clientsadd.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/products.png" alt="Products/Services" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['title'];?>
</span>
<ul class="menu">
    <li><a href="clientshostinglist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listall'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=hostingaccount">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listhosting'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=reselleraccount">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listreseller'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=server">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listservers'];?>
</a></li>
    <li><a href="clientshostinglist.php?listtype=other">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listother'];?>
</a></li>
    <li><a href="clientsaddonslist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listaddons'];?>
</a></li>
    <li><a href="clientsdomainlist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listdomains'];?>
</a></li>
    <li><a href="cancelrequests.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['cancelrequests'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/affiliates.png" alt="Affiliates" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['affiliates']['title'];?>
</span>
<ul class="menu">
    <li><a href="affiliates.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['affiliates']['manage'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="orders") {?>

<span class="header"><img src="images/icons/orders.png" alt="Affiliates" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['title'];?>
</span>
<ul class="menu">
    <li><a href="orders.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listall'];?>
</a></li>
    <li><a href="orders.php?status=Pending">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listpending'];?>
</a></li>
    <li><a href="orders.php?status=Active">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listactive'];?>
</a></li>
    <li><a href="orders.php?status=Fraud">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listfraud'];?>
</a></li>
    <li><a href="orders.php?status=Cancelled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listcancelled'];?>
</a></li>
    <li><a href="ordersadd.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="billing") {?>

<span class="header"><img src="images/icons/transactions.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['title'];?>
</span>
<ul class="menu">
    <li><a href="transactions.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['transactionslist'];?>
</a></li>
    <li><a href="gatewaylog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['gatewaylog'];?>
</a></li>
    <li><a href="offlineccprocessing.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['offlinecc'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/invoices.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['title'];?>
</span>
<ul class="menu">
    <li><a href="invoices.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['listall'];?>
</a></li>
    <li><a href="invoices.php?status=Paid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['paid'];?>
</a></li>
    <li><a href="invoices.php?status=Draft">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['draft'];?>
</a></li>
    <li><a href="invoices.php?status=Unpaid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['unpaid'];?>
</a></li>
    <li><a href="invoices.php?status=Overdue">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['overdue'];?>
</a></li>
    <li><a href="invoices.php?status=Cancelled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['cancelled'];?>
</a></li>
    <li><a href="invoices.php?status=Refunded">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['refunded'];?>
</a></li>
    <li><a href="invoices.php?status=Collections">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['collections'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/billableitems.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['title'];?>
</span>
<ul class="menu">
    <li><a href="billableitems.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['listall'];?>
</a></li>
    <li><a href="billableitems.php?status=Uninvoiced">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['uninvoiced'];?>
</a></li>
    <li><a href="billableitems.php?status=Recurring">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['recurring'];?>
</a></li>
    <li><a href="billableitems.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['addnew'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/quotes.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['title'];?>
</span>
<ul class="menu">
    <li><a href="quotes.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['listall'];?>
</a></li>
    <li><a href="quotes.php?validity=Valid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['valid'];?>
</a></li>
    <li><a href="quotes.php?validity=Expired">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['expired'];?>
</a></li>
    <li><a href="quotes.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="support") {?>

<?php if ($_smarty_tpl->tpl_vars['inticket']->value) {?>

<span class="header"><img src="images/icons/support.png" alt="Support Center" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['ticketinfo'];?>
</span>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['client'];?>
</span>
<div class="ticketinfo">
<?php if ($_smarty_tpl->tpl_vars['userid']->value) {?><a href="clientssummary.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['clientgroupcolour']->value) {?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['clientgroupcolour']->value;?>
"<?php }?> target="_blank"><?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>
</a><?php if ($_smarty_tpl->tpl_vars['contactid']->value) {?> (<a href="clientscontacts.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
&contactid=<?php echo $_smarty_tpl->tpl_vars['contactid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['clientgroupcolour']->value) {?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['clientgroupcolour']->value;?>
"<?php }?> target="_blank"><?php echo $_smarty_tpl->tpl_vars['contactname']->value;?>
</a>)<?php }
} else {
echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['notregclient'];
}?>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['department'];?>
</span>
<div class="ticketinfo">
<select id="deptid" onchange="updateTicket('deptid')" class="form-control input-sm">
<?php  $_smarty_tpl->tpl_vars['department'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['department']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['department']->key => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['department']->value['id']==$_smarty_tpl->tpl_vars['deptid']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>
</option>
<?php } ?>
</select>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['assignedto'];?>
</span>
<div class="ticketinfo">
<select id="flagto" onchange="updateTicket('flagto')" class="form-control input-sm select-assignto">
<option value="0"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['none'];?>
</option>
<?php  $_smarty_tpl->tpl_vars['staffmember'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['staffmember']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['staffmember']->key => $_smarty_tpl->tpl_vars['staffmember']->value) {
$_smarty_tpl->tpl_vars['staffmember']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['staffmember']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['staffmember']->value['id']==$_smarty_tpl->tpl_vars['flag']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['staffmember']->value['name'];?>
</option>
<?php } ?>
</select> <a href="#" onclick="$('#flagto').val(<?php echo $_smarty_tpl->tpl_vars['adminid']->value;?>
);$('#flagto').trigger('change');return false"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['me'];?>
</a>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['priority'];?>
</span>
<div class="ticketinfo">
<select id="priority" onchange="updateTicket('priority')" class="form-control input-sm">
<option value="High"<?php if ($_smarty_tpl->tpl_vars['priority']->value=="High") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['high'];?>
</option>
<option value="Medium"<?php if ($_smarty_tpl->tpl_vars['priority']->value=="Medium") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['medium'];?>
</option>
<option value="Low"<?php if ($_smarty_tpl->tpl_vars['priority']->value=="Low") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['low'];?>
</option>
</select>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['staffparticipants'];?>
</span>
<div class="ticketinfo smallfont">
<?php  $_smarty_tpl->tpl_vars['staffname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['staffname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staffinvolved']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['staffname']->key => $_smarty_tpl->tpl_vars['staffname']->value) {
$_smarty_tpl->tpl_vars['staffname']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['staffname']->value;?>
<br />
<?php }
if (!$_smarty_tpl->tpl_vars['staffname']->_loop) {
?>
No Replies Yet
<?php } ?>
</div>

<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['tags'];?>
</span>
<div class="ticketinfo">
<textarea id="ticketTags" rows="1" style="width:175px;"></textarea>
</div>

<br />

<?php } else { ?>

<span class="header"><img src="images/icons/support.png" alt="Support Center" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
</span>
<ul class="menu">
    <li><a href="supportannouncements.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['announcements'];?>
</a></li>
    <li><a href="supportdownloads.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['downloads'];?>
</a></li>
    <li><a href="supportkb.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['knowledgebase'];?>
</a></li>
    <li><a href="supporttickets.php?action=open"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li>
    <li><a href="supportticketpredefinedreplies.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['predefreplies'];?>
</a></li>
</ul>

<?php }?>

<span class="header"><img src="images/icons/tickets.png" alt="Filter Tickets" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['filtertickets'];?>
</span>

<form method="post" action="supporttickets.php">
<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</span>
<select name="view" class="form-control input-sm">
    <option value="any">- Any -</option>
    <option value=""<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view']=='') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['awaitingreply'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
)</option>
    <option value="flagged"<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view']=="flagged") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['flagged'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsflagged']->value;?>
)</option>
    <option value="active"<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view']=="active") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['allactive'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsallactive']->value;?>
)</option>
<?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ticketstatuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['status']->value['title']==$_smarty_tpl->tpl_vars['ticketfilterdata']->value['view']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['status']->value['count'];?>
)</option>
<?php } ?>
</select>
<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['department'];?>
</span>
<select name="deptid" class="form-control input-sm">
    <option value="">- Any -</option>
<?php  $_smarty_tpl->tpl_vars['dept'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dept']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ticketdepts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dept']->key => $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['dept']->value['id']==$_smarty_tpl->tpl_vars['ticketfilterdata']->value['deptid']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dept']->value['name'];?>
</option>
<?php } ?>
</select>
<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['subjectmessage'];?>
</span>
<input type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['ticketfilterdata']->value['subject'];?>
" class="form-control input-sm" />
<span class="ticketheader"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['email'];?>
</span>
<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['ticketfilterdata']->value['email'];?>
" class="form-control input-sm" />
<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['filter'];?>
  &raquo;" class="btn btn-sm btn-block top-margin-5" />
</form>

<br />

<?php if ($_smarty_tpl->tpl_vars['inticketlist']->value) {?>

<span class="header"><img src="images/icons/tickets.png" alt="Tag Cloud" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['tagcloud'];?>
</span>

<div class="tagcloud"><?php echo $_smarty_tpl->tpl_vars['tagcloud']->value;?>
</div>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['inticket']->value) {?>

<span class="header"><img src="images/icons/networkissues.png" alt="Network Issues" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['title'];?>
</span>
<ul class="menu">
    <li><a href="networkissues.php">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['open'];?>
</a></li>
    <li><a href="networkissues.php?view=scheduled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['scheduled'];?>
</a></li>
    <li><a href="networkissues.php?view=resolved">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['resolved'];?>
</a></li>
    <li><a href="networkissues.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['addnew'];?>
</a></li>
</ul>

<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="reports") {?>

<span class="header"><img src="images/icons/reports.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['reports']['title'];?>
</span>
<ul class="menu">
    <?php  $_smarty_tpl->tpl_vars['reporttitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reporttitle']->_loop = false;
 $_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['text_reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reporttitle']->key => $_smarty_tpl->tpl_vars['reporttitle']->value) {
$_smarty_tpl->tpl_vars['reporttitle']->_loop = true;
 $_smarty_tpl->tpl_vars['filename']->value = $_smarty_tpl->tpl_vars['reporttitle']->key;
?>
    <li><a href="reports.php?report=<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['reporttitle']->value;?>
</a></li>
    <?php } ?>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="browser") {?>

<span class="header"><img src="images/icons/browser.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['browser']['bookmarks'];?>
</span>
<ul class="menu">
    <li><a href="http://www.whmcs.com/" target="brwsrwnd">WHMCS Homepage</a></li>
    <li><a href="https://www.whmcs.com/clients/" target="brwsrwnd">WHMCS Client Area</a></li>
    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browserlinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" target="brwsrwnd"><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
 <img src="images/delete.gif" width="10" border="0" onclick="doDelete('<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
')"></a></li>
    <?php } ?>
</ul>

<form method="post" action="browser.php?action=add">
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
<span class="header"><img src="images/icons/browseradd.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['browser']['addnew'];?>
</span>
<ul class="menu">
    <li><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['browser']['sitename'];?>
:<br><input type="text" name="sitename" size="25" style="font-size:9px;"><br><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['browser']['url'];?>
:<br><input type="text" name="siteurl" size="25" value="http://" style="font-size:9px;"><br><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['browser']['add'];?>
" style="font-size:9px;"></li>
</ul>
</form>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="utilities") {?>

<span class="header"><img src="images/icons/utilities.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['title'];?>
</span>
<ul class="menu">
    <li><a href="utilitiesemailmarketer.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emailmarketer'];?>
</a></li>
    <li><a href="utilitieslinktracking.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['linktracking'];?>
</a></li>
    <li><a href="browser.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['browser'];?>
</a></li>
    <li><a href="calendar.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['calendar'];?>
</a></li>
    <li><a href="todolist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolist'];?>
</a></li>
    <li><a href="whois.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li>
    <li><a href="utilitiesresolvercheck.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['domainresolver'];?>
</a></li>
    <li><a href="systemintegrationcode.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['integrationcode'];?>
</a></li>
    <li><a href="whmimport.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['cpanelimport'];?>
</a></li>
    <li><a href="systemdatabase.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['dbstatus'];?>
</a></li>
    <li><a href="systemcleanup.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['syscleanup'];?>
</a></li>
    <li><a href="systemphpinfo.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['phpinfo'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/logs.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['logs'];?>
</span>
<ul class="menu">
    <li><a href="systemactivitylog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['activitylog'];?>
</a></li>
    <li><a href="systemadminlog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['adminlog'];?>
</a></li>
    <li><a href="systemmodulelog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['modulelog'];?>
</a></li>
    <li><a href="systememaillog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emaillog'];?>
</a></li>
    <li><a href="systemmailimportlog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['ticketmaillog'];?>
</a></li>
    <li><a href="systemwhoislog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whoislog'];?>
</a></li>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="addonmodules") {?>

<?php echo $_smarty_tpl->tpl_vars['addon_module_sidebar']->value;?>


<span class="header"><img src="images/icons/addonmodules.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['addonmodules'];?>
</span>
<ul class="menu">
    <?php  $_smarty_tpl->tpl_vars['addontitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addontitle']->_loop = false;
 $_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addon_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addontitle']->key => $_smarty_tpl->tpl_vars['addontitle']->value) {
$_smarty_tpl->tpl_vars['addontitle']->_loop = true;
 $_smarty_tpl->tpl_vars['filename']->value = $_smarty_tpl->tpl_vars['addontitle']->key;
?>
    <li><a href="addonmodules.php?module=<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['addontitle']->value;?>
</a></li>
    <?php } ?>
</ul>

<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=="config") {?>

<span class="header"><img src="images/icons/config.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['config'];?>
</span>
<ul class="menu">
    <li><a href="configgeneral.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['general'];?>
</a></li>
    <li><a href="configauto.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['automation'];?>
</a></li>
    <li><a href="configapplinks.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['applicationLinks'];?>
</a></li>
    <li><a href="configopenid.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['openIdConnect'];?>
</a></li>
    <li><a href="configemailtemplates.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['emailtpls'];?>
</a></li>
    <li><a href="configaddonmods.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['addonmodules'];?>
</a></li>
    <li><a href="configclientgroups.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['clientgroups'];?>
</a></li>
    <li><a href="configfraud.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['fraud'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/admins.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['staff'];?>
</span>
<ul class="menu">
    <li><a href="configadmins.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['admins'];?>
</a></li>
    <li><a href="configadminroles.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['adminroles'];?>
</a></li>
    <li><a href="configtwofa.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['twofa'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/income.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['payments'];?>
</span>
<ul class="menu">
    <li><a href="configcurrencies.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['currencies'];?>
</a></li>
    <li><a href="configgateways.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['gateways'];?>
</a></li>
    <li><a href="configtax.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['tax'];?>
</a></li>
    <li><a href="configpromotions.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['promos'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/products.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['products'];?>
</span>
<ul class="menu">
    <li><a href="configproducts.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['products'];?>
</a></li>
    <li><a href="configproductoptions.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['configoptions'];?>
</a></li>
    <li><a href="configaddons.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['addons'];?>
</a></li>
    <li><a href="configbundles.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bundles'];?>
</a></li>
    <li><a href="configdomains.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['domainpricing'];?>
</a></li>
    <li><a href="configregistrars.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['registrars'];?>
</a></li>
    <li><a href="configservers.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['servers'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/support.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
</span>
<ul class="menu">
    <li><a href="configticketdepartments.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['supportdepartments'];?>
</a></li>
    <li><a href="configticketstatuses.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['ticketstatuses'];?>
</a></li>
    <li><a href="configticketescalations.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['escalationrules'];?>
</a></li>
    <li><a href="configticketspamcontrol.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['spam'];?>
</a></li>
</ul>

<span class="header"><img src="images/icons/configother.png" class="absmiddle" width="16" height="16" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['other'];?>
</span>
<ul class="menu">
    <li><a href="configcustomfields.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['customclientfields'];?>
</a></li>
    <li><a href="configorderstatuses.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['orderstatuses'];?>
</a></li>
    <li><a href="configsecurityqs.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['securityqs'];?>
</a></li>
    <li><a href="configbannedips.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bannedips'];?>
</a></li>
    <li><a href="configbannedemails.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['bannedemails'];?>
</a></li>
    <li><a href="configbackups.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['backups'];?>
</a></li>
</ul>

<?php }?>

<span class="header"><img src="images/icons/search.png" alt="" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['advancedsearch'];?>
</span>
<div class="smallfont">

<form method="get" action="search.php">
    <select name="type" id="searchtype" onchange="populate(this)" class="form-control input-sm">
      <option value="clients">Clients </option>
      <option value="orders">Orders </option>
      <option value="services">Services </option>
      <option value="domains">Domains </option>
      <option value="invoices">Invoices </option>
      <option value="tickets">Tickets </option>
    </select>
    <select name="field" id="searchfield" class="form-control input-sm">
      <option>Client ID</option>
      <option selected="selected">Client Name</option>
      <option>Company Name</option>
      <option>Email Address</option>
      <option>Address 1</option>
      <option>Address 2</option>
      <option>City</option>
      <option>State</option>
      <option>Postcode</option>
      <option>Country</option>
      <option>Phone Number</option>
      <option>CC Last Four</option>
    </select>
    <div class="input-group input-group-sm">
        <input type="text" name="q" class="form-control" />
        <div class="input-group-btn">
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['search'];?>
" class="btn btn-default" />
        </div>
    </div>
  </form>

</div>

<br />

<span class="header"><img src="images/icons/admins.png" alt="" width="16" height="16" class="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['staffonline'];?>
</span>
<div class="smallfont"><?php echo $_smarty_tpl->tpl_vars['adminsonline']->value;?>
</div>

<div class="controls"><a href="#" onclick="sidebarClose();return false">&laquo; Minimise Sidebar</a></div>
<?php }} ?>
