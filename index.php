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

        <?php

    require_once('db.class.php');

    $sql = "SELECT * FROM artigo ";

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){

        $artigos = array();

        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

            $artigos[] = $linha;

        }

        foreach($artigos as $artigo){
            echo "<article>
                <h4>" . $artigo['titulo_artigo'] ."</h4>";

            echo  "<p>". $artigo['texto_artigo']. "</p>";

            echo "<button>Leia mais</button>
            </article>";
            
        }

    }else{
        
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site";

    }

?>
<!--             <article>
                <h4>Título</h4>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>

                <button>Leia mais</button>
            </article>


            <article>
                <h4>Texto 2</h4>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>

                <button>Leia mais</button>
            </article>


            <article>
                <h4>Título 3</h4>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>

                <button>Leia mais</button>
            </article>

            <article>
                <h4>Título 4</h4>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>

                <button>Leia mais</button>
            </article>
-->
        </main> 

		<footer>
			<p>&copy; 2020 - Jeff Seraphim</p>
		</footer>


	</body>

</html>