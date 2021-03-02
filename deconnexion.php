<?php

require "configuration.php";

session_unset();
session_destroy();

echo "Vous vous êtes déconnecté. Vous allez être redirigé...";

header('location: membres.php');
?>