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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
?>
<!-- ľ š č ť ž ý á í é ú ä ô ň -->

<!-- Homepage background start -->
<div class="homepage-background">

<!-- Sidebar start -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h3 class="text-center ml-3">Naša Ponuka</h3>
        <i class="fa fa-navicon mt-2" onclick="collapseSidebar();"></i>
    </div>
    <div class="sidebar-dropdown-button mt-2">
        <span class="fa fa-leaf"></span> Záhradný projekt 
        <i class="fa fa-chevron-down"></i>
    </div>
    <div class="sidebar-dropdown-container">
        <a href="#">• Dizajnová štúdia</a>
        <a href="#">• Rozvrhnutia plochy - 2D model</a>
        <a href="#">• Priestorové zobrazenie 3D model</a>
    </div>
    <div class="sidebar-link">
        <span class="fa fa-shopping-cart"></span><a href="#">Objednávka projektu</a>
    </div>
    <div class="sidebar-link">
        <span class="fa fa-check-circle"></span><a href="#">Aké údaje o záhrade potrebujeme?</a>
    </div>
    <div class="sidebar-link">
        <a href="#">Obchodné podmienky</a>
    </div>
    <div class="sidebar-dropdown-button">
        <span class="fa fa-book"></span>
            <?= $this->Html->link('Blog', ['action' => 'blog']) ?> 
        <i class="fa fa-chevron-down"></i>
    </div>
    <div class="sidebar-dropdown-container">
        <a href="#">• Trávnik - ako sa ou správne postarať</a>
        <a href="#">• Záhony - kedy strihať a hnojiť</a>
        <a href="#">• Dreviny - kedy strihať a hnojiť</a>
        <a href="#">• Balkón - nádherné previsy - čo potrebujete?</a>
    </div>
    <div class="sidebar-link">
        <span class="fa fa-phone"></span><a href="#">Kontakt</a>
    </div>

    <?= $this->Html->image('buttefly.png', ['width' => 200, 'class' => 'mx-auto mt-4']) ?>
</div>
<!-- Sidebar end -->

<div class="header-text">
    <h1 class="text-center">AAA Záhradný Dizajn</h1>
    <h5 class="text-center mb-5">Vytvorte si vysnívanú záhradu</h5>
</div>

</div>
<!-- Homepage background end -->

<!-- Steps section start -->
<div class="homepage-section">
<h1 class="text-center open-sans section-title">Postup</h1>
<div class="steps">
    <div class="step">
        <?= $this->Html->image('step-one.png') ?>
        <div class="step-text">
            <h3>Objednávka záhradného projektu</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi assumenda obcaecati veniam. Ad iste in soluta ipsam distinctio necessitatibus quia blanditiis nisi magnam molestias laudantium sunt doloribus esse, modi reprehenderit!</p>
        </div>
    </div>
    <div class="step">
        <?= $this->Html->image('step-two.png') ?>
        <div class="step-text">
            <h3>Konzultácia a výber daného projektu zákaznikom</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam rerum perferendis adipisci dicta cumque tempora nemo, provident laborum modi dolor.</p>
        </div>
    </div>
</div>
</div>
<!-- Steps section end -->

<div class="container pt-5">
    <div class="row">
        <div class="col-lg-4">
            <iframe width="350" height="240" allowfullscreen="allowfullscreen"
            src="https://drive.google.com/file/d/187hFj-c1TOBMmeS1jEs4PwCE9i2BRmYu/preview">
            </iframe>
        </div>
        <div class="col-lg-4">
            <iframe width="350" height="240" allowfullscreen="allowfullscreen"
            src="https://drive.google.com/file/d/187hFj-c1TOBMmeS1jEs4PwCE9i2BRmYu/preview">
            </iframe>
        </div>
        <div class="col-lg-4">
            <iframe width="350" height="240" allowfullscreen="allowfullscreen"
            src="https://drive.google.com/file/d/187hFj-c1TOBMmeS1jEs4PwCE9i2BRmYu/preview">
            </iframe>
        </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('zahrada1.1.jpg', ['style' => 'width: 100%; height: 100%;']) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('zahrada1.2.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('zahrada1.3.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('zahrada1.4.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('zahrada1.5.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('zahrada1.10.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('20180430_090212.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('20180608_120337.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="gallery-img">
          <?= $this->Html->image('20180630_113536.jpg', ['style' => 'width: 100%']) ?>
        </div>
      </div>
    </div>
</div>

<?= $this->Html->script('home.js') ?>