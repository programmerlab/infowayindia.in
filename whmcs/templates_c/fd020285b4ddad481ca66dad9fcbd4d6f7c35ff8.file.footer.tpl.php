<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:02:30
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88600466257b47c86351228-69901380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd020285b4ddad481ca66dad9fcbd4d6f7c35ff8' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/footer.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88600466257b47c86351228-69901380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inShoppingCart' => 0,
    'secondarySidebar' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'BASE_PATH_JS' => 0,
    'token' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47c863a18d8_90012993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47c863a18d8_90012993')) {function content_57b47c863a18d8_90012993($_smarty_tpl) {?>
        </div><!-- /.main-content -->
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0);?>

            </div>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</section>

<section id="footer">

    <p>Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. All Rights Reserved.</p>

</section>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }} ?>
