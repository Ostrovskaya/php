<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Gallery</title>
    <script defer>
        window.addEventListener('load', () =>{
            let imgs = document.querySelectorAll("img");
            imgs.forEach(img => {
                img.addEventListener('click', evt => {
                    setTimeout( ()=> {
                        location.reload();
                    }, 0);
                })
            })
        })
        
    </script>
</head>
<body>


    
