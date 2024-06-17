<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use DOMElement;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @psalm-import-type TestType from \SebastianBergmann\CodeCoverage\CodeCoverage
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class Tests
{
    private readonly DOMElement $contextNode;

    public function __construct(DOMElement $context)
    {
        $this->contextNode = $context;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param TestType $result
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function addTest(string $test, array $result): void
    {
        $node = $this->contextNode->appendChild(
            $this->contextNode->ownerDocument->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                'test',
            ),
=======
                'test'
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                'test'
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $node->setAttribute('name', $test);
        $node->setAttribute('size', $result['size']);
        $node->setAttribute('status', $result['status']);
    }
}
