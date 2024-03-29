<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="{$charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WHMCS - {$pagetitle}</title>

    <link href="{$BASE_PATH_CSS}/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{$BASE_PATH_CSS}/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="templates/{$template}/style.css" rel="stylesheet" type="text/css" />
    <link href="{$BASE_PATH_CSS}/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="{$BASE_PATH_CSS}/bootstrap-switch.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{$BASE_PATH_JS}/jquery.min.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/textext.min.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/bootstrap-switch.min.js"></script>

    <script type="text/javascript">
        var datepickerformat = "{$datepickerformat}";
        {if $jquerycode}
            $(document).ready(function(){ldelim}
                {$jquerycode}
            {rdelim});
        {/if}
        {if $jscode}
            {$jscode}
        {/if}
    </script>

    <script type="text/javascript" src="templates/{$template}/head.js"></script>
    <script type="text/javascript" src="{$BASE_PATH_JS}/AdminAdvSearch.js"></script>

    {$headoutput}

</head>
<body>

    {$headeroutput}

    <div class="topbar">
        <div class="pull-left">
            <a href="index.php">{$_ADMINLANG.home.title}</a> |
            <a href="../">{$_ADMINLANG.global.clientarea}</a> |
            <a href="#" data-toggle="modal" data-target="#myNotes">{$_ADMINLANG.global.mynotes}</a> |
            <a href="myaccount.php">{$_ADMINLANG.global.myaccount}</a> |
            <a id="logout" href="logout.php">{$_ADMINLANG.global.logout}</a>
            {$topBarNotification}
        </div>
        <div class="pull-right date">
            {$smarty.now|date_format:"%A, %d %B %Y, %H:%M"}
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="templates/{$template}/images/logo.gif" border="0" /></a>
        </div>
        <div class="stats">
            <a href="orders.php?status=Pending">
                <span class="stat">{$sidebarstats.orders.pending}</span>
                {$_ADMINLANG.stats.pendingorders}
            </a> |
            <a href="invoices.php?status=Overdue">
                <span class="stat">{$sidebarstats.invoices.overdue}</span>
                {$_ADMINLANG.stats.overdueinvoices}
            </a> |
            <a href="supporttickets.php">
                <span class="stat">{$sidebarstats.tickets.awaitingreply}</span>
                {$_ADMINLANG.stats.ticketsawaitingreply}
            </a>
        </div>
    </div>

    {include file="$template/menu.tpl"}

    <div id="sidebaropen"{if !$minsidebar} style="display:none;"{/if}>
        <a href="#" onclick="sidebarOpen();return false">
            <img src="templates/{$template}/images/opensidebar.png" border="0" />
        </a>
    </div>
    <div id="sidebar"{if $minsidebar} style="display:none;"{/if}>
        {include file="$template/sidebar.tpl"}
    </div>

    <div class="contentarea" id="contentarea"{if !$minsidebar} style="margin-left:209px;"{/if}>

        <div style="float:left;width:100%;">

            {if $helplink}
                <div class="contexthelp">
                    <a href="http://docs.whmcs.com/{$helplink}" target="_blank">
                        <img src="images/icons/help.png" border="0" align="absmiddle" />
                        {$_ADMINLANG.help.contextlink}
                    </a>
                </div>
            {/if}

            <h1{if $pagetitle == $_ADMINLANG.global.hometitle} class="pull-left"{/if}>{$pagetitle}</h1>
