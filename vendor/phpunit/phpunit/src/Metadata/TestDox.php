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
final class TestDox extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $text;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $text
     */
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class TestDox extends Metadata
{
    private readonly string $text;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function __construct(int $level, string $text)
    {
        parent::__construct($level);

        $this->text = $text;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true TestDox $this
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isTestDox(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function text(): string
    {
        return $this->text;
    }
}
