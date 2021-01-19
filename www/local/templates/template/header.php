<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <? $APPLICATION->ShowHead() ?>

        <?
        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap-grid.min.css');
        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/articles.css');
        $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/custom.css');
        ?>

        <title><? $APPLICATION->ShowTitle() ?></title>
    </head>
    <body>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/header.php';
?>