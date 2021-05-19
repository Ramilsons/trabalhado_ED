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
      

        $perguntas = ["O que é <strong>arquivo?</strong> Dê exemplos.", 
                    "O que podemos gerar (arquivos), usando PHP? Dê exemplos.", 
                    "Para que servem Arrays? Dê exemplos.", 
                    "O que é Estrutura de dados? Dê exemplos.", 
                    "De que forma utilizamos estrutura de dados? Dê exemplos.", 
                    "O que é Orientação a Objeto? Dê exemplos.", 
                    "O que é classe? Dê exemplos.", 
                    "O que é método? Dê exemplos.", 
                    "O que são pilhas em PHP? Dê exemplos.", 
                    "Em que situação eu poderia utilizar as estruturas de controle e as estruturas de repetição?"];

        echo "<aside>";
        foreach($perguntas as $key => $cada_valor){
            echo "<a href='#r".$key."'>".$cada_valor."</a><br>";
        }
        echo "</aside>";
    ?>
        <article>
            <h3>Feito por: Luana Oliveira, Ramilson Felix da Silva e Tatiana Nakata Mishima.</h3>
            <div id='r0'>
                <h2>O que é arquivo. Dê exemplos.</h2>
                <p>
                Arquivo é um conjunto de informações nomeadas, armazenadas e organizadas em uma mídia de armazenamento de dados. O arquivo está disponível para um ou mais programas de computador, sendo essa relação estabelecida pelo tipo de arquivo, identificado pela extensão recebida no ato de sua criação ou alteração. 
                </p>
                <p>Cada texto que você salva no Word, é um arquivo de texto. Exemplo: carta.docx - o nome do arquivo é carta e a extensão do nome é docx.<br>
                Cada imagem que você salva no Paint é um arquivo de imagem.
                Exemplo: ferias.png - o nome do arquivo é ferias e a extensão do nome é png. </p>
            </div>
            <div id='r1'>
                <h2>O que podemos gerar (arquivos), usando PHP? Dê exemplos.</h2>
                <p>
                Usando o comando: fopen() – ‘Abre’ o arquivo para que possa ser manipulado. <br>
                fopen ($nomedoarquivo, $modo); 
                Como se pode notar, a função fopen possui dois argumentos: O nome do arquivo e o modo que esse arquivo será criado. 
                Dessa forma: <br>
                $nomedoarquivo – O nome do arquivo pode conter o caminho absoluto onde você deseja criar o seu arquivo. Por exemplo, ‘www/programa/arquivo.txt’. <br>
                $modo – O modo indica as permissões de acesso para o arquivo que foi criado. Por exemplo, ele pode ser criado apenas para leitura (consulta de dados) ou para escrita e leitura. 
                </p>
                <p>
                Abaixo segue outras funções utilizadas para manipular um arquivo.php,elas são responsáveis por abrir um arquivo, fechar, verificar se o arquivo chegou ao seu final, escrever no arquivo, apagar o arquivo, pegar o conteúdo como uma string ou uma linha. 
                <br>
                <ul>
                    <li>fgets() - Pega uma linha do arquivo até o máximo de 1024bytes. </li>
                    <li>feof() - Durante a leitura de um arquivo, avisa se chegou ao final. </li>
                    <li>file_get_contents() - Pega todo conteúdo do arquivo aberto como uma string. </li>
                    <li>ftruncate() - Reduz o tamanho do arquivo. Usado para apagar seu conteúdo</li>
                    <li>fwrite() - Escreve no arquivo. </li>
                    <li>unlink() - Apaga o arquivo indicado. </li>
                </ul>
                </p>
            </div>
            <div id="r2">
                <h2>Para que servem Arrays? Dê exemplos. </h2>
                <p>
                Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais. <br>
                Exemplo: <br>
                </p>
                <p>
                No código a seguir temos um array com os dados de um funcionário: <br>
                $funcionarios = array( <br>
array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true), 	<br> 
array("nome" => "Emerson", "idade" => 35, "salario" => 3885.27, "ativo" => false), <br>
array("nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27, "ativo" => true), <br>
); <br>
                $bonificacao = 10;<br>
                </p>
                <p>
                foreach($funcionarios as $funcionario){ <br>
                if($funcionario["ativo"]){ <br>
                $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100); <br>
                echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}\n"; <br>
                } else {  <br>
                echo "Funcionario: {$funcionario['nome']} - INATIVO\n"; <br>
                } <br>
                } <br>
                </p>

                <p>
                Linhas 1 a 5: Temos o nosso array com os seguintes dados dos funcionários: nome, idade e se ele se encontra ou não ativo; <br> 

                Linha 07: Declaramos uma variável chamada bonificação, que é utilizada para acrescentar 10% do valor do salário dos funcionários ativos; <br>

                Linhas 09 a 17: Para simplificar o processo de modificação desses valores, percorremos a lista de funcionários em um foreach, imprimindo ao final de cada iteração o resultado do cálculo, quando aplicável. <br>
                </p>
            </div> 
            <div id='r3'>
                <h2>O que é Estrutura de Dados? Dê exemplos.</h2>
                <p>
                Um modo de armazenamento e organização de muitos dados visando o seu uso mais eficiente, 
                considerando a memória do computador. 
                </p>
                <p>
                Um exemplo é o array que pode ser composto por varios valores, esse valores são organizados
                através de índices ou chaves que os acompanham. Outros exemplos: pilha, fila, árvore e grafos.
                </p>
            </div>
            <div id='r4'>
                <h2>De que forma utilizamos estrutra de dados? Dê exeplos.</h2>
                <p>
                Utilizamos através do uso de arquivos, pilhas, listas, fila, árvore e grafos.
                </p>
            </div>
            <div id='r5'>
                <h2>O que é Orientação a Objetos? Dê exemplos.</h2>
                <p>
                É um paradigma da programação que consiste na representação de elementos reais em objetos 
                na linguagem de programação. Esses objetos, por sua vez, possuem atributos(propriedades) e 
                ações(métodos). 
                </p>
                <img src="lanterna.png">
            </div>
            <div id="r6">
                <H2>O que é classe? Dê exemplos</H2>
                <p>
                A classe é uma estrutura ou esqueleto que abstrai um conjunto de
                objetos contendo características similares. Uma determinada classe
                define o comportamento de seus objetos usando métodos e
                modificando seus estados como os atributos.
                </p>
                <p>Exemplo:</p>
                <img src="exemplo_classe.png">
            </div>
            <div id="r7">
                <h2>O que é método? Dê exemplos</h2>
                <p>
                Um método PHP é uma função, e na função tem como passar parâmetros e
                também a possibilidade de receber um retorno dessa função, servem para
                definir o comportamento dos objetos!
                </p>
                <p>Exemplo 1:</p>
                <img src="exemplo_de_metodo.png">
                <p>Exemplo 2:</p>
                <img src="exemplo_metodo_2.png">
            </div>
            <div id="r8">
                <h2>O que são pilhas em PHP?Dê exemplos. </h2>
                <p>
                As pilhas são estruturas que armazenam elementos em uma ordem
                específica, no caso das pilhas os últimos são os primeiro. <br>
                O termo correto para este conceito é o LIFO (do inglês, Last In First Out),
                um exemplo que pode ilustrar é o de um empilhamento de livros, onde o
                último livro a ser colocado é o primeiro a ser removido, pois esta no top.
                Para se trabalhar com pilhas usamos dois comandos. O <strong>array_push</strong> que
                insere um valor no final de uma fila e o <strong>array_pop</strong> que remove o último
                elemento de uma pilha.</p>
                <p>Exemplo: </p>
                <img src="exemplo_pilha.png">
            </div>
            <div id="r9">
                <h2>Em que situação eu poderia utilizar as estruturas de controle e as estruturas
                de repetição?</h2>
                <p>
                São utilizadas, por exemplo, para repetir ações semelhantes que são
                executadas para todos os elementos de uma lista de dados, ou
                simplesmente para repetir um mesmo processamento até que a condição
                seja satisfeita.
                </p>
            </div>
                
        </article>";
    </main>
</body>
</html>