<h1><?=$product['name']?></h1>
<img width="400"  class="pic" src="../public/<?=$product['url']?>" alt="<?=$product['name']?>">

<div class="price"><?=$product['price']?> &#8381;</div>

<br>

<input class="addToCart" data-id="<?=$product['id']?>" type="submit" value="Добавить в корзину">
<br>

<br>
<a href="../cart">Перейти в корзину</a>
<br>

<div class="shortDescription">
    <h3>Краткое описание товара</h3>
    <p><?=$product['short_description']?></p>
</div>

<div class="detailedDescription">
    <h3>Подробное описание товара</h3>
    <p><?=$product['long_description']?></p>
</div>


<script>
    let link = document.querySelector('.addToCart');

    link.addEventListener('click', evt =>{
        let id = link.dataset.id;
        
        fetch("../cart/add", {
            method: 'POST',
            headers: {
                'Content-Type':  'application/x-www-form-urlencoded'
            },
            body:  'id=' + id

        })
            .then( (response) => {
                if (response.status !== 200) {           
                    return Promise.reject();
                }   
                return response.json()
            })
        .then(response => {
            alert(response.message);
        })
        .catch(() => console.log('ошибка')); 
    });
    
</script>


