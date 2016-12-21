<div id="addSelfie" class="modal">
  <div class="modal-content">
    <h4>Ajouter Un Selfie</h4>
    <div class="row">
      <form id="submitAddSelfie" class="col s12" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <input autocomplete="off" id="pseudo" type="text" name="pseudo" class="validate">
            <label for="pseudo">Pseudo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input autocomplete="off" id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>Le Selfie</span>
            <input autocomplete="off" id="file" name="file" type="file">
          </div>
          <div class="file-path-wrapper">
            <input autocomplete="off" class="file-path validate" type="text">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a onclick="addForm(); return false;" href="" class="modal-action waves-effect waves-green btn-flat">Ajouter</a>
  </div>
</div>
