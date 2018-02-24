<?php 
  date_default_timezone_set('Europe/Zagreb');
  include_once '../../includes/dbh.inc.php';
 ?>

 <!DOCTYPE html>
<html lang="hr">
<head>
	<title>C-point</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

		<!--Navbar - start -->

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">C-point</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Osiguranja</a>
                          
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                             <li><a class="dropdown-item dropdown-toggle" href="#">Vozila</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\vozila\autoodgovornost.html">Autoodgovornost</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\AOplus.html">AO plus</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\zastitaCObonusa.html">Zaštita CO bonusa</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\provala.html">Provala</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\AOvuca.html">AO vuča</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\osiguranje_od_autonezgode.html">Osiguranje od autonezgode</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\autokasko.html">Autokasko</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\croatia_asistencija_i_putni_andeo.html">Croatia asistencija i Putni Anđeo</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\vozila\croatia_premium.html">Croatia Premium</a></li>
                                    </ul>
                             </li>

                             <li><a class="dropdown-item dropdown-toggle" href="#">Životno</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\croatia_stipendija.html">Croatia stipendija-osobna renta s određenim trajanjem</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\dopunsko_osiguranje_malignih_bolesti.html">Dopunsko osiguranje malignih bolesti</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\dopunsko_osiguranje_djece_od_posljedica_nesretnog_slučaja.html">Dopunsko osiguranje djece od posljedica nesretnog slučaja</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\krug_zivota.html">Krug života-doživotno osiguranje za slučaj smrti</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\mjesovito osiguranje_za_slucaj_smrti_i_dozivljenja.html">Mješovito osiguranje za slučaj smrti i doživljenja</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\stedno_osiguranje_djece.html">Štedno osiguranje djece</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\riziko_plus.html">Riziko PLUS-osiguranje za slučaj smrti</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\zivotno\kolektivno_osiguranje_zivota_slucaj_smrt_i_dozivljenja.html">Kolektivno osiguranje života za slučaj smrti i doživljenja</a></li>
                                    </ul>
                             </li>

                             <li><a class="dropdown-item dropdown-toggle" href="#">Imovina</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\imovina\croatia_imovina.html">Croatia imovina</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_turistickih_apartmana-turist_plus.html">Osiguranje turističkih apartmana-Turist plus</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_od_provale_krade_i_razbojstva.html">Osiguranje od provale krađe i razbojstva</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_od_požara.html">Osiguranje od požara</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_kucnih_ljubimaca.html">Osiguranje kućnih ljubimaca</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_od_potresa.html">Osiguranje od potresa</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_usjeva.html">Osiguranje usjeva</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\imovina\osiguranje_stakla_od_loma.html">Osiguranje stakla od loma</a></li>
                                    </ul>
                             </li>
                                

                             <li><a class="dropdown-item dropdown-toggle" href="#">Nezgoda</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\nezgoda\individualno_osiguranje_od_posljedica_nesretnog_slucaja.html">Individualno osiguranje od posljedica nesretnog slučaja</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\nezgoda\osiguranje_zivotnog_standarda.html">Osiguranje životnog standarda</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\nezgoda\kolektivno_osiguranje_od_posljedica_nesretnog_slucaja.html">Kolektivno osiguranje od posljedica nesretnog slučaja</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\nezgoda\osiguranje_menadera.html">Osiguranje menađera</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\nezgoda\osiguranje_djece_ucenika_i_studenata.html">Osiguranje djece, učenika i studenata</a></li>
                                    </ul>
                             </li>
							
							<li><a class="dropdown-item dropdown-toggle" href="#">Putno</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\putno\putno_zdravstveno_osiguranje.html">Putno zdravstveno osiguranje</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\putno\kasko_auto_put.html">Kasko AUTO PUT</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\putno\osiguranje_otkaza_putovanja.html">Osiguranje otkaza putovanja</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\putno\dodatno_osiguranje_nezgode_uz_putno_zdravstveno_osiguranje.html">Dodatno osiguranje nezgode uz putno zdravstveno osiguranje</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\putno\osiguranje_privatne_odgovornosti_uz_putno_zdravstveno_osiguranje.html">Osiguranje privatne odgovornosti uz putno zdravstveno osiguranje</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\putno\croatia_asistencija_uz_putno_zdravstveno_osiguranje.html">Croatia asistencija uz putno zdravstveno osiguranje</a></li>
                                    </ul>
                             </li>

							<li><a class="dropdown-item dropdown-toggle" href="#">Plovila i prijevoz</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\osiguranje_odgovornosti_vlasnika_brodice.html">Osiguranje odgovornosti vlasnika/korisnika brodice/jahte</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\kasko_osiguranje_brodica_i_jahti.html">Kasko osiguranje brodica i jahti</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\kasko_osiguranje_broda.html">Kasko osiguranje broda (trup i stroj)</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\osiguranje_zrakoplova.html">Osiguranje zrakoplova</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\osiguranje_odgovornosti_brodopopravljaca.html">Osiguranje odgovornosti brodopopravljača</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\osiguranje_broda_u_gradnji.html">Osiguranje broda u gradnji</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\osiguranje_od_odgovornosti_vlasnika_odnosno korisnika_like_nautickog_turizma.html">Osiguranje od odgovornosti vlasnika odnosno korinika marine/luke nautičkog turizma</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\plovila_i_prijevoz\osiguranje_od_odgovornosti_cestovnog_prijevoznika.html">Osiguranje od odgovornosti cestovnog prijevoznika</a></li>
                                    </ul>
                             </li>

							<li><a class="dropdown-item" href="osiguranja\bankoosiguranja\bankoosiguranje.html">Bankoosiguranja</a></li>
							
							<li><a class="dropdown-item dropdown-toggle" href="#">Paketi</a>
                            		<ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="osiguranja\paketi\obrtnicki_paket.html">Obrtnički paket</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\paketi\obiteljski_paket.html">Obiteljski paket</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\paketi\poduzetnicki_paket.html">Poduzetnički paket</a></li>
                                        <li><a class="dropdown-item" href="osiguranja\paketi\poljoprivredni_paket.html">Poljoprivredni paket</a></li>
                                    </ul>
                             </li>

							<li><a class="dropdown-item" href="osiguranja\osiguranje_otplate_kredita\osiguranje_otplate_kredita.html">Osiguranje otplate kredita</a></li>

                            </ul>
                        </li>

             <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CZO</a>
                          
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="czo\dodatno.html">Dodatno</a></li>
                             <li><a class="dropdown-item" href="czo\dopunsko.html">Dopunsko</a></li>
                             <li><a class="dropdown-item" href="czo\podrska.html">Podrška</a></li>
						            </ul>
					   </li>	

              <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Štete</a>
                          
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="stete\prijava_stete_osiguranja_zivota.html">Prijava štete osiguranja života</a></li>
                             <li><a class="dropdown-item" href="stete\prijava_stete_autokasko.html">Prijava štete AK</a></li>
                             <li><a class="dropdown-item" href="stete\prijava_stete_autoodgovornosti.html">Prijava štete AO</a></li>
                             <li><a class="dropdown-item" href="stete\prijava_stete_imovina.html">Prijava štete imovina</a></li>
                             <li><a class="dropdown-item" href="stete\ostale_prijave_steta.html">Ostale prijave šteta</a></li>
                             <li><a class="dropdown-item" href="stete\status_stete.html">Statusi šteta</a></li>
                        </ul>
             </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dmf\dmf.html">DMF</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="financije\financije.html">Financije</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="prigovori\prigovori.html">Prigovori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dp\dp.html">DP</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="webshop\webshop.html">Webshop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="facebook\facebook.html">Facebook</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="mailovi\mailovi.html">Mailovi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="eskalacije\eskalacije.html">Eskalacije</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="azuriranje\azuriranje_baze_klijenata.html">Ažuriranje baze klijenata</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="kontakti\kontakti.html">Kontakti</a>
                    </li>

                </ul>
        </div>
  </nav>
