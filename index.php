<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
require_once __DIR__."/Category.php";
require_once __DIR__."/Food.php";

$dog = new Genre("Dog");
$cat = new Genre("Cat");

$Foods =[
    new Food("Royal Canin","20 €", $dog, "https://i.ebayimg.com/images/g/JgkAAOSw~gxfaxba/s-l500.jpg", "Food"),
    new Food("Royal Canin","20 €", $dog, "https://www.whiskas.it/sites/g/files/fnmzdf2106/files/2022-11/MicrosoftTeams-image%20%2811%29.png", "Food"),

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Cdn Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Cdn Boostrap -->

    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="mb-5">Prodotti</h1>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
    </div>
</body>

</html>