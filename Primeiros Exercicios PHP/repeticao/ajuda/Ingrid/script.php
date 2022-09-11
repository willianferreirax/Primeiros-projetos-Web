<html>
<head>
<title> Resultados </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>

<fieldset id="resp">
<legend> Respostas </legend>
<?php
echo"Feito por Ingrid de Assis Souza 2ºIIA 2018<br>";


//EXERCÍCIO 1
echo"<p>1- Um funcionário de uma empresa recebe aumento salarial anualmente. Sabe-se que: <br/> 
a) Esse funcionario foi contrato em 2005, com salario inicial de R$ 1.000,00  <br/> 
b) Em 2006, ele recebeu aumento de 1,5% sobre seu salario inicial. <br/> 
c) A partir de 2007 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior. Faca um programa que determine o salário atual desse funcionário. </p>";
	
	$salin= 1000;
	$ano= 2006;
	
	if ($ano==2006)
	{
		$porc = ($salin*1.5)/100;
		$salfi= $porc + $salin;
		$ano++;
	}
	
	while($ano>=2007 && $ano<=2018)
	{
		$porc= (($porc*2)* $salin)/100;
		$salfi= $salin+ $porc;
		$ano++;
		
	}
		echo"O salário deste funcionário em 2018 será de R$ $salfi <br/>";
		echo"<br/>";
	
	
//EXERCÍCIO 2
echo"<p>2- Faça um programa que receba duas notas de seis alunos, calcule e mostre: <br />
a) A média aritmética das duas notas de cada aluno  <br />
b) A mensagem que está na tabela a seguir: <br />
Média Aritmetica Mensagem <br />
Abaixo de 3,0    Reprovado <br />
De 3,0 a 7,0     Exame <br />
Acima de 7,0     Aprovado <br />
c) O total de alunos aprovados <br />
d) O total de alunos de exame <br />
e) Total de alunos reprovados <br />
f) A média da classe. </p>";
$cont=1;
$aluno=1;
$reprovado=0;
$exame=0;
$aprovado=0;
$mediac=0;
do
{
echo"<p>Aluno $aluno º</p>";
$nota1 =isset ($_GET["tNota$cont"])?$_GET["tNota$cont"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
$cont++;
$nota2 =isset ($_GET["tNota$cont"])?$_GET["tNota$cont"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
$cont++;

$media= ($nota1+$nota2)/2;
echo"A média do aluno foi de $media<br />";
if($media<=3)
{
	echo"Reprovado";
	$reprovado++;
}
elseif($media>3 && $media<7)
{
	echo"Exame";
	$exame++;
}
elseif($media>=7)
{
	echo"Aprovado";
	$aprovado++;
}

$mediac= $media+ $mediac;

$aluno++;
}while($aluno<=6);

$mediatc= $mediac/$aluno;
echo"<br/><br />O total de alunos reprovados são $reprovado , de exame são $exame e aprovados são $aprovado.";
echo"<br />A média da classe foi de $mediatc";
		echo"<br/>";
		echo"<br/>";
		
		

//EXERCÍCIO 3
echo"<p>3- Em um campeonato de futebol existem 5 times, cada time possui 11 jogadores. Faça um algoritmo que recebe a idade, o peso e a altura de cada um dos jogadores. Calcule e mostre:
<br />a) A quantidade de jogadores com idade inferior a 18;<br />
b) A média das idades dos jogadores de cada time;<br />
c) A média das alturas de todos os jogadores do campeonato<br />
d) A porcentagem de jogadores com mais de 80kg do campeonato </p>"; 
$jog=1;
$imenor=0;
$mediaidade1=0;
$mediaidade2=0;
$mediaidade3=0;
$mediaidade4=0;
$mediaidade5=0;
$contm1=0;
$contm2=0;
$contm3=0;
$contm4=0;
$contm5=0;
$salt=0;
$speso=0;

