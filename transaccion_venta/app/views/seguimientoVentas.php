<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="-1"/>
    <meta http-equiv="Cache-Control" content="private"/>
    <meta http-equiv="Cache-Control" content="no-store"/>
    <meta http-equiv="Pragma" content="no-cache"/>

    <script type="text/javascript" src="../public/js/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="../public/js/global.js"></script>


    <link rel="stylesheet" href="../public/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="../public/css/bootstrap.css"/>
    <link rel="stylesheet" href="../public/css/bootstrapValidator.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,400;1,600&display=swap"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="row">
    <div class="col-sm-3">
        <a href="../" class="btn btn-secondary">
            <i class="bi bi-people-fill"></i>
            <span>Datos de Clientes</span>
        </a>
    </div>


</div>
<div class="container mt-5" style="margin-top: 1% ;margin-bottom: 3% ;font-family: 'Albert Sans', sans-serif;">
    <!-- Agregar aqu� -->
    <div class="container" style="margin-top: 6%;font-family: 'Albert Sans', sans-serif;">
        <h4>Seguimiento Ventas</h4>
    </div>
            <form class="form-inline" id="id_form_filtrar" role="form">
                <h3>Filtros:</h3>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="id_filtro_numero">Inicio: </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="bi bi-people"></i></span>
                                <input name="numero" type="date" class="form-control" id="id_filtro_numero"
                                       placeholder="Ingrese n&uacute;mero">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="id_filtro_numero">Fin: </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="bi bi-people"></i></span>
                                <input name="numero" type="date" class="form-control" id="id_filtro_numero"
                                       placeholder="Ingrese n&uacute;mero">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <button type="button" id="id_btn_filtrar" class="btn btn-primary" role="button">
                                <i class="bi bi-funnel"></i>
                                Filtrar
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        <div class=" table-responsive"
             style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;    ">
            <table id="id_table"  class="table table-warning table-striped table-bordered table-hover table-condensed">

                <thead style="background: rgba(255,190,0,0.6)">
                <tr>
                    <th>C&Oacute;D VENTA</th>
                    <th>Fecha</th>
                    <th>CLIENTE</th>
                    <th>DOCUMENTO</th>
                    <th>ESTADO VENTA</th>
                    <th>DETALLE</th>
                </tr>
                </thead>

                <tbody>
                <?php
                include("../controllers/listarVentasController.php");


                $ventasHandler = new listarVentasController();
                $ventas = $ventasHandler->obtenerVentas();

                foreach ($ventas as $resultado) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id'] ?></th>
                        <th scope="row"><?php echo $resultado['fechaRegistro'] ?></th>
                        <th scope="row"><?php echo $resultado['nombres'] ?></th>
                        <th scope="row"><?php echo $resultado['numero_documento'] ?></th>
                        <th scope="row"><?php echo $resultado['descripcion'] ?></th>
                        <th scope="row"><a class="btn btn-warning"><i class="bi bi-filetype-pdf"></i></a></th>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
