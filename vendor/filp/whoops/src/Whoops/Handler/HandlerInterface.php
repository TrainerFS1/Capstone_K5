<?php
/**
 * Whoops - php errors for cool kids
 * @author Filipe Dobreira <http://github.com/filp>
 */

namespace Whoops\Handler;

<<<<<<< HEAD
<<<<<<< HEAD
use Whoops\Inspector\InspectorInterface;
=======
use Whoops\Exception\Inspector;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use Whoops\Exception\Inspector;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Whoops\RunInterface;

interface HandlerInterface
{
    /**
     * @return int|null A handler may return nothing, or a Handler::HANDLE_* constant
     */
    public function handle();

    /**
     * @param  RunInterface  $run
     * @return void
     */
    public function setRun(RunInterface $run);

    /**
     * @param  \Throwable $exception
     * @return void
     */
    public function setException($exception);

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  InspectorInterface $inspector
     * @return void
     */
    public function setInspector(InspectorInterface $inspector);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param  Inspector $inspector
     * @return void
     */
    public function setInspector(Inspector $inspector);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
