<br>
<section class="content">
    <div class="row justify-content-center align-items-center">
        <div class="col-5">
            <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
                <h4 class="card-title">Seleção do Banco de Dados</h4>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form name="form1" role="form" method="POST" action="../controllers/usuario_controller.php">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>DataBase</label>
                                <select class="form-control form-control-sm" name="cboDataBase">
                                <?php
                                  var_dump($lstDataBase);
                                  foreach ($lstDataBase as $list){
                                    echo '<option>' . $list["SCHEMA_NAME"] . '</option>';
                                  }
                                ?>
                                </select>
                            </div>
                        </div>               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Table</label>
                                <select class="form-control form-control-sm" name="cboTable">
                                <?php
                                  var_dump($lstDataBase);
                                  foreach ($lstDataBase as $list){
                                    echo '<option>' . $list["SCHEMA_NAME"] . '</option>';
                                  }
                                ?>
                                </select>
                            </div>
                        </div>               
                    </div>

                </div>

                <div class="card-footer">
                <button type="submit" name="btnGravar" class="btn btn-sm btn-primary" onclick="return validaSenha()">Gerar Código</button>
                </div>            
            </form>
            <!-- /.Form end -->

            </div>
        </div>
    </div>
</section>