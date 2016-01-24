<?php

namespace Service\Mail;


class Message
{
    public $to = null;

    public $from = null;

    public $subject= null;

    public $body = null;

    public function __construct($to, $from, $subject, $body)
    {

    }
}