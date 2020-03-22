<?php
    if (!empty($_POST['name'] && !empty($_POST['surname'] ))
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        echo <<<X
            Imię:  $name;
    }
    else
    {
        header('location: ../form.php');
    }
?>