<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\PhpVersion;

/**
 * Reverses emulation direction of the inner emulator.
 */
final class ReverseEmulator extends TokenEmulator {
    /** @var TokenEmulator Inner emulator */
    private TokenEmulator $emulator;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * Reverses emulation direction of the inner emulator.
 */
final class ReverseEmulator extends TokenEmulator
{
    /** @var TokenEmulator Inner emulator */
    private $emulator;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function __construct(TokenEmulator $emulator) {
        $this->emulator = $emulator;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getPhpVersion(): PhpVersion {
=======
    public function getPhpVersion(): string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getPhpVersion(): string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->emulator->getPhpVersion();
    }

    public function isEmulationNeeded(string $code): bool {
        return $this->emulator->isEmulationNeeded($code);
    }

    public function emulate(string $code, array $tokens): array {
        return $this->emulator->reverseEmulate($code, $tokens);
    }

    public function reverseEmulate(string $code, array $tokens): array {
        return $this->emulator->emulate($code, $tokens);
    }

    public function preprocessCode(string $code, array &$patches): string {
        return $code;
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
