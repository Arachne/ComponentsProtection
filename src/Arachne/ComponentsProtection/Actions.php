<?php

/**
 * This file is part of the Arachne
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\ComponentsProtection;

use Arachne\Verifier\IAnnotation;
use Nette\Object;

/**
 * @author Jáchym Toušek
 *
 * @Annotation
 * @Target({"METHOD"})
 */
class Actions extends Object implements IAnnotation
{

	/** @var array */
	public $actions = array();

}
