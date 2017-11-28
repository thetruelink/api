<?php

namespace DataBundle\Rabbitmq;

use PhpAmqpLib\Exception\AMQPIOException;
use PhpAmqpLib\Exception\AMQPRuntimeException;
use PhpAmqpLib\Exception\AMQPTimeoutException;
//require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RbmqProvider {




    public function execute($message){

        $connection = new AMQPStreamConnection(
            'localhost',
             5672,
            'guest',
            'guest'
        );

        $channel = $connection->channel();

        $channel->queue_declare('status_change', false, false, false, false);
        //$channel->exchange_declare('status_change', 'fanout', false, false, false);

        $msg = new AMQPMessage('message hello');

        $channel->basic_publish($msg, '',  'status_change');

        $channel->close();
        $connection->close();


    }

    


} 