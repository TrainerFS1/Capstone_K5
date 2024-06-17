<?php

namespace Illuminate\Hashing;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use RuntimeException;

class BcryptHasher extends AbstractHasher implements HasherContract
{
    /**
     * The default cost factor.
     *
     * @var int
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected $rounds = 12;
=======
    protected $rounds = 10;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected $rounds = 10;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Indicates whether to perform an algorithm check.
     *
     * @var bool
     */
    protected $verifyAlgorithm = false;

    /**
     * Create a new hasher instance.
     *
     * @param  array  $options
     * @return void
     */
    public function __construct(array $options = [])
    {
        $this->rounds = $options['rounds'] ?? $this->rounds;
        $this->verifyAlgorithm = $options['verify'] ?? $this->verifyAlgorithm;
    }

    /**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     *
     * @throws \RuntimeException
     */
    public function make($value, array $options = [])
    {
        $hash = password_hash($value, PASSWORD_BCRYPT, [
            'cost' => $this->cost($options),
        ]);

        if ($hash === false) {
            throw new RuntimeException('Bcrypt hashing not supported.');
        }

        return $hash;
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
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
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'bcrypt') {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'bcrypt') {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new RuntimeException('This password does not use the Bcrypt algorithm.');
        }

        return parent::check($value, $hashedValue, $options);
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return password_needs_rehash($hashedValue, PASSWORD_BCRYPT, [
            'cost' => $this->cost($options),
        ]);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Verifies that the configuration is less than or equal to what is configured.
     *
     * @internal
     */
    public function verifyConfiguration($value)
    {
        return $this->isUsingCorrectAlgorithm($value) && $this->isUsingValidOptions($value);
    }

    /**
     * Verify the hashed value's algorithm.
     *
     * @param  string  $hashedValue
     * @return bool
     */
    protected function isUsingCorrectAlgorithm($hashedValue)
    {
        return $this->info($hashedValue)['algoName'] === 'bcrypt';
    }

    /**
     * Verify the hashed value's options.
     *
     * @param  string  $hashedValue
     * @return bool
     */
    protected function isUsingValidOptions($hashedValue)
    {
        ['options' => $options] = $this->info($hashedValue);

        if (! is_int($options['cost'] ?? null)) {
            return false;
        }

        if ($options['cost'] > $this->rounds) {
            return false;
        }

        return true;
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Set the default password work factor.
     *
     * @param  int  $rounds
     * @return $this
     */
    public function setRounds($rounds)
    {
        $this->rounds = (int) $rounds;

        return $this;
    }

    /**
     * Extract the cost value from the options array.
     *
     * @param  array  $options
     * @return int
     */
    protected function cost(array $options = [])
    {
        return $options['rounds'] ?? $this->rounds;
    }
}