while($jog<=55)
{
	$idade =isset ($_GET["tIdade$jog"])?$_GET["tIdade$jog"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	$peso =isset ($_GET["tPeso$jog"])?$_GET["tPeso$jog"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	$altura=isset ($_GET["tAltura$jog"])?$_GET["tAltura$jog"]:"Não informado"; //Cria uma variável e atribui á ela o respectivo valor do name do formulário

	//MENORES DE 18
	if($idade<18)
	{
		$imenor= $imenor+1;
	}
	
	
	//MÉDIA DAS IDADES POR TIME
	//TIME 1
	if($jog<=11)
	{
		$mediaidade1= $mediaidade1 + $idade;
		$contm1++;
	}
	
	//TIME 2
	elseif($jog>=12 && $jog<=22)
	{
		$mediaidade2= $mediaidade2 + $idade;
		$contm2++;
	}
	
	//TIME 3
	elseif($jog>=23 && $jog<=33)
	{
		$mediaidade3= $mediaidade3 + $idade;
		$contm3++;
	}
	
	//TIME 4
	elseif($jog>=34 && $jog<=44)
	{
		$mediaidade4= $mediaidade4 + $idade;
		$contm4++;
	}
	
	//TIME 5
	elseif($jog>=45)
	{
		$mediaidade5= $mediaidade5 + $idade;
		$contm5++;
	}
	
	//SOMA DAS ALTURAS
	$salt= $salt + $altura;
	
	//SOMA DOS JOGADORES COM MAIS DE 80 QUILOS
	if($peso>80)
	{
		$speso++;
	}


	
$jog++;	
}

$me1= $mediaidade1/ $contm1;
echo"A idade média dos jogadores do time 1 é de $me1 anos. <br/>";

$me2= $mediaidade2/ $contm2;
echo"A idade média dos jogadores do time 2 é de $me2 anos. <br/>";

$me3= $mediaidade3/ $contm3;
echo"A idade média dos jogadores do time 3 é de $me3 anos.  <br/>";

$me4= $mediaidade4/ $contm4;
echo"A idade média dos jogadores do time 4 é de $me4 anos.  <br/>";

$me5= $mediaidade5/ $contm5;
echo"A idade média dos jogadores do time 5 é de $me5 anos.  <br/>";

echo"Existem $imenor jogadores menores de 18 anos.<br />";

$mediaa= $salt / 55;
echo"A média das alturas dos jogadores do cameonato é $mediaa. <br/>" ;

$percentpeso = ($speso * 55)/100;
echo"A percentagem de jogadores com mais de 80 quilos é de $percentpeso % <br/>";
		echo"<br/>";
		echo"<br/>";


//EXERCÍCIO 4
echo"<p>4- Faça um programa que receba um número inteiro maior do que 1, verifique se o número fornecido é primo e mostre mensagem de número primo ou de não primo.</p>";

$num =isset ($_GET["tNum"])?$_GET["tNum"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário

	$dividendo=0;
	$divisivel=0;
	$nume=0;
  while ($dividendo!=$num) 
  {
      $dividendo=$dividendo+1;
      if (($num % $dividendo)==0) 
	  {
         $divisivel=$divisivel+1;
      }
  }
   if ($divisivel==2) 
   {
      echo"O número é primo.";
	  $nume=1;
   }
   elseif($divisivel>2)
   {
	   echo"Não primo";
	   $nume=1;
   }
	elseif($nume==0)
	{
		echo"Digite um número para fazer o cálculo";
	}
		echo"<br/>";
		echo"<br/>";

   
   
   //EXERCÍCIO 5
   echo"<p>5- Numa fábrica trabalham homens e mulheres divididos em três classes: <br />
1) os que fazem até 30 peças por mês<br />
2) os que fazem de 31 a 35 peças por mês<br />
3) os que fazem mais de 35 peças por mês<br />

