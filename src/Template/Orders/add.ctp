<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>

<h1 class="text-center" style="padding-top: 80px;">Objednávka záhradného projektu</h1>
<?= $this->Flash->render() ?>

<?= $this->Form->create($order) ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <?php
                echo $this->Form->label('name', 'Meno a priezvisko', ['class' => 'font-weight-bold']);
                $options = ['name' => 'name', 'class' => 'form-control', 'label' => false, 'required' => true];
                echo $this->Form->control('name', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('address', 'Ulica, číslo domu a miesto realizácie', ['class' => 'font-weight-bold']);
                $options = ['name' => 'address', 'class' => 'form-control', 'required' => true, 'label' => false];
                echo $this->Form->control('address', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('phone_number', 'Telofonné číslo', ['class' => 'font-weight-bold']);
                $options = ['name' => 'phone_number', 'class' => 'form-control', 'required' => true, 'label' => false];
                echo $this->Form->control('phone_number', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('email', 'Email', ['class' => 'font-weight-bold']);
                $options = ['name' => 'email', 'class' => 'form-control', 'label' => false, 'required' => true, 'placeholder' => 'príklad@gmail.com'];
                echo $this->Form->control('email', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('size', 'Veľkosť pozemku vrátane domu v m2', ['class' => 'font-weight-bold']);
                $options = ['name' => 'size', 'class' => 'form-control', 'label' => false, 'required' => true];
                echo $this->Form->control('size', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('terrain', 'Terén pozemku', ['class' => 'font-weight-bold']);
                $options = ['name' => 'terrain', 'class' => 'form-control', 'label' => false, 'required' => true];
                echo $this->Form->control('terrain', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('delivery', 'Dodanie projektu', ['class' => 'font-weight-bold']);
                $options = ['name' => 'delivery', 'class' => 'form-control', 'label' => false, 'required' => true];
                echo $this->Form->control('delivery', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('discovery', 'Odkiaľ ste sa o nás dozvedeli?', ['class' => 'font-weight-bold']);
                $options = ['name' => 'discovery', 'class' => 'form-control', 'label' => false];
                echo $this->Form->control('discovery', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('message', 'Správa', ['class' => 'font-weight-bold']);
                $options = ['name' => 'message', 'class' => 'form-control', 'label' => false];
                echo $this->Form->textarea('message', $options);
                ?>
            </div>
        </div>
    </div>

    <h3>Celková cena €249,-</h3>

    <div class="form-group">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" onchange="toggleSubmit()">
            <p class="ml-3">Súhlasím s <a href="#">obchodnými podmienkami</a> a <a href="#">spracúvaním osobných údajov</a>.</p>
        </label>
    </div>
    <?php
    $options = ['id' => 'reg-submit', 'style' => 'margin-top: 20px', 'class' => 'btn btn-dark', 'disabled' => true];
    echo $this->Form->button('Submit', $options);
    echo $this->Form->end();
    ?>
</div>

<?= $this->Form->end() ?>

<script>

var hasAgreedToTerms;
function toggleSubmit() {
    hasAgreedToTerms = !hasAgreedToTerms;
    document.getElementById('reg-submit').disabled = !hasAgreedToTerms;
}

</script>