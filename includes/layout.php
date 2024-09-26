<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TITLE; ?></title>
    <link rel="stylesheet" href="/includes/layout.css">
    <link rel="stylesheet" href="/includes/popup.css">

    <?php
        if (isset($CSS)) {
            foreach ($CSS as $css) {
                echo "<link rel='stylesheet' href='$css'>";
            }
        }
    ?>
</head>
<body>
<button class="menu-btn">☰</button>

<div class="container">
    <div class="sidebar" id="sidebar">
        <div id="logo"><img src="/images/layout/ai-generated-8707933_1280-modified-small.png" alt="MindWarrior" title="MindWarrior" /></div>
        <ul>
            <li><a href="/quick-start.<?=$LANG;?>.<?=getenv('LINK_EXT');?>"><?=$MENU['quick-start']; ?></a></li>
            <li><a href="/shared-letters.<?=$LANG;?>.<?=getenv('LINK_EXT');?>"><?=$MENU['shared-letters']; ?></a></li>
            <li><a href=""/privacy.<?=$LANG;?>.<?=getenv('LINK_EXT');?>">Privacy Policy</a></li>
        </ul>
        <h2><?=$MENU['faq']; ?></h2>
        <ul id="faq-questions">
            <li data-target="#purpose"><?=$MENU['purpose'];?></li>
            <li data-target="#letter"><?=$MENU['letter'];?></li>
            <li data-target="#review"><?=$MENU['review'];?></li>
            <li data-target="#forgot"><?=$MENU['forgot'];?></li>
            <li data-target="#difficulty"><?=$MENU['difficulty'];?></li>
            <li data-target="#pause"><?=$MENU['pause'];?></li>
            <li data-target="#letter-formatting"><?=$MENU['letter-formatting'];?></li>
            <li data-target="#controls"><?=$MENU['controls'];?></li>
            <li data-target="#name"><?=$MENU['name'];?></li>
            <li data-target="#letter-example"><?=$MENU['letter-example'];?></li>
            <li data-target="#share"><?=$MENU['share'];?></li>
            <li data-target="#privacy"><?=$MENU['privacy'];?></li>
        </ul>
    </div>

    <div class="content">
        <?=$CONTENT; ?>
    </div>
</div>


<div id="image-popup" class="popup">
    <span class="close-btn">&times;</span>
    <img class="popup-content" id="popup-image" />
</div>


<script src="/includes/layout.js"></script>
<script src="/includes/popup.js"></script>

<?php
if (isset($JS)) {
    foreach ($JS as $js) {
        echo "<script src='$js'></script>";
    }
}
?>
</body>
</html>
