// Formulaire d'ajout
var formTemp = $('#addSelfie').html();
var comTemp = $('#addCom').html();
var formBack = new Array(2);
var comBack = new Array(3);

// Prochaine LIMIT
var nextLimit = 9;

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
      }
    }).done(function(response)
    {
      $('#addSelfie').html(response);
    });
}

function addFormInit()
{
  location.reload();
}

function addFormBack()
{
  $('#addSelfie').html(formTemp);
  $('#pseudo').val(formBack[0]);
  $('#email').val(formBack[1]);
}

function addCom()
{
  comBack[0] = $("#submitAddCom").attr('data-id');
  comBack[1] = $("#pseudoCom").val();
  comBack[2] = $("#textCom").val();

  $.post("addCom.php", { id: comBack[0], pseudo: comBack[1], com: comBack[2]}).done(function(response)
  {
    $('#addCom').html(response);
  });
}

function addComBack()
{
  $('#addCom').html(comTemp);
  $('#pseudoCom').val(comBack[1]);
  $('#textCom').val(comBack[2]);
}

$( document ).ready
(
  // Initiation du carousel
  function()
  {
    $('.carousel').carousel();
    $('.modal').modal();

    // Scrool Bottom Max
    $(window).scroll(function()
    {
      if($(window).scrollTop() + $(window).height() >= $(document).height())
      {
        $('#load').modal('open');
        $.post("restAutoLoad.php", { limit: nextLimit}).done(function(response)
        {
          $('#rest').html($('#rest').html() + response);
          $('#load').modal('close');
          nextLimit += 9;
        });
      }
    });
  }
);
