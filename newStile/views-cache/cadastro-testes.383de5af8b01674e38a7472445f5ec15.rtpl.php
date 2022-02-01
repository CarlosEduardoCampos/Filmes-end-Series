<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cadastro de Peças</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-4">
              <!-- general form elements -->
              <div class="card card-primary">
                
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/admin/cadastrar-testes">
                    <div class="card-body row">

                        <div class="form-group col-md-6">
                            <label for="exampleInputNome"> Nome do Responsavel </label>
                            <input type="text" class="form-control" id="exampleInputNome" name="Responsavel">
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="0" name="tela" value="1"> <label for="0">TELA</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="1" name="autoFalante" value="1"> <label for="0">AUTOFALANTE</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="2" name="microfone" value="1"> <label for="0">MICROFONE</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="3" name="auricular" value="1"> <label for="0">AURICULAR</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="4" name="cameraFrontal" value="1"> <label for="0">CAMERA FRONTAL</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="5" name="cameraTraseira" value="1"> <label for="0">CAMERA TRASEIRA</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="6" name="biometria" value="1"> <label for="0">BIOMETRIA</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="7" name="bateria" value="1"> <label for="0">BATERIA</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="8" name="foneOuvido" value="1"> <label for="0">FONE DE OUVIDO</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="9" name="imei" value="1"> <label for="0">IMEI</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="10" name="wifi" value="1"> <label for="0">WIFI</label><br>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="checkbox" id="11" name="chip" value="1"> <label for="0">CHIP</label><br>
                        </div>

                    </div>

                  <!-- /.card-body -->
  
                  <div class="card-footer col-md-4 form-group">
                    <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
  
           
  
         
  
            </div>
            <!--/.col (left) -->
            <!-- right column -->
          
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
   
  
   
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
