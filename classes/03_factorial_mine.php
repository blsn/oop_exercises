<?php
    class Factorial_Of_Number {
        private $result = array();

        function calculate($n) {
            for ($i = 1; $i <= $n; $i++) {
                $this->result[$i] = $i; // 1,2,3,4 ==> 1,2,6,24
            }
            return array_product($this->result);
        }
    }

    $factorial = new Factorial_Of_Number;
    echo $factorial->calculate(4);
?>