<!--Navbar - end -->


<div class="container">
    <main role="main" class="container">

<div class="container">
  

<div class="row">

<div class="container">
  <h2>Pauze</h2>
  <p>Molim unesite pauzu:</p>

<form action="#" method="POST">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <input type="submit" class="btn btn-outline-secondary" name="submit" value="Odaberi" />
  </div>
  <select class="custom-select" id="inputGroupSelect03" name="operator1">
    <option selected>Choose...</option>
    <option>Duga pauza</option>
    <option>Kratka Pauza</option>
  </select>
</div>
</form>

<?php 

  if(isset($_POST['submit'])){
$selected_val = $_POST['operator1'];
switch ($selected_val) {
    case 'Duga pauza':
      echo 
      "<form>
      <div class='input-group mb-3'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroup-sizing-sm'>Ime i prezime</span>
              </div>
              <input type='text' class='form-control' name='firstLastName'>

              <select class='custom-select' id='inputGroupSelect04'>
                <option selected>Choose...</option>
                <option>08:00</option>
                <option>08:30</option>
                <option>09:00</option>
                <option>09:30</option>
                <option>10:00</option>
                <option>10:30</option>
                <option>11:00</option>
                <option>11:30</option>
                <option>12:00</option>
                <option>12:30</option>
                <option>13:00</option>
                <option>13:30</option>
                <option>14:00</option>
                <option>14:30</option>
                <option>15:00</option>
                <option>15:30</option>
                <option>16:00</option>
                <option>16:30</option>
                <option>17:00</option>
                <option>17:30</option>
                <option>18:00</option>
                <option>18:30</option>
                <option>19:00</option>
                <option>19:30</option>
              </select>
          <div class='input-group-append'>
            <button class='btn btn-outline-secondary' type='button'>Button</button>
          </div>
        </div>
      </form>";

      break;

    case 'Kratka Pauza':
      echo "ovo je kratka pauza";
      break;

    default:
      
      break;
  }  
}

 ?>




<!-- table -->

  <div class="table-responsive mt-5">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Duga pauza 00-30 min</th>
        <th>Duga pauza 30-00 min</th>
        <th>Kratka pauza 00-30 min</th>
        <th>Kratka pauza 30-00 min</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>08:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>09:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>10:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>11:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>12:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>13:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>14:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>15:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>16:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>17:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>18:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>19:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
      <tr>
        <td>20:00</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>


  </div>
</div>

     <hr>

    </main><!--/.container-->

    <footer class="footer">
      <p>&copy; <a href="mailto:Stjepan.Mudronja@crosig.hr">Stjepan Mudronja</p>
    </footer>  
</div>
  
  <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  <script src="../../js/bootstrap-4-navbar.js"></script>
  
  <script src="../../js/modal.js"></script>
</body>
</html>