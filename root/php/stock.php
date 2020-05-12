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

$id = $_GET['id'];
$link = LinkDB();

$select = "SELECT stock FROM menu WHERE id='$id'";
$stock = 1;

if ($result = $link->query($select)){
    while ($item = $result->fetch_assoc()) {
    if($item['stock'] == 1){
        $stock = 0;
    }
    else {
        $stock = 1;
    }
}
}

$sql = "UPDATE menu SET stock='$stock' WHERE id='$id'"; 

if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    header('Location: /admin/menu.php');
    exit;
} else {
    echo "Error updating record";
}

?>