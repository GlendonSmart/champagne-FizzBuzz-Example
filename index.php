index.php

<?php
abstract class BubblesClass{
     // Force Extending class to define this method
    abstract protected function sound();
    public $fizz = 0;
    public $buzz = 100;
    public function champEval(int $fizz, int $buzz){
        $this->fizz = $fizz;
        $this->buzz =$buzz;
    }
}

class Champagne extends BubblesClass{
 
    function sound(){
        for( $i = $this->fizz; $i <= $this->buzz; $i ++ )
        {
            $res = '';
        //use the Modulo operator to find the remainder of $fizz divided by 3 or 5.
            if ( $i % 3 == 0 ) $res = 'Fizz';
            if ( $i % 5 == 0 ) $res .= 'Buzz';
        
            $out[] = ( empty( $res ) ) ? $i : $res;
            $out[] = PHP_EOL;
        }
        return join($out);
    }
}

$ot =  new  Champagne();
$ot->champEval(0,"100");
echo  $ot->sound();