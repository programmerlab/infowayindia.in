<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:03:16
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/includes/pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184750869957b47cb4e36ce1-23279112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dccd8234abf17ab26fcdbc53082f4061fc6928b' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/includes/pageheader.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184750869957b47cb4e36ce1-23279112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
    'showbreadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47cb4e8a1a2_21261439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47cb4e8a1a2_21261439')) {function content_57b47cb4e8a1a2_21261439($_smarty_tpl) {?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<?php }} ?>
