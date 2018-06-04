<!DOCTYPE html>
<html>
<head>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?=  $this->element('header') ?>
</head>
<body>
    <?=  $this->element('navbar') ?>
    <?=  $this->element('sidebar') ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>
</body>
</html>
