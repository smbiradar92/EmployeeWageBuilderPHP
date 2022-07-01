<
class MultipleCompanies
{
    public $companyList = [];

    //adding multiple companies using for loop and storing the comapny list and wage in array
    function companyArray($companyName, $wage, $maxWorkingDays, $maxWorkingHours)
    {
        $numOfCompanies = readline("Please enter the number of companies: ");
        for ($i = 1; $i <= $numOfCompanies; $i++) {
            //initailisig arrays
            $j = 0;
            $k = 0;
            $companyName = readline("Please enter the name of the company: ");
            $wage = readline("Please enter the company wage per hour: ");
            $maxWorkingDays = readline("Please enter the max working days of the company: ");
            $maxWorkingHours = readline("Please enter the max working hours of the company:: ");
            //object for employeeWage class
         //   $empWage = new EmployeeWage("Wipro", 25, 30, 100);
            //storing values to array    
            $this->companyList[$companyName] = $companyName;
            $this->companyList[$companyName][$i] = $wage;
            $this->companyList[$companyName][$i][$j] = $maxWorkingDays;
            $this->companyList[$companyName][$i][$j][$k] = $maxWorkingHours;
        }

        for ($i = 1; $i <= $numOfCompanies; $i++) {
            $j = 0;
            $k = 0;
            echo "hi";
            echo "$this->companyList[$companyName], $this->companyList[$companyName][$i],$this->companyList[$companyName][$i][$j], $this->companyList[$companyName][$i][$j][$k]";
        }
    }
}
$arr= new MultipleCompanies();
$arr-> companyArray($companyName, $wage, $maxWorkingDays, $maxWorkingHours);

?>
