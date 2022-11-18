<?php

if(isset($_POST["submitButton"])){
    include("inc_validate.php");
    
    if(isset($_POST["firstName"]) && strlen(trim($_POST["firstName"])) > 0  &&  preg_match("/^[a-zA-Z]*$/i", $_POST["firstName"])){
        $firstNameInput = trim($_POST["firstName"]);
        
        if(isset($_POST["lastName"]) && strlen(trim($_POST["lastName"])) > 0  &&  preg_match("/^[a-zA-Z]*$/i", $_POST["lastName"])){
            $lastNameInput = trim($_POST["lastName"]);
            
            if(isset($_POST["userName"]) && strlen(trim($_POST["userName"])) > 0){
                $userNameInput = trim($_POST["userName"]);
            
                if(isset($_POST['eMail']) && (strlen(trim($_POST['eMail'])) > 0)){
                $eMailInput = trim($_POST["eMail"]);
                
                    if(isset($_POST["phoneNo"]) && (strlen(trim($_POST["phoneNo"]))>0)){
                    $phoneNoInput = trim($_POST["phoneNo"]);
                    
                        if(isset($_POST["doBirth"]) && (strlen(trim($_POST["doBirth"]))>0)){
                        $doBirthInput = trim($_POST["doBirth"]);
                        
                            if(isset($_POST["password"]) && (strlen(trim($_POST["password"]))>0)){
                            $passwordInput = MD5(trim($_POST["password"]));
                            
                                if(isset($_POST["passwordConf"]) && (strlen(trim($_POST["passwordConf"]))>0)){
                                $passwordConfInput = MD5(trim($_POST["passwordConf"]));
                                
                                    if($passwordInput == $passwordConfInput){
                                    
                                        include ('inc_queryFunctions.php');
                                    
                                        InsertNewSignUp($firstNameInput, $lastNameInput, $userNameInput, $eMailInput, $phoneNoInput, $doBirthInput, $passwordInput);
                                    
                                        echo "Sign Up Successful";
                                    
                                    }//passwords equal check if
                                    else{
                                        echo "Given passwords do not match. Try again.";
                                    }
                                
                                }//paswordConf if
                                else{
                                    echo "Please confirm the given password and try again.";
                                }
                            
                            }//password if
                            else{
                                echo "Please give the proper and strong password and try again";
                            }
                        
                        }//doBirth if
                        else{
                            echo "Date of Birth is a mandatory field. Please provide the Date of Birth and proceed.";
                        }
                    
                    }//phoneNo if
                    else{
                        echo "Phone Number is a mandatory field. Please provide a proper phone number and proceed.";
                    }
                }//eMail if
                else{
                    echo "E-Mail is a mandatory field. Please provide a legit E-mail ID and proceed.";
                }
            }//userName if
            else{
                echo "User Name is a mandatory field. Please provide a unique name and try again.";
            }
        }//lastName if
        else{
            echo "Please provide a Last name.";
        }
    }//firstName if
    else{
        echo "Please provide a First name.";
    }
}//submitButton if

?>