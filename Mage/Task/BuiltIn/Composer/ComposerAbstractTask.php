<?php
/*
 * This file is part of the Magallanes package.
*
* (c) Andrés Montañez <andres@andresmontanez.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Mage\Task\BuiltIn\Composer;

use Mage\Task\AbstractTask;

/**
 * Abstract Task for Composer
 *
 * @author Andrés Montañez <andres@andresmontanez.com>
 */
abstract class ComposerAbstractTask extends AbstractTask
{
    protected function getComposerPath()
    {
        return $this->getConfig()->general('composer_path', 'php composer.phar');
    }
}