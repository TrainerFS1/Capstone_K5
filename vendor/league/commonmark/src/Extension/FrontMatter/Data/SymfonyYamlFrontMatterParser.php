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
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

final class SymfonyYamlFrontMatterParser implements FrontMatterDataParserInterface
{
    /**
     * {@inheritDoc}
     */
    public function parse(string $frontMatter)
    {
        if (! \class_exists(Yaml::class)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new MissingDependencyException('Failed to parse yaml: "symfony/yaml" library is missing');
        }

        try {
            /** @psalm-suppress ReservedWord */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new \RuntimeException('Failed to parse yaml: "symfony/yaml" library is missing');
        }

        try {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return Yaml::parse($frontMatter);
        } catch (ParseException $ex) {
            throw InvalidFrontMatterException::wrap($ex);
        }
    }
}
