<?php
/**
 * Módulo iugu Pix para WHMCS
 * @copyright	2023 Gofas Software
 * @see			https://gofas.net/?p=14950
 * @license		https://gofas.net/?p=9340
 * @support		https://gofas.net/?p=14299
 * @version		1.0.0
 */
if((int)substr(preg_replace('/[^\da-z]/i','',phpversion()),0,2)>=(int)81){
	require __DIR__.'/gofasiugupix/index.php';
}
if((int)substr(preg_replace('/[^\da-z]/i','',phpversion()),0,2)<=(int)74){
    require __DIR__.'/gofasiugupix/indexd.php';
}