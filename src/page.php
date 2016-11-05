<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="fr" class="turbolinks-progress-bar">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="origin-when-cross-origin" name="referrer">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta content="#474D57" name="theme-color">
    <meta content="Marguerite 1.0" name="description">

    <title>Marguerite 1.0</title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" media="all" href="/main.css">
    <link rel="stylesheet" media="all" href="/marguerite.css">
    <!-- <link rel="stylesheet" media="print" href="print.css"> -->
    <link rel="stylesheet" media="print" href="/ace.css">

    <script src="/js/jquery-1.12.4.js"></script>
    <script src="/js/jquery-ui.js"></script>

    <script src="/js/command.js"></script>
    <script src="/js/tree.js"></script>
    <script src="/js/budget.js"></script>

    <style>
    [data-user-is] { display: none !important; }
    [data-user-is="2"] { display: block !important; }
    [data-user-is="2"][data-display="inline"] { display: inline !important; }
    [data-user-is-not] { display: block !important; }
    [data-user-is-not][data-display="inline"] { display: inline !important; }
    [data-user-is-not="2"] { display: none !important; }
    </style>

</head>

<body class="ui_charcoal">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/../src/header.php'); ?>

    <div class="page-with-sidebar page-sidebar-expanded">

        <?php include($_SERVER['DOCUMENT_ROOT'] . '/../src/sidebar.php'); ?>

        <div class="content-wrapper">
            <div class="flash-container"></div>

            <div class="container-fluid">
                <div class="content">
                    <div class="clearfix">

                         <?php include( $_SERVER['DOCUMENT_ROOT'] . '/../pages/'. $PAGE .'.php'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/../src/page_end.php'); ?>


</body>
</html>
