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
        $random = rand(0, 1);                   //random value to check attendence
        $workingHour = 0;

        if ($random == $isPresent) {            //Condition to check Employee Attendence
            echo "Employee is Present\n";
            $workingHour = 8;
        } else {
            echo "Employee is Absent\n";
            $workingHour = 0;
        }

        //calculation of EmployeeWage
        $dailyEmployeeWage = $wagePerHour * $workingHour;       
        echo "Employee daily wage is: " . $dailyEmployeeWage;
    }
}
EmployeeWage::welcomeMsg();
$employee = new EmployeeWage();
$employee->AttendenceCheck();
