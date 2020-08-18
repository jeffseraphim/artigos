<!doctype html>
<html lang="pt-br">
	<head>
		<title>Notícias</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css"href="estilo.css" />

	</head>

	<body>

      <!-- HEADER -->
      <?php 
            require_once('header.php');
            exibeHeader();
      ?>

        <main>
            <form method="POST" action="CadastraNoticia.php">
                <div>
                    <label for="titulo"> Título:
                    <input type="text" name="titulo" required/>
                    
                </div>
                <div>
                    
                    <label for="texto"> Texto: 
                    <textarea  name="texto" required>
                    </textarea>
                </div>
                <div>
                    <label for="categoria"> Categoria:
                    <input type="text" name="categoria" required/>
                    
                </div>
                <button>Cadastrar</button>


        </main> 

		<footer>
			<p>&copy; 2020 - Jeff Seraphim</p>
		</footer>


	</body>

</html>