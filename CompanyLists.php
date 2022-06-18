
<?php
//include "EmployeeWageBuilder.php";

class MultipleCompanies
{

    function companyArray()
    {

        $companyList = [];
        $totalEmployeeWage = [];
        $numOfCompanies = readline("Please enter the number of companies: ");
        for ($i = 1; $i <= $numOfCompanies; $i++) {

            $companyName = readline("Please enter the name of the company: ");
            $wage = readline("Please enter the company wage per hour: ");
            $maxWorkingDays = readline("Please enter the max working days of the company: ");
            $maxWorkingHours = readline("Please enter the max working hours of the company:: ");

            $wage = new EmployeeWage($companyName, $wage, $maxWorkingDays, $maxWorkingHours);
            $totalEmployeeWage[$i] = $wage->printEmployeeWage();
            $companyList[$i] = $companyName;
        }
    }
}

?>
