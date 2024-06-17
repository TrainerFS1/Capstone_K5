<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
class Int_ extends Cast {
    public function getType(): string {
=======
class Int_ extends Cast
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class Int_ extends Cast
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_Cast_Int';
    }
}
