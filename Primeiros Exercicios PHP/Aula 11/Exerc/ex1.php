<?php
	echo "LISTA DE EXERCICIOS 01 <br>
	NOME : Willian Ferreira dos Santos<br>";

	/*********************************
	* EXERCICIO 01 *
	Escreva uma função que receba 2 arrays (1 de notas, 1 de pesos) e mostre a média.
	Para array(7,8,10) e array(2,3,5) o resultado deve ser 8.8.
	**********************************/

	echo "Exercicio 01: <br>";

	function mediaDeArray($notas, $pesos){
		$resultado =0;

		for ($x=0; $x <sizeof($notas) ; $x++) { //este laço será executado enquanto x for menor que a quantidade de notas presentes no vetor "notas"
			$resultado += ($notas[$x] / 10) * $pesos[$x];//resultado recebera a si mesmo e o valor equivalente ao valor armazenado no vetor na posisão "x" dividio por 10 multiplicado pelo valor armazenado no vetor "pesos" na posição "x" que é controlada pelo laço
		}
		return $resultado;//o resultado será retornado
	}

	echo mediaDeArray(array(7,8,10), array(2,3,5));//chamando a função acima

	echo "<hr>";



	/*********************************
	* Exercicio 02*
	Escreva uma função que retorne o array passado como parãmetro, de trás pra frente.
	*********************************/

	echo "Exercicio 02: <br>";

	function inverteArray($array) {
		$novoArray = array();//declarando um vetor de tamanho indefinido

		for ($x=sizeof($array) - 1; $x >=0 ; $x--) { //laço com valor inicio "x" equivalente ao tamanho do vetor passado como parametro menos 1, laço decrescente
			$novoArray[sizeof($array) - 1 - $x] = $array[$x];//o novo vetor recebera na sua primeira posição o valor da ultima posição do vetor passado como parametro
		}

		return $novoArray; //retornando o vetor contendo o inverso do vetor inicial
	}

	print_r(inverteArray(array("a","b","c","d")));//apresentando o resultado

	echo "<hr>";





	/*******************************
	* Exercicio 03 *
	Escreva uma função que retorne o tamanho do array, sem utilizar as funções sizeof ou count.
	********************************/
	

	echo "Exercicio 03 <br>";

	function tamanhoDeArray($array){
		$x =0;

		foreach ($array as $posicao) {//foreach foi usado como um contador para determinar quantas posiçoes tem  o vetor
			$x++;
		}
		return $x;
	}

	echo tamanhoDeArray(array(1,2,3)); // chamando a função

	echo "<hr>";


	/*******************************
	* Exercicio 04 *
	Construa uma versão própria da função array_push sem utilizar a função em seu código.
	*******************************/

	echo "Exercicio 04 <br>";

	function meu_array_push($array, $elemento) {

		/*
		* Para inserir um elemento no final do array basta informar a chave do novo valor entre colchetes (neste caso foi utilizada uma chave numérica) e atribuir nesta posição o valor ou elemento em questão 
		*/

		$array[sizeof($array)] = $elemento;//a função insere numa nova posição de numero igual ao tamanho do vetor, o elemento desejado
		return $array;//retornando o resultado
	}
	$x = array(1,2,3);
	$x = meu_array_push($x,4);//no caso a quantidade de espaços eram 3 (0,1,2), portanto na nova posição 3 foi inserido o numero 4
	print_r($x);

	echo "<hr>";
	






	/*******************************
	* Exercicio 05 *
	Construa sua própria versão da função array_pop sem utilizar a função em seu código
	********************************/

	echo "Exercicio 05 : <br>";


	function meu_array_pop($array){
		$elemento = $array[sizeof($array) - 1];//a variavel "elemento" recebe o valor de "array" na posição equivalente ao tamanho do vetor menos 1
		unset($array[sizeof($array) - 1]);//removendo o elemento presente no vetor na posição equivalente ao tamanho menos 1 ou seja, a ultima posiçãp
		return $elemento;//retorna o valor da ultima posição que foi removido
	}

	$x = array(1,2,3);// no caso o vetor tinha 3 posições (0,1,2) entao o elemento foi retirado da posição 3-1, ou seja 2
	echo meu_array_pop($x)."<br>";
	print_r($x);

	echo "<hr>";





	/*******************************
	* Exercicio 06 *
	Construa sua própria versão da função array_shift sem utilizar a função em seu código
	********************************/

	echo "Exercicio : 06 <br>";

	function meu_array_shift($array){
		$elemento = $array[0];//elemento recebe o valor na ultima posição do vetor passado por parametro
		unset($array[0]);//remove a ultima posição do vetor
		return $elemento;//retorna o valor de "elemento"
	}
	$x = array(1,2,3);
	echo meu_array_shift($x)."<br>";// chamando a função
	print_r($x);//exibindo o vetor depois do array_shift

	echo "<hr>";






	/*******************************
	* Exercicio 07 *
	Construa sua própria versão da função array_unshift sem utilizar a função em seu código
	********************************/

	echo "Exercicio : 07 <br>";

	function meu_array_unshift($array, $elemento){
		/*
		Antes de inserir o elemento na primeira posição, todos os atuais elementos devem ser reposicionados. Por isso o comando for é montado invertido (do fim para o inicio) reposicionando todos os elementos primeiramente
		*/

		for ($x=sizeof($array); $x >0 ; $x--) { //laço iniciado com a quantidade de espaços de "array" 
			$array[$x] = $array[$x-1];//o valor na ultima posição (no caso a 2 posição (0,1,2)) vai para o vetor na posição equivalente a quantidade de espaços no caso, 3
		}

		$array[0] = $elemento;//a primeira posição recebe o novo elemento passado por parametro
		return $array;
	}
	$x = array(1,2,3);//criando array
	$x = meu_array_unshift($x,4);//chamando função passando x sendo o vetor por parametro assim como 4 que é o elementeo a ser inserido na fila
	print_r($x);

	echo "<hr>";



	/*******************************
	* Exercicio 08 *
	Construa sua própria versão da função array_key_exists sem utilizar a função em seu código
	********************************/

	echo "Exercicio : 08 <br>";

	function minha_array_key_exists($chaveBusca,$array){
		$chaves = array_keys($array);

		foreach ($chaves as $chave) {//forech usado como laço para verificar se a posição existe ou não
			if ($chave == $chaveBusca) {//verificando se a posição existe
				return true;//retorna verdadeiro se a chave existir
			}
		}
		return FALSE;//retorna falso se não
	}
	$x = array("Componente" => "DSI","Professor" => "Roberto");
	echo minha_array_key_exists("Componente",$x);
	echo minha_array_key_exists("DSI",$x);

?>