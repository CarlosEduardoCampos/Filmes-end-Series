<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cadastro de Passeio</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/admin/cadastrar-passeio4x4" enctype="multipart/form-data">
                    <div class="card-body row">

                      <div class="form-group col-md-12">
                          <label for="exampleInputName"> Nome </label>
                          <input type="text" class="form-control" id="exampleInputName" name="txtNome">
                      </div>

                      <div class="form-group col-md-12">
                          <label for="exampleInputdescricao"> Descrição </label>
                          <textarea name="txtDescricao" class="form-control" rows="5"></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="exampleInputArquivo">Anexar Arquivo</label>
                        <input type="file" id="exampleInputArquivo" name="fotos[]" multiple>
                      </div>

                      <div class="form-group col-md-1">
                          <label for="exampleInputLotacao"> Lotacao </label>
                          <input type="number" class="form-control" id="exampleInputLotacao" name="intLotacao">
                      </div>

                      <div class="form-group col-md-1">
                        <label for="exampleInputLotacao"> Duração</label>
                        <input type="number" class="form-control" id="exampleInputLotacao" name="intDuracao">
                      </div>

                    </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer col-md-12 form-group">
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
  