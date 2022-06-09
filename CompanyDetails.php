
<?php
include 'CompanyDetails.php';

class CompanyDetails
{
    public $companyName;
    public $wagePerHr;
    public $maxWorkingDays;
    public $maxWorkingHours;

    //class constructor.
    public function __construct($companyName, $wagePerHour, $maxWorkingDays, $maxWorkingHours)
    {

        $this->companyName = $companyName;
        $this->maxWorkingDays = $maxWorkingDays;
        $this->maxWorkingHours = $maxWorkingHours;
        $this->wagePerHour = $wagePerHour;
    }
}

//$company = new CompanyDetails($companyName, $wagePerHour, $maxWorkingDays, $maxWorkingHours);

?>
