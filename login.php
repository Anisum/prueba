<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	*{
		box-sizing:border-box;
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
	
	
	<form id="contacto" action="#" method="POST">
	<div>
		<label>Introduce un nombre de usuario</label>
		<input type="text" name="nameUsuario" placeholder="Escribe o teu nome" maxlength="50"/>
	</div>
	
	<div>
		<label>Contraseña
		</label>
		<input type="password" name="contraseñaUsuario"  maxlength="50"/>
	</div>
	
	<div>
		<button type="submit" value="Submit">Enviar</button>
	</div>
	
	</form>
</body>
</html>