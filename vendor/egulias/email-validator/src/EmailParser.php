<?php

namespace Egulias\EmailValidator;

use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Parser\LocalPart;
use Egulias\EmailValidator\Parser\DomainPart;
use Egulias\EmailValidator\Result\ValidEmail;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Warning\EmailTooLong;
use Egulias\EmailValidator\Result\Reason\NoLocalPart;

class EmailParser extends Parser
{
    public const EMAIL_MAX_LENGTH = 254;

    /**
     * @var string
     */
    protected $domainPart = '';

    /**
     * @var string
     */
    protected $localPart = '';

    public function parse(string $str): Result
    {
        $result = parent::parse($str);

        $this->addLongEmailWarning($this->localPart, $this->domainPart);

        return $result;
    }

    protected function preLeftParsing(): Result
    {
        if (!$this->hasAtToken()) {
            return new InvalidEmail(new NoLocalPart(), $this->lexer->current->value);
        }
        return new ValidEmail();
    }

    protected function parseLeftFromAt(): Result
    {
        return $this->processLocalPart();
    }

    protected function parseRightFromAt(): Result
    {
        return $this->processDomainPart();
    }

    private function processLocalPart(): Result
    {
        $localPartParser = new LocalPart($this->lexer);
        $localPartResult = $localPartParser->parse();
        $this->localPart = $localPartParser->localPart();
<<<<<<< HEAD
        $this->warnings = [...$localPartParser->getWarnings(), ...$this->warnings];
=======
        $this->warnings = array_merge($localPartParser->getWarnings(), $this->warnings);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $localPartResult;
    }

    private function processDomainPart(): Result
    {
        $domainPartParser = new DomainPart($this->lexer);
        $domainPartResult = $domainPartParser->parse();
        $this->domainPart = $domainPartParser->domainPart();
<<<<<<< HEAD
        $this->warnings = [...$domainPartParser->getWarnings(), ...$this->warnings];
=======
        $this->warnings = array_merge($domainPartParser->getWarnings(), $this->warnings);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $domainPartResult;
    }

    public function getDomainPart(): string
    {
        return $this->domainPart;
    }

    public function getLocalPart(): string
    {
        return $this->localPart;
    }

    private function addLongEmailWarning(string $localPart, string $parsedDomainPart): void
    {
        if (strlen($localPart . '@' . $parsedDomainPart) > self::EMAIL_MAX_LENGTH) {
            $this->warnings[EmailTooLong::CODE] = new EmailTooLong();
        }
    }
}
