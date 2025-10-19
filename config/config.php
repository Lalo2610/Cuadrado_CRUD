<?php
//configuracion para la conexion a la base de datos
define(constant_name:'DB_HOST', value:'127.0.0.1');
define(constant_name:'DB_NAME', value:'cuadrado_db');
define(constant_name:'DB_USER', value:'root');
define(constant_name:'DB_PASS', value:'');
define(constant_name:'DB_PORT', value:'3306');
define(constant_name:'BASE_URL', value:'/tarea/crud_cuadrado/public/');
define(constant_name:'UPLOAD_DIR', value:__DIR__.'/../public/imagenes');
define(constant_name:'MAX_IMAGE_BYTES', value:'2 * 1024 * 1024');
define(constant_name:'ALLOWED_EXT', value:['jpg','png','jpeg','gif','webp']);
