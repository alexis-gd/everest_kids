    <!-- Modal requisitos -->
    <div class="modal fade modal-color" id="requisitosDoc" tabindex="-1" aria-labelledby="requisitosDocLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered justify-content-center mw-modal">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="p-modal-title">Requisitos de admisión</p>
                    <div class="box-requisitos">
                      <?php
                        include_once 'model/server/conexion.php';
                        $conexion = conectar();
                        $conexion->set_charset('utf8');
                          $sql = "SELECT * FROM requisitos WHERE grado = 'Doctorado' AND status = '1'";
                          $res = mysqli_query($conexion, $sql);

                          while ($array = mysqli_fetch_assoc($res)) {
                            $requisito = '<div class="box-req-text">
                            <img src="assets/multimedia/icons/i-requisito-check.svg" alt="" class="img-requisito-check">
                            <p class="p-requisitos">'.$array['requisito'].'</p></div>';
                            echo $requisito;
                          }
                          mysqli_close($conexion);
                      ?>
                    </div>
                    <div class="box-btn-req">                        
                        <button type="button" data-dismiss="modal" class="btn btn-modal-requisitos">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>