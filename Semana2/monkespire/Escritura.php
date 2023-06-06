<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monkespirre</title>
    <link rel="icon" href="https://topmusic.mx/wp-content/uploads/2018/07/upscale-235527132031212.png" type="image/x-png">
</head>

<body>
<Form action="Escritura.php" method="post">
        <fieldset>
            <legend><h1>Escritura de monos</h1></legend>
            <label for="frase"> Texto: </label>        
               <textarea name="frase" id="frase" cols="50" rows="1" maxlength="200" placeholder="Escribe una frase"></textarea>
            <br> <br>
            Tipo de frase                    
            <select name="tipo" id="tipo">
                <option value=1>Palabras juntas y ordenadas</option>
                <option value=2>Palabras sueltas pero ordenadas</option>
                <option value=3>Palabras sueltas y en desorden</option>
            </select>
            <br><br>
            Zona horaria: 
            <select name="hora" id="hora">
                <option>Normal</option>
                <option>Palabras</option>
                <option>Palabras desordenadas </option>
            </select>
            <br><br><br>
    <center><img src="https://www.elsiglodetorreon.com.mx/m/i/2016/09/863054.jpeg" width="300"></center> 
            <button type="submit">Enviar</button>
            
        </fieldset> 
    </Form>
<?php   
$texto1 = (isset($_POST['frase']) && $_POST["frase"] != "")? $_POST['frase'] : "";// guradar $textointroducido ---------------------------
if ($texto1!=""){
$palabras = array("");
$palabras = (isset($_POST['tipo']) && $_POST["tipo"] != "1")? array_merge($palabras, explode(" ",$texto1),$palabras ): array("", $texto1,"") ;// separa la frase en las partes nesezarias segun el tipo
if ($_POST["tipo"] == "3")
    shuffle($palabras);
        // $arreglo1= la localidad cero guarda " "---------------------------
        //si tipo 1 $arreglo1= texto grande en localidad 1
        //si no separar  $textointroducido por palabras (con la funcion explode quiatndo espacios) y guandar en $arreglo1 cada palabra en una localidad de numero entero consecutivo (la localidad 0 se mantiene igual)
$lda = 0 ;
foreach($palabras as $valor){
$lda ++;
}
$lep=0; //letras en palabra
$cdpi=0;//cantidad de palabras intermedias
$letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890$%&';
 $lep =0;
 $cdpi=0;//cantidad de palabras intermedias
 $pdal=0;//palabras de arreglo leidas

 while ($pdal!=$lda)
 {
    if ($cdpi==0 )
    {
        echo "<u>","<i>","<strong>" , $palabras[$pdal],"</i>","</u>" , "</strong>"," ";//en negritas
     
        $pdal++;
        $cdpi=rand( round((350-$lda)/$lda*0.6),round((350-$lda)/$lda*1.4));
    }
    if ($lep>0)
    {
        print($letras[rand(0, strlen($letras) - 1)]);
        $lep--;
        
    }
    if ($lep<=0)
    {
        print("  ");
        $lep=rand(0,20);
        $cdpi--;
    }
}
} 
 ?>      
</body>
</html>