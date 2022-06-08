<?php

class EmployeeWage
{
    const WAGE_PER_HOUR = 20;
    const IS_PRESENT = 1;
    const IS_PARTTIME = 2;
    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;
    const MAX_WORKING_DAYS = 20;
    const MAX_WORKING_HOURS = 100;

    public $totalWorkingHours = 0;
    public $workingDays = 0;
    public $monthlyWage = 0;
    public $workingHours = 0;
    public $array = [];


    static function welcomeMsg()
    {
        echo "---------Welcome to Employee Wage builder------------\n";
    }

    //function to check employee attendence
    function attendenceCheck()
    {
        $random = rand(0, 3);                   //random value to check attendence
        switch ($random) {                       //switch case condition
            case 1:
                echo "Employee is Present\n";
                $this->workingHours = EmployeeWage::FULL_TIME_HOURS;
                break;
            case 2:
                echo "Employee is PartTime\n";
                $this->workingHours = EmployeeWage::PART_TIME_HOURS;
                break;
            default:
                echo "Employee is Absent\n";
                $this->workingHours = $this->workingHours;
        }
    }

    //function to print array
    function printArray()
    {
        //Printing values from the array
        foreach ($this->array as $this->workingDays => $this->totalWorkingHours) {
            echo "[Day" . $this->workingDays . "] => " . $this->totalWorkingHours . " Hours \n";
        }
    }

    //function to calculate employee wage
    function calculateEmployeeWage()
    {
        // condition for maxworkingday and Max working hour
        while ($this->workingDays < EmployeeWage::MAX_WORKING_DAYS && $this->totalWorkingHours < employeeWage::MAX_WORKING_HOURS) {
            echo "Day " . $this->workingDays . "\n";
            EmployeeWage::attendenceCheck();            //calling employee attendance function
            //calculating total working hours    
            $this->workingDays++;
            $this->totalWorkingHours = $this->totalWorkingHours + $this->workingHours;            //Adding hours in loop
            //  echo $totalWorkingHours." Hours";
            $this->array[$this->workingDays] = $this->totalWorkingHours;              //storing working days and total working hours in associative array
        }
    }

    //function to print employee wage
    function printEmployeeWage()
    {

        EmployeeWage::calculateEmployeeWage();      //calling function to calculate employee wage
        //calculation of EmployeeWage
        echo "Total working Hours = " . $this->totalWorkingHours . "\n";
        $this->monthlyWage = $this->totalWorkingHours * EmployeeWage::WAGE_PER_HOUR;
        echo "Employee total monthly wage is : $" . $this->monthlyWage . "\n";
        EmployeeWage::printArray();         //calling function to print array values
    }
}
EmployeeWage::welcomeMsg();                 //calling function
$employee = new EmployeeWage();             //creating class object
$employee->printEmployeeWage();               //calling function

?>
