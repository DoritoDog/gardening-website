<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>

<h1 class="text-center" style="padding-top: 80px;">Objednávka záhradného projektu</h1>

<?php foreach ($orders as $order): ?>

<table class="w-50 mx-auto">
  <tr>
    <th>Meno a priezvisko</th>
    <th>Miesto realizácie</th> 
    <th>Telefonné číslo</th> 
    <th>Email</th> 
    <th>Veľkosť pozemku</th> 
    <th>Terén pozemku</th> 
    <th>Dodanie projektu</th> 
    <th>Odkiaľ sa o nás dozvedeli</th> 
    <th>Správa</th> 
  </tr>
  <tr>
    <td><?= $order->name ?></td>
    <td><?= $order->address ?></td>
    <td><?= $order->phone_number ?></td>
    <td><?= $order->email ?></td>
    <td><?= $order->size ?></td>
    <td><?= $order->terrain ?></td>
    <td><?= $order->delivery ?></td>
    <td><?= $order->discovery ?></td>
    <td><?= $order->message ?></td>
  </tr>
</table>

<?php endforeach; ?>

?>
