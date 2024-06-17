<?php declare(strict_types=1);

namespace PhpParser\Node\Scalar\MagicConst;

use PhpParser\Node\Scalar\MagicConst;

<<<<<<< HEAD
<<<<<<< HEAD
class Namespace_ extends MagicConst {
    public function getName(): string {
        return '__NAMESPACE__';
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Namespace_ extends MagicConst
{
    public function getName() : string {
        return '__NAMESPACE__';
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Scalar_MagicConst_Namespace';
    }
}
