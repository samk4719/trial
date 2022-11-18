<?php
	include ('inc_queryFunctions.php');
	
	if(isset($_POST['filterButton']) && isset($_POST['userName']) && isset($_POST['filterSelect'])){
		$userNameInput=$_POST['userName']; //validation for filterButton, regIDBox, filterSelect
		
		if($_POST['filterSelect'] == 'ALL'){// checking if filterSelect is equal to "ALL"
		
		$result = getAllReqs();// function call for select query of all the requests
		
		if ($result -> num_rows > 0) {// checking if the $result has any rows.
		    
		    echo "<table class = \"postsDisplayTable\">";
		    echo " <tr>
                    <th>Date</th>
                    <th>TimeSlot</th>
                    <th>Game</th>
                    <th>AgeGroup</th>
                    <th>Venue</th>
                    <th>Number of GamRADEs</th>
                    <th>For?</th>
                    <th>NOTE</th>
                    <th>Email</th>
                </tr>";
		    while ($row = $result -> fetch_assoc()) {//fetch_assoc() method that fetches the row result from the query into an associative array. 
		        echo "<tr>";
		        foreach ($row as $field => $value) {
		            echo "<td>" . $value . "</td>";
		        }
		        echo "</tr>";
		    }
		    echo "</table>";
		    
		} else {
		    echo 'Get events failed.<br />';
		}
		
		}else if($_POST['filterSelect'] == 'ONLYMINE'){ // checking if filterSelect is equal to "ONLYMINE"
		    
		    $result = getAllMyReqs($userNameInput); // function call for select query of all the personal requests
		    
		    if ($result->num_rows > 0) {
		        
		        echo "<table class = \"postsDisplayTable\">";
		        echo " <tr>
                    <th>User Name</th>
                    <th>Date</th>
                    <th>TimeSlot</th>
                    <th>Game</th>
                    <th>AgeGroup</th>
                    <th>Venue</th>
                    <th>Number of GamRADEs</th>
                    <th>For?</th>
                    <th>NOTE</th>
                </tr>";
		        while ($row = $result -> fetch_assoc()) {
		            echo "<tr>";
		            foreach ($row as $field => $value) {
		                echo "<td>" . $value . "</td>";
		            }
		            echo "</tr>";
		        }
		        echo "</table>";
		        
		    } else {
		        echo '<p>You hav no active requests available. Please go to the <a href = "postAd.php">Post page</a> and post a request.</p>';
		    }
		    
		    
		}
		
	}
?>