<?php
if(isset($_POST["submitAdmin"])){
    include("inc_validate.php");
    
    if(isset($_POST["adminUserName"]) && (strlen(trim($_POST["adminUserName"]))>0)){
        $adminUserNameInput = trim($_POST["adminUserName"]);
        
        if(isset($_POST["adminPassword"]) && (strlen(trim($_POST["adminPassword"]))>0)){
            $adminPasswordInput = trim($_POST["adminPassword"]);
            
            include('inc_queryFunctions.php');
            
            $validationPasswordInput = adminValidation($adminUserNameInput);
            
            $validationPassword = "";
            
            if ($validationPasswordInput -> num_rows > 0) {
                
                while ($row = $validationPasswordInput -> fetch_assoc()) {
                    
                    foreach ($row as $field => $value) {
                        
                        $validationPassword = $value;
                    }
                }
            }
            
            if($adminPasswordInput == $validationPassword){
                
                header("Location: adminIndex.php");
                
            }
            
            else{
                echo "Bad Admin name or Password. Give the correct credentials and try again.";
                
            }
            
        }else{
            echo "Password field cannot be empty. Please provide a valid password and try again.";
        }
        
    }else{
        echo "User Name cannot be empty. Please provide a valid User Name and try again.";
    }
    
}

?>