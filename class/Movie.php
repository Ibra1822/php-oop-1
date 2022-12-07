<?php 

class Movie {

  public $title;
  public $protagonist;
  public $pic;
  public $age;
  public $country;
  public $category;

  /**
   * @param String $title
   * @param String $protagonist
   * @param String $pic
   * @param Number $age
   * @param String $country
   * @param Adress $category
   */
  public function __construct($_title,$_protagonist,$_age,$_country, Category $_category)
  {
    $this -> title = $_title;
    $this -> protagonist = $_protagonist;
    $this -> age = $_age;
    $this -> country = $_country;
    $this -> category = $_category;
  }

  public function ageVisible(){
    $class = '';
    if ($this -> age <= 17) {
      $class ='minor';
    }else{
      $class ='adult';
    }
    return $class;
  }

  public function crateImg($_pic){
    $this -> pic = $_pic;
  }

};

$scream = new Movie('Scream','GhostFace',18,'Uk',new Category('Horror','Thriller'));

$harryPotter = new Movie('Harry Potter','Daniel Radcliffe',14,'Uk',new Category('Fantasy','Family'));

$shrek = new Movie('Shrek','Shrek',10,'Uk',new Category('Comedy','Cartoon'));


$scream -> crateImg('https://m.media-amazon.com/images/I/41003ngClfL._SY445_.jpg');
$harryPotter -> crateImg('https://m.media-amazon.com/images/I/81Ta2C1GeBS._SY445_.jpg');
$shrek -> crateImg('https://pad.mymovies.it/filmclub/2001/05/033/locandina.jpg');

// var_dump($scream,$harryPotter);

$movies = [$scream , $harryPotter,$shrek];





?>