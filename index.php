<!-- create un file `index.php` in cui:
- è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
- BONUS: creare un file “database” contenente una lista di film che poi vengono istanziati in un ciclo -->

<?php

class Movie {
  
   public $title;
   public $description;
   public $age;
   

    function __construct($_title)
    {
        $this -> title = $_title;
    }

    public function setDiscount($age){
       
        if( $age < 20){
            $this -> sconto = 20;
        }else if($age > 30){
            $this -> sconto = 50;
        }
        
    }
    public function getDiscount(){
        return $this -> sconto;
    }

}

$Movie1 = new Movie('Wolverine');

$Movie1 -> description = 'Lorem ddmkcsdm kafnfnnf sdvnsldnvlsdnvdlnv dvladnvladvndlakvnldnv aknvlaknvnvalnvlvnlkvnlkad';
$Movie1 -> setDiscount(30);
$Movie1 -> age = 26;

$Movie2 = new Movie('Iron Man');
$Movie2 -> setDiscount(70);

$Movie2 -> description = 'çekefekf dfnlsfknvlsnvlsdknvds vlsdnvldsknvdnvkdv vsvndsknvkdnvkdnvkdv dvnkdsnvkdnvkdsnvkvnkv';
$Movie2 -> age = 40;

var_dump($Movie1);
var_dump($Movie2);


?>