
<?php

class MultipleCompanies
{
    public $companyList = [];
    public $maxWorkingDays = 0;
    public $maxWorkingHours = 0;
    public $wagePerHour = 0;
    public $companyName;

    //adding multiple companies using for loop and storing the comapny list and wage in array
    function companyArray()
    {
     
        $emp = new EmployeeWage($this->companyName,$this->wagePerHour, $this->maxWorkingDays, $this->maxWorkingHours);
        $emp1 = new EmployeeWage("wipro", 25, 26, 100);
        $emp2 = new EmployeeWage("HCL", 30, 26, 80);
        $emp3 = new EmployeeWage("TCS", 20, 24, 120);
        $companyList = [$emp1, $emp2, $emp3];
        for($i = 0; $i < count($companyList); $i++){
            $emp->empArray();
        }

    }
}

?>
