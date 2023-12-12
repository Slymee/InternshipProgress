<?php
    include 'include.php';
    include_once 'include_once.php';
    require 'require.php';
    require_once 'require_once.php';
?>

<?php
    includeMethod('Zax');
    echo "<br>";


    includeOnceMethod();
    echo "<br>";

    requireMethod('Slymee');
    echo "<br>";

    requireOnceMethod();
?>