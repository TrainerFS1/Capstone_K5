<?php
/**
 * Whoops - php errors for cool kids
 * @author Filipe Dobreira <http://github.com/filp>
 */

namespace Whoops\Handler;

<<<<<<< HEAD
use Whoops\Inspector\InspectorInterface;
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
     * @param  InspectorInterface $inspector
     * @return void
     */
    public function setInspector(InspectorInterface $inspector);
=======
     * @param  Inspector $inspector
     * @return void
     */
    public function setInspector(Inspector $inspector);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
