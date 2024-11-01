<?php
$salario = 1000;
$tempo_servico = 12;
$tem_reclamacoes = false;
if ($salario > 1000)
{
	if ($tempo_servico >= 12)
	{
		if ($tem_reclamacoes != true)
		{
				echo '<h1>parabéns, você foi promovido!</h1>';
		}
	}
}	