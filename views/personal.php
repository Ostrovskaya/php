<h1>Добро пожаловать, <?=$user['name']?> <?=$user['surname']?>!</h1>
<p>Ваш логин: <?=$user['login']?></p>
<p>Ваш email: <?=$user['email']?></p>

<?php if (isAdminId($user['id']) ): ?>
<a href="../admin/orderList">Управление заказами</a>
<?php endif; ?>
