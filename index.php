<?php

use calculadora\CalculadoraProcessor;
use service\CalculadoraHandler;
use Thrift\Factory\TBinaryProtocolFactory;
use Thrift\Factory\TTransportFactory;
use Thrift\Server\TServerSocket;
use Thrift\Server\TSimpleServer;

require_once "vendor/autoload.php";

define("PROJECT_ROOT", __DIR__);

$serviceProcessor = new CalculadoraProcessor(new CalculadoraHandler());
$transportFactory = new TTransportFactory();
$protocoloFactory = new TBinaryProtocolFactory();
$transport = new TServerSocket("0.0.0.0", "5000");
$server = new TSimpleServer(
	$serviceProcessor,
	$transport,
	$transportFactory,
	$transportFactory,
	$protocoloFactory,
	$protocoloFactory
);
echo "Serving";
$server->serve();