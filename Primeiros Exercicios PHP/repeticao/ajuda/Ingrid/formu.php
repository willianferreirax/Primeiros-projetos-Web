<html>
<head>
<title>Exercícios Repetição</title>
<meta charset="utf-8">
<link rel="stylesheet" href="design.css">
</head>
<body>

<h3>Feito por: INGRID DE ASSIS SOUZA  Turma B 2IIA</h3>


<form method="get" id="Exercicios" action="script.php" >
<fieldset id="Ex1">
<legend> Exercício 2- Notas de alunos </legend>

<?php

$cont=1;
$aluno=1;
while($cont>=1 && $cont<=2 && $aluno==1)
{
echo"<p><label for='cNota'></label> <input type='number' name='tNota$cont' id='cNota'  size='20' maxlength='20' placeholder=' Digite a nota do $aluno º aluno' /></p> ";
$cont++;
}

$aluno=2;
while($cont>=3 && $cont<=4 && $aluno==2)
{
echo"<p><label for='cNota'></label> <input type='number' name='tNota$cont' id='cNota'  size='20' maxlength='20' placeholder=' Digite a nota do $aluno º aluno' /></p> ";
$cont++;
}

$aluno=3;
while($cont>=5 && $cont<=6 && $aluno==3)
{
echo"<p><label for='cNota'></label> <input type='number' name='tNota$cont' id='cNota'  size='20' maxlength='20' placeholder=' Digite a nota do $aluno º aluno' /></p> ";
$cont++;
}

$aluno=4;
while($cont>=7 && $cont<=8 && $aluno==4)
{
echo"<p><label for='cNota'></label> <input type='number' name='tNota$cont' id='cNota'  size='20' maxlength='20' placeholder=' Digite a nota do $aluno º aluno' /></p> ";
$cont++;
}

$aluno=5;
while($cont>=9 && $cont<=10 && $aluno==5)
{
echo"<p><label for='cNota'></label> <input type='number' name='tNota$cont' id='cNota'  size='20' maxlength='20' placeholder=' Digite a nota do $aluno º aluno' /></p> ";
$cont++;
}

$aluno=6;
while($cont>=11 && $cont<=12 && $aluno==6)
{
echo"<p><label for='cNota'></label> <input type='number' name='tNota$cont' id='cNota'  size='20' maxlength='20' placeholder=' Digite a nota do $aluno º aluno' /></p> ";
$cont++;
}
?>
</fieldset>

<fieldset id="Ex3">
<legend> Exercício 3- Jogadores de um time </legend>

<?php
echo"Digite o peso em quilos e a altura em metros.";
$time=1;
$jog=1;
$joga=1;
if($time==1)
{
	echo"<p>Time 1</p>";
	while($jog<=11)
	{
		echo"<h5> $joga º jogador</h5>";
		echo"<p><label for='cIdade'></label> <input type='number' name='tIdade$jog' id='cIdade'  size='20' maxlength='100' placeholder=' Idade do $joga º jogador' /></p> ";
		echo"<p><label for='cPeso'></label> <input type='text' name='tPeso$jog' id='cPeso'  size='20' maxlength='100' placeholder=' Peso do $joga º jogador' /></p> ";
		echo"<p><label for='cAltura'></label> <input type='number' name='tAltura$jog' id='cAltura'  size='20' maxlength='100' placeholder=' Altura do $joga º jogador' /></p> ";
		$jog++;
		$joga++;
	}
	$time++;
	$joga=1;
}

if($time==2)
{
	echo"<p>Time 2</p>";
	while($jog>11 && $jog<=22)
	{
		echo"<h5> $joga º jogador</h5>";
		echo"<p><label for='cIdade'></label> <input type='number' name='tIdade$jog' id='cIdade'  size='20' maxlength='100' placeholder=' Idade do $joga º jogador' /></p> ";
		echo"<p><label for='cPeso'></label> <input type='text' name='tPeso$jog' id='cPeso'  size='20' maxlength='100' placeholder=' Peso do $joga º jogador' /></p> ";
		echo"<p><label for='cAltura'></label> <input type='number' name='tAltura$jog' id='cAltura'  size='20' maxlength='100' placeholder=' Altura do $joga º jogador' /></p> ";
		$jog++;
		$joga++;
	}
	$time++;
	$joga=1;
}

