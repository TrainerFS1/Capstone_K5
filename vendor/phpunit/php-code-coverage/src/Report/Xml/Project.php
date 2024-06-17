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

use DOMDocument;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
final class Project extends Node
{
    public function __construct(string $directory)
    {
        $this->init();
        $this->setProjectSourceDirectory($directory);
    }

    public function projectSourceDirectory(): string
    {
        return $this->contextNode()->getAttribute('source');
    }

    public function buildInformation(): BuildInformation
    {
        $buildNode = $this->dom()->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
            'build',
=======
            'build'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'build'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        )->item(0);

        if (!$buildNode) {
            $buildNode = $this->dom()->documentElement->appendChild(
                $this->dom()->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                    'build',
                ),
=======
                    'build'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'build'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return new BuildInformation($buildNode);
    }

    public function tests(): Tests
    {
        $testsNode = $this->contextNode()->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
            'tests',
=======
            'tests'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'tests'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        )->item(0);

        if (!$testsNode) {
            $testsNode = $this->contextNode()->appendChild(
                $this->dom()->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                    'tests',
                ),
=======
                    'tests'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'tests'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return new Tests($testsNode);
    }

    public function asDom(): DOMDocument
    {
        return $this->dom();
    }

    private function init(): void
    {
        $dom = new DOMDocument;
        $dom->loadXML('<?xml version="1.0" ?><phpunit xmlns="https://schema.phpunit.de/coverage/1.0"><build/><project/></phpunit>');

        $this->setContextNode(
            $dom->getElementsByTagNameNS(
                'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                'project',
            )->item(0),
=======
                'project'
            )->item(0)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                'project'
            )->item(0)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    private function setProjectSourceDirectory(string $name): void
    {
        $this->contextNode()->setAttribute('source', $name);
    }
}