A classe 1 recebe salário-mínimo, a classe 2 recebe salário-mínimo e mais 3% do salário-mínimo por peça, acima das 30 iniciais. A classe 3 recebe salário mínimo e mais 5% do salário mínimo por peça acima das 30 iniciais.
Fazer um algoritmo que leia o salário mínimo que é igual para todos os trabalhadores independente da classe, e em seguida:<br />

a) O número do operário e o seu salário de cada operário<br />
b) O total da folha mensal de pagamento da fábrica<br />
c) O número total de peças fabricadas por mês<br />
d) A média de peças fabricadas pelos homens em cada classe<br />
e) A média de peças fabricadas pelas mulheres em cada classe<br />
f) O numero do operário de maior salário </p>";
   
   $oper=1;
	$m1=0;
	$m2=0;
	$m3=0;
	$f1=0;
	$f2=0;
	$f3=0;
	$pagamento=0;
	$pecat=0;
	$pecmasc1=0;
	$pecmasc2=0;
	$pecmasc3=0;
	$pecfem1=0;
	$pecfem2=0;
	$pecfem3=0;
	$pecfem3=0;
	$pecfem2=0;
	$pecfem1=0;
	$pecai=0;
	$salario=0;
	$peca=0;
	$pecames=0;
	$classe=0;
	$salmin = isset ($_GET["tSalmin"])?$_GET["tSalmin"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	
   while($oper<=15)
   {
	$cod =isset ($_GET["tCod$oper"])?$_GET["tCod$oper"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	$pecames =isset ($_GET["tPeca$oper"])?$_GET["tPeca$oper"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
    $sexo =isset ($_GET["tSexo$oper"]); //Cria uma variável e atribui á ela o respectivo valor do name do formulário
  
   echo"Operário número $cod <br/>";
   
	 //CLASSE E SALÁRIO DO OPERÁRIO
	 if($pecames<=30)
	 {
		 $salario= $salmin;
		 echo"O salário por mês desse operário é de R$ $salario . <br/>";
		 $classe=1;
	 }
	 elseif($pecames>=31 && $pecames<=35)
	 {
		 $pecai= $peca-30;
		 $salario= abs((($salmin*3)/100)* $pecai);
		 echo"O salário desse operário é de R$ $salario .<br/>";
		 $classe=2;
	 }
	 elseif($pecames>35)
	 {
		 $pecai= $peca-30;
		 $salario= abs((($salmin*5)/100)* $pecai);
		 echo"O salário desse operário é de R$ $salario .<br/>";
		 $classe=3;
	 }
	 
	 //FOLHA MENSAL
	 $pagamento= $pagamento + $salario;
	 
	 //PEÇAS POR MÊS
	 $pecat= $pecat + $pecames;
	 
	 //MÉDIA MÊS HOMEM
	 if($sexo=='M' && $classe==1)
	 {
		 $pecmasc1= $pecames + $pecmasc1;
		 $m1++;
	 }
	 elseif($sexo=='M' && $classe==2)
	 {
		 $pecmasc2= $pecames + $pecmasc2;
		 $m2++;
	 }
	 elseif($sexo=='M' && $classe==3)
	 {
		 $pecmasc3= $pecames + $pecmasc3;
		 $m3++;
	 }
	 
	 //MÉDIA MÊS MULHER
	 if($sexo=='F' && $classe==1)
	 {
		 $pecfem1= $pecames + $pecfem1;
		 $f1++;
	 }
	 elseif($sexo=='F' && $classe==2)
	 {
		 $pecfem2= $pecames + $pecfem2;
		 $f2++;
	 }
	 if($sexo=='F' && $classe==3)
	 {
		 $pecfem3= $pecames + $pecfem3;
		 $f3++;
	 }
	 
	 
	$oper++;	 
   }   
   echo"A folha mensal de pagamento da fábrica é de R$ $pagamento.<br/>";
   echo"O número total de peças fabricadas por mês é $pecat.<br/>";
   
   $mediap1= $pecmasc1/$m1;
   echo"A média de peças fabricadas pelos homens da primeira classe é de: $mediap1. <br />";
   
   $mediap2= $pecmasc2/$m2;
   echo"A média de peças fabricadas pelos homens da segunda classe é de: $mediap2. <br />";
   
   $mediap3= $pecmasc3/$m3;
   echo"A média de peças fabricadas pelos homens da terceira classe é de: $mediap3. <br />";
  
    $mediaf3= $pecfem3/$f3;
   echo"A média de peças fabricadas pelas mulheres da terceira classe é de: $mediaf3. <br />";
   
    $mediaf2= $pecfem2/$f2;
   echo"A média de peças fabricadas pelas mulheres da segunda classe é de: $mediaf2. <br />";
   
    $mediaf1= $pecfem1/$f1;
   echo"A média de peças fabricadas pelas mulheres da primeira classe é de: $mediaf1. <br />";
   
   		echo"<br/>";
		echo"<br/>";

   
   //EXERCÍCIO 6
   echo"<p>6- Faça um programa para calcular a area de um triângulo que não permita a entrada de dados inváidos, ou seja, medidas menores ou iguais a 0.</p>";
   $base =isset ($_GET["tBase"])?$_GET["tBase"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
   $alt =isset ($_GET["tAlt"])?$_GET["tAlt"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
   
   if($base<=0)
   {
	   echo"A medida para a base é inválida.";
   }
   
   if($alt<=0)
   {
	   echo" A medida para a altura é inválida.";
   }
   
   if($base>0 && $alt>0)
   {
	   $area=($base* $alt)/2;
	   echo"A área do triângulo é de $area.";
   }
   
   		echo"<br/>";
		echo"<br/>";

   
   
   //EXERCÍCIO 7
   echo"<p>7- Faça um programa que receba o salário de um funcionário chamado Carlos. Sabe-se que o funcionário João tem um salário equivalente a um terço do salário de Carlos. Carlos aplicará seu salário integralmente no caderno de poupança, que está rendendo 2% ao mês e João aplicará seu salário integralmente no fundo de renda fixa, que está rendendo 5% ao mês. Calcule e mostre a quantidade de meses necessários para que o valor pertencente a João iguale ou ultrapasse o valor pertencente a Carlos. </p>";
   $salc =isset ($_GET["tSalc"])?$_GET["tSalc"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário

   $mes=1;
   $salj= $salc/3;
   
   while($salc>$salj)
   {
	   //CALCULA O SALÁRIO DE CARLOS
	   $salc=(($salc*2)/100)+ $salc;
	   
	   //CALCULA O SALÁRIO DE JOÃO
	   $salj=(($salj*5)/100)+ $salj;
	   
	   $mes++;
   }
   
   echo"O valor da conta bancária de João será maior do que a de Carlos no $mes º mês.";
   
   		echo"<br/>";
		echo"<br/>";

   
   //EXERCÍCIO 8
   echo"<p>8- Faça um programa que leia um número não determinado de pares [m,n], todos inteiros e positivos, um par de cada vez, e que calcule e mostre a soma de todos os números inteiros entre m e n (inclusive). A digitação de pares terminará quando m for maior ou igual a n.</p>";
   $m =isset ($_GET["tM"])?$_GET["tM"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
   $n =isset ($_GET["tN"])?$_GET["tN"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	$numt=$n-$m;
	$razao=1;
	$a1= $m;
	$an= $a1+ ($numt-1) * $razao;
	
   $soman= ((($a1 + $an)* $numt)/2) + $n;
   
   echo"A soma de todos os números existentes de $m até $n (inclusive) é $soman.";
   
   		echo"<br/>";
		echo"<br/>";

   
   //EXERCÍCIO 9
   echo"<p>9- Faça um programa que receba vários números, calcule e mostre:
<br/>a) A soma dos números digitados <br />
b) A quantidade dos números digitados <br/>
c) A media dos números digitados <br/>
d)o maior número digitado <br/>
e)O menor número digitado <br/>
f) A média dos números pares <br/>
g) A porcentagem dos números ímpares</p>";
   $cont=1;
   $soman=0;
   $quant=0;
   $par=0;
   $impar=0;
   $num=1;
   
   while($cont<=10) 
   {
	 $nume =isset ($_GET["tNum$num"])?$_GET["tNum$num"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	
	//SOMA DE TODOS OS NÚMEROS DIGITADOS
	$soman= $soman+ $nume;
	
	//QUANTIDADE NÚMEROS DIGITADOS
	$quant= $quant+1;
	
	//NÚMEROS PARES
	if (($nume%2)==0)
	{
		$par= $par+1;
	}
	
	//NÚMEROS ÍMPARES
	if (($nume%2)!=0)
	{
		$impar= $impar+1;
	}
	
	//MAIOR E MENOR NÚMERO
	if($quant==1)
	{
		$maior= $nume;
		$menor= $nume;
	}
	elseif($quant>1)
	{
		if($nume>$maior)
		{
			$maior= $nume;
		}
		if($nume<$menor)
		{
			$menor= $nume;
		}
	}
	
	$cont++;
	$num++;
	
   }
   
   //MÉDIA NÚMEROS DIGITADOS
   $media= $soman/10;
   
   //PORCENTAGEM NÚMEROS ÍMPARES
   $porcent= ($impar*100)/10;
   
   echo"Soma dos números digitados: $soman <br>";
   echo"Quantidade de números digitados: $quant <br>";
   echo"Quantidade de números pares: $par <br>";
   echo"Porcentagem de números ímpares: $impar <br>";
   echo"O maior número é $maior e o menor é $menor.<br />";
   
   		echo"<br/>";
		echo"<br/>";

   
   
   //EXERCÍCIO 10
   echo"<p>10- Uma empresa decidiu fazer um levantamento em relação aos candidatos que se apresentarem para preenchimento de vagas no seu quadro de funcionários. Supondo que você seja o programador dessa empresa, faça um programa que, leia para cada candidato, a idade, o sexo ( M e F ) e a experiência no serviço ( S ou N). Para encerrar a entrada de dados digite zero para a idade. Calcule e mostre: <br />
a) O número de candidatos do sexo feminino <br />
b) O número de candidatos do sexo masculino  <br />
c) A idade média dos homens que já tem experiência no serviço  <br />
d) A percentagem dos homens com mais de 45 anos entre o total dos homens <br />
e) O número de mulheres com idade inferior a 35 anos e com experiência no serviço <br />
f) A menor idade entre as mulheres que já tem experiência no serviço. </p>";
   
   $cont=1;
   $cand=1;
   $mnet=0;
   $fem=0;
   $masc=0;
   $contid=0;
   $cidm=0;
   $cexpm=0;
   
    while($cont<=10) 
   {
	 $idade =isset ($_GET["tIdade$cand"])?$_GET["tIdade$cand"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	 $sexo =isset ($_GET["tSexo$cand"])?$_GET["tSexo$cand"]:0;; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	 $exp =isset ($_GET["tExp$cand"]); //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	 
	 
	 //MULHERES COM MENOS DE 21 ANOS E COM EXPERIÊNCIA DE TRABALHO
	 if($sexo=='F' && $idade<21 && $exp=='cSim') 
	 {
		 $mnet++;
	 }
	 
	 
	//SEXO
	elseif($sexo=='F')
	{
		$fem= $fem + 1;
	}
	elseif($sexo=='M')
	{
		$masc= $masc + 1;
	}
	
	//EXPERIÊNCIA DE TRABALHO
	if($sexo=='M' && $exp=="cSim")
	{
		$cexpm++;
		$cidm= $cidm + $idade ;
	}
	
	//HOMENS COM MAIS DE 45
	if($sexo=='M'&& $idade>45)
	{
		$contid++;
	}
	
	//MENOR IDADE MULHERES
	if($sexo=='F'&& $exp='cSim')
	{
		if($fem==1)
		{
			$menor= $idade;
		}
		elseif($idade<$menor)
		{
			$menor= $idade;
		}
	}
	
	
	
	$cont++;
	$cand++;
   }
   
   //MÉDIA 
   $mediamasc= $cidm/$cexpm;
   echo"A idade média dos homens que tem experiência de trabalho é de $mediamasc anos. <br />";
   
   echo"Existem $fem candidatas e $masc candidatos á vaga. <br />";
   echo"A mulher mais nova com experiência de trabalho tem $menor anos. <br />";
   
   //PORCENTAGEM
   $h45= ($contid*100)/15; 
   echo"A percentagem dos homens com mais de 45 anos é $h45 % <br />" ;
   
   //EXPERIÊNCIA DE TRABALHO
   echo"  A quantidade de mulheres com menos de 21 anos e com experiência de trabalho é $mnet <br />";
   
   		echo"<br/>";
		echo"<br/>";

		
	//EXERCÍCIO 11
	echo"<p>11- Faça um programa que receba o valor do salário mínimo, uma lista contendo a quantidade de quilowatts gasta por consumidor e o tipo de consumidor ( 1 - residencial, 2 – comercial ou 3 – industrial) e que calcule e mostre:
<br />a) O Valor de cada quilowatt, sabendo que o quilowatt custa um oitavo do salário mínimo.<br />
b) O valor a ser pago por cada consumidor (conta final mais acréscimo). O Acréscimoencontra-se na tabela a seguir: <br />