if($time==3)
{
	echo"<p>Time 3</p>";
	while($jog>22 && $jog<=33)
	{
		echo"<h5> $joga º jogador</h5>";
		echo"<p><label for='cIdade'></label> <input type='number' name='tIdade$jog' id='cIdade'  size='20' maxlength='100' placeholder=' Idade do $joga º jogador' /></p> ";
		echo"<p><label for='cPeso'></label> <input type='text' name='tPeso$jog' id='cPeso'  size='20' maxlength='100' placeholder=' Peso do $joga º jogador' /></p> ";
		echo"<p><label for='cAltura'></label> <input type='number' name='tAltura$jog' id='cAltura'  size='20' maxlength='100' placeholder=' Altura do $joga º jogador' /></p> ";
		$jog++;
		$joga++;
	}
	$time++;
	$joga=1;
}

if($time==4)
{
	echo"<p>Time 4</p>";
	while($jog>33 && $jog<=44)
	{
		echo"<h5> $joga º jogador</h5>";
		echo"<p><label for='cIdade'></label> <input type='number' name='tIdade$jog' id='cIdade'  size='20' maxlength='100' placeholder=' Idade do $joga º jogador' /></p> ";
		echo"<p><label for='cPeso'></label> <input type='text' name='tPeso$jog' id='cPeso'  size='20' maxlength='100' placeholder=' Peso do $joga º jogador' /></p> ";
		echo"<p><label for='cAltura'></label> <input type='number' name='tAltura$jog' id='cAltura'  size='20' maxlength='100' placeholder=' Altura do $joga º jogador' /></p> ";
		$jog++;
		$joga++;
	}
	$time++;
	$joga=1;
}

if($time==5)
{
	echo"<p>Time 5</p>";
	while($jog>44 && $jog<=55)
	{
		echo"<h5> $joga º jogador</h5>";
		echo"<p><label for='cIdade'></label> <input type='number' name='tIdade$jog' id='cIdade'  size='20' maxlength='100' placeholder=' Idade do $joga º jogador' /></p> ";
		echo"<p><label for='cPeso'></label> <input type='text' name='tPeso$jog' id='cPeso'  size='20' maxlength='100' placeholder=' Peso do $joga º jogador' /></p> ";
		echo"<p><label for='cAltura'></label> <input type='number' name='tAltura$jog' id='cAltura'  size='20' maxlength='100' placeholder=' Altura do $joga º jogador' /></p> ";
		$jog++;
		$joga++;
	}
	$time++;
	$joga=1;
}

?>


</fieldset>

<fieldset id="Ex4">
<legend>Exercício 4- Primos</legend>
<p><label for="cNum"></label> <input type="number" name="tNum" id="cNum"  size="20" maxlength="20" placeholder=" Digite um número" /></p> 
</fieldset>

<fieldset id="Ex5">
<legend> Exercício 5- Operários de uma fábrica </legend>

<?php
$oper=1;

echo"<p><label for='cSalm'>Salário mínimo</label> <input type='number' name='tSalmin' id='cSalm'  size='20' maxlength='100' placeholder=' Valor do salário mínimo' /></p> ";
		

while($oper<=15)
{
		echo"<h5> $oper º Operário</h5>";
		echo"<p><label for='cCod'></label> <input type='number' name='tCod$oper' id='cCod'  size='20' maxlength='100' placeholder=' Número do $oper º operário' /></p> ";
		echo"<p><label for='cPeca'></label> <input type='number' name='tPeca$oper' id='cPeca'  size='20' maxlength='100' placeholder=' Peças/mês $oper º operário' /></p> ";
		
		echo"<input type='radio' name='tSexo$oper' id='M' value='M' checked /> 
		<label for='M' value='M' >Masculino</label><br />
		<input type='radio' name='tSexo$oper' id='cFem' value='F' /> 
		<label for='cFem'>Feminino</label>";
		$oper++;
}
?>
</fieldset>


