<?php

namespace Egulias\EmailValidator\Validation;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Validation\Exception\EmptyValidationList;
use Egulias\EmailValidator\Result\MultipleErrors;
use Egulias\EmailValidator\Warning\Warning;

class MultipleValidationWithAnd implements EmailValidation
{
    /**
     * If one of validations fails, the remaining validations will be skipped.
     * This means MultipleErrors will only contain a single error, the first found.
     */
    public const STOP_ON_ERROR = 0;

    /**
     * All of validations will be invoked even if one of them got failure.
     * So MultipleErrors will contain all causes.
     */
    public const ALLOW_ALL_ERRORS = 1;

    /**
<<<<<<< HEAD
=======
     * @var EmailValidation[]
     */
    private $validations = [];

    /**
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @var Warning[]
     */
    private $warnings = [];

    /**
     * @var MultipleErrors|null
     */
    private $error;

    /**
<<<<<<< HEAD
     * @param EmailValidation[] $validations The validations.
     * @param int               $mode        The validation mode (one of the constants).
     */
    public function __construct(private readonly array $validations, private readonly int $mode = self::ALLOW_ALL_ERRORS)
=======
     * @var int
     */
    private $mode;

    /**
     * @param EmailValidation[] $validations The validations.
     * @param int               $mode        The validation mode (one of the constants).
     */
    public function __construct(array $validations, $mode = self::ALLOW_ALL_ERRORS)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (count($validations) == 0) {
            throw new EmptyValidationList();
        }
<<<<<<< HEAD
=======

        $this->validations = $validations;
        $this->mode = $mode;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * {@inheritdoc}
     */
    public function isValid(string $email, EmailLexer $emailLexer): bool
    {
        $result = true;
        foreach ($this->validations as $validation) {
            $emailLexer->reset();
            $validationResult = $validation->isValid($email, $emailLexer);
            $result = $result && $validationResult;
<<<<<<< HEAD
            $this->warnings = [...$this->warnings, ...$validation->getWarnings()];
=======
            $this->warnings = array_merge($this->warnings, $validation->getWarnings());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (!$validationResult) {
                $this->processError($validation);
            }

            if ($this->shouldStop($result)) {
                break;
            }
        }

        return $result;
    }

    private function initErrorStorage(): void
    {
        if (null === $this->error) {
            $this->error = new MultipleErrors();
        }
    }

    private function processError(EmailValidation $validation): void
    {
        if (null !== $validation->getError()) {
            $this->initErrorStorage();
            /** @psalm-suppress PossiblyNullReference */
            $this->error->addReason($validation->getError()->reason());
        }
    }

    private function shouldStop(bool $result): bool
    {
        return !$result && $this->mode === self::STOP_ON_ERROR;
    }

    /**
     * Returns the validation errors.
     */
    public function getError(): ?InvalidEmail
    {
        return $this->error;
    }

    /**
     * @return Warning[]
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
}
