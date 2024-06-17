<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\VarDumper\Cloner\ClonerInterface;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;
use Symfony\Component\VarDumper\Server\Connection;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements EventSubscriberInterface
{
    private ClonerInterface $cloner;
    private DataDumperInterface $dumper;
    private ?Connection $connection;

<<<<<<< HEAD
    public function __construct(ClonerInterface $cloner, DataDumperInterface $dumper, ?Connection $connection = null)
=======
    public function __construct(ClonerInterface $cloner, DataDumperInterface $dumper, Connection $connection = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->cloner = $cloner;
        $this->dumper = $dumper;
        $this->connection = $connection;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function configure()
    {
        $cloner = $this->cloner;
        $dumper = $this->dumper;
        $connection = $this->connection;

<<<<<<< HEAD
        VarDumper::setHandler(static function ($var, ?string $label = null) use ($cloner, $dumper, $connection) {
            $data = $cloner->cloneVar($var);
            if (null !== $label) {
                $data = $data->withContext(['label' => $label]);
            }
=======
        VarDumper::setHandler(static function ($var) use ($cloner, $dumper, $connection) {
            $data = $cloner->cloneVar($var);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            if (!$connection || !$connection->write($data)) {
                $dumper->dump($data);
            }
        });
    }

    public static function getSubscribedEvents(): array
    {
        if (!class_exists(ConsoleEvents::class)) {
            return [];
        }

        // Register early to have a working dump() as early as possible
        return [ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
