<?php

namespace Egulias\EmailValidator\Validation;

class DNSRecords
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @var array $records
     */
    private $records = [];

    /**
     * @var bool $error
     */
    private $error = false;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @param array $records
     * @param bool $error
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(private readonly array $records, private readonly bool $error = false)
    {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(array $records, bool $error = false)
    {
        $this->records = $records;
        $this->error = $error;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @return array
     */
    public function getRecords(): array
    {
        return $this->records;
    }

    public function withError(): bool
    {
        return $this->error;
    }
}
