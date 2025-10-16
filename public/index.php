<?php
declare(strict_types=1);
require_once __DIR__ .'/../config/config.php';

spl_autoload_register(function($class){

  foreach([__DIR__.'/../core', __DIR__ . '/../app/Controllers', __DIR__ . '/../app/Models'] as $b){
    $f = $b . '/' . $class . '.php';

    if(file_exists($f)){
      require $f;
      return;

    }
  }
});

if(!is_dir(UPLOAD_DIR)){
  mkdir(UPLOAD_DIR, 0777, true);
}

$basePath = rtrim(str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME']??'/')), '/');
$route = new Router($basePath);

$route->get('/', [MensajeController::class, 'index']);
$route->get('/mensajes', [MensajeController::class, 'index']);
$route->get('/mensajes/create', [MensajeController::class, 'create']); 
$route->get('/mensajes/show', [MensajeController::class, 'show']);    
$route->get('/mensajes/edit', [MensajeController::class, 'edit']);    
$route->post('/mensajes/store', [MensajeController::class, 'store']);     
$route->post('/mensajes/update', [MensajeController::class, 'update']);   
$route->post('/mensajes/destroy', [MensajeController::class, 'destroy']);  

$route->dispatch();

