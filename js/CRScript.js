
//logon parallax
$(document).ready(function(){
      $('.parallax').parallax();
      $(window).resize(function(){onReSize();});
      onReSize();
    });

function onReSize()
{
  $('#commentaire').height($('#gagnant').height());
}

function clickimage()
{
  if(document.getElementById('commentaire').style.display == 'block')
 {
   document.getElementById('commentaire').style.display = 'none';

 }
 else
{
   document.getElementById('commentaire').style.display = 'block';
}

}


var Affiche=document.getElementById("Compte");

	function Rebour() {

	var date1 = new Date();
	var date2 = new Date ("dec 22 17:00:00 2016");
	var sec = (date2 - date1) / 1000;
	var n = 24 * 3600;
	if (sec > 0) {
	j = Math.floor (sec / n);
	h = Math.floor ((sec - (j * n)) / 3600);
	mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
	sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
	Affiche.innerHTML = "Temps restant : " + j +" jours" + " "  + h +" heures "+ mn +" minutes ";

	window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";

	}
	tRebour=setTimeout ("Rebour();", 1000);
	}
	Rebour();
