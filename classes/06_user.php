<?php
    class User06 {
        public $first_name;
        public $last_name;

        function sayHello() {
            return 'Hello';
        }
    }

    $user_1 = new User06;
    $user_1->first_name = 'John';
    $user_1->last_name = 'Doe';
    $hello = $user_1->sayHello();

    $user_2 = new User06;
    $user_2->first_name = 'Jane';
    $user_2->last_name = 'Doe';
    $hello = $user_2->sayHello();

    echo "$hello $user_1->first_name $user_1->last_name<br>";
    echo "$hello $user_2->first_name $user_1->last_name<br>";
?>

