<?php

require_once './helpers/auth-helper.php';

redirect('./articles', true);

?>

<!DOCTYPE html>
<html>
    <?php $title = "Accueil"; require "head.php"; ?>
    <body>
        <?php require "header.php"; ?>
        <?php require "footer.php"; ?>
    </body>
</html>