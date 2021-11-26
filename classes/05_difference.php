<?php
    class Difference {
        private $start_date;
        private $end_date;

        function __construct($start, $end) {
            $this->start_date = date_create($start);
            $this->end_date = date_create($end);
        }

        function getDifference() {
            $diff = date_diff($this->start_date, $this->end_date);
            return $diff->format("%y Years, %m Months, %d Days");
        }
    }

    $difference = new Difference('1981-11-03', '2013-09-04');
    echo $difference->getDifference();
?>

