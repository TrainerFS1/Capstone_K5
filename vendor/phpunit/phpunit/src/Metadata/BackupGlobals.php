<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class BackupGlobals extends Metadata
{
    private readonly bool $enabled;

<<<<<<< HEAD
    /**
     * @psalm-param 0|1 $level
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function __construct(int $level, bool $enabled)
    {
        parent::__construct($level);

        $this->enabled = $enabled;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true BackupGlobals $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isBackupGlobals(): bool
    {
        return true;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }
}
