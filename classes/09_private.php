<?php
    class User09 {
        private $first_name;

        function setFirstName($firstName) {
            $this->first_name = $firstName;
        }

        function getFirstName() {
            return $this->first_name;
        }
    }

    $user_1 = new User09;
    $user_1->setFirstName('Joe');
    echo $user_1->getFirstName();
?>

