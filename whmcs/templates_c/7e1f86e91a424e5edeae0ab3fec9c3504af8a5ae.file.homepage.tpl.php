<?php /* Smarty version Smarty-3.1.21, created on 2015-12-18 21:14:37
         compiled from "/home/infowmmo/public_html/whmcs/admin/templates/blend/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2786527725674773d3f2ff3-24926600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1f86e91a424e5edeae0ab3fec9c3504af8a5ae' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/admin/templates/blend/homepage.tpl',
      1 => 1448441648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2786527725674773d3f2ff3-24926600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewincometotals' => 0,
    '_ADMINLANG' => 0,
    'maintenancemode' => 0,
    'infobox' => 0,
    'admin_username' => 0,
    'addons_html' => 0,
    'addon_html' => 0,
    'licenseinfo' => 0,
    'adminsonline' => 0,
    'widgets' => 0,
    'widget' => 0,
    'generateInvoices' => 0,
    'creditCardCapture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5674773d4ea5f2_63486528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674773d4ea5f2_63486528')) {function content_5674773d4ea5f2_63486528($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['viewincometotals']->value) {?>
    <div id="incometotals" class="home-income-stats">
        <a href="transactions.php">
            <img src="images/icons/transactions.png" align="absmiddle" border="0">
            <strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['income'];?>
</strong>
        </a>
        <img src="images/loading.gif" align="absmiddle" />
        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['loading'];?>

    </div>
<?php }?>

<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['maintenancemode']->value) {?>
    <div class="errorbox" style="font-size:14px;">
        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['maintenancemode'];?>

    </div>
    <br />
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>


<p><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['welcomeback'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
!</p>

<?php  $_smarty_tpl->tpl_vars['addon_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon_html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addons_html']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->key => $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->_loop = true;
?>
    <div style="margin-bottom:15px;">
        <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

    </div>
<?php } ?>

<div class="row">
    <div class="col-sm-6">
        <div class="homecolumn left" id="homecol1">
            <div class="homewidget" id="sysinfo">
                <div class="widget-header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['systeminfo'];?>
</div>
                <div class="widget-content">
                    <table width="100%">
                        <tr>
                            <td width="20%" style="text-align:right;padding-right:5px;"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['regto'];?>
</td>
                            <td width="35%"><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['registeredname'];?>
</td>
                            <td width="10%" style="text-align:right;padding-right:5px;"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['expires'];?>
</td>
                            <td width="35%"><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['expires'];?>
</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;padding-right:5px;"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['type'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['productname'];?>
</td>
                            <td style="text-align:right;padding-right:5px;"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['version'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['currentversion'];
if ($_smarty_tpl->tpl_vars['licenseinfo']->value['updateavailable']) {?> <span class="textred"><strong><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['updateavailable'];?>
</strong></span><?php }?></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;padding-right:5px;"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['staffonline'];?>
</td>
                            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['adminsonline']->value;?>
</td>
                        </tr>
                    </table>
                </div>
            </div>

            <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
                <div class="homewidget" id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['name'];?>
">
                    <div class="widget-header"><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</div>
                    <div class="widget-content">
                        <?php echo $_smarty_tpl->tpl_vars['widget']->value['content'];?>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <div class="col-sm-6">
        <div class="homecolumn right" id="homecol2">
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['generateInvoices']->value;?>

<?php echo $_smarty_tpl->tpl_vars['creditCardCapture']->value;?>

<?php }} ?>
