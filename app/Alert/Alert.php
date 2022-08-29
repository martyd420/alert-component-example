<?php

namespace App\Alert;

use Nette\InvalidArgumentException;
use Latte\Engine;
use Nette\HtmlStringable;

final class Alert implements HtmlStringable
{
    private string  $type;
    private string  $uniqid;
    private string  $message;
    private array   $types      = ['success', 'error', 'countdown'];
    private int     $timeout    = 6000;
    private int     $countdown  =0;

    private string $button_text = 'Retry...';
    private string $button_action = "";


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


    public function __toString() : string
    {
        $params = [
            'type'          => $this->type,
            'message'       => $this->message,
            'timeout'       => $this->timeout,
            'uniqid'        => $this->uniqid,
            'countdown'     => $this->countdown,
            'button_text'   => $this->button_text,
            'button_action' => $this->button_action,
        ];

        $latte = new Engine();

        return $latte->renderToString(__DIR__ . '/templates/alertTemplate.latte', $params);
    }


    public function setCountdown(int $seconds) : void
    {
        $this->countdown = $seconds;
        $this->timeout = 2 * ($seconds * 1000);
    }


    public function setButtonText(string $button_text): void
    {
        $this->button_text = $button_text;
    }


    public function setButtonAction(string $button_action): void
    {
        $this->button_action = $button_action;
    }


}