<?php

declare(strict_types=1);

namespace Faker\Core;

use Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Blood implements Extension\BloodExtension
{
    /**
     * @var string[]
     */
<<<<<<< HEAD
    private array $bloodTypes = ['A', 'AB', 'B', 'O'];
=======
    private $bloodTypes = ['A', 'AB', 'B', 'O'];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @var string[]
     */
<<<<<<< HEAD
    private array $bloodRhFactors = ['+', '-'];
=======
    private $bloodRhFactors = ['+', '-'];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function bloodType(): string
    {
        return Extension\Helper::randomElement($this->bloodTypes);
    }

    public function bloodRh(): string
    {
        return Extension\Helper::randomElement($this->bloodRhFactors);
    }

    public function bloodGroup(): string
    {
        return sprintf(
            '%s%s',
            $this->bloodType(),
            $this->bloodRh(),
        );
    }
}
