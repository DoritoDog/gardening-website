
<h1 class="text-center" style="margin-top: 90px;">Objednávka záhradného projektu</h1>

<?= $this->Form->create() ?>
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
                echo $this->Form->label('place', 'Ulica, číslo domu a miesto realizácie', ['class' => 'font-weight-bold']);
                $options = ['name' => 'place', 'class' => 'form-control', 'required' => true, 'label' => false];
                echo $this->Form->control('place', $options);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->label('phone', 'Telofonné číslo', ['class' => 'font-weight-bold']);
                $options = ['name' => 'phone', 'class' => 'form-control', 'required' => true, 'label' => false];
                echo $this->Form->control('phone', $options);
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
                echo $this->Form->label('source', 'Odkiaľ ste sa o nás dozvedeli?', ['class' => 'font-weight-bold']);
                $options = ['name' => 'source', 'class' => 'form-control', 'label' => false, 'required' => true];
                echo $this->Form->control('source', $options);
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