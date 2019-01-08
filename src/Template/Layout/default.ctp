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

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAA Záhradný Dizajn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <?= $this->Html->css('StyleSheet') ?>

    <!-- Bootstrap -->
    <?= $this->Html->css('bootstrap-grid.css') ?>
    <?= $this->Html->css('bootstrap-reboot.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>

    <!-- Animate.css -->
    <?= $this->Html->css('animate.css') ?>

    <!-- jQuery -->
    <?= $this->Html->script('jquery') ?>
</head>
<body>
    <!-- Navigation bar start -->
    <div class="navigation-bar">
        <div class="top-navigation-bar">
            <div class="email">
                <span class="fa fa-envelope"></span> <a href="#" class="top-navbar-link">slovak007@yahoo.com</a>
            </div>
            <div class="top-navbar-right">
                <div class="social-links">
                    <span class="fa fa-facebook top-navbar-link"></span>
                    <span class="fa fa-twitter top-navbar-link"></span>
                    <span class="fa fa-google-plus top-navbar-link"></span>
                </div>
                <div class="top-navbar-dark-link">Zavolajte nám</div>
                <div class="top-navbar-dark-link">
                    <span class="fa fa-phone"></span>&nbsp; 0914 130 290
                </div>
            </div>
        </div>
        <div class="bottom-navigation-bar" id="bottom-navbar">
            <span class="ml-5 navigation-bar-title">AAA Záhradný Dizajn</span>
            <span class="fa fa-bars"></span>
            <?= $this->Html->link('Úvod', ['action' => 'home'], ['class' => 'first-navbar-link']) ?>
            <div class="navigation-bar-dropdown">
                <button class="dropdown-button">Okrasná  Záhrada
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Záhony</a>
                    <a href="#">Trávnik</a>
                    <a href="#">Balkón</a>
                    <a href="#">Okrasné Dreviny</a>
                </div>
            </div>
            <?= $this->Html->link('Galéria', ['action' => 'gallery']) ?>
            <?= $this->Html->link('Kontakt', ['action' => 'contact']) ?>
        </div>
    </div>
    <!-- Navigation bar end -->

    <?= $this->fetch('content') ?>
    <?= $this->Html->script('page.js') ?>

    <footer class="centered-content mt-5">
        <p>Copyright &copy; AAA Záhradný Dizajn 2018</p>
    </footer>
</body>
<!-- <div class="preload-icon"></div> -->
</html>
