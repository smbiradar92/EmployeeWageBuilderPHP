<?php

class EmployeeWage
{

    static function welcomeMsg()
    {
        echo "Welcome to Employee Wage builder\n";
    }

    function AttendenceCheck()
    {

        $wagePerHour = 20;
        $isPresent = 1;
        $isPartTime = 2;
        $random = rand(0, 2);                   //random value to check attendence
        $workingHour = 0;

        if ($random == $isPresent) {            //Condition to check Employee Attendence
            echo "Employee is Present\n";
            $workingHour = 8;
        }elseif($random == $isPartTime){
            echo "Employee is Parttime\n";
            $workingHour = 4;
        }else{
            echo "Employee is Absent\n";
            $workingHour = 0;
        }

        //calculation of EmployeeWage
        $dailyEmployeeWage = $wagePerHour * $workingHour;       
        echo "Employee daily wage is : $" . $dailyEmployeeWage;
    }
}
EmployeeWage::welcomeMsg();
$employee = new EmployeeWage();             //creating class object
$employee->AttendenceCheck();               //calling function
