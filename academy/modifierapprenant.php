<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Modifier Les Données De L'Apprenant</title>
</head>
<body style=background-color:beige>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="accueil.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="inscription.php">Inscription <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="modifierapprenant.php">Modifier Données Apprenant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listerapprenantspromo.php">Lister Apprenants Promo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="modifierpromo.php">Modifier Promo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ajouterpromo.php">Ajouter Promo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="afficherpromos.php">Afficher Promos</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<img src="Logo.png" alt="" width="100%" height="200px">


<form  method="post" action="" style=margin-top:4%> 
                    <input type='text' name='code' placeholder='Entrer votre code' id='code' style=border-radius:5px>

                    <input type='text' name='nom' placeholder='Entrer votre nom' id='nom' style=border-radius:5px>

                    <input type='text' name='prenom' placeholder='Entrer votre prenom' id='prenom' style=border-radius:5px>

                    <input type='date' name='date' placeholder='Entrer votre date de naissance' id='date' style=border-radius:5px>

                    <input type='number' name='tel' placeholder='Entrer votre numero' id='numero' style=border-radius:5px>

                    <input type='text' name='mail' placeholder='Entrer votre email' id='email' style=border-radius:5px>

                    <input type='text' name='stat' placeholder='Entrer votre statut' id='statut' style=border-radius:5px>

                    <input type='submit' value='modifier' id='connexion' name="modif" style=border-radius:5px>
        
             </form> 

             
        <table class="table table-striped table-dark" style=margin-top:5%>
        <thead>
        <tr>
        <th scope="col">Code</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Statut</th>
        </tr>
        </thead>
        <tbody>


<?php


if(isset($_POST['modif'])){
if(!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['stat'])){
    $code=$_POST['code'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date=$_POST['date'];
    $telephone=$_POST['tel'];
    $email=$_POST['mail'];
    $statut=$_POST['stat'];


$modifier=fopen('apprenant.txt' , 'r');
while(!feof($modifier)){
$ligne=fgets($modifier);
$col=explode(',' , $ligne); 

if($code==$col[0]){
$code=$col[0];
$col[1]=$nom;
$col[2]=$prenom;
$col[3]=$date;
$col[4]=$telephone;
$col[5]=$email;
$col[6]=$statut;
$nline=$col[0].",".$col[1].",".$col[2].",".$col[3].",".$col[4].",".$col[5].",".$col[6].",\n";
}
else{
$nline=$ligne;
}


$newlign=$newlign.$nline;
}
fclose($modifier);

$modifier=fopen('apprenant.txt' , 'w+');
fwrite($modifier,trim($newlign) );
fclose($modifier);
}
}

$modifier=fopen('apprenant.txt' , 'a+');
while(!feof($modifier)){
$ligne=fgets($modifier);
$col=explode(',', $ligne );


echo"<tr>
<td>".$col[0]."</td>
<td>".$col[1]."</td>
<td>".$col[2]."</td>
<td>".$col[3]."</td>
<td>".$col[4]."</td>
<td>".$col[5]."</td>
<td>".$col[6]."</td>
</tr>
";

}

 
fclose($modifier);
?>

</table>



<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->

  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style=background-color:aquamarine>© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> SonatelAcademy.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>