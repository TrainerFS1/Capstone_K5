<?php

namespace Egulias\EmailValidator\Validation;

class DNSRecords
{
<<<<<<< HEAD
=======

    /**
     * @var array $records
     */
    private $records = [];

    /**
     * @var bool $error
     */
    private $error = false;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @param array $records
     * @param bool $error
     */
<<<<<<< HEAD
    public function __construct(private readonly array $records, private readonly bool $error = false)
    {
=======
    public function __construct(array $records, bool $error = false)
    {
        $this->records = $records;
        $this->error = $error;
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
