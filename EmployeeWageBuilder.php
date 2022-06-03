<?php

class EmployeeWage
{

    static function welcomeMsg()
    {
        echo "Welcome to Employee Wage builder\n";
    }

    function AttendenceCheck()
    {

        $isPresent = 1;
        $random = rand(0, 1);

        if ($random == $isPresent) {
            echo "Enployee is Present";
        } else {
            echo "Employee is Absent";
        }
    }
}
EmployeeWage::welcomeMsg();
$employee = new EmployeeWage();
$employee->AttendenceCheck();
