<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Api;

use function array_flip;
<<<<<<< HEAD
use function array_key_exists;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function array_unique;
use function assert;
use function strtolower;
use function trim;
use PHPUnit\Framework\TestSize\TestSize;
use PHPUnit\Metadata\Covers;
use PHPUnit\Metadata\CoversClass;
use PHPUnit\Metadata\CoversFunction;
use PHPUnit\Metadata\Group;
use PHPUnit\Metadata\Parser\Registry;
use PHPUnit\Metadata\Uses;
use PHPUnit\Metadata\UsesClass;
use PHPUnit\Metadata\UsesFunction;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Groups
{
    /**
<<<<<<< HEAD
     * @var array<string, array<int, string>>
     */
    private static array $groupCache = [];

    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     *
     * @psalm-return array<int, string>
     */
    public function groups(string $className, string $methodName, bool $includeVirtual = true): array
    {
        $key = $className . '::' . $methodName . '::' . $includeVirtual;

        if (array_key_exists($key, self::$groupCache)) {
            return self::$groupCache[$key];
        }

=======
     * @psalm-param class-string $className
     *
     * @psalm-return list<string>
     */
    public function groups(string $className, string $methodName, bool $includeVirtual = true): array
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $groups = [];

        foreach (Registry::parser()->forClassAndMethod($className, $methodName)->isGroup() as $group) {
            assert($group instanceof Group);

            $groups[] = $group->groupName();
        }

        if ($groups === []) {
            $groups[] = 'default';
        }

        if (!$includeVirtual) {
<<<<<<< HEAD
            return self::$groupCache[$key] = array_unique($groups);
=======
            return array_unique($groups);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        foreach (Registry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
            if ($metadata->isCoversClass() || $metadata->isCoversFunction()) {
                assert($metadata instanceof CoversClass || $metadata instanceof CoversFunction);

<<<<<<< HEAD
                $groups[] = '__phpunit_covers_' . $this->canonicalizeName($metadata->asStringForCodeUnitMapper());
=======
                $groups[] = '__phpunit_covers_' . self::canonicalizeName($metadata->asStringForCodeUnitMapper());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                continue;
            }

            if ($metadata->isCovers()) {
                assert($metadata instanceof Covers);

<<<<<<< HEAD
                $groups[] = '__phpunit_covers_' . $this->canonicalizeName($metadata->target());
=======
                $groups[] = '__phpunit_covers_' . self::canonicalizeName($metadata->target());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                continue;
            }

            if ($metadata->isUsesClass() || $metadata->isUsesFunction()) {
                assert($metadata instanceof UsesClass || $metadata instanceof UsesFunction);

<<<<<<< HEAD
                $groups[] = '__phpunit_uses_' . $this->canonicalizeName($metadata->asStringForCodeUnitMapper());
=======
                $groups[] = '__phpunit_uses_' . self::canonicalizeName($metadata->asStringForCodeUnitMapper());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                continue;
            }

            if ($metadata->isUses()) {
                assert($metadata instanceof Uses);

<<<<<<< HEAD
                $groups[] = '__phpunit_uses_' . $this->canonicalizeName($metadata->target());
            }
        }

        return self::$groupCache[$key] = array_unique($groups);
=======
                $groups[] = '__phpunit_uses_' . self::canonicalizeName($metadata->target());
            }
        }

        return array_unique($groups);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
     * @psalm-param non-empty-string $methodName
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function size(string $className, string $methodName): TestSize
    {
        $groups = array_flip($this->groups($className, $methodName));

        if (isset($groups['large'])) {
            return TestSize::large();
        }

        if (isset($groups['medium'])) {
            return TestSize::medium();
        }

        if (isset($groups['small'])) {
            return TestSize::small();
        }

        return TestSize::unknown();
    }

<<<<<<< HEAD
    private function canonicalizeName(string $name): string
=======
    private static function canonicalizeName(string $name): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return strtolower(trim($name, '\\'));
    }
}
