<?php
/*
  From PHP5 you can write PHP in either a procedural or object oriented way.
  OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
/*
Access Modifiers:
    public -> can be accessed from anywhere
    private -> can only be accessed from inside the class
    protected -> can only be accessed from inside the class and by inheriting classes
*/
    // Properties are just variables that belong to a class.
    private $password;

    // The constructor is called whenever an object is created from the class.
    // We assign the properties passed in from the outside to the properties we created inside the class.
      public function __construct($name, $email) { // As long as properties are passed here, we can don`t declare it in the class
      $this->name = $name;
      $this->email = $email;
    }
    // Methods are functions that belong to a class.  
    function login() {
      return "User $this->name is logged in.";
    }
  
    // Destructor is called when an object is destroyed or the end of the script.
    function __destruct() {
      echo "The user name is {$this->name}.<br>";
    }
  }
  
  // Instantiate a new user
  $user1 = new User('Brad', 'brad@gmail.com');
  echo $user1->login();
  var_dump($user1);
  
/*
===============================================================
---------------------------- Inheritence ----------------------
===============================================================
Inheritence is the ability to create a new class from an existing class.
It is achieved by creating a new class that extends an existing class.
*/
  class employee extends User {
    public function __construct($name, $email, $title) {
      parent::__construct($name, $email);
      $this->title = $title;
    }
    public function getTitle() {
      return $this->title;
    }
  }
  $employee1 = new employee('John','johndoe@gmail.com','Manager');
  echo '<br>'.$employee1->getTitle();
?>