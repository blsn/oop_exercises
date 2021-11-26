<?php
    class Factorial {
        protected $n;

        function __construct($number) {
            if (!is_int($number)) {
                throw new InvalidArgumentException('Not a number or missing argument');
            }
            $this->n = $number;
        }

        function getResult() {
            $factorial = 1;
            for ($i = 1; $i <= $this->n; $i++) {
                $factorial *= $i; // 1,2,3,4 ==> 1,2,6,24 ==> 1*1,1*2,2*3,6*4
            }
            return $factorial;
        }
    }

    $factorial = new Factorial(4);
    echo $factorial->getResult();
?>

