<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
require_once __DIR__."/Generator.php"; 
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
    <div class="container ">
        <h1 class="text-center">PRODUCTS FOR PETS</h1>
        <h1 class="mt-5 mb-5">Food for pets</h1>
        <div class="row">
            <?php foreach( $Foods as $food ){ ?>
            <div class="card col-4">
                <img src="<?php echo $food->immagine ?>" class="card-img-top" style="height: 100%; object-fit: cover;"
                    alt="...">
                <div class="card-body">
                    <h2><?php echo $food->name ?></h2>
                    <h3>Category: <?php echo $food->category->name ?></h3>
                    <h4>Price: <?php echo $food->price ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>

        <h1 class="mt-5 mb-5">Toys for pets</h1>
        <div class="row">
            <?php foreach( $Toys as $toy ){ ?>
            <div class="card col-4">
                <img src="<?php echo $toy->immagine ?>" class="card-img-top" style="height: 100%; object-fit: cover;"
                    alt="...">
                <div class="card-body">
                    <h2><?php echo $toy->name ?></h2>
                    <h3>Category: <?php echo $toy->category->name ?></h3>
                    <h4>Price: <?php echo $toy->price ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>

        <h1 class="mt-5 mb-5">Kennels for pets</h1>
        <div class="row">
            <?php foreach( $Kennels as $kennel ){ ?>
            <div class="card col-4">
                <img src="<?php echo $kennel->immagine ?>" class="card-img-top" style="height: 100%; object-fit: cover;"
                    alt="...">
                <div class="card-body">
                    <h2><?php echo $kennel->name ?></h2>
                    <h3>Category: <?php echo $kennel->category->name ?></h3>
                    <h4>Price: <?php echo $kennel->price ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>


    </div>
</body>

</html>