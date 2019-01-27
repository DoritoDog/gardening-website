<div class="info-view">
  <div class="info-panel">
    <h1 class="text-center"><?= $title ?></h1>
    <ul class="info-panel-list">
    <?php foreach($list as $item): ?>
      <li><?= $item ?></li>
    <?php endforeach; ?>
    </ul>
  </div>
</div>