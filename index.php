<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	// $sql = new Hcode\DB\Sql();
	// $results = $sql->select("SELECT * FROM tb_users");
	// echo json_encode($results);
	
	// cria uma pagina
	$page = new Page();
	
	// add conteudo da pagina
	$page->setTpl("index");

});

$app->run();

 ?>