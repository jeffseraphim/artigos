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

    $busca = $_POST['busca'];

    $sql = "SELECT * FROM artigo WHERE (titulo_artigo LIKE '%$busca%') OR (texto_artigo LIKE '%$busca%') OR (categorias LIKE '%$busca%') ";
    
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){

        $artigos = array();

        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

            $artigos[] = $linha;

        }

        if ($artigos){

            foreach($artigos as $artigo){
                echo "<article>
                    <h4>" . $artigo['titulo_artigo'] ."</h4>";
    
                echo  "<p>". $artigo['texto_artigo']. "</p>";
    
                echo "<button type='submit' >Leia mais</button>
                </article>";
                
            }
        }else{
            echo "Nenhum artigo encontrado com os termos especificados<br />";
        
        }


    }else{
        
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site";

    }

?>
</main> 

		<footer>
			<p>&copy; 2020 - Jeff Seraphim</p>
		</footer>


	</body>

</html>