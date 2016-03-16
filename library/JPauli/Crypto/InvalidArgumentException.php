<?php
namespace JPauli\Crypto;

class InvalidArgumentException extends \InvalidArgumentException
{
	public function __construct($message, ...$args)
	{
		parent::__construct(vsprintf($message."\n", $args));
	}
}