<fieldset id="Ex6">
<legend>Exercício 6- Área de um triângulo</legend>
<p><label for="cBase">Base:</label> <input type="text" name="tBase" id="cBase"  size="20" maxlength="20" placeholder=" Digite um número" /></p> 
<p><label for="cAlt">Altura:</label> <input type="text" name="tAlt" id="cAlt"  size="20" maxlength="20" placeholder=" Digite um número" /></p> 
</fieldset>

<fieldset id="Ex7">
<legend>Exercício 7- Salário de dois funcionários</legend>
<p><label for="cSalc">Salário de Carlos:</label> <input type="text" name="tSalc" id="cSalc"  size="20" maxlength="20" placeholder=" Digite um número" /></p> 
</fieldset>


<fieldset id="Ex8">
<legend>Exercício 8- Números pares</legend>
<p><label for="cM">Valor de M:</label> <input type="number" name="tM" id="cM"  size="20" maxlength="20" placeholder=" Digite um número" /></p> 
<p><label for="cN">Valor de N:</label> <input type="number" name="tN" id="cN"  size="20" maxlength="20" placeholder=" Digite um número" /></p> 
</fieldset>

<fieldset id="Ex9">
<legend> Exercício 9- Números </legend>

<?php
$num=1;

while($num<=10)
{
		echo"<p><label for='cNum'></label> <input type='number' name='tNum$num' id='cNum'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$num++;
}
?>
</fieldset>

<fieldset id="Ex10">
<legend> Exercício 10- Candidatos de uma empresa </legend>

<?php
$cand=1;

while($cand<=15)
{
		echo"<h5> $cand º Candidato</h5>";
		echo"<p><label for='cIdade'></label> <input type='number' name='tIdade$cand' id='cIdade'  size='20' maxlength='100' placeholder=' Idade do $cand º candidato' /></p> ";
		
		echo"<p>Sexo</p>";
		echo"<input type='radio' name='tSexo$cand' id='M' value='M' checked /> 
		<label for='M' value='M' >Masculino</label><br />
		<input type='radio' name='tSexo$cand' id='F' value='F' /> 
		<label for='F' id='F' value='F' >Feminino</label>";
		
		echo"<p>Experiência de serviço</p>";
		echo"<input type='radio' name='tExp$cand' id='cNao' checked  /> 
		<label for='cNao'>Não</label><br />
		<input type='radio' name='tExp$cand' id='cSim' /> 
		<label for='cSim'>Sim</label>";
		
		$cand++;
}
?>
</fieldset>

<fieldset id="Ex11">
<legend> Exercício 11- Consumidores de Quilowwat </legend>

<?php
$cons=1;

echo"<p><label for='cSalm'></label> <input type='text' name='tSalm' id='cSalm'  size='20' maxlength='100' placeholder=' Digite o valor do salário mínimo' /></p> ";
		
while($cons<=5)
{
		echo"<h5> $cons º Consumidor</h5>";
		echo"<p><label for='cGasto'></label> <input type='number' name='tGasto$cons' id='cGasto'  size='20' maxlength='100' placeholder=' Consumo de quilowwat' /></p> ";
		
		echo"<p>Categoria</p>";
		echo"<input type='radio' name='tCat$cons' id='cResidencial' value='Residencial' checked /> 
		<label for='cResidencial'>Residencial</label><br />
		<input type='radio' name='tCat$cons' id='cComercial' value='Comercial' /> 
		<label for='cComercial'>Comercial</label>
		<input type='radio' name='tCat$cons' id='cIndustrial' value='Industrial' /> 
		<label for='cIndustrial'>Industrial</label>";

		
		$cons++;
}
?>
</fieldset>



<input type="submit" name="tEnviar" value="Enviar" />	
<input type="reset" name="tReset" value="Apagar" />	

</form>



</body>
</html>