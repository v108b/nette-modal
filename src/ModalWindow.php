<?php

namespace V108B\NetteModal;

use Nette\Application\UI\Control;

class Window extends Control
{
	/** @persistent */
	public $view;

	public function showView(\V108B\NetteModal\View $view)
	{
		$this->view = $view->getName();
	}

	public function handleClose()
	{
		$this->close();
	}

	public function close()
	{
		if ($this->view) {
			unset($this[$this->view]);
			$this->view = null;
		}
		$this->presenter->redirect('this');
	}

	public function render()
	{
		$this->template->setFile(__DIR__ . '/modalWindow.latte');
		$this->template->view = $this->view ? $this[$this->view] : null;
		$this->template->render();
	}
}