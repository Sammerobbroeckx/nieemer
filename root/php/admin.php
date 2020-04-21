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
				/*$_SESSION["melding"] = "Medische Fiche Succesvol Ingediend!";
				$url = "../mefi/succes/";*/
                echo "<meta http-equiv='refresh' content='0;URL=$url' />";
                mysqli_close($link);
			}
		}
		else
		{
			$_SESSION["melding"] = "Er kon geen verbinding gemaakt worden met de database!";
        }
    }
?>