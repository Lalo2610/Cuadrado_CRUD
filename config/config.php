<?php
//configuracion para la conexion a la base de datos
define('DB_HOST', value:'127.0.0.1');
define('DB_NAME', value:'cuadrado_DB');
define('DB_USER', value:'root');
define('DB_PASS', value:'');
define('DB_PORT', value:'3306');
define('BASE_URL', value:'/crud_cuadrado/public/');
define('UPLOAD_DIR', value:__DIR__.'/../public/imagenes');
define('MAX_IMAGE_BYTES', value:'2 * 1024 * 1024');
define('ALLOWED_EXT', value:['jpg','png','jpeg','gif','webp']);
