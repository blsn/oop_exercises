<?php
    abstract class User12 {
        protected $username;

        abstract public function stateYourRole();

        function setUsername($name) {
            $this->username = $name;
        }

        function getUsername() {
            return $this->username;
        }
    }

    class Admin12 extends User12 {
        public function stateYourRole() {
            return "admin";
        }
    }

    class Viewer12 extends User12 {
        public function stateYourRole() {
            return strtolower(__CLASS__);
        }
    }

    $admin_1 = new Admin12;
    $admin_1->setUsername('Balthazar');

    $viewer_1 = new Viewer12;
    $viewer_1->setUsername('Joe');

    echo $admin_1->getUsername() . " is " . $admin_1->stateYourRole() . "<br>";
    echo $viewer_1->getUsername() . " is " . $viewer_1->stateYourRole();
?>

