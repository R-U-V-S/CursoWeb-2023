<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <meta charset="uft-8">
        <meta http-equiv="X-UA-Compatible" >
        <meta name="viewport" content=" width=device-width, initial-scale=1.0">
        <title> StoreChida_RUVS </title>
        <link rel="icon" href="./ruvs-bw-logo.ico" type="image/x-ico">
    </head>

    <body>

    <h3 style = "color: #ffc36a; text-align:center;  ">    <br>    Ropa disponible </h3>  
    <table border="19" align="center"    style="border-collapse: collapse;" cellpadding=25% style="color: #ffc36a;" >
    <thead>
      <tr>

        <th><h5 style = "color:  blanchedalmond;"> Nombre</h5></th>
        <th><h5 style = "color:  blanchedalmond;"> Foto</h5></th>
        <th><h5 style = "color:  blanchedalmond;"> Costo</h5></th>
      </tr>  
    </thead>
    <tbody>

        <tr>
            <td style = "color: #ffc36a; text-align:center;  ">  Enchiladas verdes con pollo </td>
            <td style = "text-align:center;  ">  <embed type="Image/jpeg" src="https://assets.unileversolutions.com/recipes-v2/239739.jpg" width="290" > </td>
            <td style = "color: #ffc36a; text-align:center;  "> Me gusta su habilidad de deducción Pues casi aprece un super poder al que se puede llegar a aspirar y me gusta su dualidad entre su gran conocimiento sobre el mundo y su desconecion del mismo</td>
        </tr>
        <tr>
            <td style = "color: #ffc36a; text-align:center;  "> L y Kira </td>
            <td style = "text-align:center;  ">  <embed type="Image/jpg" src="https://i.blogs.es/2edc5e/enchiladas-rojas-rellenas-de-queso-fresco-1-/450_1000.jpg" width="290" > </td>
            <td style = "color: #ffc36a; text-align:center;  ">  Lo mismo que Sherlock xd</td>
        </tr>
        <tr>
            <td style = "color: #ffc36a; text-align:center;  "> Steve  </td>
            <td style = "text-align:center;  ">  <embed type="Image/jpeg" src="https://wallpapercave.com/wp/wp2477627.jpg" width="90" ></td>
            <td style = "color: #ffc36a; text-align:center;  "> Yo ese.<br> Es como barbie Puede ser lo que quiera ser </td>
        </tr>
        <tr>
            <td style = "color: #ffc36a; text-align:center;  "> Paco  </td>
            <td style = "text-align:center;  ">   <embed type="Image/jpeg" src="https://i.pinimg.com/originals/74/67/19/746719f47a7d9e376bd2e1919153d495.jpg" width="90" ></td>
            <td style = "color: #ffc36a; text-align:center;  "> paco  </td>
        </tr>

    </tbody>

</table>





        <?php
        $nombre = "Ulises";
        $edad = 18;
        $estatura = 1.71;

        echo "El nombre es";
        echo $nombre;
        echo "La edad es";
        echo $edad;
        echo "La estatura es";
        echo $estatura;
        ?>


        <form>
            <fieldset>

                <legend>Formulario de compra </legend>
                <label> Nombre:
                    <input type="text"/>
                </label> <br><br>

                <label for ="apellido"> Apellido: 
                    <input id="apellido" type="color"/>
                </label> <br><br>

                <label for ="edad"> Edad: </label>
                <select id="edad"> Edad
                    <option value="16"> 16</option>
                    <option value="17"> 17</option>
                    <option value="18"> 18</option>
                </select> <br><br>
                <color></color>
                <button> Listo</button>
                
            </fieldset>
        </form>

    </body>

</html>
