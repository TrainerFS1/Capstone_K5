<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\MergeExtensionConfigurationPass as BaseMergeExtensionConfigurationPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Ensures certain extensions are always loaded.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MergeExtensionConfigurationPass extends BaseMergeExtensionConfigurationPass
{
    private array $extensions;

    /**
     * @param string[] $extensions
     */
    public function __construct(array $extensions)
    {
        $this->extensions = $extensions;
    }

<<<<<<< HEAD
    public function process(ContainerBuilder $container): void
=======
    public function process(ContainerBuilder $container)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        foreach ($this->extensions as $extension) {
            if (!\count($container->getExtensionConfig($extension))) {
                $container->loadFromExtension($extension, []);
            }
        }

        parent::process($container);
    }
}
