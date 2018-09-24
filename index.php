<?php
$conexion = new mysqli("localhost", "root", "", "nba");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
$consulta = "SELECT * FROM equipos";
$resultado = $conexion->query($consulta);
$equipos = [];
while($fila = $resultado->fetch_assoc()){
	array_push($equipos, $fila);
}
?>
<?php

if(isset($_POST)&& count($_POST)>0){
#if(isset($_POST['nomeUsuario']) si ya sabemos los nombres 
$conexion = new mysqli("localhost", "root","","nba");
if($conexion->error){
	echo "<div>Houbo un error na conexion que se resume en " .$conexion->error."</div>";
	
	die();
	
}
	
$nome=$_POST['nomeUsuario'];
$correo = $POST['correoUsuario'];
$nacimento=$_POST['dataUsuario'];
$consulta= "INSERT INTO suscricion(`nomeUsuario`, `correoUsuario`) VALUES(\"$nome\", \"$correo\")"; #LOS PRIMEROS NO SE LE PONE COMILLA DOBLE XQ LOS HARIAMOS TEXTO(NOMBRES DE COLUMNA, LOS SEGUNDOS SÍ XQ SON VALORES

$resultado = $conexion->query($consulta);
var_dump($conexion->error);
if($conexion->error){
	echo $conexion->error;
}
unset($_POST);
	
}


?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">

	@font-face{
		font-family: tipotitulo;
		src: url(shore.otf);
	}

	
	*{
		box-sizing:border-box;
	}
	
	h1{
	font-family: tipotitulo;	
	}
	
	header{
		width:100%;
	}
	header > div {
		float:left;
	}
	header > div > img{
		width:20%;
	}
	header > div > h1{
		width:80%;
	}
	div.clearfix{
		clear: both;
	}
	ul{
		list-style:none;
		text-align:center;
	}
	ul > a > li{
		float:left;
		width:calc(100%/3);
	}
	article.equipo{
		float:left;
		width:calc(100%/3);
		padding:15px;
	}
	article.equipo > div{
		border-radius:15px;
		border:1px solid gray;
		width:80%;
		margin:0 auto;
		text-align:center;
		padding:15px;
	}
</style>
</head>
<body>
	<header>
		<div>
			<img src="imaxes/nba.png" />
		</div>
		<div>
			<h1>NBA</h1>
		</div>
	</header>
	<div class="clearfix"></div>
	<nav>
		<ul>
			<a href="#"><li>Menú 1</li></a>
			<a href="#"><li>Menú 2</li></a>
			<a href="#"><li>Menú 3</li></a>
		</ul>
	</nav>
	<div>
	</div>
	<section>
		<?php
			for($inicio=0; $inicio<count($equipos); $inicio++){
				$equipo = $equipos[$inicio];
				if($inicio%3 == 0){
					echo "<div>";
				}
				echo '<a href="equipo.php?equipo='.$equipo['Nombre'].'">';  
				
				#?equipo=$equipo['Nombre'] creando un propio GET para que esto lo mande a la url. cuando la pag php se abre ya les llega con el dato del nombre del equipo
				
				echo "<article class='equipo'>";
				echo "<div>";
				echo "<img src='imaxes/nba.png' width=90 height=90 />";
				echo "<p>".$equipo['Ciudad']." ".$equipo['Nombre']."<p>";
				echo "<p>".$equipo['Division']."<p>";
				echo "<p>".$equipo['Conferencia']."<p>";
				echo "</div>";
				echo "</article>";
			echo "</a>";
			
				if($inicio%3 == 2){
					echo "</div>";
				}
				
			}
		
		?>
	
	</section>
	
	<form id="contacto" action="#" method="POST">
	<div>
		<label>Nome de suscritor</label>
		<input type="text" name="nomeUsuario" placeholder="Escribe o teu nome" maxlength="50"/>
	</div>
	
	<div>
		<label>Correo electronico
		</label>
		<input type="mail" name="correoUsuario"  maxlength="50"/>
	</div>
	
	<input type="date" name="dataUsuario" min="2018-01-01" max="<?php echo date("Y-m-d");?>"placeholder="Introduzca su fecha de nacimiento"/>
	
	<input type="checkbox" value="" required="required"/>
	<label>Acepto los terminos</label>
	
	</form>
</body>
</html>