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