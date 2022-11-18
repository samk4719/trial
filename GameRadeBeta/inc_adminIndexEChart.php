<?php

include("inc_validate.php");
include("inc_queryFunctions.php");

$ageGroupArray = ["2to5years","6to12years","13to18years","19to30years","31andAbove"];

$ageCountArray = ["","","","",""];

for($i = 0; $i < count($ageGroupArray); $i++){
    
    $ageValue = ageSelectData($ageGroupArray[$i]);
    
    if ($ageValue -> num_rows > 0) {
        
        while ($row = $ageValue -> fetch_assoc()) {
            
            foreach ($row as $field => $value) {
                
                $ageCountArray[$i] = $value;
            }
        }
    }
}

return $ageCountArray;


?>