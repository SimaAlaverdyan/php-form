<?php
    $table = "<table class='tbl'>";
    $table .= "<tr>";
    foreach ($_POST as $key => $value) {
        $table .= "<th>" . $key . "</th>";
    }
    $table .= "</tr>";
    $table .= "<tr>";
    foreach ($_POST as $key => $value) {
        $table .= "<td>" . $value . "</td>";
    }
    $table .= "</tr>";
    $table .= "</table>";
    echo $table;
?>