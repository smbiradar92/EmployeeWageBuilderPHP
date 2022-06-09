
<?php

class EmployeeWage
{

    const IS_PRESENT = 1;
    const IS_PARTTIME = 2;
    const FULL_TIME_HOURS = 8;
    const PART_TIME_HOURS = 4;

    public $maxWorkingDays = 0;
    public $maxWorkingHours = 0;
    public $wagePerHour = 0;
    public $totalWorkingHours = 0;
    public $workingDays = 1;
    public $monthlyWage = 0;
    public $workingHours = 0;
    public $array = [];
    public $companyName;


    static function welcomeMsg()
    {
        echo "---------Welcome to Employee Wage builder------------\n";
    }

    public function __construct($companyName, $wagePerHour, $maxWorkingDays, $maxWorkingHours)
    {

        $this->companyName = $companyName;
        $this->maxWorkingDays = $maxWorkingDays;
        $this->maxWorkingHours = $maxWorkingHours;
        $this->wagePerHour = $wagePerHour;
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

    //function to calculate employee wage
    function calculateEmployeeWage()
    {
        // condition for maxworkingday and Max working hour
        while ($this->workingDays < $this->maxWorkingDays && $this->totalWorkingHours < $this->maxWorkingHours) {
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
        $this->monthlyWage = $this->totalWorkingHours * $this->wagePerHour;
        echo "Employee total monthly wage is : $" . $this->monthlyWage . "\n";
        //  EmployeeWage::printArray();         //calling function to print array values
    }
}
//call emplogeWage objects
//define array and compute company wage using arrays
EmployeeWage::welcomeMsg();
$company1 = new EmployeeWage("Wipro", 20, 26, 120);
$company2 = new EmployeeWage("HCL", 30, 20, 100);
$company3 = new EmployeeWage("TCS", 40, 25, 80);
$companyArray = [$company1, $company2, $company3];
foreach ($companyArray as $company) {
    echo $company->printEmployeeWage();                     //print employee wage
    echo "----------------------------------------\n";
    echo "\n";
}

?>