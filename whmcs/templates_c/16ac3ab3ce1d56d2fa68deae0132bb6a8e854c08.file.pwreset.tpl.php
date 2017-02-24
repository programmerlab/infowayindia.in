<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:05:05
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/pwreset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139284822957b47d2111f6d0-77498639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ac3ab3ce1d56d2fa68deae0132bb6a8e854c08' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/pwreset.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139284822957b47d2111f6d0-77498639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'loggedin' => 0,
    'success' => 0,
    'errormessage' => 0,
    'securityquestion' => 0,
    'email' => 0,
    'systemsslurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47d21275342_84210220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47d21275342_84210220')) {function content_57b47d21275342_84210220($_smarty_tpl) {?><div class="logincontainer">

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['pwreset']), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['noPasswordResetWhenLoggedIn'],'textcenter'=>true), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationsent'],'textcenter'=>true), 0);?>


            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationcheckemail'];?>
</p>

        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['errormessage']->value,'textcenter'=>true), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['securityquestion']->value) {?>

                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsecurityquestionrequired'];?>
</p>

                <form method="post" action="pwreset.php"  class="form-stacked">
                    <input type="hidden" name="action" value="reset" />
                    <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />

                    <div class="form-group">
                        <label for="inputAnswer"><?php echo $_smarty_tpl->tpl_vars['securityquestion']->value;?>
</label>
                        <input type="text" name="answer" class="form-control" id="inputAnswer" autofocus>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
</button>
                    </div>

                </form>

            <?php } else { ?>

                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetemailneeded'];?>
</p>

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
pwreset.php" role="form">
                    <input type="hidden" name="action" value="reset" />

                    <div class="form-group">
                        <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
</button>
                    </div>

                </form>

            <?php }?>

        <?php }?>
    <?php }?>

</div>
<?php }} ?>
