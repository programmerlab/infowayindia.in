<?php /* Smarty version Smarty-3.1.21, created on 2016-08-17 15:03:41
         compiled from "/home/infowmmo/public_html/whmcs/templates/six/bulkdomainchecker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205979774757b47ccd9c0557-96525294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d6010be8b7f3d724d924948a9b0e3741a5a646' => 
    array (
      0 => '/home/infowmmo/public_html/whmcs/templates/six/bulkdomainchecker.tpl',
      1 => 1448441658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205979774757b47ccd9c0557-96525294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bulkdomainsearchenabled' => 0,
    'LANG' => 0,
    'searchingFor' => 0,
    'invalidCaptcha' => 0,
    'invalidCaptchaError' => 0,
    'bulkdomains' => 0,
    'invalidDomainsOmitted' => 0,
    'bulkCheckResults' => 0,
    'loggedin' => 0,
    'currencies' => 0,
    'performingLookup' => 0,
    'curr' => 0,
    'currency' => 0,
    'BASE_PATH_IMG' => 0,
    'tldcategories' => 0,
    'tldCategory' => 0,
    'tld' => 0,
    'tldpricing' => 0,
    'tldpricelist' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57b47ccdec2d57_69119168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b47ccdec2d57_69119168')) {function content_57b47ccdec2d57_69119168($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/infowmmo/public_html/whmcs/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['bulkdomainsearchenabled']->value) {?>
    <div class="pull-right btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainbulksearch'];?>
 <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsimplesearch'];?>
</a></li>
            <li><a href="domainchecker.php?search=bulkregister"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainbulksearch'];?>
</a></li>
            <li><a href="domainchecker.php?search=bulktransfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainbulktransfersearch'];?>
</a></li>
        </ul>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['searchingFor']->value=='register') {?>
    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainbulksearchintro'];?>
</p>
<?php } else { ?>
    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainbulktransferdescription'];?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['invalidCaptcha']->value) {?>
    <?php ob_start();
echo WHMCS\Smarty::langFunction(array('key'=>$_smarty_tpl->tpl_vars['invalidCaptchaError']->value),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'msg'=>$_tmp1,'textcenter'=>true), 0);?>

<?php }?>

<div class="domain-checker-container">
    <div class="domain-checker-bg clearfix">
        <form method="post" action="domainchecker.php?search=bulk<?php if ($_smarty_tpl->tpl_vars['searchingFor']->value=='transfer') {?>transfer<?php }?>">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="input-group-box">
                        <textarea name="bulkdomains" id="inputBulkDomains" rows="8" class="form-control margin-bottom-5"><?php echo $_smarty_tpl->tpl_vars['bulkdomains']->value;?>
</textarea>
                        <button type="submit" id="btnCheckAvailability" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkavailability'];?>
</button>
                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </form>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['invalidDomainsOmitted']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domaincheckerbulkinvaliddomain']),'textcenter'=>true), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['bulkCheckResults']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/domainchecker-results.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value&&!$_smarty_tpl->tpl_vars['performingLookup']->value) {?>
        <div class="currencychooser pull-right clearfix margin-bottom">
            <div class="btn-group" role="group">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                    <a href="domainchecker.php?search=bulk<?php if ($_smarty_tpl->tpl_vars['searchingFor']->value=='transfer') {?>transfer<?php }?>&currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                        <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="clearfix"></div>
    <?php }?>

    <div id="pricingTable"<?php if ($_smarty_tpl->tpl_vars['performingLookup']->value) {?> class="hidden"<?php }?>>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php  $_smarty_tpl->tpl_vars['tldCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tldCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tldcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tldCategory']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tldCategory']->key => $_smarty_tpl->tpl_vars['tldCategory']->value) {
$_smarty_tpl->tpl_vars['tldCategory']->_loop = true;
 $_smarty_tpl->tpl_vars['tldCategory']->index++;
 $_smarty_tpl->tpl_vars['tldCategory']->first = $_smarty_tpl->tpl_vars['tldCategory']->index === 0;
?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['tldCategory']->first) {?>true<?php } else { ?>false<?php }?>" aria-controls="collapse<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
" class="domain-tld-pricing-category">
                                <?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->category;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['tldpricing'];?>

                            </a>
                        </h4>
                    </div>
                    <div id="collapse<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['tldCategory']->first) {?> in<?php }?>" role="tabpanel" aria-labelledby="heading<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 table-responsive domain-tld-pricing-table-responsive">
                                    <table class="table table-striped table-framed">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaintld'];?>
</th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainminyears'];?>
</th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsregister'];?>
</th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
</th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsrenew'];?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['tld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tldCategory']->value->topLevelDomains; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tld']->key => $_smarty_tpl->tpl_vars['tld']->value) {
$_smarty_tpl->tpl_vars['tld']->_loop = true;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['tld']->value->tld;?>
</td>
                                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['period'];?>
</td>
                                                    <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['register']) {
echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['register'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                    <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['transfer']) {
echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['transfer'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                    <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['renew']) {
echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['renew'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseAll" aria-expanded="false" aria-controls="collapseAll" class="domain-tld-pricing-category">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['alltldpricing'];?>

                        </a>
                    </h4>
                </div>
                <div id="collapseAll" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAll">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 table-responsive domain-tld-pricing-table-responsive">
                                <table class="table table-striped table-framed">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaintld'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainminyears'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsregister'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsrenew'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['tld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tldpricelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tld']->key => $_smarty_tpl->tpl_vars['tld']->value) {
$_smarty_tpl->tpl_vars['tld']->_loop = true;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tld']->value['tld'];?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['tld']->value['period'];?>
</td>
                                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tld']->value['register']) {
echo $_smarty_tpl->tpl_vars['tld']->value['register'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tld']->value['transfer']) {
echo $_smarty_tpl->tpl_vars['tld']->value['transfer'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tld']->value['renew']) {
echo $_smarty_tpl->tpl_vars['tld']->value['renew'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value&&!$_smarty_tpl->tpl_vars['performingLookup']->value) {?>
        <div class="currencychooser pull-right clearfix margin-bottom">
            <div class="btn-group" role="group">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                    <a href="domainchecker.php?search=bulk<?php if ($_smarty_tpl->tpl_vars['searchingFor']->value=='transfer') {?>transfer<?php }?>&currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                        <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="clearfix"></div>
    <?php }?>

<?php }?>

<?php echo '<script'; ?>
>
var langSearch = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
';
var langAdding = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckeradding'];?>
';
var langAdded = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckeradded'];?>
';
var langUnavailable = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainunavailable'];?>
';
var langBulkPlaceholder = '<?php echo smarty_modifier_replace(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['LANG']->value['domaincheckerbulkplaceholder']),"\n",'\n');?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/domainchecker.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"Whois",'title'=>($_smarty_tpl->tpl_vars['LANG']->value['whoisresults']).(' <span id="whoisDomainName"></span>')), 0);?>

<?php }} ?>
