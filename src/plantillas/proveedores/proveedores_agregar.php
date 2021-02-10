<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include '../../../componentes/head.php';
    ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <!-- DIV PRINCIPAL DE BODY -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- HEADER -->
        <?php
            include '../../../componentes/header.php';
        ?>
        <!-- FIN HEADER -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- BARRA IZQUIERDA  -->
        <?php
            include '../../../componentes/barra_izquierda.php';
        ?>
        <!-- FON BARRA IZQUIERDA  -->
        <!-- ============================================================== -->
        

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- CONTENEDOR -->
        <div class="page-wrapper">
            <div class="conteiner-fluid">
            <!-- AQUI EMPEZAMOS A AGREGAR DISEÑO DEL CENTRO -->
            <div class="container">
            <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-sm-11 col-md-11 col-lg-11">
                    

                    <!-- Input de Crear Nuevo preveedor -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Agregar Nuevo Proveedor</h4>
                            <h6 class="card-subtitle">Rellena los campos para agregar un nuevo proveedor</h6>
                            <form class="mt-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input type="text"  class="form-control">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                    <label>Razón Social</label>
                                    <input type="text" class="form-control">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control">
                                    <label>RFC</label>
                                    <input type="text" class="form-control">
                                    <label>Correo</label>
                                    <input type="text" class="form-control">
                                    <label>País</label>
                                    <input type="text" class="form-control">
                                    <label>Estado</label>
                                    <input type="text" class="form-control">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control">
                                    <br>
                                    <h4 class="card-title">Detalles</h4>
                                    <form class="mt-3">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Detalles de proveedor..."></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                    <button type="reset" class="btn btn-dark">Reiniciar valores</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Fin Input de Crear Nuevo preveedor -->

                   
                </div>
            </div>
        </div>



            </div>
        </div>
       

        


        <!--FIN CONTENEDOR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>

    <!-- TODOS LOS ENLACES DE SCRIPTS -->
    <?php
        include '../../../componentes/scripts.php';
    ?>
    <!-- FIN DE SCRIPTS -->
</body>

</html>