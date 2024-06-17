<?php declare(strict_types=1);
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

<<<<<<< HEAD
use function array_keys;
use function assert;
use function str_starts_with;
use PHPUnit\Framework\MockObject\Stub;
=======
use function assert;
use PHPUnit\Framework\MockObject\MockObject;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * Compares PHPUnit\Framework\MockObject\MockObject instances for equality.
 */
final class MockObjectComparator extends ObjectComparator
{
<<<<<<< HEAD
    public function accepts(mixed $expected, mixed $actual): bool
    {
        return $expected instanceof Stub && $actual instanceof Stub;
=======
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     */
    public function accepts(mixed $expected, mixed $actual): bool
    {
        return $expected instanceof MockObject && $actual instanceof MockObject;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    protected function toArray(object $object): array
    {
<<<<<<< HEAD
        assert($object instanceof Stub);

        $array = parent::toArray($object);

        foreach (array_keys($array) as $key) {
            if (!str_starts_with($key, '__phpunit_')) {
                continue;
            }

            unset($array[$key]);
        }
=======
        assert($object instanceof MockObject);

        $array = parent::toArray($object);

        unset($array['__phpunit_invocationMocker']);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $array;
    }
}
