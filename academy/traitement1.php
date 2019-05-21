<?php
$code=$_GET['code'];
$vide='';
$liste=fopen('apprenant.txt' , 'r');
while(!feof($liste)){
$ligne=fgets($liste);
$col=explode(',' , $ligne );
    if($code==$col[1]){
        if($col[7]=="Present"){
            $col[7]='exclus';
        }
        elseif($col[7]=="exclus"){
            $col[7]='abandon';
        }
        elseif($col[7]=="abandon"){
            $col[7]='Present';
        }
    }
    $rempli=$col[0].",".$col[1].",".$col[2].",".$col[3].",".$col[4].",".$col[5].",".$col[6].",".$col[7].",\n";
    $vide=$vide.$rempli;
}
fclose($liste);

$liste=fopen('apprenant.txt' , 'w+');
fputs($liste, trim($vide));
fclose($liste);
header('location:listerapprenantspromo.php');
?>
