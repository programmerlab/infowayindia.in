<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:10:14
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/clientareainvoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24199517957b47e56e59477-03084092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7a60c8751bc62f60129e15f443ca730f0e6d8a' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/clientareainvoices.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24199517957b47e56e59477-03084092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'sort' => 0,
    'LANG' => 0,
    'invoices' => 0,
    'invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47e5704d9e9_65191147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47e5704d9e9_65191147')) {function content_57b47e5704d9e9_65191147($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tableName'=>"InvoicesList",'filterColumn'=>"4"), 0);?>

<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableInvoicesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='default') {?>
            table.order([4, 'desc'], [2, 'asc']);
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='invoicenum') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='date') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='duedate') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='total') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='status') {?>
            table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>

<div class="table-container clearfix">
    <table id="tableInvoicesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestitle'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatecreated'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatedue'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotal'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesstatus'];?>
</th>
                <th class="responsive-edit-button" style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['invoice']->key;
?>
                <tr onclick="clickableSafeRedirect(event, 'viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
', false)">
                    <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];?>
</td>
                    <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['normalisedDateCreated'];?>
</span><?php echo $_smarty_tpl->tpl_vars['invoice']->value['datecreated'];?>
</td>
                    <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['normalisedDateDue'];?>
</span><?php echo $_smarty_tpl->tpl_vars['invoice']->value['datedue'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value['total'];?>
</td>
                    <td><span class="label status status-<?php echo $_smarty_tpl->tpl_vars['invoice']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['status'];?>
</span></td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
" class="btn btn-block btn-info">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>

                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
    </div>
</div>
<?php }} ?>
