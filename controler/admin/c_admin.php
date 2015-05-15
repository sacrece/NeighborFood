<?php

require "../../view/header/v_header.php";
require "../../modele/admin/m_admin.php";
$func = getuser();
while ( $donnee = $func->fetch()){
    echo $donnee['name'].'<br/>';
    echo $donnee['idmembre'].'<br/>';
    echo $donnee['first_name'].'<br/>';
}
require "../../view/admin/v_admin.php";
require "../../view/footer/v_footer.php";


?>