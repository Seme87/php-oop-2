<?php
require_once __DIR__."/Category.php";
require_once __DIR__."/Food.php";
require_once __DIR__."/Toys.php";
require_once __DIR__."/Kennel.php";



$dog = new Genre("Dog");
$cat = new Genre("Cat");

$Foods =[
    new Food("Royal Canin","20 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/royal/canin/german/shepherd/adult/crocchette/per/cani/5/400/84716_pla_royalcanin_adulthund_germanshepherd_5.jpg", "Food"),
    new Food("Natural Trainer","25 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/natural/trainer/maxi/puppy/con/pollo/fresco/7/400/73471_pla_nova_foods_trainer_natural_puppy_maxi_12_kg_01_7.jpg", "Food"),
    new Food("Whiskas","12 €", $cat, "https://www.whiskas.it/sites/g/files/fnmzdf2106/files/2022-11/MicrosoftTeams-image%20%2811%29.png", "Food"),
];

$Toys =[
    new Toys("Gioco per cani Pollo in lattice","2,69 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/pollo/in/lattice/6/400/60576_PLA_Hundespielzeug_Spiel_Huhn_mit_Squeaker_HS_6.jpg", "Toys"  ),

    new Toys("Gioco per cani Riccio Zotti con squeak","2,69 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/riccio/zotti/con/squeak/9/400/__startbild_dsc1310_9.jpg", "Toys"  ),

    new Toys("Palla gioco per cani Snackball","6,69 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/palla/gioco/per/cani/snackball/5/400/22569_pla_snackball_fg_7746_6_5.jpg", "Toys"  ),

];


$Kennels=[
    new Kennel("Cuscino Ferplast Scott, verde", "13,39 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/cuscino/ferplast/scott/verde/1/400/224596_224597_224599_224600_ferplast_hundekissen_scott_green_hs_02_1.jpg", "kennels" ),

    new Kennel("Trasportino Gulliver Trixie", "75,39 €", $cat, "https://shop-cdn-m.mediazs.com/bilder/trasportino/gulliver/trixie/2/400/21063_PLA_Trixie_Gulliver_Transportbox_Groesse_7_L_104_x_B_73_x_H_75_cm_2.jpg", "kennels" ),

    new Kennel("Rimorchio per bici HAFENBANDE Cabby L con due ganci", "195,39 €", $dog, "https://shop-cdn-m.mediazs.com/bilder/rimorchio/per/bici/hafenbande/cabby/l/con/due/ganci/4/400/162200_hafenbande_cabbyl_hs28_4.jpg", "kennels" ),



]

?>
