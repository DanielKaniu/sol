<?php
//
//
class User{
    //
    //
    public $fname;
    public $sname;
    public $gross_salary;
    public $deductions;
    //
    //
    public function __construct($fname, $sname, $gross_salary, $deductions) {
        //
        $this->fname = $fname;
        $this->sname = $sname;
        $this->deductions = $deductions;
        $this->gross_salary = $gross_salary;
    }
    //
    //
    function get_job(){
        //
        $fname = $this->fname;
        $sname = $this->sname;
        $gross_salary = $this->gross_salary;
        $deductions = $this->deductions;
        $net_salary = $gross_salary - $deductions;
        echo "Employee's name is".$fname.$sname."<br>";
        echo 'Net salary is'.$net_salary;
    }
}

class house {
    //
    //
    public function locate(){
        //
        //
        $location = "Vietnam";
        //
        //
        return $locate;
    }
}

?>