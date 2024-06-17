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
use DOMElement;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
abstract class Node
{
    private DOMDocument $dom;
    private DOMElement $contextNode;

    public function __construct(DOMElement $context)
    {
        $this->setContextNode($context);
    }

    public function dom(): DOMDocument
    {
        return $this->dom;
    }

    public function totals(): Totals
    {
        $totalsContainer = $this->contextNode()->firstChild;

        if (!$totalsContainer) {
            $totalsContainer = $this->contextNode()->appendChild(
                $this->dom->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                    'totals',
                ),
=======
                    'totals'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'totals'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return new Totals($totalsContainer);
    }

    public function addDirectory(string $name): Directory
    {
        $dirNode = $this->dom()->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
            'directory',
=======
            'directory'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'directory'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        $dirNode->setAttribute('name', $name);
        $this->contextNode()->appendChild($dirNode);

        return new Directory($dirNode);
    }

    public function addFile(string $name, string $href): File
    {
        $fileNode = $this->dom()->createElementNS(
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
        );

        $fileNode->setAttribute('name', $name);
        $fileNode->setAttribute('href', $href);
        $this->contextNode()->appendChild($fileNode);

        return new File($fileNode);
    }

    protected function setContextNode(DOMElement $context): void
    {
        $this->dom         = $context->ownerDocument;
        $this->contextNode = $context;
    }

    protected function contextNode(): DOMElement
    {
        return $this->contextNode;
    }
}
