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

namespace League\CommonMark\Extension\FrontMatter\Data;

<<<<<<< HEAD
<<<<<<< HEAD
use League\CommonMark\Exception\MissingDependencyException;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use League\CommonMark\Extension\FrontMatter\Exception\InvalidFrontMatterException;

final class LibYamlFrontMatterParser implements FrontMatterDataParserInterface
{
    public static function capable(): ?LibYamlFrontMatterParser
    {
        if (! \extension_loaded('yaml')) {
            return null;
        }

        return new LibYamlFrontMatterParser();
    }

    /**
     * {@inheritDoc}
     */
    public function parse(string $frontMatter)
    {
        if (! \extension_loaded('yaml')) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new MissingDependencyException('Failed to parse yaml: "ext-yaml" extension is missing');
=======
            throw new \RuntimeException('Failed to parse yaml: "ext-yaml" extension is missing');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            throw new \RuntimeException('Failed to parse yaml: "ext-yaml" extension is missing');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $result = @\yaml_parse($frontMatter);

        if ($result === false) {
            throw new InvalidFrontMatterException('Failed to parse front matter');
        }

        return $result;
    }
}
