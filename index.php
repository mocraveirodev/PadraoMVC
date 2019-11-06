<?php
    $rota = key($_GET)?key($_GET):"home";

    $controller = $rota."Controller";

    include "controller/".$controller.".php";

    $obj = new $controller();

    $obj->acao($rota);

    // var_dump($rota);
?>