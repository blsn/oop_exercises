<?php
    class MyClass {
        public $message = 'Hello All, I am ';

        function introduce($name) {
            return $this->message . $name;
        }
    }

    $user_class = new MyClass;
    echo $user_class->introduce('Scott');
?>

