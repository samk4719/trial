<?php
if(isset($_POST["resetPassword"])){
    include("inc_validate.php");
    
    if(isset($_POST["userName"]) && strlen(trim($_POST["userName"])) > 0){
        $userNameInput = trim($_POST["userName"]);
        
        if(isset($_POST["eMail"]) && strlen(trim($_POST["eMail"])) > 0){
            $eMailInput = trim($_POST["eMail"]);
            
            if(isset($_POST["password"]) && (strlen(trim($_POST["password"]))>0)){
                $passwordInput = MD5(trim($_POST["password"]));
                
                if(isset($_POST["passwordConf"]) && (strlen(trim($_POST["passwordConf"]))>0)){
                    $passwordConfInput = MD5(trim($_POST["passwordConf"]));
                    
                    if($passwordInput == $passwordConfInput){
                        
                        include ('inc_queryFunctions.php');
                        
                        validateResetPassword($userNameInput, $eMailInput, $passwordInput);
                        
                        echo "Password reset successful";
                        
                    }
                    else{
                        echo "Passwords do not match. Please try again.";
                    }
                    
                }
                else{
                    echo "Please type in the password again for confirmation.";
                }
                
            }
            else{
                echo "Please provide the password for reset.";
            }
            
        }
        else{
            echo "Please provide the valid email ID and try again.";
        }
        
    }
    else{
        echo "Please provide your Username for authentication purpose.";
    }
    
}
?>