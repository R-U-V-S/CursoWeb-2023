<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monkespirre</title>
</head>

<body>

    <Form action="Escritura.php" method="post">
        <fieldset>
            <legend><h1>Escritura de monos</h1></legend>

            <label for="frase"> Texto: </label>
           
               <textarea name="frase" id="frase" cols="50" rows="1" maxlength="200" placeholder="Escribe una frase"></textarea>

            <br> <br>
            Tipo de frase:
                       
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
            <br><br>
            
            <br>

    <center><img src="https://www.elsiglodetorreon.com.mx/m/i/2016/09/863054.jpeg" width="300"></center>
  
            <button type="submit">Enviar</button>
            
        </fieldset> 
    </Form>
<?php   
$texto1 = (isset($_POST['frase']) && $_POST["frase"] != "")? $_POST['frase'] : "";



/*     
    
    

 //-----------guia y esqueleto monkespeare  --------------------------------------- 
  

        // guradar $textointroducido
        // $arreglo1= la localidad cero guarda " "
        //si tipo 1 $arreglo1= texto grande en localidad 1
        //si no separar  $textointroducido por palabras (con la funcion explode quiatndo espacios) y guandar en $arreglo1 cada palabra en una localidad de numero entero consecutivo (la localidad 0 se mantiene igual)
      // Generar letras y caracteres aleatorios
 //$lda = cantidad de elemtos de $arreglo1 

 // $ndem= |(300/$lda) *1.25| numero entero

$cdpi=0;//cantidad de palabras intermedias
 $pdal=0;//palabras de arreglo leidas
 while {$pdal<=$lda}
 {
    if ($cdp<=0)
    {
        print($arreglo1[$pdal]);//en negritas
        $pdal++;
        $cdpi=rand(0,$ndem);
    }
    

    if ($lep>=0)
    {
        print(//letra aleatoria);
        $lep=rand(0,20);
    }
    if ($lep<0)
    {
        print(" ");
        $lep=rand(0,20);
        $cdpi--;
    }
}
        //Resultado 300 palabras de 1 a 20 caracteres aleatorios 
 //-----------fin de guia y esqueleto monkespeare  --------------------------------------- 


        function LetAl($longitud) {
          $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890$%&';
          $resultado = '';
          $len_cadena = strlen($letras) - 1;
          
          for ($i = 0; $i < $longitud; $i++) {
            $num_aleat = mt_rand(0, $len_cadena);
            $resultado .= $letras[$num_aleat];
          }
          return $resultado;
        }
        
        // Ejemplo de uso
        $longitudDeseada = 400;
        $texto_aleatorio = LetAl($longitudDeseada);
        echo "Texto aleatorio: " . "<p>". $texto_aleatorio. "</p>". "<br><br>";
        var_dump($letras);
        
*/
        
    ?>
   
   
</body>
</html>