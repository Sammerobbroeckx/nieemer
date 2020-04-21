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

    function loopDrinks() {
        $sql = "SELECT id, name FROM menu WHERE category='drinks'";
        
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

    function loopFood() {
        $sql = "SELECT id, name FROM menu WHERE category='food'";
        
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

    function loopDessert() {
        $sql = "SELECT id, name FROM menu WHERE category='dessert'";
        
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