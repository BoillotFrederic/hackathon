
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
	Affiche.innerHTML = "<span>Temps restant :</span> " + j +" <span> &nbsp jours</span>" + " "  + h +" <span> &nbsp heures </span>" + mn +" <span> &nbsp minutes</span> ";

	window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";

	}
	tRebour=setTimeout ("Rebour();", 1000);
	}
	Rebour();



/*commentaire*/

  $(document).ready(function(){
     // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
     $('.modal').modal();
   });

   $('.modal').modal({
dismissible: true, // Modal can be dismissed by clicking outside of the modal
opacity: .5, // Opacity of modal background
in_duration: 300, // Transition in duration
out_duration: 200, // Transition out duration
starting_top: '4%', // Starting top style attribute
ending_top: '10%', // Ending top style attribute
ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
alert("Ready");
console.log(modal, trigger);
},
complete: function() { alert('Closed'); } // Callback for Modal close
}
);
