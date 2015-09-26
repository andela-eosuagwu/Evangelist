<?php
ini_set('display_errors',1);


/**
*
*/
class A
{
    protected $one;
    private $two;

    public function __construct( $one, $two)
    {
        $this->one = $one;
        $this->two = $two;
    }

    public function other(A $other)
    {
        echo $other->one;
        echo $other->two;
    }
}

class B extends A
{
}

$a = new A('fcldfvdf', 'efksfedfr');
$b = new B('dwsdsds', 'fcsdfcdfv');
$b->other($a);

















?>