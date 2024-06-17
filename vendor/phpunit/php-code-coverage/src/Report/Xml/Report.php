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

use function basename;
use function dirname;
use DOMDocument;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
final class Report extends File
{
    public function __construct(string $name)
    {
        $dom = new DOMDocument;
        $dom->loadXML('<?xml version="1.0" ?><phpunit xmlns="https://schema.phpunit.de/coverage/1.0"><file /></phpunit>');

        $contextNode = $dom->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
            'file',
=======
            'file'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'file'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        )->item(0);

        parent::__construct($contextNode);

        $this->setName($name);
    }

    public function asDom(): DOMDocument
    {
        return $this->dom();
    }

    public function functionObject($name): Method
    {
        $node = $this->contextNode()->appendChild(
            $this->dom()->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                'function',
            ),
=======
                'function'
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                'function'
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return new Method($node, $name);
    }

    public function classObject($name): Unit
    {
        return $this->unitObject('class', $name);
    }

    public function traitObject($name): Unit
    {
        return $this->unitObject('trait', $name);
    }

    public function source(): Source
    {
        $source = $this->contextNode()->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
            'source',
=======
            'source'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'source'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        )->item(0);

        if (!$source) {
            $source = $this->contextNode()->appendChild(
                $this->dom()->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                    'source',
                ),
=======
                    'source'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'source'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return new Source($source);
    }

    private function setName(string $name): void
    {
        $this->contextNode()->setAttribute('name', basename($name));
        $this->contextNode()->setAttribute('path', dirname($name));
    }

    private function unitObject(string $tagName, $name): Unit
    {
        $node = $this->contextNode()->appendChild(
            $this->dom()->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                $tagName,
            ),
=======
                $tagName
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $tagName
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return new Unit($node, $name);
    }
}
