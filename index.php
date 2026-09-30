<?php

use Soap\Url;

function verificarURL($url) {
    return $url == parse_url($_SERVER ['REQUEST_URI'], PHP_URL_PATH);

}

function verificarmetodo($metodo){
return $metodo == $_SERVER ['REQUEST_METHOD'];

}

$rotas = [

[
    "Url" => "/",
    "metodo" => "get",
    "conteudo" => "página prncipal"
],
[
    "url" => "/perfil",
    "metodo" => "get",
    "conteudo" => "página de perfil",
],
[

    "url" => "/perfil/amigos",
    "metodo" => "get",
    "conteudo" => "página de amigos",
],

foreach ($rotas as $rotas) {
    if(verificarURL($rotas ['Url']) && verificarmetodo($rotas ['metodo'])) {
        echo $rota ['conteudo'];
    }
}
?>