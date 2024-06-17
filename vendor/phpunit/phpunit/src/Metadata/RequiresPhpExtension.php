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

use PHPUnit\Metadata\Version\Requirement;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class RequiresPhpExtension extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $extension;
    private readonly ?Requirement $versionRequirement;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $extension
     */
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class RequiresPhpExtension extends Metadata
{
    private readonly string $extension;
    private readonly ?Requirement $versionRequirement;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function __construct(int $level, string $extension, ?Requirement $versionRequirement)
    {
        parent::__construct($level);

        $this->extension          = $extension;
        $this->versionRequirement = $versionRequirement;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresPhpExtension $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isRequiresPhpExtension(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function extension(): string
    {
        return $this->extension;
    }

    /**
     * @psalm-assert-if-true !null $this->versionRequirement
     */
    public function hasVersionRequirement(): bool
    {
        return $this->versionRequirement !== null;
    }

    /**
     * @throws NoVersionRequirementException
     */
    public function versionRequirement(): Requirement
    {
        if ($this->versionRequirement === null) {
            throw new NoVersionRequirementException;
        }

        return $this->versionRequirement;
    }
}
