<?php
include('inc_databaseClass.php');

function InsertNewSignUp($firstName, $lastName, $userName, $eMail, $phoneNo, $doBirth, $password){ // query for insering into users table from User page
    
    $dbInstance = new DatabaseClass;
    $insertQuery = "INSERT INTO signup_table(first_name, last_name, username, email, phone_no, date_of_birth, password) VALUES ('$firstName', '$lastName', '$userName', '$eMail', '$phoneNo', '$doBirth', '$password');";
    
    $result = $dbInstance -> ActionQuery($insertQuery);
    
    if ($result){
        return 1;
    }else{
        return $dbInstance -> error();
    }
    
}

function signInValidation($userName){
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT password FROM signup_table where username = '$userName';";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
}

function adminValidation($adminUserName){
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT admin_password FROM admin_login where admin_username = '$adminUserName';";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
    
}

function InsertPostData($userName, $date, $time, $gameName, $ageGroup, $venue, $numGR, $forRadio, $notes){
    
    $dbInstance = new DatabaseClass;
    $insertQuery = "INSERT INTO posts_table (user_name, date, time, game_name, age_group, venue, num_gr, who_for, notes) VALUES ('$userName', '$date', '$time', '$gameName', '$ageGroup', '$venue', '$numGR', '$forRadio', '$notes');";
    
    $result = $dbInstance -> ActionQuery($insertQuery);
    
    if ($result){
        return 1;
    }else{
        return $dbInstance -> error();
    }
    
}

function validateResetPassword($userName, $eMail, $password){
    
    $dbInstance = new DatabaseClass;
    
    $select = "UPDATE signup_table SET password = '$password' where email = '$eMail' AND username = '$userName';";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
    
}

function ageSelectData($age){
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT COUNT(age_group) from posts_table WHERE age_group = '$age';";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
    
}

function postsDisplay(){
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT posts_table.date, posts_table.time, posts_table.game_name, posts_table.age_group, posts_table.venue, posts_table.num_gr, posts_table.who_for, posts_table.notes, signup_table.email FROM posts_table, signup_table WHERE posts_table.user_name = signup_table.username";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
    
}

function usersDisplay(){
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT first_name, last_name, email, phone_no, date_of_birth from signup_table;";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
    
}

function studioDisplay($filename){
    
    $dbInstance = new DatabaseClass;
        
    // Get all the submitted data from the form
    $insertQuery = "INSERT INTO studio (filename) VALUES ('$filename')";
    
    $result = $dbInstance -> ActionQuery($insertQuery);
    
    if ($result){
        echo "Image uploaded successfully!";
    }else{
        return $dbInstance -> error();
    }
    
}

function getAllMyReqs($username){ // select query for all the peronsal requests
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT * FROM posts_table WHERE user_name = '$username';";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
}

function getAllReqs(){ //select query for printing all the requests hiding the registration ID and including email ID into the table using a join.
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT posts_table.date, posts_table.time, posts_table.game_name, posts_table.age_group, posts_table.venue, posts_table.num_gr, posts_table.who_for, posts_table.notes, signup_table.email FROM posts_table, signup_table WHERE posts_table.user_name = signup_table.username";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
}

function InsertUserRating($userfullname, $rating){
    
    $dbInstance = new DatabaseClass;
    $insertQuery = "INSERT INTO admin_user_rating (user_fullname, user_rating) VALUES ('$userfullname', '$rating');";
    
    $result = $dbInstance -> ActionQuery($insertQuery);
    
    if ($result){
        return 1;
    }else{
        return $dbInstance -> error();
    }
    
}

function DisplayRatings(){
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT * FROM admin_user_rating;";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
}


//=======================================================================================


function InsertRowRequest($regisID, $date, $time, $gameName, $expAge, $venue, $numGR, $note){ // query for inserting into requests table from Request page
    
    $dbInstance = new DatabaseClass;
    $insertQuery = "INSERT INTO requests (regis_id, date, time, game_name, exp_age, venue, num_gr, note) VALUES ('$regisID', '$date', '$time', '$gameName', '$expAge', '$venue', '$numGR', '$note');";
    
    $result = $dbInstance -> ActionQuery($insertQuery);
    
    if ($result){
        return 1;
    }else{
        return $dbInstance -> error();
    }
    
}

function getMyDetails($registrationID){ // select query for user's personal details
    
    $dbInstance = new DatabaseClass;
    
    $select = "SELECT * FROM users where reg_ID = '$registrationID';";
    $result = $dbInstance -> Select($select);
    
    if ($result){
        return $result;
    }else{
        return $dbInstance -> error();
    }
    
}

?>