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
        $workingHours = 0;
        $totalWorkingHours = 0;
        $workingDays = 0;
        $maximumWorkingDays = 20;

        while ($workingDays <= $maximumWorkingDays) {             // condition for calculating wages for a month
            $random = rand(0, 2);                   //random value to check attendence
            echo "Day " . $workingDays . "\n";
            switch ($random) {                       //switch case condition
                case 1:
                    echo "Employee is Present\n";
                    $workingHours = 8;
                    break;
                case 2:
                    echo "Employee is PartTime\n";
                    $workingHours = 4;
                    break;
                default:
                    echo "Employee is Absent\n";
                    $workingHours = 0;
            }
            //calculating total working hours    
            $workingDays++;
            $totalWorkingHours = $totalWorkingHours + $workingHours;            //Adding hours in loop

        }
        //calculation of EmployeeWage
        echo "Total working Hours = " . $totalWorkingHours . "\n";
        $monthlyWage = $totalWorkingHours * $wagePerHour;
        echo "Employee total monthly wage is : $" . $monthlyWage . "\n";
    }
}
EmployeeWage::welcomeMsg();
$employee = new EmployeeWage();             //creating class object
$employee->AttendenceCheck();               //calling function

?>