<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto final de Html5</title>
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/Estilos_especiales.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container" >
            <div class="row">
                <?php include 'header.php'; ?>

            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="http://placehold.it/100x100">


                </div>
                <div class="col-md-6">
                    <div class="row"> 
                        <h1 class="pull-right" id="principal">
                            JANE DOETTE
                        </h1>
                    </div>
                    <div class="row">   
                        <h4 class="pull-right" >
                            FRONT-END NINJA
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <hr>
            </div>
            <div class="row fondo">
                <!--<img src="http://placehold.it/1140x400">-->
                <?php include 'slides.php'; ?>
            </div>
            <div class="row fondo">
                <h2 class="titulo">
                    Featured Work
                </h2>
            </div>
            <div class="row fondo">
                <div class="col-md-6">
                    <p class="text-center titulo">
                        <img class="text-center" src="http://placehold.it/400x200"></p>
                    <h4 class="text-center titulo titulo-pie">

                        APPIFY
                    </h4>
                    <p class="text-center">
                        <a  class="text-center" href="https://github.com/udacity/Appify/">https://github.com/udacity/Appify/</a></p>
                </div>
                <div class="col-md-6">
                    <p class="text-center">
                        <img class="text-center" src="http://placehold.it/400x200"></p>
                    <h4 class="text-center titulo titulo-pie">

                        SUNFLOWER
                    </h4>
                    <p class="text-center">
                        <a  class="text-center" href="https://github.com/udacity/Appify/">https://github.com/udacity/Appify/</a></p>
                </div>
                <div class="col-md-6">
                    <p class="text-center">
                        <button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#referencia">
                            <img class="text-center" src="http://placehold.it/400x200">
                        </button>
                    </p>
                    <h4 class="text-center titulo titulo-pie">

                        BOKEH
                    </h4>
                    <p class="text-center">
                        <a  class="text-center" href="https://github.com/udacity/Appify/">https://github.com/udacity/Appify/</a></p>
                </div>
                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title 2</h4>
                                </div>
                                <div class="modal-body">
                                    <h1> Titulo del articulo </h1>
                                    <img class="text-center" src="http://placehold.it/400x200">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 2-->
                    <div class="modal fade" id="referencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <h1> Referencia  </h1>
                                    <img class="text-center" src="http://placehold.it/400x200">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="fa fa-camera-retro fa-lg"></i> fa-lg
                <i class="fa fa-camera-retro fa-2x"></i> fa-2x
                <i class="fa fa-camera-retro fa-3x"></i> fa-3x
                <i class="fa fa-camera-retro fa-4x"></i> fa-4x
                <i class="fa fa-camera-retro fa-5x"></i> fa-5x
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>
    </body>
</html>
