<?php 
  date_default_timezone_set('Europe/Zagreb');
  include_once 'includes/dbh.inc.php';
 ?>

 <!DOCTYPE html>
<html lang="hr">
<head>
	<title>C-point</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

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

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">
          <div class="row">

            <div class="col">

  <?php 
      $sql = "SELECT * FROM posts ORDER BY id DESC;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<h4>".$row['subject']."</h4>";
        echo nl2br ("<p>".$row['content']."</p>");
        echo "<i>".$row['author']."</i>";
        echo "<p>".$row['date']."</p>";
        echo "<div class='clearfix'></div>";
        echo "<form method='POST' action='includes/deletePost.inc.php'>
      <input type='hidden' name='id' value='".$row['id']."'>
      <button type='submit' class='btn btn-outline-secondary btn-sm mb-4' name='postDelete'>Obriši obavijest</button>
      </form>";
        }
      }
   ?>     

               
<!-- PDF icon -->
            <a href="#"><i class="fa fa-file-pdf-o" style="font-size:24px"></i></a>

            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Aplikacije</a>
            <a href="http://crsliveapp1/live20/" class="list-group-item" target="_blank">Aseba</a>
            <a href="http://aplik/" class="list-group-item" target="_blank">Aplikacije</a>
            <a href="http://webshopadmin/" class="list-group-item" target="_blank">Webshop admin</a>
            <a href="http://kp/MM/CC/default.aspx" class="list-group-item" target="_blank">CC portal</a>
          </div>

          <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#InsertInfoModal">Unos nove obavijesti &raquo;</button>
        </div><!--/span-->
	</div><!--/row-->


    <div class="modal fade" id="InsertInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nova obavijest</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
       				<div class="modal-body">
                      <form action="includes/setPost.inc.php" method="POST">
                        <div class="form-group">
                          <label class="col-form-label">Naslov:</label>
                          <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label">Poruka:</label>
                          <textarea class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label">Unio:</label>
                          <input type="text" class="form-control" name="author" placeholder= "Ime i Prezime">
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                        <button type="submit" class="btn btn-primary" name="submit">Pošalji</button>
                      </form>
                    </div>
                    <div class="modal-footer"></div>
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

  <script src="js/bootstrap-4-navbar.js"></script>
  
  <script src="js/modal.js"></script>
</body>
</html>