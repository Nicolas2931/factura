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

echo "        <div>
<table>
    <tr>
        <th colspan='4'>DATOS EMPRESA</th>
    </tr>
    <tr>
        <th>NOMBRE</th>
        <th>NIT</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
    </tr>
    <tr>
        <td><input type='text' value='$nempresa' readonly></td>
        <td><input type='number' value='$nit' readonly></td>
        <td><input type='text' value='$edirr'readonly></td>
        <td><input type='number' value='$etel'readonly></td>
    </tr>

</table>
</div>
<div>";
?>

<?php

?>