<h2>Заказы</h2>

<table>
<tr>
    <td>Дата заказа</td>
    <td>Id заказа</td>
    <td>Id покупателя</td>
    <td></td>
  </tr>
<?php foreach ($list as $item): ?>
  <tr>
    <td><?=$item["date"]?></td>
    <td><?=$item["id"]?></td>
    <td><?=$item["user_id"]?></td>
    <td><a href="/admin/order?id=<?=$item["id"]?>">Изменить</a></td>
  </tr>
  <?php endforeach;?>
</table>

