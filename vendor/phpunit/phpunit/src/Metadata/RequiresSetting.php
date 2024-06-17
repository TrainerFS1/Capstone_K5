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
 */
final class RequiresSetting extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $setting;

    /**
     * @psalm-var non-empty-string
     */
    private readonly string $value;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $setting
     * @psalm-param non-empty-string $value
     */
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class RequiresSetting extends Metadata
{
    private readonly string $setting;
    private readonly string $value;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function __construct(int $level, string $setting, string $value)
    {
        parent::__construct($level);

        $this->setting = $setting;
        $this->value   = $value;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresSetting $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isRequiresSetting(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function setting(): string
    {
        return $this->setting;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function value(): string
    {
        return $this->value;
    }
}
