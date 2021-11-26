<?php
    class User08 {
        public $first_name;
        public $last_name;

        function sayHello() {
            echo "Hello $this->first_name";
            return $this;
        }

        function register() {
            echo " >> registered";
            return $this;
        }

        public function mail() {
            echo " >> email sent";
        }        
    }

    $user_1 = new User08;
    $user_1->first_name = 'Jane';
    $user_1->sayHello()->register()->mail(); // chaining methods
?>

