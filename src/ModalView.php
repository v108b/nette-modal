<?php

namespace V108B\NetteModal;

use Nette\Application\UI\Control;

abstract class View extends Control
{
	private $window;

	public function __construct(\V108B\NetteModal\Window $window)
	{
		$this->window = $window;
	}

	public function getWindow()
	{
		return $this->window;
	}

	abstract public function getTitle();
	abstract public function render();
}