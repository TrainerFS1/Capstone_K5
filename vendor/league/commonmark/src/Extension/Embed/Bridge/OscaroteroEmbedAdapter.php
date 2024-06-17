<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Extension\Embed\Bridge;

use Embed\Embed as EmbedLib;
<<<<<<< HEAD
<<<<<<< HEAD
use League\CommonMark\Exception\MissingDependencyException;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use League\CommonMark\Extension\Embed\Embed;
use League\CommonMark\Extension\Embed\EmbedAdapterInterface;

final class OscaroteroEmbedAdapter implements EmbedAdapterInterface
{
    private EmbedLib $embedLib;

    public function __construct(?EmbedLib $embed = null)
    {
        if ($embed === null) {
            if (! \class_exists(EmbedLib::class)) {
<<<<<<< HEAD
<<<<<<< HEAD
                throw new MissingDependencyException('The embed/embed package is not installed. Please install it with Composer to use this adapter.');
=======
                throw new \RuntimeException('The embed/embed package is not installed. Please install it with Composer to use this adapter.');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                throw new \RuntimeException('The embed/embed package is not installed. Please install it with Composer to use this adapter.');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            $embed = new EmbedLib();
        }

        $this->embedLib = $embed;
    }

    /**
     * {@inheritDoc}
     */
    public function updateEmbeds(array $embeds): void
    {
        $extractors = $this->embedLib->getMulti(...\array_map(static fn (Embed $embed) => $embed->getUrl(), $embeds));
        foreach ($extractors as $i => $extractor) {
            if ($extractor->code !== null) {
                $embeds[$i]->setEmbedCode($extractor->code->html);
            }
        }
    }
}
