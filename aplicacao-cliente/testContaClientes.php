<?php

    $url = "http://localhost/api-controle-financeiro";

    $classe = 'TestContaService.class.php';

    $url_ = $url.'/'.$classe;

    $result = file_get_contents($url_);

    print_r(json_decode($result, 1));

?>