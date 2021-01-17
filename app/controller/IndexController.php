<?php 

	class IndexController
	{
		#RESPONSAVEL POR CARREGAR A PAGINA INDEX
		public function index()
		{
		    	//$requests = Adm::selecionaRequ
		    	$loader = new \Twig\Loader\FilesystemLoader('app/view');
		    	$twig = new \Twig\Environment($loader, [
		    	    'cache' => 'app/cache',
		    	    'auto_reload' => true
		    	]);
		    	$template = $twig->load('index.html');
		    	$parametros = array();

		    	#URL QUE ESTÁ NAS VIEWS
		    	$parametros['url'] = "http://localhost/Aproximar/";

		    	
		    	$conteudo = $template->render($parametros);
		    	echo $conteudo;
		}
		#RESPONSAVEL POR CARREGAR A PAGINA CADASTRO
		public function cadastro()
		{
			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader, [
			    'cache' => 'app/cache',
			    'auto_reload' => true
			]);
			$template = $twig->load('Inscrever-se.html');
			$parametros = array();

			#URL QUE ESTÁ NAS VIEWS
			$parametros['url'] = "http://localhost/Aproximar/";
		
			$conteudo = $template->render($parametros);
			echo $conteudo;
		}
		#RESPONSAVEL POR CARREGAR A PAGINA SOBRE
		public function sobre()
		{
			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader, [
			    'cache' => 'app/cache',
			    'auto_reload' => true
			]);
			$template = $twig->load('Sobre-Nós.html');
			$parametros = array();

			#URL QUE ESTÁ NAS VIEWS
			$parametros['url'] = "http://localhost/Aproximar/";
		
			$conteudo = $template->render($parametros);
			echo $conteudo;
		}
		//função deslogar do sistema
		public function logout()
		{
		    unset($_SESSION['usr']);
		    session_destroy();
		    header('Location: http://localhost/Aproximar/login');
		}
	}
 ?>