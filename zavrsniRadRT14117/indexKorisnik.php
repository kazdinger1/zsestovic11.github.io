<?php
session_start();
if(!$_SESSION['ulogovan']) { header('Location: index.php');  }
$ime=$_SESSION['ime'];
$prezime=$_SESSION['prezime'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/skripta.js"></script>

</head>
<body>
    
    <div class="bg-img">
        <div class="container">
            
          <div class="topnav">  
            <p style="float:left; color:white; font-size:230%;font-family: 'Orbitron', courier, sans-serif;background-color:rgba(0,0,0,0.5); border:1px solid black;"><?php  echo $ime ." ". $prezime; ?></p>   
            <a class="navi" href="index.php">Odjavi se</a>
            <a class="navi scroll" href="#kontakt">Kontakt</a>
            <a class="navi scroll" href="#oNama">O nama</a>
            <a class="navi scroll" href="#animatori">Servis</a>
            <a class="navi scroll" href="#home">Pocetna</a>
            
            
          </div>
          <div class="tekst">
            <p style="font-size:4vh;color:whitesmoke; font-family: 'Orbitron', courier, sans-serif;  text-align: center; border: 1px solid black; background-color:rgba(1,2,4,0.8);">Pruzanje programa animatora za decije rodjendane</p>
             <a class="button scroll" href="#animatori" style="text-decoration: none; text-align: center;">ZAKAZI TERMIN</a>
           </div>
      
        </div>
      </div> 
          <div class="animatori" id="animatori">

            <div class="karta">
              <div class="gornjaKarta">
                <img class="animator" src="img/pantomimicar.png" alt="">
              </div>   

              <div class="donjaKarta">
                <p class="donjaKartaNaslov">PANTOMIMICAR</p>
                <p class="donjaKartaTekst">Pantomima je pri??anje pri??e bez re??i, telesnim pokretima, pokretima i izrazom lica. Predstava, ples ili druga 
                  pozori??na predstava koju karakteri??e takvo pripovedanje bez re??i.</p>
                <div class="popupKarta" id="popupKartaID">
                  <div class="overlay"></div>
                  <div class="sadrzaj">
                  <div class="zatvori" onclick="iskok()">x</div>
                    <h1>PANTOMIMICAR</h1>
                    <div>
                      <div class="naslovTabela"style="display:inline-flex">
                        <p>PON</p>
                        <p>UTO</p>
                        <p>SRE</p>
                        <p>CET</p>
                        <p>PET</p>
                        <p>SUB</p>
                        <p>NED</p>
                      </div>
                      <div class="tabela"style="display:inline-flex">
                      <p>10:00-12:00</p>
                      <button id="0" onclick="zakaziI(this)"></button>
                      <button id="1" onclick="zakaziI(this)"></button>
                      <button id="2" onclick="zakaziI(this)"></button>
                      <button id="3" onclick="zakaziI(this)"></button>
                      <button id="4" onclick="zakaziI(this)"></button>
                      <button id="5" onclick="zakaziI(this)"></button>
                      <button id="6" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela"style="display:inline-flex">
                        <p>12:00-14:00</p>
                        <button id="7" onclick="zakaziI(this)"></button>
                        <button id="8" onclick="zakaziI(this)"></button>
                        <button id="9" onclick="zakaziI(this)"></button>
                        <button id="10" onclick="zakaziI(this)"></button>
                        <button id="11" onclick="zakaziI(this)"></button>
                        <button id="12" onclick="zakaziI(this)"></button>
                        <button id="13" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela"style="display:inline-flex">
                        <p>14:00-16:00</p>
                        <button id="14" onclick="zakaziI(this)"></button>
                        <button id="15" onclick="zakaziI(this)"></button>
                        <button id="16" onclick="zakaziI(this)"></button>
                        <button id="17" onclick="zakaziI(this)"></button>
                        <button id="18" onclick="zakaziI(this)"></button>
                        <button id="19" onclick="zakaziI(this)"></button>
                        <button id="20" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela"style="display:inline-flex">
                        <p>16:00-18:00</p>
                        <button id="21" onclick="zakaziI(this)"></button>
                        <button id="22" onclick="zakaziI(this)"></button>
                        <button id="23" onclick="zakaziI(this)"></button>
                        <button id="24" onclick="zakaziI(this)"></button>
                        <button id="25" onclick="zakaziI(this)"></button>
                        <button id="26" onclick="zakaziI(this)"></button>
                        <button id="27" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela"style="display:inline-flex">
                        <p>18:00-20:00</p>
                        <button id="28" onclick="zakaziI(this)"></button>
                        <button id="29" onclick="zakaziI(this)"></button>
                        <button id="30" onclick="zakaziI(this)"></button>
                        <button id="31" onclick="zakaziI(this)"></button>
                        <button id="32" onclick="zakaziI(this)"></button>
                        <button id="33" onclick="zakaziI(this)"></button>
                        <button id="34" onclick="zakaziI(this)"></button>
                      </div>
                    </div>
                     <button style="margin-top:10px; width:200px;
                      height:40px; background-color:rgba(0, 255, 128,1);
                      font-family: 'Orbitron', courier, sans-serif; font-size:25px;"
                      onclick="zakazi()">ZAKAZI</button>
                  </div>
                </div>
                <button onclick="iskok()">Jos..</button>
              </div>
            </div>

            <div class="karta">
              <div class="gornjaKarta">
                <img class="animator" src="img/klovn.jpeg" alt="">
              </div>   

              <div class="donjaKarta">
                <p class="donjaKartaNaslov">KLOVN</p>
                <p class="donjaKartaTekst">Klovn je osoba koja nosi jedinstvenu ??minku i rasko??an kostim, 
                  izvodec??i komediju u stanju otvorenog uma (poni??tavajuc??i folk-norme) sve dok koristi fizi??ku komediju.</p>
                   <div class="popupKarta" id="popupKartaID2">
                    <div class="overlay"></div>
                    <div class="sadrzaj">
                    <div class="zatvori" onclick="iskok2()">x</div>
                      <h1>KLOVN</h1>
                      <div>
                      <div class="naslovTabela"style="display:inline-flex">
                        <p>PON</p>
                        <p>UTO</p>
                        <p>SRE</p>
                        <p>CET</p>
                        <p>PET</p>
                        <p>SUB</p>
                        <p>NED</p>
                      </div>
                      <div class="tabela1"style="display:inline-flex">
                      <p>10:00-12:00</p>
                      <button id="0" onclick="zakaziI(this)"></button>
                      <button id="1" onclick="zakaziI(this)"></button>
                      <button id="2" onclick="zakaziI(this)"></button>
                      <button id="3" onclick="zakaziI(this)"></button>
                      <button id="4" onclick="zakaziI(this)"></button>
                      <button id="5" onclick="zakaziI(this)"></button>
                      <button id="6" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela1"style="display:inline-flex">
                        <p>12:00-14:00</p>
                        <button id="7" onclick="zakaziI(this)"></button>
                        <button id="8" onclick="zakaziI(this)"></button>
                        <button id="9" onclick="zakaziI(this)"></button>
                        <button id="10" onclick="zakaziI(this)"></button>
                        <button id="11" onclick="zakaziI(this)"></button>
                        <button id="12" onclick="zakaziI(this)"></button>
                        <button id="13" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela1"style="display:inline-flex">
                        <p>14:00-16:00</p>
                        <button id="14" onclick="zakaziI(this)"></button>
                        <button id="15" onclick="zakaziI(this)"></button>
                        <button id="16" onclick="zakaziI(this)"></button>
                        <button id="17" onclick="zakaziI(this)"></button>
                        <button id="18" onclick="zakaziI(this)"></button>
                        <button id="19" onclick="zakaziI(this)"></button>
                        <button id="20" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela1"style="display:inline-flex">
                        <p>16:00-18:00</p>
                        <button id="21" onclick="zakaziI(this)"></button>
                        <button id="22" onclick="zakaziI(this)"></button>
                        <button id="23" onclick="zakaziI(this)"></button>
                        <button id="24" onclick="zakaziI(this)"></button>
                        <button id="25" onclick="zakaziI(this)"></button>
                        <button id="26" onclick="zakaziI(this)"></button>
                        <button id="27" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela1"style="display:inline-flex">
                        <p>18:00-20:00</p>
                        <button id="28" onclick="zakaziI(this)"></button>
                        <button id="29" onclick="zakaziI(this)"></button>
                        <button id="30" onclick="zakaziI(this)"></button>
                        <button id="31" onclick="zakaziI(this)"></button>
                        <button id="32" onclick="zakaziI(this)"></button>
                        <button id="33" onclick="zakaziI(this)"></button>
                        <button id="34" onclick="zakaziI(this)"></button>
                      </div>
                    </div>
                     <button style="margin-top:10px; width:200px;
                      height:40px; background-color:rgba(0, 255, 128,1);
                      font-family: 'Orbitron', courier, sans-serif; font-size:25px;"
                      onclick="zakazi1()">ZAKAZI</button>
                    </div>
                  </div>
                  <button onclick="iskok2()">Jos..</button>
              </div>
            </div>

            <div class="karta">
              <div class="gornjaKarta">
                <img class="animator" src="img/mikimaus.png" alt="">
              </div>   

              <div class="donjaKarta">
                <p class="donjaKartaNaslov">MIKI MAUS</p>
                <p class="donjaKartaTekst">Antropomorfni mi?? koji obi??no nosi crveni ??orc, velike ??ute cipele i bele rukavice, 
                  Miki Maus je jedan od najprepoznatljivijih izmi??ljenih likova na svetu.</p>
                   <div class="popupKarta" id="popupKartaID3">
                    <div class="overlay"></div>
                    <div class="sadrzaj">
                    <div class="zatvori" onclick="iskok3()">x</div>
                      <h1>ANIMATOR</h1>
                      <div>
                      <div class="naslovTabela"style="display:inline-flex">
                        <p>PON</p>
                        <p>UTO</p>
                        <p>SRE</p>
                        <p>CET</p>
                        <p>PET</p>
                        <p>SUB</p>
                        <p>NED</p>
                      </div>
                      <div class="tabela2"style="display:inline-flex">
                      <p>10:00-12:00</p>
                      <button id="0" onclick="zakaziI(this)"></button>
                      <button id="1" onclick="zakaziI(this)"></button>
                      <button id="2" onclick="zakaziI(this)"></button>
                      <button id="3" onclick="zakaziI(this)"></button>
                      <button id="4" onclick="zakaziI(this)"></button>
                      <button id="5" onclick="zakaziI(this)"></button>
                      <button id="6" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela2"style="display:inline-flex">
                        <p>12:00-14:00</p>
                        <button id="7" onclick="zakaziI(this)"></button>
                        <button id="8" onclick="zakaziI(this)"></button>
                        <button id="9" onclick="zakaziI(this)"></button>
                        <button id="10" onclick="zakaziI(this)"></button>
                        <button id="11" onclick="zakaziI(this)"></button>
                        <button id="12" onclick="zakaziI(this)"></button>
                        <button id="13" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela2"style="display:inline-flex">
                        <p>14:00-16:00</p>
                        <button id="14" onclick="zakaziI(this)"></button>
                        <button id="15" onclick="zakaziI(this)"></button>
                        <button id="16" onclick="zakaziI(this)"></button>
                        <button id="17" onclick="zakaziI(this)"></button>
                        <button id="18" onclick="zakaziI(this)"></button>
                        <button id="19" onclick="zakaziI(this)"></button>
                        <button id="20" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela2"style="display:inline-flex">
                        <p>16:00-18:00</p>
                        <button id="21" onclick="zakaziI(this)"></button>
                        <button id="22" onclick="zakaziI(this)"></button>
                        <button id="23" onclick="zakaziI(this)"></button>
                        <button id="24" onclick="zakaziI(this)"></button>
                        <button id="25" onclick="zakaziI(this)"></button>
                        <button id="26" onclick="zakaziI(this)"></button>
                        <button id="27" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela2"style="display:inline-flex">
                        <p>18:00-20:00</p>
                        <button id="28" onclick="zakaziI(this)"></button>
                        <button id="29" onclick="zakaziI(this)"></button>
                        <button id="30" onclick="zakaziI(this)"></button>
                        <button id="31" onclick="zakaziI(this)"></button>
                        <button id="32" onclick="zakaziI(this)"></button>
                        <button id="33" onclick="zakaziI(this)"></button>
                        <button id="34" onclick="zakaziI(this)"></button>
                      </div>
                    </div>
                     <button style="margin-top:10px; width:200px;
                      height:40px; background-color:rgba(0, 255, 128,1);
                      font-family: 'Orbitron', courier, sans-serif; font-size:25px;"
                      onclick="zakazi2()">ZAKAZI</button>
                    </div>
                  </div>
                  <button onclick="iskok3()">Jos..</button>
              </div>
            </div>

            <div class="karta">
              <div class="gornjaKarta">
                <img class="animator" src="img/spajdermen.png" alt="">
              </div>   

              <div class="donjaKarta">
                <p class="donjaKartaNaslov">SPAJDERMEN</p>
                <p class="donjaKartaTekst">Spider-Man lik iz stripa koji je bio originalni superheroj svakog ??oveka. Ameri??kog tinejd??era Pitera
                   Parkera, siroma??no bolesno siro??e, ujeo je radioaktivni pauk. Kao rezultat ujeda, 
                  on dobija nadljudsku snagu, brzinu i okretnost zajedno sa sposobno??c??u da se prilepi za zidove.</p>
                   <div class="popupKarta" id="popupKartaID4">
                    <div class="overlay"></div>
                    <div class="sadrzaj">
                    <div class="zatvori" onclick="iskok4()">x</div>
                    <h1>SPAJDERMEN</h1>
                      <div>
                      <div class="naslovTabela"style="display:inline-flex">
                        <p>PON</p>
                        <p>UTO</p>
                        <p>SRE</p>
                        <p>CET</p>
                        <p>PET</p>
                        <p>SUB</p>
                        <p>NED</p>
                      </div>
                      <div class="tabela3"style="display:inline-flex">
                      <p>10:00-12:00</p>
                      <button id="0" onclick="zakaziI(this)"></button>
                      <button id="1" onclick="zakaziI(this)"></button>
                      <button id="2" onclick="zakaziI(this)"></button>
                      <button id="3" onclick="zakaziI(this)"></button>
                      <button id="4" onclick="zakaziI(this)"></button>
                      <button id="5" onclick="zakaziI(this)"></button>
                      <button id="6" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela3"style="display:inline-flex">
                        <p>12:00-14:00</p>
                        <button id="7" onclick="zakaziI(this)"></button>
                        <button id="8" onclick="zakaziI(this)"></button>
                        <button id="9" onclick="zakaziI(this)"></button>
                        <button id="10" onclick="zakaziI(this)"></button>
                        <button id="11" onclick="zakaziI(this)"></button>
                        <button id="12" onclick="zakaziI(this)"></button>
                        <button id="13" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela3"style="display:inline-flex">
                        <p>14:00-16:00</p>
                        <button id="14" onclick="zakaziI(this)"></button>
                        <button id="15" onclick="zakaziI(this)"></button>
                        <button id="16" onclick="zakaziI(this)"></button>
                        <button id="17" onclick="zakaziI(this)"></button>
                        <button id="18" onclick="zakaziI(this)"></button>
                        <button id="19" onclick="zakaziI(this)"></button>
                        <button id="20" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela3"style="display:inline-flex">
                        <p>16:00-18:00</p>
                        <button id="21" onclick="zakaziI(this)"></button>
                        <button id="22" onclick="zakaziI(this)"></button>
                        <button id="23" onclick="zakaziI(this)"></button>
                        <button id="24" onclick="zakaziI(this)"></button>
                        <button id="25" onclick="zakaziI(this)"></button>
                        <button id="26" onclick="zakaziI(this)"></button>
                        <button id="27" onclick="zakaziI(this)"></button>
                      </div>
                      <div class="tabela3"style="display:inline-flex">
                        <p>18:00-20:00</p>
                        <button id="28" onclick="zakaziI(this)"></button>
                        <button id="29" onclick="zakaziI(this)"></button>
                        <button id="30" onclick="zakaziI(this)"></button>
                        <button id="31" onclick="zakaziI(this)"></button>
                        <button id="32" onclick="zakaziI(this)"></button>
                        <button id="33" onclick="zakaziI(this)"></button>
                        <button id="34" onclick="zakaziI(this)"></button>
                      </div>
                    </div>
                     <button style="margin-top:10px; width:200px;
                      height:40px; background-color:rgba(0, 255, 128,1);
                      font-family: 'Orbitron', courier, sans-serif; font-size:25px;"
                      onclick="zakazi3()">ZAKAZI</button>
                    </div>
                  </div>
                  <button onclick="iskok4()">Jos..</button>
            </div>
          </div>

      <div class="slika" id="oNama">
        <p class="onama">O nama</p>
      </div>
      <!-- 3 KOLONE -->
      
      <div class="cards_wrap">
          <div class="card_item">
            <div class="card_inner">
              <div class="card_top">
              <img class="slikaTop" src="img/tv.png" alt="">
              </div>
              <div class="card_bottom">
               
              <div class="card_info">
                <p class="title">
                Televizijski nastupi
                </p>
                <p class="tekstKarta">
                Prepoznati po svojim izuzetno zabavnim likovima, pojavili smo se u brojnim visokoprofilovanim televizijskim programima, uklju??ujuc??i nekoliko emisija i za BBC i za de??iji BBC, i pojavili smo se u programima koji su se prikazivali u Velikoj Britaniji i Evropi.
                </p>
              </div>
              </div>
            </div>
          </div>
          <div class="card_item">
            <div class="card_inner">
              <div class="card_top">
              <img class="slikaTop" src="img/kiddo.jpg" alt="">
              </div>
              <div class="card_bottom">
               
              <div class="card_info">
                <p class="title">
                O Kiddo
                </p>
                <p class="tekstKarta">
                Kiddo je vrlo dobro uspostavljena de??ija zabavna kompanija sa fantasti??nom reputacijom koja pru??a izuzetna zabavna iskustva bez obzira na prigodu.

                Svake godine zabavljamo desetine hiljada dece i nudimo neverovatan asortiman paketa.
                </p>
              </div>
              </div>
            </div>
          </div>
          <div class="card_item">
            <div class="card_inner">
              <div class="card_top">
              <img class="slikaTop" src="img/lav.jpg" alt="">
              </div>
              <div class="card_bottom">
        
              <div class="card_info">
                <p class="title">
                Prethodni kupci
                </p>
                <p class="tekstKarta">
                Ponosni smo ??to smo se zabavili na brojnim veoma uzbudljivim mestima, uklju??ujuc??i: dvorac Vindsor, Pinevood Studios, Kensington Palace, O2 Arenu, Varner Bros Studios i Vimbledon, a tako??e smo se zabavili i na londonskim filmskim premijerama i bioskopskim doga??ajima, poput 'Harry Potter', 'Despicable Me' i 'Happy Feet 2'.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
      
      <!-- KRAJ 3 KOLONE -->   
      <div style="text-align:center; ">
      <div style="width:65vh; height:45vh;border:2px solid red; display:inline-block; margin-top:50px ">
      <p style="font-size:5vh; margin-top:12px; font-weight:900;font-family: 'Orbitron', courier, sans-serif; color:rgba(180, 26, 26,1)">Kiddo Company</p>
      <p style="font-size:3vh; margin-top:22px; margin-left:15px; font-weight:900;font-family: 'Orbitron', courier, sans-serif; float:left">Broj: +381 62 4325 3345</p>
      <p style="font-size:3vh; margin-top:22px; margin-left:15px; font-weight:900;font-family: 'Orbitron', courier, sans-serif; float:left">E-mail: kiddoCompany@gmail.com</p>
      <p style="font-size:3vh; margin-top:22px; font-weight:900;font-family: 'Orbitron', courier, sans-serif; float:left">Adresa: Vojvode Stepe 283, Beograd 11000</p>
    </div>

      <div id="kontakt" style="display:inline-block; margin-left:60px;  margin-bottom:20px; vertical-align:top">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11330.449762780554!2d20.47343391099172!3d44.76831816655138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd12e2aad5590e385!2sThe%20School%20of%20Electrical%20and%20Computer%20Engineering%20of%20Applied%20Studies!5e0!3m2!1sen!2srs!4v1630187855282!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
      </div>
      </div>

      <!-- FOOOTER -->
 
      <footer>
        <div class="divizija">
        <img src="img/kiddo.jpg" style="width:5vw;border:2px solid black;">
         <p class="futerino" style="">kiddo</p>
         <a href="https://www.facebook.com/" style="width:1vh">
          <img class="futerSlika" src="img/facebook.jpg" >
        </a>
      
        <a href="https://www.instagram.com/" style="width:1vh">
          <img class="futerSlika" src="img/instagram.png" >
        </a>
      
        <a href="https://www.twitter.com/" style="width:1vh">
          <img class="futerSlika" src="img/twitter.png">
        </a>
        <p style="display:inline; float:right; margin-top:5vh; font-size:3vh">Pratite nas</p>
        </div>

      </footer> 

</body>
</html>