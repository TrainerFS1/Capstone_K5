<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Parser;

/**
 * Attribute and annotation information is static within a single PHP process.
 * It is therefore okay to use a Singleton registry here.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Registry
{
    private static ?Parser $instance = null;

    public static function parser(): Parser
    {
        return self::$instance ?? self::$instance = self::build();
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function __construct()
    {
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private static function build(): Parser
    {
        return new CachingParser(
            new ParserChain(
                new AttributeParser,
<<<<<<< HEAD
<<<<<<< HEAD
                new AnnotationParser,
            ),
=======
                new AnnotationParser
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                new AnnotationParser
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
