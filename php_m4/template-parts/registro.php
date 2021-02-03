

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- formulario acceso -->
            <form action="#">
                  <div class="form-group">
                      <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu Nombre">
                      </div>

                      <div class="row mt2">
                              <div class="form-group mt-4">
                                  <label for="mail">E-mail</label>
                                  <input type="tel" class="form-control" name="mail" id="mail" aria-describedby="helpId" placeholder="E-mail">
                              </div>
                      </div><!--.row-->

                      <div class="form-group mt-4">
                          <input type="submit" class="btn btn-primary" value="Enviar">
                      </div>
                      <hr>
                      Si no eres usuario, <a href="#">puedes registrarte aquí</a>

                  </div>
             </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
