<?php
$heure=(int)readline('Entrer une heure: ');
if(($heure>=9 && $heure<=12)||($heure>=14 && $heure<=17)){
    echo' le magasin sera ouvert';
}
else{
    echo' le magasin sera ferme';
}
?>