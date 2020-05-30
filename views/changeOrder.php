<h2>Заказ №<?=$order['id']?></h2>

 <div>
    <h2>Котактные данные:</h2>
    <label>ФИО получателя 
    <input class="name" type="text" name="name" value="<?=$order['name']?>"></label>
    <br>
    <label>Адрес доставки: 
    <textarea class="adr" name="adr" id="" cols="22" rows="5" value=""><?=$order["address"]?></textarea></label>
    <br>
    <label>Контактный номер: 
    <input class="phone" type="phone" name="phone" value="<?=$order["phone"]?>"></label>
</div>
<div>
    <h2>Способ оплаты:</h2>
    <select class="pay" name="pay" id="">
        <option value="card1">Картой на сайте</option>
        <option value="card2">Картой при получении</option>
        <option value="cash">Наличными</option>
    </select>
</div>

<input class="send send_data" type="button" value="Изменить данные покупателя">

<div>
<h2>Товары:</h2>
<table>
<tr>
    <td>Id товара</td>
    <td>Название товара</td>
    <td>Цена</td>
    <td>Количество</td>
    <td></td>
    <td></td>
  </tr>
<?php foreach ($products as $product): ?>
  <tr class="row" data-id="<?=$product["id"]?>">
    <td><?=$product["product_id"]?></td>
    <td><?=$product["name"]?></td> 
    <td><?=$product['price']?></td>
    <td><input min="1" class="count" type="number" value="<?=$product["count"]?>"></td>
    <td><a class="change" href="#">Изменить</a></td>
    <td><a class="del" href="#">Удалить</a></td>
  </tr>
  <?php endforeach;?>
</table>
</div>


<script>
    let options = document.querySelectorAll('option');
    options.forEach(opt => {
        if(opt.value == '<?=$order["pay"]?>'){
            opt.selected = true;
        }
    })

    let send_data = document.querySelector('.send_data');
    send_data.addEventListener('click', () => {
      let id = <?=$order['id']?>;
      const name = document.querySelector('.name');
      const adr = document.querySelector('.adr');
      const phone = document.querySelector('.phone');
      const pay = document.querySelector('.pay');

      let data = "id=" + id + "&name="+ name.value + "&adr="+ adr.value + "&phone="+ phone.value + "&pay="+ pay.value;  

      let url = "../admin/change_contact";
      post( url, data); 
    })

    let btns = document.querySelectorAll('.change'); 
    btns.forEach( btn => {
      btn.addEventListener('click', (evt) =>{
        evt.preventDefault();
        let row = evt.target.parentNode.parentNode;
        let id = row.dataset.id;
        
        const count = row.querySelector('.count');

        let data = "method=change" + "&id=" + id + "&count="+ count.value;

        let url = "../admin/change_order";
        post( url, data);
      })
    })
    
    let dels = document.querySelectorAll('.del'); 
    dels.forEach( btn => {
      btn.addEventListener('click', (evt) =>{
        evt.preventDefault();
        let row = evt.target.parentNode.parentNode;
        let id = row.dataset.id;

        let data = "method=delete" + "&id=" + id;
        row.remove();
        let url = "../admin/change_order";
        post( url, data); 
      })
    })

    function post( url, data){
      fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type':  'application/x-www-form-urlencoded'
            },
            body:  data

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
    }
</script>

<style>
 .send{
   margin: 16px 0;
 }
</style>