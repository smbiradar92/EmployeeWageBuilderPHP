
<?php

class MultipleCompanies
{

    //adding multiple companies using for loop and storing the comapny list and wage in array
    function companyArray()
    {

        //initailisig arrays
        $companyList = [];
        $totalEmployeeWage = [];
        $numOfCompanies = readline("Please enter the number of companies: ");
        for ($i = 1; $i <= $numOfCompanies; $i++) {
            //user input for values
            $companyName = readline("Please enter the name of the company: ");
            $wage = readline("Please enter the company wage per hour: ");
            $maxWorkingDays = readline("Please enter the max working days of the company: ");
            $maxWorkingHours = readline("Please enter the max working hours of the company:: ");

            //object for employeeWage class
            $empWage = new EmployeeWage($companyName, $wage, $maxWorkingDays, $maxWorkingHours);
            //storing values to array
            $totalEmployeeWage[$i] = $empWage->printEmployeeWage();
            $companyList[$i] = $companyName;
        }
        //printing array values
        for ($i = 1; $i <= $numOfCompanies; $i++) {
            echo $companyList[$i] . " => [$wage, $maxWorkingDays, $maxWorkingHours]" . "\n";
        }
    }
}

?>
