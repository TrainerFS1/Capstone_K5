<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\PhpVersion;
use PhpParser\Token;

/** @internal */
abstract class TokenEmulator {
    abstract public function getPhpVersion(): PhpVersion;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/** @internal */
abstract class TokenEmulator
{
    abstract public function getPhpVersion(): string;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    abstract public function isEmulationNeeded(string $code): bool;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Token[] $tokens Original tokens
     * @return Token[] Modified Tokens
=======
     * @return array Modified Tokens
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return array Modified Tokens
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    abstract public function emulate(string $code, array $tokens): array;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Token[] $tokens Original tokens
     * @return Token[] Modified Tokens
     */
    abstract public function reverseEmulate(string $code, array $tokens): array;

    /** @param array{int, string, string}[] $patches */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return array Modified Tokens
     */
    abstract public function reverseEmulate(string $code, array $tokens): array;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function preprocessCode(string $code, array &$patches): string {
        return $code;
    }
}
