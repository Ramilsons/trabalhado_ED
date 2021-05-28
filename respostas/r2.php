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