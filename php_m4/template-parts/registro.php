<div class="container login">
    <!-- acceso alumnos-->
    <div class="row justify-content-end">
        <div class="col-md-12 col-12 mb-4 mb-md-0 ms-4">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Acceso alumnos
            </button>
        </div>
    </div>
    <!-- end acceso alumnos -->

    <!-- registro  usuarios -->
    <div class="row justify-content-end">
        <div class="col-md-12 col-12 mb-4 mb-md-0">
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop-registro">
              Registro alumnos
            </button>
        </div>
    </div>
    <!-- fin registro usuarios -->
</div>

<!-- Modal Acceso-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Acceso alumnos</h5>
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

                      <div class="row">
                              <div class="form-group mt-4">
                                  <label for="mail">E-mail</label>
                                  <input type="tel" class="form-control" name="mail" id="mail" aria-describedby="helpId" placeholder="E-mail">
                              </div>
                      </div><!--.row-->

                      <div class="form-group mt-4">
                          <input type="submit" class="btn btn-primary" value="Enviar">
                      </div>

                  </div>
             </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Registro-->
<div class="modal fade" id="staticBackdrop-registro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Registro de usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- formulario registro -->
          <form action="#">
              <div class="form-group">
                  <p class="text-center">Rellenea los siguientes campos y en breve te responderemos</p>
                  <div class="form-group mt-4">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu Nombre">
                  </div>
                  <div class="row">

                          <div class="form-group mt-4">
                              <label for="telefono">Teléfono</label>
                              <input type="tel" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Teléfono">
                          </div>


                          <div class="form-group mt-4">
                              <label for="mail">E-mail</label>
                              <input type="tel" class="form-control" name="mail" id="mail" aria-describedby="helpId" placeholder="E-mail">
                          </div>

                  </div><!--.row-->


                  <div class="form-group mt-4">
                      <input type="submit" class="btn btn-success" value="Registrarse">
                  </div>
              </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>
