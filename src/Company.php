<?php
class Company
{
    /****Properties****/
    private $name;
    private $phone;
    private $address;
    // private $company_contact;
    /****Constructor****/
    function __construct($name, $phone, $address)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
    /****Setters****/
    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }
    function setPhone($new_phone)
    {
        $this->phone = (string) $new_phone;
    }
    function setAddress($new_address)
    {
        $this->address = $new_address;
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
    function getAddress()
    {
        return $this->address;
    }
}

 ?>
