<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:09:31
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:91541835956747ef493e1e7-40120977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1471446571,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '91541835956747ef493e1e7-40120977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56747ef4a5a301_68033725',
  'variables' => 
  array (
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'client_email' => 0,
    'client_password' => 0,
    'whmcs_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56747ef4a5a301_68033725')) {function content_56747ef4a5a301_68033725($_smarty_tpl) {?><p><a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['company_logo_url']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
" border="0" /></a></p>
<p>
Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 
</p>
<p>
Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below. 
</p>
<p>
Email Address: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br />
Password: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
 
</p>
<p>
To login, visit <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 
</p>
<p>
<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
 
</p>
<?php }} ?>
