<?php

declare(strict_types=1);

namespace Faker\Container;

use Faker\Core;
<<<<<<< HEAD
use Faker\Extension;
=======
use Faker\Extension\BarcodeExtension;
use Faker\Extension\BloodExtension;
use Faker\Extension\ColorExtension;
use Faker\Extension\DateTimeExtension;
use Faker\Extension\FileExtension;
use Faker\Extension\NumberExtension;
use Faker\Extension\UuidExtension;
use Faker\Extension\VersionExtension;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class ContainerBuilder
{
    /**
     * @var array<string, callable|object|string>
     */
<<<<<<< HEAD
    private array $definitions = [];

    /**
     * @param callable|object|string $definition
     *
     * @throws \InvalidArgumentException
     */
    public function add(string $id, $definition): self
    {
        if (!is_string($definition) && !is_callable($definition) && !is_object($definition)) {
=======
    private $definitions = [];

    /**
     * @param callable|object|string $value
     *
     * @throws \InvalidArgumentException
     */
    public function add($value, string $name = null): self
    {
        if (!is_string($value) && !is_callable($value) && !is_object($value)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new \InvalidArgumentException(sprintf(
                'First argument to "%s::add()" must be a string, callable or object.',
                self::class,
            ));
        }

<<<<<<< HEAD
        $this->definitions[$id] = $definition;
=======
        if ($name === null) {
            if (is_string($value)) {
                $name = $value;
            } elseif (is_object($value)) {
                $name = get_class($value);
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'Second argument to "%s::add()" is required not passing a string or object as first argument',
                    self::class,
                ));
            }
        }

        $this->definitions[$name] = $value;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    public function build(): ContainerInterface
    {
        return new Container($this->definitions);
    }

<<<<<<< HEAD
    private static function defaultExtensions(): array
    {
        return [
            Extension\BarcodeExtension::class => Core\Barcode::class,
            Extension\BloodExtension::class => Core\Blood::class,
            Extension\ColorExtension::class => Core\Color::class,
            Extension\DateTimeExtension::class => Core\DateTime::class,
            Extension\FileExtension::class => Core\File::class,
            Extension\NumberExtension::class => Core\Number::class,
            Extension\UuidExtension::class => Core\Uuid::class,
            Extension\VersionExtension::class => Core\Version::class,
        ];
    }

    public static function withDefaultExtensions(): self
=======
    /**
     * Get an array with extension that represent the default English
     * functionality.
     */
    public static function defaultExtensions(): array
    {
        return [
            BarcodeExtension::class => Core\Barcode::class,
            BloodExtension::class => Core\Blood::class,
            ColorExtension::class => Core\Color::class,
            DateTimeExtension::class => Core\DateTime::class,
            FileExtension::class => Core\File::class,
            NumberExtension::class => Core\Number::class,
            VersionExtension::class => Core\Version::class,
            UuidExtension::class => Core\Uuid::class,
        ];
    }

    public static function getDefault(): ContainerInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $instance = new self();

        foreach (self::defaultExtensions() as $id => $definition) {
<<<<<<< HEAD
            $instance->add($id, $definition);
        }

        return $instance;
=======
            $instance->add($definition, $id);
        }

        return $instance->build();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
