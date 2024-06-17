<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

<<<<<<< HEAD
use PHPUnit\Runner\Version;
use PHPUnit\Util\Xml\Loader as XmlLoader;
=======
use function sprintf;
use PHPUnit\Util\Xml\Loader as XmlLoader;
use PHPUnit\Util\Xml\SchemaDetector;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Util\Xml\XmlException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Migrator
{
    /**
     * @throws Exception
     * @throws MigrationBuilderException
     * @throws MigrationException
     * @throws XmlException
     */
    public function migrate(string $filename): string
    {
        $origin = (new SchemaDetector)->detect($filename);

        if (!$origin->detected()) {
<<<<<<< HEAD
            throw new Exception('The file does not validate against any know schema');
        }

        if ($origin->version() === Version::series()) {
            throw new Exception('The file does not need to be migrated');
        }

        $configurationDocument = (new XmlLoader)->loadFile($filename);
=======
            throw new Exception(
                sprintf(
                    '"%s" is not a valid PHPUnit XML configuration file that can be migrated',
                    $filename,
                )
            );
        }

        $configurationDocument = (new XmlLoader)->loadFile(
            $filename,
            false,
            true,
            true
        );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        foreach ((new MigrationBuilder)->build($origin->version()) as $migration) {
            $migration->migrate($configurationDocument);
        }

        $configurationDocument->formatOutput       = true;
        $configurationDocument->preserveWhiteSpace = false;

        return $configurationDocument->saveXML();
    }
}
