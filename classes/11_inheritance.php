<?php
    class User11 {
        protected $username; // changed to 'protected' for access from outside

        function setUsername($name) {
            $this->username = $name;
        }

        function getUsername() {
            return $this->username;
        }
    }

    class Admin11 extends User11 {
        function expressYourRole() {
            return strtolower(__CLASS__);
        }

        function sayHello() {
            return "Hello admin, " . $this->getUsername();
        }
    }

    $admin_1 = new Admin11;
    $admin_1->setUsername('Balthazar');
    echo $admin_1->sayHello();
?>

