
<?php

    //datos de nuestro mysql
  $servername = "localhost:3307";
  $username = "root";
  $password ="";
  $db ="proyecto_arduino";

  //crear conexion

  $conn = mysqli_connect($servername,$username,$password,$db);

  //comprobar conexion !siginifica lo contrario
  if (!$conn)
    {
    die("Conexion fallida: " . mysqli_connect_error());
    }


  $query="SELECT temperatura, fechayhora FROM informacion";
  $result=mysqli_query($conn,$query); //para llamar a lo que queremos que coja de la base de datos

  //declaramos los dos valores X y Y
  $valory=array(); //temperatura
  $valorx=array(); //fechayhora

  while($ver=mysqli_fetch_row($result)) 
      {
          $valory[]=$ver[0]; //ponemos 0 porque temeratura es el primer campo
          $valorx[]=$ver[1]; //ponemos 1 porque fechayhora es el segundo campo
      }
  //pasamos los dos valores a una cadena json
  $datosx=json_encode($valorx);
  $datosy=json_encode($valory);

?>

<div id="cargalineal"></div>

<script type="text/javascript">

    function crearcadenalineal(json)
      { //nos pide un json (la que hemos creado arriba)

      var parsed = JSON.parse(json); //combertimos una cadena json a un objeto json valido
      var arr = []; //inicializamos un arreglo de javascript

      for(var x in parsed){ //en este for creamos el objeto "x" para que nos mueva todos los json
        arr.push(parsed[x]); //metemos dentro del arreglo todos los datos de json 
      }
      return arr;
    }
</script>

<script type="text/javascript">

  //llamamos a las variables X y Y con la funcion creada en php
  datosx=crearcadenalineal('<?php echo $datosx ?>');
  datosy=crearcadenalineal('<?php echo $datosy ?>');

  //creamos una variable para especificar los valores que tiene que se aplicaran en la grafica
  var trace1 = {
    x: datosx,
    y: datosy,
    type: 'scatter'
  };

  var data = [trace1];

  Plotly.newPlot('cargalineal', data);

</script>



