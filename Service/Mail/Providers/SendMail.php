<?php
namespace Service\Providers;

 use Service\Mail\Providers\Interfaces\MailProvider;
 use Configuration\ParametersInterface;
 use Service\Message;

class SendMailProvider implements MailProvider
{
    protected $connection = [];

    public function __construct(ParametersInterface $config)
    {

    }

    public function send($message Message)
    {
    	
    }

    public function getConnection()
    {
    	return $this->connection;
    }
}