<?php
    require 'db_conn.php';
    $id=$_POST["txtid"];
    $Area=$_POST["txtArea"];
    $Tema=$_POST["txtTema"];
    $Descripcion=$_POST["txtDes"];
    $Funcionario=$_POST["txtFun"];
    $Personal=$_POST["txtPer"];
    $Compromiso=$_POST["txtCom"]; 
    $MarcaCron=$_POST["txtMarca"];
    $Respon=$_POST["txtRes"];

    $actualizar = "UPDATE acta SET AreasEncargada = '$Area', Tema = '$Tema', Descripcion = '$Descripcion', FUncionario = '$Funcionario', Personal = '$Personal', Compromisos = '$Compromiso', MarcaCronologica = '$MarcaCron', Responsabilidades = '$Respon' WHERE id = '$id'";


    $squery = mysqli_query($conn, $actualizar);

    if($squery){
        Header("Location: home.php");
    }
?>