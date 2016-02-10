<?php
class Job
{
    /****Properties****/
    private $title;
    private $company;
    /****Constructor****/
    function __construct($title, $company)
    {
        $this->title = $title;
        $this->company = $company;
    }
    /****Setters****/
    function setTitle($new_title)
    {
        $this->title = (string) $new_title;
    }
    function setCompany($new_company)
    {
        $this->company = $new_company;
    }

    /****Getters****/
    function getTitle()
    {
        return $this->title;
    }
    function getCompany()
    {
        return $this->company;
    }
    /****Functions****/
    //save all
    function save()
    {
        array_push($_SESSION['list_of_jobs'], $this);
    }
    //get all jobs
    static function getAll()
    {
        return $_SESSION['list_of_jobs'];
    }
    //delete all jobs
    static function deleteAll()
    {
        $_SESSION['list_of_jobs'] = array();
    }
}
 ?>
