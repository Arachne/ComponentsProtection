<?php

/**
 * This file is part of the Arachne
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\ComponentsProtection\DI;

use Arachne\Verifier\DI\VerifierExtension;
use Nette\DI\CompilerExtension;

/**
 * @author Jáchym Toušek <enumag@gmail.com>
 */
class ComponentsProtectionExtension extends CompilerExtension
{

	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('handler'))
			->setClass('Arachne\ComponentsProtection\Rules\ActionsRuleHandler')
			->addTag(VerifierExtension::TAG_HANDLER, [
				'Arachne\ComponentsProtection\Rules\Actions',
			]);
	}

}
