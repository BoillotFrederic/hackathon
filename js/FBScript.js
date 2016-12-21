// Formulaire d'ajout
var formTemp = $('#addSelfie').html();
var formBack = new Array(2);

function addForm()
{
  formBack[0] = $("#pseudo").val();
  formBack[1] = $("#email").val();
  
  var $form = $('#submitAddSelfie');
  var formdata = (window.FormData) ? new FormData($form[0]) : null;
  var data = (formdata !== null) ? formdata : $form.serialize();

  $.ajax(
  {
      url: 'addSelfie.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: data,
      success: function (response)
      {
        //alert(response);
          // La réponse du serveur
      }
    }).done(function(response)
    {
      $('#addSelfie').html(response);
    });

  // // Récupération des données
  // formBack[0] = $("#pseudo").val();
  // formBack[1] = $("#email").val();
  //
  // // Envoi du POST
  // $.post("addSelfie.php", { pseudo: formBack[0], email: formBack[1], file: $("#file").val() }).done(function(data)
  // {
  //   $('#addSelfie').html(data);
  // });
}

function addFormInit()
{
  $('#addSelfie').html(formTemp);
  $('#addSelfie').modal('close');
}

function addFormBack()
{
  $('#addSelfie').html(formTemp);
  $('#pseudo').val(formBack[0]);
  $('#email').val(formBack[1]);
}

$( document ).ready
(
  // Initiation du carousel
  function()
  {
    $('.carousel').carousel();
    $('.modal').modal();
  }
);
