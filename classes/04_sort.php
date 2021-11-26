<?php
    class Sort_Array {
        private $result = array();

        function __construct(array $arr) {
            $this->result = $arr;
        }

        function getOrder() {
            $sorted = $this->result;
            sort($sorted);
            return $sorted;
        }
    }

    $sort_array = new Sort_Array(array(11, -2, 4, 35, 0, 8, -9));
    var_dump($sort_array->getOrder());
?>

