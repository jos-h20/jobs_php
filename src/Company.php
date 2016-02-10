<?php
class Company
{
    /****Properties****/
    private $name;
    private $phone;
    // private $company_contact;
    /****Constructor****/
    function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
    /****Setters****/
    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }
    function setphone($new_phone)
    {
        $this->Phone = (string) $new_phone;
    }
    /****Getters****/
    function getName()
    {
        return $this->name;
    }
    function getPhone()
    {
        return $this->phone;
    }
}

 ?>