Tipo    % de Acréscimo sobre o valor gasto <br />
1      ------          5 <br />
2      ------           10<br />
3      ------           15<br />

c) O Faturamento geral da empresa.<br />
d) A quantidade de consumidores que pagam entre R$ 500 e R$ 1.000,00 <br />
Termine a entrada de dados com quantidade de quilowatts igual a zero.</p>";

	$val=0;
	$cons=1;
	$valor1q=0;
	$contff=0;
	$contf=0;
	$acrescimo=0;
	$gastot=0;
	$contff=0;
	$salm =isset ($_GET["tSalm"])?$_GET["tSalm"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário

	
	while($cons<=5)
	{
	$gasto =isset ($_GET["tGasto$cons"])?$_GET["tGasto$cons"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	$categoria =isset ($_GET["tCat$cons"]); //Cria uma variável e atribui á ela o respectivo valor do name do formulário
	
	//VALOR QUILOWATT
	$valor1q = $salm/8;
	echo"O valor de cada quilowatt para o $cons º consumidor é de R$ $valor1q <br />";
	
	$gastot= $valor1q * $gasto;
	
	//VALOR A SER PAGO POR CADA CONSUMIDOR
	if($categoria=='Residencial')
	{
		$acrescimo= ($gastot * 5)/100;
	}
	elseif($categoria=='Comercial')
	{
		$acrescimo= ($gastot * 10)/100;
	}
	elseif($categoria=='Industrial')
	{
		$acrescimo= ($gastot * 15)/100;
	}
	$contf= $gastot + $acrescimo;
	echo"O valor final da conta para o $cons º consumidor é de R$ $contf <br />";
	
	//FATURAMENTO DA EMPRESA
	$contff= $contf+ $contff;
	
	//CONSUMIDORES 
	if($contf>=500 && $contf<=1000)
	{
		$val++;
	}
	
	
	$cons++;
	}
	
	echo"O faturamento geral da empresa é de R$ $contff. <br/>";
	echo"A quantidade de consumidores que pagam entre R$ 500,00 e R$ 1000,00 é $val. <br/>";
?>
</fieldset>


</body>
</html>
