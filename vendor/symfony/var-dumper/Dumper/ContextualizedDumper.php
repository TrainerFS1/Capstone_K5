<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Dumper;

use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Dumper\ContextProvider\ContextProviderInterface;

/**
 * @author Kévin Thérage <therage.kevin@gmail.com>
 */
class ContextualizedDumper implements DataDumperInterface
{
    private DataDumperInterface $wrappedDumper;
    private array $contextProviders;

    /**
     * @param ContextProviderInterface[] $contextProviders
     */
    public function __construct(DataDumperInterface $wrappedDumper, array $contextProviders)
    {
        $this->wrappedDumper = $wrappedDumper;
        $this->contextProviders = $contextProviders;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return string|null
     */
    public function dump(Data $data)
    {
        $context = $data->getContext();
=======
    public function dump(Data $data)
    {
        $context = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function dump(Data $data)
    {
        $context = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        foreach ($this->contextProviders as $contextProvider) {
            $context[$contextProvider::class] = $contextProvider->getContext();
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return $this->wrappedDumper->dump($data->withContext($context));
=======
        $this->wrappedDumper->dump($data->withContext($context));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->wrappedDumper->dump($data->withContext($context));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
