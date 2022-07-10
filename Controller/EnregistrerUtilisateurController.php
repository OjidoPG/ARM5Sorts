<?php
include ("../Model/Create.php");

if (isset ($_POST ['nomUtilisateur']) && isset ($_POST ['prenomUtilisateur']) && isset ($_POST ['identifiantUtilisateur']) && isset ($_POST ['mdpUtilisateur']))
{
    $create = new Create();
    $ok = $create->EnregistrerUtilisateur($_POST ['nomUtilisateur'],$_POST ['prenomUtilisateur'] , $_POST ['identifiantUtilisateur'], $_POST ['mdpUtilisateur']);
}
