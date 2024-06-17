<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

<<<<<<< HEAD
<<<<<<< HEAD
class String_ extends Cast {
    public function getType(): string {
=======
class String_ extends Cast
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class String_ extends Cast
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_Cast_String';
    }
}
