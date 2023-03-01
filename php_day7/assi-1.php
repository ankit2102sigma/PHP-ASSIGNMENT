<?php
class school {

  public $name;
  public $roll_no;


  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$name1 = new school();
$name2 = new school();
$name1->set_name('Ankit');
$name2->set_name('arora');

echo $name1->get_name();
echo "<br>";
echo $name2->get_name();
?> 