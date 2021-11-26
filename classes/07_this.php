<?php
    class User07 {
        public $first_name;
        public $last_name;

        function sayHello() {
            return "Hello $this->first_name";
        }
    }

    $user_1 = new User07;
    $user_1->first_name = 'Jonnie';
    echo $user_1->sayHello();
?>

