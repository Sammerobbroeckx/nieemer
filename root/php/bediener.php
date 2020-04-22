<?php
    function LinkDB(){
		include 'password.php';

		// Check connection
		if (mysqli_connect_errno())
		{
			$link = false;
			return $link;
		}
		else
		{
			return $link;
		}
    }

    function loopDish($dish) {
        $sql = "SELECT id, name FROM menu WHERE category=$dish";
        
        $link = LinkDB();
        if ($result = $link->query($sql)) {
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['name'].'</td><td><input type="checkbox" name="chkboxes[]" value="'.($row['id']).'" id="generatedMenu" />'."</td></tr>";
            }
            echo "</table>";
            $result->free();
        }
        $link->close();
    }
?>