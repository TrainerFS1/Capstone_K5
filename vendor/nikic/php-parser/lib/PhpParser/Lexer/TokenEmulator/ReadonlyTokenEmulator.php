<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

<<<<<<< HEAD
use PhpParser\PhpVersion;

final class ReadonlyTokenEmulator extends KeywordEmulator {
    public function getPhpVersion(): PhpVersion {
        return PhpVersion::fromComponents(8, 1);
    }

    public function getKeywordString(): string {
        return 'readonly';
    }

    public function getKeywordToken(): int {
        return \T_READONLY;
    }

    protected function isKeywordContext(array $tokens, int $pos): bool {
=======
use PhpParser\Lexer\Emulative;

final class ReadonlyTokenEmulator extends KeywordEmulator
{
    public function getPhpVersion(): string
    {
        return Emulative::PHP_8_1;
    }

    public function getKeywordString(): string
    {
        return 'readonly';
    }

    public function getKeywordToken(): int
    {
        return \T_READONLY;
    }

    protected function isKeywordContext(array $tokens, int $pos): bool
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!parent::isKeywordContext($tokens, $pos)) {
            return false;
        }
        // Support "function readonly("
        return !(isset($tokens[$pos + 1]) &&
<<<<<<< HEAD
                 ($tokens[$pos + 1]->text === '(' ||
                  ($tokens[$pos + 1]->id === \T_WHITESPACE &&
                   isset($tokens[$pos + 2]) &&
                   $tokens[$pos + 2]->text === '(')));
=======
                 ($tokens[$pos + 1][0] === '(' ||
                  ($tokens[$pos + 1][0] === \T_WHITESPACE &&
                   isset($tokens[$pos + 2]) &&
                   $tokens[$pos + 2][0] === '(')));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
