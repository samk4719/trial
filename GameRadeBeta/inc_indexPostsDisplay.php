<?php

include("inc_validate.php");
include("inc_queryFunctions.php");
    
$posts = postsDisplay();
    
if ($posts -> num_rows > 0) {
    
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
        
    while ($row = $posts -> fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $field => $value) {
            echo "<td>" . $value . "</td>";   
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>