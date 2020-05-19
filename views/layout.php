<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<header>
<a href="/public/login.php" class="login">Войти</a>
<a href="/public/reg.php" class="reg">Регистрация</a>
</header>
<?=$content?>
<script>
    let links = document.querySelectorAll('.addToCart');

    links.forEach(link => {
        link.addEventListener('click', evt =>{
            let id = "id = 1";
            
            fetch("cart.php", {
                method: 'POST',
                headers: {
                    'Content-Type':  'application/x-www-form-urlencoded'
                },
                body: id
            })
                .then( (response) => {
                    if (response.status !== 200) {           
                        return Promise.reject();
                }   
            return response.text()
            })
            .then(i => console.log("успех"))
            .catch(() => console.log('ошибка')); 
            })
    });
</script>
</body>
</html>