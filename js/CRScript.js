
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
