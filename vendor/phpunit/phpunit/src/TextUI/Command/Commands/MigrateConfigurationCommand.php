<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Command;

use function copy;
use function file_put_contents;
<<<<<<< HEAD
use function sprintf;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\TextUI\XmlConfiguration\Migrator;
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrateConfigurationCommand implements Command
{
    private readonly string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function execute(): Result
    {
<<<<<<< HEAD
        try {
            $migrated = (new Migrator)->migrate($this->filename);

            copy($this->filename, $this->filename . '.bak');

            file_put_contents($this->filename, $migrated);

            return Result::from(
                sprintf(
                    'Created backup:         %s.bak%sMigrated configuration: %s%s',
                    $this->filename,
                    PHP_EOL,
                    $this->filename,
                    PHP_EOL,
                ),
            );
        } catch (Throwable $t) {
            return Result::from(
                sprintf(
                    'Migration of %s failed:%s%s%s',
                    $this->filename,
                    PHP_EOL,
                    $t->getMessage(),
                    PHP_EOL,
                ),
                Result::FAILURE,
            );
        }
=======
        copy($this->filename, $this->filename . '.bak');

        $buffer        = 'Created backup:         ' . $this->filename . '.bak' . PHP_EOL;
        $shellExitCode = Result::SUCCESS;

        try {
            file_put_contents(
                $this->filename,
                (new Migrator)->migrate($this->filename)
            );

            $buffer .= 'Migrated configuration: ' . $this->filename . PHP_EOL;
        } catch (Throwable $t) {
            $buffer .= 'Migration failed: ' . $t->getMessage() . PHP_EOL;

            $shellExitCode = Result::FAILURE;
        }

        return Result::from($buffer, $shellExitCode);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
