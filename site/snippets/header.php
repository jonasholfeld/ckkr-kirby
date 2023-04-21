<!doctype html>
<html lang="de" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <title><?= $page->title() . ' | ' . $site->title() ?></title>

    <?php snippet('scss'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/node_modules/@sindresorhus/slugify/index.js" type="module"></script>
</head>
