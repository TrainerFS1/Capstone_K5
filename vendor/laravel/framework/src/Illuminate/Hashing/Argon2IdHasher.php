<?php

namespace Illuminate\Hashing;

use RuntimeException;

class Argon2IdHasher extends ArgonHasher
{
    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string|null  $hashedValue
     * @param  array  $options
     * @return bool
     *
     * @throws \RuntimeException
     */
    public function check($value, $hashedValue, array $options = [])
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->verifyAlgorithm && ! $this->isUsingCorrectAlgorithm($hashedValue)) {
=======
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'argon2id') {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'argon2id') {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new RuntimeException('This password does not use the Argon2id algorithm.');
        }

        if (is_null($hashedValue) || strlen($hashedValue) === 0) {
            return false;
        }

        return password_verify($value, $hashedValue);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Verify the hashed value's algorithm.
     *
     * @param  string  $hashedValue
     * @return bool
     */
    protected function isUsingCorrectAlgorithm($hashedValue)
    {
        return $this->info($hashedValue)['algoName'] === 'argon2id';
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Get the algorithm that should be used for hashing.
     *
     * @return int
     */
    protected function algorithm()
    {
        return PASSWORD_ARGON2ID;
    }
}
