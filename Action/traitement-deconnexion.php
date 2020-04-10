<?php

session_start();
session_unset();
session_destroy();

header('Location: ../inscription_connexion.php?');
exit;