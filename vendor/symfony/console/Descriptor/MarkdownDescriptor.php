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
use Symfony\Component\Console\Helper\Helper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Markdown descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class MarkdownDescriptor extends Descriptor
{
<<<<<<< HEAD
    public function describe(OutputInterface $output, object $object, array $options = []): void
=======
    public function describe(OutputInterface $output, object $object, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $decorated = $output->isDecorated();
        $output->setDecorated(false);

        parent::describe($output, $object, $options);

        $output->setDecorated($decorated);
    }

<<<<<<< HEAD
    protected function write(string $content, bool $decorated = true): void
=======
    protected function write(string $content, bool $decorated = true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::write($content, $decorated);
    }

<<<<<<< HEAD
    protected function describeInputArgument(InputArgument $argument, array $options = []): void
=======
    protected function describeInputArgument(InputArgument $argument, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->write(
            '#### `'.($argument->getName() ?: '<none>')."`\n\n"
            .($argument->getDescription() ? preg_replace('/\s*[\r\n]\s*/', "\n", $argument->getDescription())."\n\n" : '')
            .'* Is required: '.($argument->isRequired() ? 'yes' : 'no')."\n"
            .'* Is array: '.($argument->isArray() ? 'yes' : 'no')."\n"
            .'* Default: `'.str_replace("\n", '', var_export($argument->getDefault(), true)).'`'
        );
    }

<<<<<<< HEAD
    protected function describeInputOption(InputOption $option, array $options = []): void
=======
    protected function describeInputOption(InputOption $option, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $name = '--'.$option->getName();
        if ($option->isNegatable()) {
            $name .= '|--no-'.$option->getName();
        }
        if ($option->getShortcut()) {
            $name .= '|-'.str_replace('|', '|-', $option->getShortcut()).'';
        }

        $this->write(
            '#### `'.$name.'`'."\n\n"
            .($option->getDescription() ? preg_replace('/\s*[\r\n]\s*/', "\n", $option->getDescription())."\n\n" : '')
            .'* Accept value: '.($option->acceptValue() ? 'yes' : 'no')."\n"
            .'* Is value required: '.($option->isValueRequired() ? 'yes' : 'no')."\n"
            .'* Is multiple: '.($option->isArray() ? 'yes' : 'no')."\n"
            .'* Is negatable: '.($option->isNegatable() ? 'yes' : 'no')."\n"
            .'* Default: `'.str_replace("\n", '', var_export($option->getDefault(), true)).'`'
        );
    }

<<<<<<< HEAD
    protected function describeInputDefinition(InputDefinition $definition, array $options = []): void
=======
    protected function describeInputDefinition(InputDefinition $definition, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($showArguments = \count($definition->getArguments()) > 0) {
            $this->write('### Arguments');
            foreach ($definition->getArguments() as $argument) {
                $this->write("\n\n");
<<<<<<< HEAD
                $this->describeInputArgument($argument);
=======
                if (null !== $describeInputArgument = $this->describeInputArgument($argument)) {
                    $this->write($describeInputArgument);
                }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }

        if (\count($definition->getOptions()) > 0) {
            if ($showArguments) {
                $this->write("\n\n");
            }

            $this->write('### Options');
            foreach ($definition->getOptions() as $option) {
                $this->write("\n\n");
<<<<<<< HEAD
                $this->describeInputOption($option);
=======
                if (null !== $describeInputOption = $this->describeInputOption($option)) {
                    $this->write($describeInputOption);
                }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }
    }

<<<<<<< HEAD
    protected function describeCommand(Command $command, array $options = []): void
=======
    protected function describeCommand(Command $command, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($options['short'] ?? false) {
            $this->write(
                '`'.$command->getName()."`\n"
                .str_repeat('-', Helper::width($command->getName()) + 2)."\n\n"
                .($command->getDescription() ? $command->getDescription()."\n\n" : '')
                .'### Usage'."\n\n"
<<<<<<< HEAD
                .array_reduce($command->getAliases(), fn ($carry, $usage) => $carry.'* `'.$usage.'`'."\n")
=======
                .array_reduce($command->getAliases(), function ($carry, $usage) {
                    return $carry.'* `'.$usage.'`'."\n";
                })
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );

            return;
        }

        $command->mergeApplicationDefinition(false);

        $this->write(
            '`'.$command->getName()."`\n"
            .str_repeat('-', Helper::width($command->getName()) + 2)."\n\n"
            .($command->getDescription() ? $command->getDescription()."\n\n" : '')
            .'### Usage'."\n\n"
<<<<<<< HEAD
            .array_reduce(array_merge([$command->getSynopsis()], $command->getAliases(), $command->getUsages()), fn ($carry, $usage) => $carry.'* `'.$usage.'`'."\n")
=======
            .array_reduce(array_merge([$command->getSynopsis()], $command->getAliases(), $command->getUsages()), function ($carry, $usage) {
                return $carry.'* `'.$usage.'`'."\n";
            })
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        if ($help = $command->getProcessedHelp()) {
            $this->write("\n");
            $this->write($help);
        }

        $definition = $command->getDefinition();
        if ($definition->getOptions() || $definition->getArguments()) {
            $this->write("\n\n");
            $this->describeInputDefinition($definition);
        }
    }

<<<<<<< HEAD
    protected function describeApplication(Application $application, array $options = []): void
=======
    protected function describeApplication(Application $application, array $options = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $describedNamespace = $options['namespace'] ?? null;
        $description = new ApplicationDescription($application, $describedNamespace);
        $title = $this->getApplicationTitle($application);

        $this->write($title."\n".str_repeat('=', Helper::width($title)));

        foreach ($description->getNamespaces() as $namespace) {
            if (ApplicationDescription::GLOBAL_NAMESPACE !== $namespace['id']) {
                $this->write("\n\n");
                $this->write('**'.$namespace['id'].':**');
            }

            $this->write("\n\n");
<<<<<<< HEAD
            $this->write(implode("\n", array_map(fn ($commandName) => sprintf('* [`%s`](#%s)', $commandName, str_replace(':', '', $description->getCommand($commandName)->getName())), $namespace['commands'])));
=======
            $this->write(implode("\n", array_map(function ($commandName) use ($description) {
                return sprintf('* [`%s`](#%s)', $commandName, str_replace(':', '', $description->getCommand($commandName)->getName()));
            }, $namespace['commands'])));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        foreach ($description->getCommands() as $command) {
            $this->write("\n\n");
<<<<<<< HEAD
            $this->describeCommand($command, $options);
=======
            if (null !== $describeCommand = $this->describeCommand($command, $options)) {
                $this->write($describeCommand);
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }

    private function getApplicationTitle(Application $application): string
    {
        if ('UNKNOWN' !== $application->getName()) {
            if ('UNKNOWN' !== $application->getVersion()) {
                return sprintf('%s %s', $application->getName(), $application->getVersion());
            }

            return $application->getName();
        }

        return 'Console Tool';
    }
}
