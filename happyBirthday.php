<?php 
$today = date("Y-m-d H:i:s");
$today=substr($today,5,5); 
$emailMSG="";
//require_once ('dbh.php');

$listdata =file_get_contents('https://interview-assessment-1.realmdigital.co.za/employees');

//after receiving the JSON, use json_decode to get object
$data = json_decode($listdata);

//then use a foreach loop to extract individual instances from the object
foreach($data as $employee){
	if(isset($employee->id)){
    $empID=$employee->id;
}
	
	if(isset($employee->employmentStartDate)){
   $employmentStartDate= $employee->employmentStartDate;
	if(isset($employee->employmentEndDate)){
}
        
    $employmentEndDate=$employee->employmentEndDate;
}
       
	
	if($empID=='325' ||$empID=='223' ||$empID=='239' ||$empID=='313'|| !empty($employmentEndDate) ){
	
	
	}else{
    $empID-$employee->id;    
    $name=$employee->name;  
   $dateOfBirth= $employee->dateOfBirth;
   
   
    $dateOfBirth=substr($dateOfBirth,5,5); 
   
    if($dateOfBirth==$today){
    $emailMSG .= ",$name";
    
    /*echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Happy birth day $name $dateOfBirth');
    
    </SCRIPT>");*/
    }
    }
}
if(!empty($emailMSG)){
echo $msg="Happy Birth Day ".substr($emailMSG,1);
mail("sherpardmu@gmail.com","Happy Birth Day",$msg);
}else{
echo "No Birth Days Today";
}
?>