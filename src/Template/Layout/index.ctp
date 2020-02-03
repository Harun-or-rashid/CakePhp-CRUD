<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<?= $this->HTML->css('bootstrap.min.css'); ?>
    <?= $this->HTML->script('bootstrap.min.js');?>
    <?= $this->fetch('css');?>
    <?= $this->fetch('script');?>
    <title><?= $this->fetch('title') ?></title>
</head>
<body>
<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area nav item large-3 medium-4 columns">
        <li class="name">
            <h1><a href=""></a></h1>
        </li>
    </ul>
    <div class="top-bar-section">
        <ul class="right">
            <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
            <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
        </ul>
    </div>
</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix">
    <?= $this->fetch('content') ?>
    <?php foreach ($data as $s): ?>
   <?= $s->name; ?>
    <?php endforeach;?>

</div>
<footer>
</footer>
</body>
</html>
