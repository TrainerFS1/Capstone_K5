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

namespace League\CommonMark;

<<<<<<< HEAD
use League\CommonMark\Exception\CommonMarkException;
use League\CommonMark\Output\RenderedContentInterface;
use League\Config\Exception\ConfigurationExceptionInterface;
=======
use League\CommonMark\Output\RenderedContentInterface;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * Interface for a service which converts content from one format (like Markdown) to another (like HTML).
 */
interface ConverterInterface
{
    /**
<<<<<<< HEAD
     * @throws CommonMarkException
     * @throws ConfigurationExceptionInterface
=======
     * @throws \RuntimeException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function convert(string $input): RenderedContentInterface;
}
