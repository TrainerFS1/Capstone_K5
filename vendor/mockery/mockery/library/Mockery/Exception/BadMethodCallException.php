<?php

<<<<<<< HEAD
/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery\Exception;

class BadMethodCallException extends \BadMethodCallException implements MockeryExceptionInterface
{
    /**
     * @var bool
     */
=======
namespace Mockery\Exception;

class BadMethodCallException extends \BadMethodCallException
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private $dismissed = false;

    public function dismiss()
    {
        $this->dismissed = true;
<<<<<<< HEAD
        // we sometimes stack them
        $previous = $this->getPrevious();
        if (! $previous instanceof self) {
            return;
        }

        $previous->dismiss();
    }

    /**
     * @return bool
     */
=======

        // we sometimes stack them
        if ($this->getPrevious() && $this->getPrevious() instanceof BadMethodCallException) {
            $this->getPrevious()->dismiss();
        }
    }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function dismissed()
    {
        return $this->dismissed;
    }
}
