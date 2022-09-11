		<?php
			echo "Lista de Exercícios 01 - Nome : Willian Ferreira dos Santos"
			."<br />";
			
			
			echo "01 - Faça um programa que receba quatro números inteiros, calcule e mostre a
			soma desses números." ."<p>";

			$n1 = $_GET["n1"];
			$n2 = $_GET["n2"];
			$n3 = $_GET["n3"];
			$n4 = $_GET["n4"];
			$soma = ($n1 + $n2 + $n3 + $n4);

			echo
			"Primeiro número = " .$n1 ."<br />"
			."Segundo número = " .$n2 ."<br />"
			."Terceiro número = " .$n3 ."<br />"
			."Quarto número = " .$n4 ."<br />"
			."A soma é = " .$soma ."<br />"
			."<hr />";
		


		
				
			echo "02 - Faça um programa que receba três notas, calcule e mostre a média aritmética entre
			elas." ."<p>";


			$not1 = $_GET["not1"];
			$not2 = $_GET["not2"];
			$not3 = $_GET["not3"];
			$media = ($not1+$not2+$not3)/3;

			echo
			"Nota 1 = " .$not1."<br />"
			."Nota 2 = " .$not2."<br />"
			."Nota 3 = " .$not3."<br />"
			."A media e = " .$media."<br />"
			."<hr />";
	

			
			echo "03 - Faça um programa que receba três notas e seus respectivos pesos, calcule e mostre a
			média ponderada dessas notas." ."<p>";

			$notp1 = $_GET["notp1"];
			$peso1 = $_GET["peso1"];
			$notp2 = $_GET["notp2"];
			$peso2 = $_GET["peso2"];
			$notp3 = $_GET["notp3"];
			$peso3 = $_GET["peso3"];
			$mediaponderada = (($notp1*$peso1)+($notp2*$peso2)+($notp3*$peso3))/($peso1+$peso2+$peso3);

			echo
			"Nota 1 = " .$notp1."<br />"
			."Nota 2 = " .$notp2."<br />"
			."Nota 3 = " .$notp3."<br />"
			."Peso 1 = " .$peso1."<br />"
			."Peso 2 = " .$peso2."<br />"
			."Peso 3 = " .$peso3."<br />"
			."A media ponderada e = " .$mediaponderada."<br />"
			."<hr />";

				
			echo "04 - Faça um programa que receba o salário de um funcionário, calcule e mostre o novo
			salário, sabendo-se que sofreu um aumneto de 25%." ."<p>";

			$sal = $_GET["sal"];
			$aumento = 25/100;
			$salnovo = ($sal*$aumento)+$sal;

			echo
			"Salario antes do aumento " .$sal."<br />"
			."Bonus do salario " .$aumento."<br />"
			."Salario pós aumento " .$salnovo."<br />"
			."<hr />";




			
			
			echo "05 - Faça um programa que receba o salário de um funcionário e o percentual de aumento,
			calcule e mostre o valor do aumento e o novo salário." ."<p>";

			$salbruto = $_GET["salbruto"];
			$bonusbruto = $_GET["bonusbruto"];
			$valorDoAum= $salbruto*$bonusbruto;
			$saliquido = $valorDoAum+$salbruto;

			echo
			"Salario antes do aumento " .$salbruto. "<br />"
			."O valor do aumento é".$valorDoAum."<br />"
			."Bonus do salario " .$bonusbruto."<br />"
			."Salario pós aumento " .$saliquido."<br />"
			."<hr />";

			
			
			echo "06 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o
			salário a receber, sabendo-se que o funcionário tem gratificação de 5% sobre 0 salário base
			e paga 7% sobre este salário." ."<p>";

			$salbase = $_GET["salbase"];
			$grat = 5/100;
			$desc = 7/100;
			$salnovo = ($salbase*$grat)+$salbase-($salbase*$desc);
			echo
			"Salario antes do aumento ".$salbase. "<br />"
			."Gratificação " .$grat. "<br />"
			."Desconto " .$desc."<br />"
			."Salario depois da gratificação e desconto " .$salnovo. "<br />"
			. "<hr />";



			echo "07 - Faça um programa que receba o salário base de um funcionário, calcule e mostre o
			salario a receber, sabendo-se que o funcionário tem gratificação de R$ 50,00 sobre 0 salário
			base e paga 10% sobre este salário." ."<p>";

			$salariobase = $_GET["salariobase"];
			$gratif = 50;
			$descont = 10/100;
			$salbasenovo = ($salariobase+$gratif)-($salariobase*$descont)+$salariobase;

			echo
			"Salario base " .$salariobase. "<br />"
			."Gratificação " .$gratif. "<br />"
			."Desconto " .$descont. "<br />"
			."Salario liquido " .$salbasenovo. "<br />"
			."<hr />";




			
			echo "08 - Faça um programa que receba o valor de um depósito e valor da taxa de juros, calcule
			e mostre o valor do rendimento e o valor total depois do rendimento." ."<p>";

			$deposito = $_GET["deposito"];
			$juros = $_GET["juros"];
			$rendi = $deposito*$juros;
			$tot = $rendi+$deposito;

			echo
			"Deposito de " .$deposito."<br />"
			."Juros " .$juros. "<br />"
			."Rendimento " .$rendi. "<br />"
			."total " .$tot."<br />"
			."<hr />";


			
			
			echo "09 - Faça um programa que calcule e mostre a área de um triangulo. Sabe-se que: Área =
			(base * altura)/2" ."<p>";

			$base = $_GET["base"];
			$altura = $_GET["altura"];
			$Area = ($base*$altura)/2;

			echo
			"Base " .$base. "<br />"
			."Altura " .$altura. "<br />"
			."Area " .$Area. "<br />"
			."<hr />";


			
			
			echo "10 - Faça um programa que calcule e mostre a área de um círculo> Sabe-se que Área - PI * Raio ao quadrado." ."<p>";
			define("PI", 3.1415);
			$raio = $_GET["raio"];

			echo
			" PI " .PI ."<br />"
			."raio " .$raio. "<br />"
			. "<hr />";
		
		?>
