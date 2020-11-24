<?php
//conectar
function conectar () { 
    $aParametros = 'host=127.0.0.1 port=5433 dbname=trabalho user=postgres password=postgres';
    
    $oConexao = pg_connect($aParametros);
    return $oConexao;
}