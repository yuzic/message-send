<?php
namespace Service\Mail;

use Service\Mail\MailServiceInterface;
use Service\Message;

/**
 * Mail service 
 *
 * @package Base\Service
 */
class MailService implements MailServiceInterface
{
    public $provider = null;

    /**
     * @param QueueProviderInterface $provider
     */
    public function __construct(MailProviderInterface  $provider)
    {
        $this->provider = $provider;
    }


    /**
     *
     * @param  Message $message
     * 
     * @return bool
     */
    public function send(Message $message)
    {
    	return 	$this->getProvider()->send($message);
    }

    /**
     * getProvider 
     * 
     * @return MailProviderInterface
     */
    protected function getProvider()
    {
    	return $this->provider;
    }

}
