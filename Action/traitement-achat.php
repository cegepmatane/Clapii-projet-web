<?php
include __DIR__."/../Donnee/AchatDAO.php";
$achat = "";
if(isset($_SESSION['UserId'])){
    $achat = new Achat(1,$_SESSION['UserId'], date('Y-m-d H:i:s'));
} else {
    $achat = new Achat(1, 1, date('Y-m-d H:i:s'));
}

AchatDAO::insererAchat($achat);

?>

<meta http-equiv="refresh" content="0; URL='../compte.php'"/> 