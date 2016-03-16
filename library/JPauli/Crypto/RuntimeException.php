<?php
namespace JPauli\Crypto;

class RuntimeException extends \RuntimeException
{
	public function __construct($message, ...$args)
	{
		parent::__construct(vsprintf($message."\n", $args));
	}
}