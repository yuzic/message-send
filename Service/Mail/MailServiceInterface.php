<?php
namespace Service\Mail;

use Service\Message;
/**
 * interface for Mail
 *
 * Interface MailServiceInterface
 * @package Base\Service
 */
interface MailServiceInterface
{
    public function send(Message $message);
}
