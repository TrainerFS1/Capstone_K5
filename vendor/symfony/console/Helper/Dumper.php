<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\Cloner\ClonerInterface;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Dumper
{
    private OutputInterface $output;
    private ?CliDumper $dumper;
    private ?ClonerInterface $cloner;
    private \Closure $handler;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(OutputInterface $output, ?CliDumper $dumper = null, ?ClonerInterface $cloner = null)
=======
    public function __construct(OutputInterface $output, CliDumper $dumper = null, ClonerInterface $cloner = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(OutputInterface $output, CliDumper $dumper = null, ClonerInterface $cloner = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->output = $output;
        $this->dumper = $dumper;
        $this->cloner = $cloner;

        if (class_exists(CliDumper::class)) {
            $this->handler = function ($var): string {
                $dumper = $this->dumper ??= new CliDumper(null, null, CliDumper::DUMP_LIGHT_ARRAY | CliDumper::DUMP_COMMA_SEPARATOR);
                $dumper->setColors($this->output->isDecorated());

                return rtrim($dumper->dump(($this->cloner ??= new VarCloner())->cloneVar($var)->withRefHandles(false), true));
            };
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
            $this->handler = fn ($var): string => match (true) {
                null === $var => 'null',
                true === $var => 'true',
                false === $var => 'false',
                \is_string($var) => '"'.$var.'"',
                default => rtrim(print_r($var, true)),
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $this->handler = function ($var): string {
                return match (true) {
                    null === $var => 'null',
                    true === $var => 'true',
                    false === $var => 'false',
                    \is_string($var) => '"'.$var.'"',
                    default => rtrim(print_r($var, true)),
                };
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            };
        }
    }

    public function __invoke(mixed $var): string
    {
        return ($this->handler)($var);
    }
}
