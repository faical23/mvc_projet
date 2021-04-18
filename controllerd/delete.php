<?php

    include "../modele/db.php";

    $id = $_GET["id"];
    $execution = new CRUD("inscription_user");
    $execution->delete($id);
    header('Location:../vue/index.php');

?>