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
class File
{
    private readonly DOMDocument $dom;
    private readonly DOMElement $contextNode;

    public function __construct(DOMElement $context)
    {
        $this->dom         = $context->ownerDocument;
        $this->contextNode = $context;
    }

    public function totals(): Totals
    {
        $totalsContainer = $this->contextNode->firstChild;

        if (!$totalsContainer) {
            $totalsContainer = $this->contextNode->appendChild(
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

    public function lineCoverage(string $line): Coverage
    {
        $coverage = $this->contextNode->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
            'coverage',
=======
            'coverage'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'coverage'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        )->item(0);

        if (!$coverage) {
            $coverage = $this->contextNode->appendChild(
                $this->dom->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                    'coverage',
                ),
=======
                    'coverage'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    'coverage'
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $lineNode = $coverage->appendChild(
            $this->dom->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
<<<<<<< HEAD
<<<<<<< HEAD
                'line',
            ),
=======
                'line'
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                'line'
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return new Coverage($lineNode, $line);
    }

    protected function contextNode(): DOMElement
    {
        return $this->contextNode;
    }

    protected function dom(): DOMDocument
    {
        return $this->dom;
    }
}
