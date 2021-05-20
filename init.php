  <?php

  require_once __DIR__.'/vendor/autoload.php';

  $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');

  $twig = new Twig_Environment($loader, array(
        'cache'       => false,
        'auto_reload' => true,
        'debug'       => true,
    ));
    
 ?>