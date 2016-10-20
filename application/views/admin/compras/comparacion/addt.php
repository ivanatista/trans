      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Agregar Comparación de Precios de Transparencia
            <small>Compras</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=base_url()?>comparacion/comparaciont"><i class="fa fa-arrow-circle-left"></i> Regresar a Comparación de Precios de Transparencia</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">

            <!-- left column -->
            <div class="col-sm-6">
              <!-- general form elements -->
              <div class="box box-solid box-primary">
                <div class="box-header">
                  <!-- <h3 class="box-title">Quick Example</h3> -->
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titulo Comparación</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Comparación">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Solicitudes de Compras</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Archivo de la Solicitud.</p>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Acta de Adjudicación</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Archivo de la Acta de Adjudicación.</p>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Contrato </label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Archivo del Contrato.</p>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                </form>
              </div><!-- /.box -->

              

            </div><!--/.col (left) -->
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->