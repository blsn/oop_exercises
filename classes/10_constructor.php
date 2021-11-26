<?php
    class User10 {
        private $first_name;
        private $last_name;

        function __construct($firstName, $lasttName) {
            $this->first_name = $firstName;
            $this->last_name = $lasttName;
        }

        function getFullName() {
            return "$this->first_name $this->last_name";
        }
    }

    $user_1 = new User10('Joe', 'Doe');
    echo $user_1->getFullName();
?>

