<?php  


class Category{
  public $type;
  public $secondType;

  /**
   * @param String $type
   * @param String $secondtype
   */
  public function __construct($_type,$_secondType,)
  {
    $this -> type = $_type;
    $this -> secondType = $_secondType;
  }
}


?>