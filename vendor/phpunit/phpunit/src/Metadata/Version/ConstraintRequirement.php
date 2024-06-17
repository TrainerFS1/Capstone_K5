<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Version;

use function preg_replace;
use PharIo\Version\Version;
use PharIo\Version\VersionConstraint;

/**
 * @psalm-immutable
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class ConstraintRequirement extends Requirement
{
    private readonly VersionConstraint $constraint;

    public function __construct(VersionConstraint $constraint)
    {
        $this->constraint = $constraint;
    }

    /**
     * @psalm-suppress ImpureMethodCall
     */
    public function isSatisfiedBy(string $version): bool
    {
        return $this->constraint->complies(
<<<<<<< HEAD
<<<<<<< HEAD
            new Version($this->sanitize($version)),
=======
            new Version($this->sanitize($version))
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            new Version($this->sanitize($version))
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * @psalm-suppress ImpureMethodCall
     */
    public function asString(): string
    {
        return $this->constraint->asString();
    }

    private function sanitize(string $version): string
    {
        return preg_replace(
            '/^(\d+\.\d+(?:.\d+)?).*$/',
            '$1',
<<<<<<< HEAD
<<<<<<< HEAD
            $version,
=======
            $version
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $version
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
