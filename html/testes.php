<?php
	echo '<body>
	<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	';
	include_once('lib.php');
	include_once('..DB/factory.php');
	$conec = getConn();
	$d = $conec->query("show tables;");
	$d = mysqli_fetch_all($d, MYSQLI_ASSOC);
	foreach ($d as $key => $value) {
		echo "<h1>" . $value['Tables_in_vivaleve'] . "</h1>\n<br>\n";
		$t = new Table($value['Tables_in_vivaleve']);
		echo "<br> \n";
		$t->write();
	}

	echo "</body>
	</html>";


	//Useful input data;

		/*
	include_once('../DAO/Programa_emagrecimentoDAO.php');
	include_once('../Classes/Programa_emagrecimento.php');
	$p = new Programa_emagrecimento("Crianças", "Considerando que 1 em cada 3 crianças de 5 a 9 anos estão acima do peso segundo a OMS. Ensinaremos seu filho a comer adequadamente de maneira lúdica e divertida. Segue abaixo o programa personalizado infantil: Psicológico (Roda de Conversa, atendimento individual e familiar); - Nutricionista (Oficina Lúdica de Alimentação); - Meditação e Yoga voltada para Ansiedade infantil auxiliando no emagrecimento.", "images/crianças-saudavel.jpg");
	var_dump($p);
	Programa_emagrecimentoDAO::create($p);
	$p = new Programa_emagrecimento("Espaço Gestante pós parto", "Quais cuidados devo ter com a alimentação na gestação? A má nutrição materna pode levar ao déficit no desenvolvimento do bebê. A gestante deve se alimentar bem sim, mas com qualidade e sem exagerar na quantidade. Pensando nisso, criamos um programa personalizado para bem estar e saúde da gestante:
                             Psicológico (atendimento individual e grupo de apoio);
                            - Nutricionista (Prevenção e tratamento de prisão de ventre, azia, anemia, deficiência hormonal);
                            - Studio para Atividades Físicas, Meditação e Massagem.", "images/gestante.jpg");
	Programa_emagrecimentoDAO::create($p);
	$p = new Programa_emagrecimento("Melhor Idade", "Entendemos que mudanças que o corpo sofre durante a terceira idade exigem uma alimentação diferente das outras fases da vida. O processo de envelhecimento vem acompanhado de uma série de mudanças na função hormonal, no metabolismo energético e na atividade diária, o que afeta a necessidade de nutrientes.", "images/idoso-idade.jpg");
	Programa_emagrecimentoDAO::create($p);
	$p = new Programa_emagrecimento("Cozinhar com Nutricionista", "Quer emagrecer e não sabe como preparar uma alimentação saborosa e saudável? Nós podemos te ajudar!<br>
                                Formamos grupos para aprender a cozinhar com uma Nutricionista.<br>
                                Parte tética e prática 8 horas.", "images/cozinhar-com-nutricionista-emagrecer-programa.jpg");
	Programa_emagrecimentoDAO::create($p);

	include_once('../DAO/Produto_PlanoDAO.php');
	include_once('..Classes/Produto_Plano.php');
	$p = new Produto_Plano(1, 1);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(2, 1);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(4, 1);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(5, 1);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(10, 1);
	Produto_PlanoDAO::create($p);

	$p = new Produto_Plano(1, 2);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(2, 2);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(4, 2);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(5, 2);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(9, 2);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(10, 2);
	Produto_PlanoDAO::create($p);

	$p = new Produto_Plano(1, 3);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(3, 3);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(4, 3);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(5, 3);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(6, 3);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(9, 3);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(10, 3);
	Produto_PlanoDAO::create($p);

	$p = new Produto_Plano(1, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(3, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(4, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(5, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(6, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(7, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(8, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(9, 4);
	Produto_PlanoDAO::create($p);
	$p = new Produto_Plano(10, 4);
	Produto_PlanoDAO::create($p);		
	include_once('../DAO/PlanoDAO.php');
	include_once('..Classes/Plano.php');
	$p = new Plano("Básico", "3 meses + Periodo de 3 meses de Manutenção", 1);
	PlanoDAO::create($p);
	$p = new Plano("Intermediário", "3 meses + Periodo de 3 meses de Manutenção", 2);
	PlanoDAO::create($p);
	$p = new Plano("Completo", "3 meses + Periodo de 3 meses de Manutenção", 3);
	PlanoDAO::create($p);
	$p = new Plano("Plus", "3 meses + Periodo de 3 meses de Manutenção", 4);
	PlanoDAO::create($p);
	include_once('../DAO/ProdutosDAO.php');
	include_once('..Classes/Produtos.php');
	$p = new Produtos("Grupo Terapêutico");
	ProdutosDAO::create($p);
	$p = new Produtos("Consulta Nutricionista");
	ProdutosDAO::create($p);
	$p = new Produtos("Consulta Nutricionista a cada 15 dias");
	ProdutosDAO::create($p);
	$p = new Produtos("Studio[Treino funcional;Pilates;YOGA]");
	ProdutosDAO::create($p);
	$p = new Produtos("Grupo de Meditação");
	ProdutosDAO::create($p);
	$p = new Produtos("Acupuntura Estética");
	ProdutosDAO::create($p);
	$p = new Produtos("Meditação Relaxante ou Drenagem Linfática");
	ProdutosDAO::create($p);
	$p = new Produtos("Massagem Relaxante ou Drenagem Linfática");
	ProdutosDAO::create($p);
	$p = new Produtos("Coaching Individual");
	ProdutosDAO::create($p);
	$p = new Produtos("Consuta com Psicólogo - Inicial/Final do programa");
	ProdutosDAO::create($p);
	$p = new Produtos("Manutenção 3 meses (Consulta com Médico/Coaching/ Nutricionista)");
	ProdutosDAO::create($p);
	include_once('../DAO/Fixos_imagem_paginaDAO.php');
	include_once('..Classes/Fixos_imagem_pagina.php');
	$p = new Fixos_imagem_pagina("index.php", "h2 lead", "images/logo-2.png", "logo");
	Fixos_imagem_paginaDAO::create($p);
	$p = new Fixos_imagem_pagina("services.php", "h2 lead", "images/logo-2.png", "logo");
	Fixos_imagem_paginaDAO::create($p);
	$p = new Fixos_imagem_pagina("planos.php", "center wow", "images/vivendo_leve.jpg", "Garota de braços abertos-Emagrecimento");
	Fixos_imagem_paginaDAO::create($p);
	$p = new Fixos_imagem_pagina("programa_de_emagrecimento.php", "center wow", "images/vivendo_leve.jpg", "Garota de braços abertos-Emagrecimento");
	Fixos_imagem_paginaDAO::create($p);
	include_once('../DAO/ServicoDAO.php');
	include_once('..Classes/Servico.php');
	$p = new Servico("Drenagem Linfática", "Quando o sistema linfático é estimulado, não apenas as toxinas são eliminadas como também gordura. O acúmulo de gordura muitas vezes acontece por certas regiões do corpo estarem obstruídas com toxinas que o linfonodos não conseguem eliminar. Se há o estímulo destas regiões, há a eliminação de gordura e toxina.", "images/drenagem-linfatica.jpg", "Bruna perdeu 10kg em três semana como nosso programa Gestante pós parto.", "images/portfolio/recent/item5.png");
		ServicoDAO::create($p);
	$p = new Servico("Treinamento Funcional", "O treinamento funcional emagrece e define o corpo, portanto, é uma ótima opção para aquelas pessoas que já estão cansadas de ficar horas e horas fazendo exercícios chatos. Normalmente quem adere a essa nova moda está em busca de uma atividade física que seja mais dinâmica, interativa, divertida e realmente eficaz.", "images/treinamento-funcional.jpg", "Bruna perdeu 10kg em três semana como nosso programa Gestante pós parto.", "images/portfolio/recent/item6.png");
		ServicoDAO::create($p);
		$p = new Parceiro("Akzo Nobel", "https://google.com", "images/partners/partner1.png");
		ParceiroDAO::create($p);
		
		$p = new Parceiro("Alberta Centennial", "https://google.com", "images/partners/partner2.png");
		ParceiroDAO::create($p);

		$p = new Parceiro("Alamo Water", "https://google.com", "images/partners/partner3.png");
		ParceiroDAO::create($p);

		$p = new Parceiro("ASTD", "https://google.com", "images/partners/partner4.png");
		ParceiroDAO::create($p);

		$p = new Parceiro("Health", "https://google.com", "images/partners/partner5.png");
		ParceiroDAO::create($p);
		
		$p = new Fixos_texto_pagina("/about-us.php", "lead", "Viva Leve é um Centro de Emagrecimento Saudável focado em cuidar de seu bem estar psicológico, mental eaa físico. A OMS (Organização Mundial da Saúde) aponta a obesidade como um dos maiores problemas de saúde pública no mundo, alguns levantamentos apontam que no Brasil acima de 50% da população está na faixa de sobrepeso e obesidade. Pensando em gerar soluções especializadas, o Centro de Emagrecimento Saudável Viva Leve desenvolveu um programa preventivo de emagrecimento totalmente personalizado e desenvolvido por uma equipe Interdisciplinar <br>formada por médicos, nutricionistas, psicólogos e educadores físicos.<br> Um espaço criado para sua saúde, movimento e tranquilidade");
		Fixos_texto_paginaDAO::create($p);
		$p = new Fixos_texto_pagina("/index.php", "lead", "Viva Leve é um Centro enfocado no bem estar psicológico mental e físico das pessoas!");
		Fixos_texto_paginaDAO::create($p);
		$p = new Fixos_texto_pagina("/services.php", "lead", "Viva Leve é um Centro enfocado no bem estar psicológico mental e físico das pessoas!");
		Fixos_texto_paginaDAO::create($p);
		$p = new Fixos_texto_pagina("/index.php", "media-body h2", "Tem alguma duvida ou gostaria de um atendimento personalizado?");
		Fixos_texto_paginaDAO::create($p);
		$p = new Fixos_texto_pagina("/index.php", "media-body h2", "Entrem em contato pelo nosso formulario ou ligue para nós +55 11 4168-1090");
		Fixos_texto_paginaDAO::create($p);*/
	
?>