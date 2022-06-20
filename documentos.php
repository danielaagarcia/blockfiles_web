<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>| BlockFiles |</title>
    <link rel="shortcut icon" href="https://github.com/danielaagarcia/blockfiles_web/raw/master/dist/images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./dist/css/vendor.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./dist/css/main.css" />
</head>
<body>
    <a href="#main-content" class="visually-hidden focusable skip-link">Pasar al contenido principal</a>
    <nav id="navbar" role="banner" class="navbar navbar-default navbar-fixed-top navbar-content">
        <div class="container">
            <div class="navbar-header">
                <div class="region region-navigation">
                    <a class="logo navbar-btn pull-left" href="https://danielaagarcia.github.io/blockfiles_web/boilertemplate.html" rel="home">
                        <img id="logo" src="./dist/images/logo.png" alt="Blockchain Federal Argentina">
                    </a>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <nav role="navigation" aria-labelledby="bfa-mainmenu">
                    <h2 class="sr-only" id="bfa-mainmenu">Navegación Principal</h2>
                    <ul class="menu nav navbar-nav navbar-right">
                        <li>
                            <a href="/" class="is-active">Inicio</a>
                        </li>
                        <li class="expanded dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Blockchain <span class="caret"></span></a>
                            <ul class="menu navbar-right dropdown-menu">
                                <li>
                                    <a href="#">Subitem menu</a>
                                </li>
                                <li>
                                    <a href="#">Subitem menu</a>
                                </li>
                                <li>
                                    <a href="#">Subitem menu</a>
                                </li>
                            </ul>
                        </li>
                        <li class="expanded dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Acerca <span class="caret"></span></a>
                            <ul class="menu navbar-right dropdown-menu">
                                <li>
                                    <a href="./acerca-equipo.html">Equipo</a>
                                </li>
                                <li>
                                    <a href="#">Nosotros</a>
                                </li>
                                <li>
                                    <a href="#">??</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>            
        </div>
    </nav>
        <h1>lalalalal</h1>
    <div class="diagonal-header"></div>
    <main class="container" id="main-content">
    <!-- INICIO BODY -->
    <?php
$link2 = new PDO('mysql:host=localhost;dbname=usuarios_login', 'root', '');
?>

<tr><th colspan="6"><h1>Listado de documentos</h1></th></tr>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>Legajo</th>
			<th>Propietario</th>
			<th>Documento</th>
			<th>Hash</th>
			<th>Fecha subida</th>
			
		</tr>
		</thead>
<?php foreach ($link2->query('SELECT * from documentos') as $row) { ?> 
<tr>
	<td><?php echo $row['id_documento'] ?></td>
    <td><?php echo $row['legajo_propietario'] ?></td>
    <td><?php echo $row['usuario_propietario'] ?></td>
	<td><?php echo $row['nombre_documento'] ?></td>
	<td><?php echo $row['hash_documento'] ?></td>
	<td><?php echo $row['fecha_subido'] ?></td>
 </tr>
<?php
	}
?>    
</table>
    <div class="container">
       
			
        
    </div>    
    
		

    <!-- FIN BODY -->    
    </main>
    <!-- FOOTER A DISCRECIÓN DEL DESARROLLO -->
    <footer role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="region region-footer">
                        <section>
                            <h2>Redes Sociales</h2>
                            <div
                                class="field field--name-body field--type-text-with-summary field--label-hidden field--item">
                                <ul>
                                    <li><a href="" target="_blank"><i
                                                class="fab fa-twitter fa-2x" aria-hidden="true"></i><span
                                                class="sr-only">Twitter</span></a></li>
                                    <li><a href="" target="_blank"><i
                                                class="fab fa-instagram fa-2x" aria-hidden="true"></i><span
                                                class="sr-only">Instagram</span></a></li>
                                    <li><a href="" target="_blank"><i
                                                class="fab fa-linkedin-in fa-2x" aria-hidden="true"></i><span
                                                class="sr-only">Linkedin</span></a></li>
                                </ul>
                                <p class="font_small">BlockFiles</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/main.js"></script>
</body>
</html>
