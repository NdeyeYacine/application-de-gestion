<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ajouter Une Promo</title>
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
        <a class="nav-link" href="modifierapprenant.php">Modifier Promo</a>
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
<form method='post' action='' style=margin-top:4%>    
                   
                    <input type='text' name='code' placeholder='Entrer votre code' id='code' style=border-radius:5px>

                    <input type='text' name='nom' placeholder='Entrer votre nom' id='nom' style=border-radius:5px>

                    <input type='month' name='mois' placeholder='Entrer le mois' id='mois' style=border-radius:5px>

                    <input type='years' name='ans' placeholder='Entrer année' id='annee' style=border-radius:5px>
                    
                    <input type='submit' value='ajouter' id='connexion' name="ajouter" style=border-radius:5px>
            
                <form>


                <table class="table table-striped table-dark" style=margin-top:5%>
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Nom</th>
      <th scope="col">Mois</th>
      <th scope="col">Annee</th>
    </tr>
  </thead>
  <tbody>

  <?php

$code=$_POST['code'];
$nom=$_POST['nom'];
$mois=$_POST['mois'];
$annee=$_POST['ans'];

if(isset($_POST['ajouter'])){
$ajouterpro=fopen('promo1.txt' , 'a+');
while(!feof($ajouterpro)){
$ligne=fgets($ajouterpro);
$col=explode(',' , $ligne );
fwrite($ajouterpro,"\n".$code. ','. $nom. ','. $mois.','. $annee.',' );
}
}
$ajouterpro=fopen('promo1.txt' , 'a+');
while(!feof($ajouterpro)){
    $ligne=fgets($ajouterpro);
    $col=explode(',' , $ligne );
echo"<tr>
<td>".$col[0]."</td>
<td>".$col[1]."</td>
<td>".$col[2]."</td>
<td>".$col[3]."</td>
</tr>
"; 
}
fclose($ajouterpro);
?>
</table>


<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4" style=background-color:aquamarine>

  <!-- Footer Elements -->


  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
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