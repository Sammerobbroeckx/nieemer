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

    if(isset($_POST['addNewMenuItem'])){
        $price = str_replace(',','.',$_POST["price"]);
        $link = LinkDB();
        newMenuItem($_POST["category"], $_POST["name"], $price, 1);
        mysqli_close($link);
    }

    function newMenuItem($category, $name, $price){
        $sql = "INSERT INTO `menu`(`category`, `name`, `price`) VALUES ('$category', '$name', '$price')";

		$link = LinkDB();

		if($link != false)
		{
			if (!mysqli_query($link,$sql)) {
				printf("Error: %s\n", mysqli_error($link));
			} else {
				echo "<meta http-equiv='refresh' content='0;URL=$url' />";
                mysqli_close($link);
			}
		}
		else
		{
			$_SESSION["melding"] = "Er kon geen verbinding gemaakt worden met de database!";
        }
	}
	
	function loopDishAdmin($dish) {
        $sql = "SELECT * FROM menu WHERE category='$dish'";
        
        $link = LinkDB();
        if ($result = $link->query($sql)) {
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
				echo "<tr>
				<td>" . $row['name'] . "</td><td>" . $row['price'] . "</td>
				<td>[Edit]</td>
				
				<td><input type='checkbox' name='stock' onclick='window.location.assign(\"/php/stock.php?id=" . $row['id'] . "\")' value='" . $row['stock'] . "' "; if($row['stock'] == 1){ echo "checked='checked'"; } echo "/></td>
				<td><a href='/php/delete.php?id=".$row['id']."' onclick='return confirm(\"Ben je zeker dat je dit item wil verwijderen?\");'>[X]</a></td>
				</tr>";
            }
            echo "</table>";
            $result->free();
        }
        $link->close();
    }
?>