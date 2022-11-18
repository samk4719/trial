<?php
if(isset($_POST["submitSignIn"])){
    include("inc_validate.php");
    include("inc_signUp.php");
    
    if(isset($_POST["userName"]) && (strlen(trim($_POST["userName"]))>0)){
        $userNameInput = trim($_POST["userName"]);
        
        if(isset($_POST["signInPassword"]) && (strlen(trim($_POST["signInPassword"]))>0)){
            $signInPasswordInput = MD5(trim($_POST["signInPassword"]));
            
            include ('inc_queryFunctions.php');
            
            $validationPasswordInput = signInValidation($userNameInput);
            
            $validationPassword = "";
            
            if ($validationPasswordInput -> num_rows > 0) {
                
                while ($row = $validationPasswordInput -> fetch_assoc()) {
                    
                    foreach ($row as $field => $value) {
                        
                        $validationPassword = $value;
                    }
                }
            }
                
                if($signInPasswordInput == $validationPassword){
                    
                    header("Location: index.php");
                    
                }
                else{
                    echo "Bad User Name or Password. Give the correct credentials and try again.";
                    
                }
            
        }else{
            echo "Password field cannot be empty. Please provide a valid password and try again.";
        }
        
    }else{
        echo "User Name cannot be empty. Please provide a valid User Name and try again.";
    }
    
}//submitSignIn if

?>