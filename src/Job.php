<?php
class Job
{
    /****Properties****/
    private $title;
    private $job_resp; //responsibilities
    private $company;
    /****Constructor****/
    function __construct($title, $job_resp, $company)
    {
        $this->title = $title;
        $this->job_resp = $job_resp;
        $this->company = $company;
    }
    /****Setters****/
    function setTitle($new_title)
    {
        $this->title = (string) $new_title;
    }
    function setJobResp($new_job_resp)
    {
        $this->job_resp = (string) $new_job_resp;
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
    function getJobResp()
    {
        return $this->job_resp;
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
