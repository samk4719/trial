<?php

$users = usersDisplay();

if ($users -> num_rows > 0) {
    
    echo "<table class = \"postsDisplayTable\">";
    echo " <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                    <th>Date of birth</th>
                </tr>";
    
    while ($row = $users -> fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $field => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>