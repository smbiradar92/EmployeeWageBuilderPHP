
<?php

class MultipleCompanies
{
    public $companyList = [];

    //adding multiple companies using for loop and storing the comapny list and wage in array
    function companyArray()
    {
        //initailisig arrays
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
            $totalEmployeeWage[0] = $wage;
            $totalEmployeeWage[1] = $maxWorkingDays;
            $totalEmployeeWage[2] = $maxWorkingHours;
            $this->companyList[$companyName] = $totalEmployeeWage;
            foreach ($this->companyList as $companyName => $totalEmployeeWage[]) {
                echo "[company : " . $companyName . " ] => [ " . $totalEmployeeWage[0] . ", " . $totalEmployeeWage[1] . ", " . $totalEmployeeWage[2] . "]\n";
                $empWage->printEmployeeWage();
            }
        }
    }
}
?>
