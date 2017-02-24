<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:05:10
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:106273797657b47d26d01a47-15298858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1471446310,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '106273797657b47d26d01a47-15298858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_name' => 0,
    'pw_reset_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47d26d13525_71288466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47d26d13525_71288466')) {function content_57b47d26d13525_71288466($_smarty_tpl) {?><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p><p>Recently a request was submitted to reset your password for our client area. If you did not request this, please ignore this email. It will expire and become useless in 2 hours time.</p><p>To reset your password, please visit the url below:<br /><a href="<?php echo $_smarty_tpl->tpl_vars['pw_reset_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pw_reset_url']->value;?>
</a></p><p>When you visit the link above, you will have the opportunity to choose a new password.</p><p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
