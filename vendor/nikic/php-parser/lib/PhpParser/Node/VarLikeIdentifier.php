<?php declare(strict_types=1);

namespace PhpParser\Node;

/**
 * Represents a name that is written in source code with a leading dollar,
 * but is not a proper variable. The leading dollar is not stored as part of the name.
 *
 * Examples: Names in property declarations are formatted as variables. Names in static property
 * lookups are also formatted as variables.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class VarLikeIdentifier extends Identifier {
    public function getType(): string {
=======
class VarLikeIdentifier extends Identifier
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class VarLikeIdentifier extends Identifier
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'VarLikeIdentifier';
    }
}
