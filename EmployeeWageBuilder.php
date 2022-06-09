<?php
//include 'CompanyDetails.php';

class EmployeeWage
{

    const IS_PRESENT = 1;
    const IS_PARTTIME = 2;
    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;

    public $maxWorkingDays;
    public $maxWorkingHours;
    public $wagePerHour;
    public $totalWorkingHours = 0;
    public $workingDays = 0;
    public $monthlyWage = 0;
    public $workingHours = 0;
    public $array = [];
    public $companyName;


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
                $this->workingHours = 0;            //updated values in UC8
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

    //parameterised function to calculate employee wage
    function calculateEmployeeWage($maxWorkingDays, $maxWorkingHours)
    {
        // condition for maxworkingday and Max working hour
        while ($this->workingDays < $maxWorkingDays && $this->totalWorkingHours < $maxWorkingHours) {
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
    function printEmployeeWage($wagePerHour, $maxWorkingDays, $maxWorkingHours)
    {
        EmployeeWage::calculateEmployeeWage($maxWorkingDays, $maxWorkingHours);      //calling function to calculate employee wage
        //calculation of EmployeeWage
        echo "Total working Hours = " . $this->totalWorkingHours . "\n";
        $this->monthlyWage = $this->totalWorkingHours * $wagePerHour;
        echo "Employee total monthly wage is : $" . $this->monthlyWage . "\n";
        //  EmployeeWage::printArray();         //calling function to print array values
    }

    function addCompanies()
    {
        $companies = [];
        $num = readline("Please enter the number of companies to be added : ");
        for ($i = 1; $i <= $num; $i++) {
            $companyName = readline("Please enter the name of the company: ");
            echo "wage calculation for the company " . $companyName . "\n";
            $wagePerHour = readline("Please enter the wage per hour for this company: ");
            $maxWorkingDays = readline("Please enter the max working days per month: ");
            $maxWorkingHours = readline("Please enter the max working hour per month: ");
            $companies[$i] = [$companyName, $wagePerHour, $maxWorkingDays, $maxWorkingHours];
            EmployeeWage::calculateEmployeeWage($wagePerHour, $maxWorkingDays, $maxWorkingHours);
            EmployeeWage::printEmployeeWage($wagePerHour, $maxWorkingDays, $maxWorkingHours);
            $this->workingDays = 0;                                         //make workimg days zero to initiate from zero in next loop
        }
    }
}
//calling functions
EmployeeWage::welcomeMsg();                                             //calling function
$company = new EmployeeWage();
$company->addCompanies();

?>
