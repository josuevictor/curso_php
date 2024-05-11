<?php
  class Contact {
    public $name;
    public $email;
    public $phone;


    function  __construct($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
      public function getEmail()
      {
          return $this->email;
      }

      public function getName()
      {
          return $this->name;
      }

      public function getPhone()
      {
          return $this->phone;
      }

      public function setEmail($email)
      {
          $this->email = $email;
      }

      public function  setPhone($phone)
      {
          $this->phone = $phone;
      }

      public function setName($name)
      {
          $this->name = $name;
      }
  }

  $contact1 = new Contact;

  $contact1->setEmail('contac1@email.com');
  $contact1->setPhone('8299999999');
  $contact1->setName('josé');

  $contact1->getEmail();
  $contact1->getPhone();
  $contact1->getName();
