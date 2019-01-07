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
    <div class="sidebar-dropdown-button">
        <span class="fa fa-check-circle"></span><a href="#">Aké údaje o záhrade potrebujeme?</a>
        <i class="fa fa-chevron-down"></i>
    </div>
    <div class="sidebar-dropdown-container">
        <ol>
            <li>orientácia na svetové strany.</li>
            <li>aká je výška budov v okolí záhrady (najlepšie je poslať fotografie do emailu).</li>
            <li>Preferencie na dizajn - páči sa Vám moderná záhrada s rovnými líniami, vidiecka alebo provensálska či japonská?</li>
            <li>Farebná škála - to je takisto dôležité. Preferujete farby tón v tóne alebo veľa farieb a kvetov?</li>
            <li>Záhradná údržba - jednoduchá záhrada na údržbu (maximálne strihanie a kosenie trávnika) alebo kvetinové záhony a vodný prvok, prípadne relaxačná funkcia záhrady ako obývací priestor vonku.</li>
            <li>Aké typy kvetov a drevín sa Vám najviac páčia? Niekto preferuje stálu zeleň v podobe ihličnanov, iný má rád neustálu premenu záhrady.</li>
        </ol>
    </div>
    <div class="sidebar-link">
        <span class="fa fa-shopping-cart"></span><?= $this->Html->link('Objednávka projektu', ['action' => 'order']) ?>
    </div>
    <div class="sidebar-dropdown-button">
        <a href="#">Obchodné podmienky</a>
        <i class="fa fa-chevron-down"></i>
    </div>
    <div class="sidebar-dropdown-container">
        <ol>
            <li>Záhradný projekt sa realizuje ako 3D model spolu s 10 až 15 fotografiami, technický výkres a rozpis jednotlivých rastlín.</li>
            <li>Pripomienkovanie sa rieši formou emailu a telefónneho rozhovoru. Pokiaľ je nevyhnutná osobná návšteva, účtujeme 30 eur za návštevu ako dopravné náklady.</li>
            <li>Naša spoločnosť záhrady nerealizuje, robíme iba návrhy záhrad, prípadne nákup a vysadenie drevín a rastlín. Realizáciu závlahy, dlažby, chodníky a iné architektonické prvky naša spoločnosť nerealizuje.</li>
            <li>Počas riešenia záhradného projektu sú zákazníkovi zasielané iba fotografie s návrhmi dizajnu na pripomienkovanie.</li>
            <li>Všetku dokumentáciu k záhradnému projektu obdrží zákazník až po uhradení faktúry.</li>
            <li>Štandardná doba na dodanie záhradného projektu je 2 až 3 týždne, v závislosti od komunikácie so zákazníkom.</li>
            <li>Prvé fotografie posielame emailom už po prvom týždni.</li>
            <li>Platbu zákazník realizuje na náš bankový účet prevodom</li>
        </ol>
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
    <div class="sidebar-dropdown-button">
        <span class="fa fa-phone"></span><a href="#">Kontakt</a>
        <i class="fa fa-chevron-down"></i>
    </div>
    <div class="sidebar-dropdown-container">
        <p style="white-space: pre-wrap;">
Dunya s r.o.
Pod trnkami 314/20
94901 Nitra
IČo: 48149322
Nie sme platcami DPH.
Bankový účet: IBAN SK71 0900 0000 0002 6464 4504
Telefón: 0917130290
email: aaazahradnydizajn@gmail.com
        </p>
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
            <p>Plánujete krásnu záhradu k svojmu novopostavenému domu? Alebo prerábate už existujúcu záhradu? Sme tu pre Vás a za veľmi prijateľnú cenu Vám vytvoríme vizualizáciu Vašej vysnívanej záhrady. A jej realizáciu podľa technického nákresu a 3D modelu už zvládnete aj sami. A najmä ušetríte kopu finančných prostredkov.</p>
        </div>
    </div>
    <div class="step">
        <?= $this->Html->image('step-two.png') ?>
        <div class="step-text">
            <h3>Konzultácia a výber daného projektu zákaznikom</h3>
            <p>Celý záhradný projekt s Vami prekonzultujeme, pošleme Vám fotky, ako bude Vaša záhrada vyzerať a pošleme Vám aj všetku dokumentáciu ohľadom realizácie tak, aby naozaj jej realizácia bola jednoduchá.</p>
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