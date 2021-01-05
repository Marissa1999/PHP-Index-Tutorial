<?php

class Math
{	
  static $count;
  var $a;
  var $b;
  public function Math($c,$d)
  {
	  self::$count += 1;
	  $this->a = $c;
	  $this->b = $d;
  }
  public function _max()
  {
    return ($this->a>$this->b?$this->a:$this->b);
  }
  
  public function _min()
  {
    return ($this->a>$this->b?$this->a:$this->b);
  }
    
  public function getCount()
  {
	  return self::$count;
  }

	
}
$number = 6;
$fruits = '5 apples';
$name = 'Jon';
$message = "Hello $name!";
//$name = 'Bob';
//$message = 'Hello $name!";
$message = 'Hello $name!';
echo $message.'I really love your cat.';
$total = $number + $number;
$othertotal = $number . $fruits;
echo 'The sum is '. $total;
echo 'The sum is '. $othertotal;

//echo Math::_max(9,7);
$math = new Math(8,6);
$math2 = new Math(6,7);
echo $math->_max(); //Access methods and attributes.
echo $math->_min(); //Access methods and attributes.
echo "# of Math objects created: " . Math::getCount();
$function = '_max';
echo $math->function();

?>

