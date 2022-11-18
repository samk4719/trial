<?php
if(isset($_POST["ratingButton"])){
    
    if(isset($_POST["userFullName"]) && strlen(trim($_POST["userFullName"])) > 0){
        $userFullNameInput = trim($_POST["userFullName"]);
        
        if(isset($_POST["userRating"])){
            $userRatingInput = intVal(trim($_POST['userRating']));
            
            include('inc_queryFunctions.php');
            
            InsertUserRating($userFullNameInput, $userRatingInput); // function call for inserting request data.
            
            $result = DisplayRatings();
            
            if ($result -> num_rows > 0) {// checking if the $result has any rows.
                
                echo "<table class = \"postsDisplayTable\" style = \"max-width: 33.3%; margin-left:33.3%\">";
                echo " <tr>
                    <th>User Full Name</th>
                    <th>Rating</th>
                    </tr>";
                while ($row = $result -> fetch_assoc()) {//fetch_assoc() method that fetches the row result from the query into an associative array.
                    echo "<tr>";
                    foreach ($row as $field => $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                
            }
            
        }else{
            echo "Please enter the rating";
        }
    
    }else{
        echo "Please enter the User's full name.";
    }
    
}