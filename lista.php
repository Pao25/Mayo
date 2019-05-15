<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "products";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, "1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from product";
    
    if($conn){
        $result = $conn->query($sql);
        

    }else{
            echo "nothig";

    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;

 ?>


 <div id="new">
    <h1> Listado de Productos</h1>
    <br>
    <br>
	<table class="egt">
	<tr>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Estado</th>
	</tr>
  	<?php foreach ($result as $value) { ?>
  <tr>
  	<td>	
    	<?php echo $value["product_name"];  ?>
  	</td>
  	<td>
    	<?php echo $value["price"];  ?>
  	</td>
  	<td>
    	<?php echo $value["is_active"];  ?>
  	</td>
  	<td>
  		<button>Editar</button>
  		<button>ELiminar</button>
  	</td>
  </tr>
    <?php    }  ?>
</table>
<button class="c" style='text-align: center' onclick=" location.href = 'index.html'">Inicio</button>
</div>



</body>
</html>
