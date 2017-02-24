<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:03:17
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/includes/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32247768057b47cb55f6368-07977766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c07ba98b93f411e637b102c1437a0bafd323f79f' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/includes/modal.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32247768057b47cb55f6368-07977766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'LANG' => 0,
    'content' => 0,
    'closeLabel' => 0,
    'submitAction' => 0,
    'submitLabel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47cb5640649_29380763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47cb5640649_29380763')) {function content_57b47cb5640649_29380763($_smarty_tpl) {?><div class="modal fade" id="modal<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
Title">
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h4>
            </div>
            <div class="modal-body text-center hidden" id="modal<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
Loader">
                <p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
            </div>
            <div class="modal-body" id="modal<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
Body">
                <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
                <?php }?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php if (isset($_smarty_tpl->tpl_vars['closeLabel']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['closeLabel']->value;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['closewindow'];?>

                    <?php }?>
                </button>
                <?php if (isset($_smarty_tpl->tpl_vars['submitAction']->value)) {?>
                    <button type="button" class="btn btn-primary" onclick="<?php echo $_smarty_tpl->tpl_vars['submitAction']->value;?>
">
                        <?php if (isset($_smarty_tpl->tpl_vars['submitLabel']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['submitLabel']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>

                        <?php }?>
                    </button>
                <?php }?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }} ?>
