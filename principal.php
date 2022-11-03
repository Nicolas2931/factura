
<!DOCTYPE html>
<html>
<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>
    <title>MERCADO</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse:collapse;
        }
        th{
            text-align: center;
        }
    </style>

</head>
<body  style="background-color:aquamarine;" onload="limpiar();">

    <div class="container">
        <div class="card">
            <div class="card-header bg-warning">
                <h2 class="text-white text-center">FACTURA DE UN MERCADO</h2>
            </div>
            <div class="card-body">
                <form name="form" action="datos.php" method="post">
                    <br>
                    <h3 class="bg-dark text-warning text" style="text-align:center;">Digite los datos del Cliente</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nom">Nombre:</label>
                            <input type="text" name="cnombre" class="form-control" placeholder="DIGITE EL NOMBRE DEL CLIENTE">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="id">Identifiación:</label>
                            <input type="text" name="identificacion" class="form-control" placeholder="DIGITE EL ID DEL CLIENTE">
                        </div>
                        <div class="col-md-6">
                            <label for="dir">Dirección:</label>
                            <input type="text" name="cdireccion" class="form-control" placeholder="DIGITE LA DIRECCIÓN DEL CLIENTE">
                        </div>
                        <div class="col-md-6">
                            <label for="tel">Télefono:</label>
                            <input type="text" name="ctel" class="form-control" placeholder="DIGITE EL TÉLEFONO DEL CLIENTE">
                        </div>
                    
                    <div>
                    <hr>
                    <h3 class="bg-dark text-warning text" style="text-align:center;">Digite los datos de la Empresa</h3>
                    </div>   
                    <br>

                        <div class="col-md-6">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="enombre" class="form-control" placeholder="DIGITE EL NOMBRE DE LA EMPRESA">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="nit">NIT:</label>
                            <input type="number" name="nit" class="form-control" placeholder="DIGITE EL NIT DE LA EMPRESA">
                        </div>
                        <div class="col-md-6">
                            <label for="edir">Dirección:</label>
                            <input type="text" name="edireccion" class="form-control" placeholder="DIGITE LA DIRECCIÓN DE LA EMPRESA">
                        </div>
                        <div class="col-md-6">
                            <label for="telefono">Télefono:</label>
                            <input type="number" name="etel" class="form-control" placeholder="DIGITE EL TÉLEFONO DE LA EMPRESA">
                        </div>
                        <br>
                    <div>
                    <hr>
                    <h3 class="bg-dark text-warning text" style="text-align:center;">Digite los datos de la Compra</h3>
                    </div>   
                    <div>
                        <br>
                    <table id="tblproductos" align="center">
                        <tr>
                        <th colspan="4" style="background-color:lightsalmon" >PRODUCTOS A COMPRAR</th>
                    </tr>
                     <tr>
                        <th>CANTIDAD</th>
                        <th>ID</th>
                        <th>DESCRIPCION</th>
                        <th>VALOR UNITARIO</th>
                    </tr>
                    <tr>
                        <td><input type="number" style="border:0; outline:none;" name="cant[]" require></td>
                        <td><input type="number" style="border:0; outline:none;" name="id[]"></td>
                        <td><input type="text"  style="border:0; outline:none;" name="descrip[]"></td>
                        <td><input type="number" style="border:0; outline:none;"name="valor[]"></td>
                    </tr>
                    </table>
                    <br>
                    <div align="center">
                    <input type="button" onclick="insertarproducto()" value="Insertar producto">
                    </div>
                    <script>
                        function insertarproducto(){
                            let tblDatos = document.getElementById("tblproductos").insertRow();
                            let col1 = tblDatos.insertCell(0);
                            let col2 = tblDatos.insertCell(1);
                            let col3 = tblDatos.insertCell(2);
                            let col4 = tblDatos.insertCell(3);

                            col1.innerHTML = '<input type="number" style="border:0; outline:none;" name="cant[]">';
                            col2.innerHTML = '<input type="number" style="border:0; outline:none;" name="id[]">';
                            col3.innerHTML = '<input type="text" style="border:0; outline:none;" name="descrip[]">';
                            col4.innerHTML = '<input type="number" style="border:0; outline:none;" name="valor[]">';
                        }
                    </script>   
                    <br>
                    <hr>
                    <br>
                    </div>
        
                    

                    <input type="button" class="btn btn-primary" value="REGISTRAR COMPRA" onclick="validar()">
                    </div>
                </form>
            </div>
        </div>
    </div>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
     <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./sw/dist/sweetalert2.min.js"></script>
    <script src="./js/jquery-3.6.1.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>