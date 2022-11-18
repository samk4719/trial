<?php

if (isset($_POST['submitButton'])){ // validation for submitButton in postAd.php
    include ('inc_validate.php');
    
    if(isset($_POST['userNameBox']) && strlen(trim($_POST['userNameBox'])) > 0){ // validation for regiDBox and checking if any data is present in the field
        $userNameInput = trim($_POST['userNameBox']);
        
        if (isset($_POST['dateBox'])){  // validation for regiDBox
            $dateInput = $_POST['dateBox'];
            
            if(isset($_POST['timeBox'])){ // validation for timeBox
                $timeInput = $_POST['timeBox'];
                
                if(isset($_POST['gameNameBox']) && strlen(trim($_POST['gameNameBox'])) > 0){ //validation for gameBox and checking if any data is present in the field
                    $gameNameInput = ($_POST['gameNameBox']);
                    
                    if (isset($_POST['ageGroupSelect']) && ($_POST['ageGroupSelect']!= "SELECT")){ //validation for expAgeSelect
                        $ageGroupInput = $_POST['ageGroupSelect'];
                        
                        if(isset($_POST['venueBox']) && strlen(trim($_POST['venueBox'])) > 0){ //validation for venueBox
                            $venueInput = trim($_POST['venueBox']);
                            
                            if(isset($_POST['numGRBox']) && is_numeric($_POST['numGRBox']) && strlen(trim($_POST['numGRBox']))>0 && intval(trim($_POST['numGRBox']))>0){// validation for numGRBox, is_numeric for checking if it is a number, intval for extracting numeric value.
                                $numGRInput = intVal(trim($_POST['numGRBox']));
                                
                                if(isset($_POST['forRadio'])){
                                    $forRadioInput = $_POST['forRadio'];
                                
                                if(isset($_POST['notesBox'])&& strlen(trim($_POST['notesBox'])) > 0){ // validation for noteBox
                                    $notesInput = trim($_POST['notesBox']);
                                    
                                    include('inc_queryFunctions.php');
                                    
                                    InsertPostData($userNameInput, $dateInput, $timeInput, $gameNameInput, $ageGroupInput, $venueInput, $numGRInput, $forRadioInput, $notesInput); // function call for inserting request data.
                                    
                                    echo "Request posted successfully.";
                                    
                                    echo '<br>
                                            <a href = "history.php">Please click here to check your Posts</a>
                                            <br>'; 
                                    
                                }else{
                                    echo 'Please enter the Notes or just enter "Nil" if you don\'t have any.';
                                }
                                
                            }else{
                                echo 'Please enter the Number of GameRADEs needed to play with you, and try again.';
                            }
                            
                            }else{
                                echo 'Please check the radio button and tell us who is needing the GameRade.';
                            }
                            
                        }else{
                            echo 'You have not entered the venue. Please enter and try again.';
                        }
                        
                    }else{
                        echo 'Select a valid expected age group and try again.';
                    }
                    
                }else{
                    echo 'Please give the game name you have planned to play.';
                }
                
            }else{
                echo 'Please enter the time you will be playing';
            }
            
        }else{
            echo 'Please enter on which date you will be playing';
        }
        
    }else{
        echo 'Please enter your Username so that we can map your request to you.';
    }
    
}