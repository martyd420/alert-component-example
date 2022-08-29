<?php

namespace App\Alert;

use Nette\InvalidArgumentException;
use Latte\Engine;
use Nette\HtmlStringable;

final class Alert implements HtmlStringable
{
    private $type;
    private $types      = ['success', 'error', 'countdown'];
    private $message;
    private $timeout = 4096;
    private $uniqid;
    private $countdown;


    public function __construct(string $message, string $type = 'success')
    {
        if (!in_array($type, $this->types)) {
            $error_msg = '$type must be one of: ' . join('|', $this->types) . ' (' . $type . ')';
            throw new InvalidArgumentException($error_msg);
        }

        $this->message  = $message;
        $this->type     = $type;
        $this->uniqid   = uniqid();
    }


    /**
     * @return string
     */
    public function __toString() : string
    {
        $params = [
            'type'      => $this->type,
            'message'   => $this->message,
            'timeout'   => $this->timeout,
            'uniqid'    => $this->uniqid,
            'countdown' => $this->countdown,
        ];

        $latte = new Engine();

        return $latte->renderToString(__DIR__ . './templates/alertTemplate.latte', $params);
    }

    public function setCountdown(int $seconds) : void
    {
        $this->countdown = $seconds;
    }

}