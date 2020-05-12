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

    $sql = "DELETE FROM menu WHERE id = $id"; 

    if (mysqli_query($link, $sql)) {
        mysqli_close($link);
        header('Location: /admin/menu.php');
        exit;
    } else {
        echo "Error deleting record";
    }

?>