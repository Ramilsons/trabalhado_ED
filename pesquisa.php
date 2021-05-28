<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="pesquisa">
    <header>
        <nav>
            <a href="index.php">Voltar para a home</a>
        </nav>
    </header>
    <main>
        <div class="header">
            <form action="pesquisa.php" method="post">
                <button type="submit"><img src="pesquisa-de-lupa.png"></button>
                <input name="s" value="<?php echo $_POST['s'] ?>">
                <button type="submit" class="main-btn">Buscar</button>
            </form>
        </div>

<?php

$termo = $_POST['s'];
$qnt_resultado = 0;
$possuem_o_termo = array();

include_once('perguntas.php');

foreach($perguntas as $key => $cada_valor){
    $pos = strpos($cada_valor, $termo);
    if($pos != false){
        array_push($possuem_o_termo, $key);
        $qnt_resultado++;
    }
}

if($qnt_resultado == 0){
    echo "<h5>Não foram encotrados resultados<h5>";
}else{
    echo "<h5>Resultados econtrados: ".$qnt_resultado."</h5>"; 
}

for($i = 0; $i < $qnt_resultado; $i++){ ?>
    <section class="cada_resposta">
    <?php include_once('respostas/r'.$possuem_o_termo[$i].'.php'); ?>
    </section>
<?php } ?>

</main>
</body>
</html>