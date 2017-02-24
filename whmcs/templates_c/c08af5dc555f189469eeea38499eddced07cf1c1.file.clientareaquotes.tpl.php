<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:11:56
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/clientareaquotes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46432340657b47ebc02dc30-63001008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08af5dc555f189469eeea38499eddced07cf1c1' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/clientareaquotes.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46432340657b47ebc02dc30-63001008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'sort' => 0,
    'LANG' => 0,
    'quotes' => 0,
    'quote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47ebc18e4d2_09128630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47ebc18e4d2_09128630')) {function content_57b47ebc18e4d2_09128630($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tableName'=>"QuotesList",'noSortColumns'=>"5",'filterColumn'=>"4"), 0);?>

<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableQuotesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='id') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='date') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='validuntil') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='stage') {?>
            table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableQuotesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotenumber'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotesubject'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotedatecreated'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotevaliduntil'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestage'];?>
</th>
                <th>&nbsp;</th>
                <th class="responsive-edit-button" style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['quote'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quote']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quotes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quote']->key => $_smarty_tpl->tpl_vars['quote']->value) {
$_smarty_tpl->tpl_vars['quote']->_loop = true;
?>
                <tr onclick="clickableSafeRedirect(event, 'viewquote.php?id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
', true)">
                    <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['subject'];?>
</td>
                    <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedDateCreated'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['datecreated'];?>
</td>
                    <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedValidUntil'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['validuntil'];?>
</td>
                    <td><span class="label status status-<?php echo $_smarty_tpl->tpl_vars['quote']->value['stageClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['quote']->value['stage'];?>
</span></td>
                    <td class="text-center">
                        <form method="submit" action="dl.php">
                            <input type="hidden" name="type" value="q" />
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
" />
                            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotedownload'];?>
</button>
                        </form>
                    </td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="viewquote.php?id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
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
