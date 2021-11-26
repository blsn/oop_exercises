<?php
    class User13 {
        protected $username;

        function setUsername($name) {
            $this->username = $name;
        }

        function getUsername() {
            return $this->username;
        }
    }

    interface Author13 {
        public function setAuthorPrivileges($array);

        public function getAuthorPrivileges();
    }

    interface Editor13 {
        public function setEditorPrivileges($array);
   
        public function getEditorPrivileges();    
    }

    class AuthorEditor13 extends User13 implements Author13, Editor13  {
        private $authorPrivilegesArray = array();
         
        private $editorPrivilegesArray = array();
             
        public function setAuthorPrivileges($array) {
            $this->authorPrivilegesArray = $array;
        }
             
        public function getAuthorPrivileges() {
            return $this->authorPrivilegesArray;
        }
             
        public function setEditorPrivileges($array) {
            $this->editorPrivilegesArray = $array;
        }
             
        public function getEditorPrivileges() {
            return $this->editorPrivilegesArray;
        }
    }

    $user1 = new AuthorEditor13();
    $user1->setUsername("Balthazar");
    $user1->setAuthorPrivileges(array("write text", "add punctuation"));
    $user1->setEditorPrivileges(array("edit text", "edit punctuation"));

    $userName  = $user1->getUsername();
    $userPrivileges = array_merge($user1->getAuthorPrivileges(),
    $user1->getEditorPrivileges());
     
    echo $userName . " has the following privileges: ";
    echo implode(", ", $userPrivileges);
    echo ".";    
?>

