<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:05:10
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:13649277857b47d26cdfcc3-39200641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1471446310,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '13649277857b47d26cdfcc3-39200641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'pw_reset_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47d26cfd4b3_15375418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47d26cfd4b3_15375418')) {function content_57b47d26cfd4b3_15375418($_smarty_tpl) {?><p><a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['company_logo_url']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
" border="0" /></a></p>
<p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p><p>Recently a request was submitted to reset your password for our client area. If you did not request this, please ignore this email. It will expire and become useless in 2 hours time.</p><p>To reset your password, please visit the url below:<br /><a href="<?php echo $_smarty_tpl->tpl_vars['pw_reset_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pw_reset_url']->value;?>
</a></p><p>When you visit the link above, you will have the opportunity to choose a new password.</p><p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
