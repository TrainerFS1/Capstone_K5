<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
abstract class Descriptor implements DescriptorInterface
{
<<<<<<< HEAD
    protected OutputInterface $output;

    public function describe(OutputInterface $output, object $object, array $options = []): void
=======
    /**
     * @var OutputInterface
     */
    protected $output;

    public function describe(OutputInterface $output, object $object, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->output = $output;

        match (true) {
            $object instanceof InputArgument => $this->describeInputArgument($object, $options),
            $object instanceof InputOption => $this->describeInputOption($object, $options),
            $object instanceof InputDefinition => $this->describeInputDefinition($object, $options),
            $object instanceof Command => $this->describeCommand($object, $options),
            $object instanceof Application => $this->describeApplication($object, $options),
            default => throw new InvalidArgumentException(sprintf('Object of type "%s" is not describable.', get_debug_type($object))),
        };
    }

<<<<<<< HEAD
    protected function write(string $content, bool $decorated = false): void
=======
    /**
     * Writes content to output.
     */
    protected function write(string $content, bool $decorated = false)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->output->write($content, false, $decorated ? OutputInterface::OUTPUT_NORMAL : OutputInterface::OUTPUT_RAW);
    }

    /**
     * Describes an InputArgument instance.
     */
<<<<<<< HEAD
    abstract protected function describeInputArgument(InputArgument $argument, array $options = []): void;
=======
    abstract protected function describeInputArgument(InputArgument $argument, array $options = []);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Describes an InputOption instance.
     */
<<<<<<< HEAD
    abstract protected function describeInputOption(InputOption $option, array $options = []): void;
=======
    abstract protected function describeInputOption(InputOption $option, array $options = []);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Describes an InputDefinition instance.
     */
<<<<<<< HEAD
    abstract protected function describeInputDefinition(InputDefinition $definition, array $options = []): void;
=======
    abstract protected function describeInputDefinition(InputDefinition $definition, array $options = []);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Describes a Command instance.
     */
<<<<<<< HEAD
    abstract protected function describeCommand(Command $command, array $options = []): void;
=======
    abstract protected function describeCommand(Command $command, array $options = []);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Describes an Application instance.
     */
<<<<<<< HEAD
    abstract protected function describeApplication(Application $application, array $options = []): void;
=======
    abstract protected function describeApplication(Application $application, array $options = []);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
