<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <?php 
      
        include_once('perguntas.php');
       
        echo "<aside>";
        foreach($perguntas as $key => $cada_valor){
            echo "<a href='#r".$key."'>".$cada_valor."</a><br>";
        }
        echo "</aside>";

    ?>
        <article>
            <h3></h3>

            <form action="pesquisa.php" method="post">
                <button type="submit"><img src="pesquisa-de-lupa.png"></button>
                <input name="s">
                <button type="submit" class="main-btn">Buscar</button>
            </form>

            <?php

            foreach($perguntas as $key => $cada_valor){
                include_once('respostas/r'.$key.'.php');
            }
            
            ?>
        </article>
    </main>
</body>
</html>