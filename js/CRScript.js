
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
