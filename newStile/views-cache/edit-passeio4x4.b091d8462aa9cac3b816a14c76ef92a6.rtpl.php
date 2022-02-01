<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Editar de Passeio</h1>
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
                <form method="POST" action="/admin/editar-passeio4x4/<?php echo htmlspecialchars( $passeio4x4["idPasseio4x4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">
                  <div class="card-body row">

                    <div class="form-group col-md-12">
                      <label for="exampleInputName"> Nome </label>
                      <input type="text" class="form-control" id="exampleInputName" name="txtNome" value="<?php echo htmlspecialchars( $passeio4x4["txtNome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label for="exampleInputdescricao"> Descrição </label>
                      <textarea name="txtDescricao" class="form-control" rows="5"><?php echo htmlspecialchars( $passeio4x4["txtDescricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="exampleInputArquivo">Anexar Arquivo</label>
                      <input type="file" id="exampleInputArquivo" name="fotos[]" multiple>
                    </div>

                    <div class="form-group col-md-1">
                      <label for="exampleInputLotacao"> Lotação </label>
                      <input type="number" class="form-control" id="exampleInputLotacao" name="intLotacao" value="<?php echo htmlspecialchars( $passeio4x4["intLotacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="form-group col-md-1">
                      <label for="exampleInputLotacao"> Duração </label>
                      <input type="number" class="form-control" id="exampleInputLotacao" name="intDuracao" value="<?php echo htmlspecialchars( $passeio4x4["intDuracao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer col-md-12 form-group">
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                  </div>
                </form>
              </div>
              <?php $counter1=-1;  if( isset($fotos) && ( is_array($fotos) || $fotos instanceof Traversable ) && sizeof($fotos) ) foreach( $fotos as $key1 => $value1 ){ $counter1++; ?>
                <?php if( $value1["fkPasseio4x4"] === $passeio4x4["idPasseio4x4"] ){ ?>
                <div class="col-md-12 d-flex justify-content-between align-items-center" style="margin-bottom: 20px;">
                  <a href="/res/img/fotos4x4/<?php echo htmlspecialchars( $value1["txtNomeFoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank"><img src="/res/fotos4x4/<?php echo htmlspecialchars( $value1["txtNomeFoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="100"> <?php echo htmlspecialchars( $value1["txtNomeFoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                  <a href="/admin/passeio4x4/removerFoto/<?php echo htmlspecialchars( $value1["idFoto4x4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-danger">Remover<i class="fas fa-trash"></i></a>
                </div>
                <?php } ?>
              <?php } ?>
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
  