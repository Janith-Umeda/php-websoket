<?php
include dirname(__DIR__).'/src/Chat.php';
use Ratchet\Server\IoServer;
use MyApp\Chat;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

    require dirname(__DIR__) . '/vendor/autoload.php';

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Chat()
            )
        ),
        8081
    );

    $server->run();