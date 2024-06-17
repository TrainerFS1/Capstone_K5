<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

<<<<<<< HEAD
use PhpParser\PhpVersion;
=======
use PhpParser\Lexer\Emulative;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/*
 * In PHP 8.1, "readonly(" was special cased in the lexer in order to support functions with
 * name readonly. In PHP 8.2, this may conflict with readonly properties having a DNF type. For
 * this reason, PHP 8.2 instead treats this as T_READONLY and then handles it specially in the
 * parser. This emulator only exists to handle this special case, which is skipped by the
 * PHP 8.1 ReadonlyTokenEmulator.
 */
class ReadonlyFunctionTokenEmulator extends KeywordEmulator {
    public function getKeywordString(): string {
        return 'readonly';
    }

    public function getKeywordToken(): int {
        return \T_READONLY;
    }

<<<<<<< HEAD
    public function getPhpVersion(): PhpVersion {
        return PhpVersion::fromComponents(8, 2);
=======
    public function getPhpVersion(): string {
        return Emulative::PHP_8_2;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function reverseEmulate(string $code, array $tokens): array {
        // Don't bother
        return $tokens;
    }
}
