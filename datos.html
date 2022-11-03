<?php
 ob_start();
?>
<?php
$nempresa=$_REQUEST['enombre'];
$nit=$_REQUEST['nit'];
$edirr=$_REQUEST['edireccion'];
$etel=$_REQUEST['etel'];
$cnombre=$_REQUEST['cnombre'];
$id=$_REQUEST['identificacion'];
$cdireccion=$_REQUEST['cdireccion'];
$ctel=$_REQUEST['ctel'];
$cantidad=$_REQUEST['cant'];
$idproductos=$_REQUEST['id'];
$descripciones=$_REQUEST['descrip'];
$valores=$_REQUEST['valor'];
$tam=count($idproductos);
?>
<!DOCTYPE html>
<html>
<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Datos_Ingresados</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse:collapse;
        }
        th{
            text-align: center;
        }
        table{
             width:50%;
        }
        h3{
            color:orange;
            background-color: black;
            text-align: center;
        }
        body{
            background-color: aquamarine;
        }
        td,th{
            background-color: aliceblue;
        }

    </style>

</head>
<body >

    <h2 style="color:aliceblue; text-align:center; background-color:orange;">DATOS INGRESADOS</h2>
    <br>
    <h3>Datos del Cliente</h3>
             
        <label for="nom">Nombre:</label>
            <?php
                echo "<input type='text' name='cnombre' value='$cnombre' readonly>";
            ?>
                        
            <label for="id">Identifiación:</label>
            <?php
                echo "<input type='text' name='identificacion' value='$id' readonly>";
            ?>
                <label for="dir">Dirección:</label>
                <?php
                echo "<input type='text' name='cdireccion' value='$cdireccion' readonly>";
                ?>
                <label for="dir">Télefono:</label>
                 <?php
                    echo "<input type='text' name='ctel' value='$ctel' readonly>";
                ?>
                    
                    <hr>
                    <h3 class="bg-dark text-warning text" style="text-align:center;">Datos de la Empresa</h3> 
                    <br>

                            <label for="nombre">Nombre:</label>
                            <?php
                             echo "<input type='text' name='enombre' value='$nempresa' readonly>";
                            ?>
                        
                            <label for="nit">NIT:</label>
                            <?php
                             echo "<input type='text' value='$nit' readonly>";
                            ?>
                        <div class="col-md-6">
                            <label for="edir">Dirección:</label>
                            <?php
                             echo "<input type='text' value='$edirr' readonly>";
                            ?>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono">Télefono:</label>
                            <?php
                             echo "<input type='text' value='$etel' readonly>";
                            ?>
                        </div>
                        <br>
                    <div>
                    <hr>
                    <h3 class="bg-dark text-warning text" style="text-align:center;">Datos de la Compra</h3>
                    </div>   
                    <div>
                        <br>
                    <table >
                        <tr>
                        <th colspan="5" style="background-color:lightsalmon" >DETALLES DE LA COMPRA</th>
                    </tr>
                     <tr>
                        <th>CANTIDAD</th>
                        <th>ID</th>
                        <th>DESCRIPCION</th>
                        <th>VALOR UNITARIO $</th>
                        <th>VALOR TOTAL $</th>
                    </tr>
                    
                        <?php
                        $total=0;
                        $precioT=0;
                        for($i=0;$i<$tam;$i++){
                            $precioT=$cantidad[$i]*$valores[$i];
                            echo "
                            <tr>
                            <td><input type= 'text' style= 'border:0; outline:none; ' value= '$cantidad[$i] ' readonly></td>
                            <td><input type= 'text' style= 'border:0; outline:none; ' value= '$idproductos[$i] ' readonly></td>
                            <td><input type= 'text'  style= 'border:0; outline:none; ' value= '$descripciones[$i] ' readonly></td>
                            <td><input type= 'text' style= 'border:0; outline:none; 'value= '$valores[$i] ' readonly></td>
                            <td><input type= 'text' style= 'border:0; outline:none; 'value= '$precioT' readonly></td>
                            </tr>";
                            $total=$total+($cantidad[$i]*$valores[$i]);
                        }  
                        ?>
                    <tr>
                        <th colspan="4">VALOR TOTAL DE LA COMPRA</th>
                        <?php
                        echo "<th>$total</th>"
                        ?>
                    </tr>
                    
                    </table>
                    <br>
                    <br>
                    <hr>
                    <br>

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

<?php
$html=ob_get_clean();
//echo $html; //para ver si se guardo
//incluimos el DomPDF
require_once './administrador/libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
//Esta opcion permite mostrar imagenes
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

//echo $html;
//Lo que se coloque entre
//loadHtmls será lo que aparecerá en el PDF
$dompdf->loadHtml($html);

//$dompdf->setPaper('letter');
//Para papel horizontal
$dompdf->setPaper('A4','landscape');

//Poner todo visible
$dompdf->render();
//archivo.pdf puede ser cualquier nombre
//si se coloca false se genera pero no se 
//descarga
//Si es true lo descarga y no lo muetra
$dompdf->stream("Factura.pdf",array("Attachment"=>false));

?>


