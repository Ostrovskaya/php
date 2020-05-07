<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Gallery</title>
    <script defer>
        window.addEventListener('load', () =>{
            let imgs = document.querySelectorAll(".img");
            let popUp = document.querySelector('.popUp')

            imgs.forEach(img => {
                img.addEventListener('click', evt => {
                    let bigImg = popUp.querySelector('img');
                    bigImg.src = evt.target.dataset.origin;
                    bigImg.alt = evt.target.alt;
                    popUp.classList.remove("hidden")
                })
            })

            popUp.addEventListener('click', evt => {
                popUp.classList.add("hidden")
            })
        })
        
    </script>
</head>
<body>
    <div class="popUp hidden">
        <img class="bigImg" src="#" alt="#">
    </div>

    
