<?php

function exibeHeader() { 
    echo "<header>
                <nav>
                    <h2>Logo</h2>
                    <ul>                    
                        <li><a href='cadastro.php'>Cadastrar notícias</a></li>
                        <li><a href='index.php'>Exibir notícias</a></li>
                        <li><form action='busca.php' method='POST'>
                            <input type='text' name='busca' class='search'>
                            <button>go</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>";
}
?>