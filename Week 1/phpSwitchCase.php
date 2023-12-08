<h1>Switch-Case statement</h1>
<?php
$headphone = "Onikuma";

switch($headphone){
    case "Onikuma":
        echo "Favorite headphone: onikuma";
        break;
    case "Redragon":
        echo "Favorite headphone: redragon";
        break;
    case "Fantech":
        echo "Favorite headphone: fantech";
        break;
    default:
        echo "No valid Input!";
}
?>