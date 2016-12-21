// Formulaire d'ajout
var formTemp = $('#addSelfie').html();
var formBack = new Array(2);

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
