$(document).ready(function(){
     var skrol = $('.scroll');
     skrol.click(function(e){
             e.preventDefault();
             $('body,html').animate({
                 scrollTop: $(this.hash).offset().top
             }, 1000)
         })
     })
     
function iskok()
{ 
     document.getElementById("popupKartaID").classList.toggle("active");
}

function iskok2()
{ 
     document.getElementById("popupKartaID2").classList.toggle("active");
}

function iskok3()
{ 
     document.getElementById("popupKartaID3").classList.toggle("active");
}

function iskok4()
{ 
     document.getElementById("popupKartaID4").classList.toggle("active");
}

function zakaziI(elem){    
     elem.style.backgroundColor = "greenyellow";
}


function zakazi(elem){
     kbButtons = document.querySelectorAll('div.tabela button');
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "greenyellow") { kbButtons[i].disabled = true;kbButtons[i].style.backgroundColor = "red";}
     }
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "red") { alert("Uspesno ste zakazali termin!"); break;}
     }
}

function zakazi1(elem){
     kbButtons = document.querySelectorAll('div.tabela1 button');
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "greenyellow") { kbButtons[i].disabled = true;kbButtons[i].style.backgroundColor = "red";}
     }
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "red") { alert("Uspesno ste zakazali termin!"); break;}
     }
}

function zakazi2(elem){
     kbButtons = document.querySelectorAll('div.tabela2 button');
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "greenyellow") { kbButtons[i].disabled = true;kbButtons[i].style.backgroundColor = "red";}
     }
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "red") { alert("Uspesno ste zakazali termin!"); break;}
     }
}

function zakazi3(elem){
     kbButtons = document.querySelectorAll('div.tabela3 button');
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "greenyellow") { kbButtons[i].disabled = true;kbButtons[i].style.backgroundColor = "red";}
     }
     for(i=0;i<kbButtons.length;i++){
          if(kbButtons[i].style.backgroundColor == "red") { alert("Uspesno ste zakazali termin!"); break;}
     }
}



function func(){
     $_SESSION['ulogovan']=false;
}