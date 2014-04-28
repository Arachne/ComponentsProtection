<?php

namespace Tests\Integration\Classes;

use Nette\Application\UI\Control;

/**
 * @author Jáchym Toušek
 */
class BlockControl extends Control
{

	public function render()
	{
		$this->template->setFile(__DIR__ . '/../../templates/block.latte');
		$this->template->render();
	}

}
