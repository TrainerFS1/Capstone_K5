<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Filter;

use function array_map;
use function array_push;
use function in_array;
use function spl_object_id;
<<<<<<< HEAD
use PHPUnit\Framework\Test;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Framework\TestSuite;
use RecursiveFilterIterator;
use RecursiveIterator;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends RecursiveFilterIterator
{
    /**
     * @psalm-var list<int>
     */
    protected array $groupTests = [];

<<<<<<< HEAD
    /**
     * @psalm-param RecursiveIterator<int, Test> $iterator
     * @psalm-param list<non-empty-string> $groups
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(RecursiveIterator $iterator, array $groups, TestSuite $suite)
    {
        parent::__construct($iterator);

<<<<<<< HEAD
        foreach ($suite->groupDetails() as $group => $tests) {
            if (in_array((string) $group, $groups, true)) {
                $testHashes = array_map(
                    'spl_object_id',
                    $tests,
=======
        foreach ($suite->getGroupDetails() as $group => $tests) {
            if (in_array((string) $group, $groups, true)) {
                $testHashes = array_map(
                    'spl_object_id',
                    $tests
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                array_push($this->groupTests, ...$testHashes);
            }
        }
    }

    public function accept(): bool
    {
        $test = $this->getInnerIterator()->current();

        if ($test instanceof TestSuite) {
            return true;
        }

        return $this->doAccept(spl_object_id($test));
    }

    abstract protected function doAccept(int $id): bool;
}
