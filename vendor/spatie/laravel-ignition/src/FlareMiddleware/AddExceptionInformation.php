<?php

namespace Spatie\LaravelIgnition\FlareMiddleware;

use Illuminate\Database\QueryException;
<<<<<<< HEAD
use Spatie\FlareClient\Contracts\ProvidesFlareContext;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Spatie\FlareClient\FlareMiddleware\FlareMiddleware;
use Spatie\FlareClient\Report;

class AddExceptionInformation implements FlareMiddleware
{
    public function handle(Report $report, $next)
    {
        $throwable = $report->getThrowable();

        $this->addUserDefinedContext($report);

        if (! $throwable instanceof QueryException) {
            return $next($report);
        }

        $report->group('exception', [
            'raw_sql' => $throwable->getSql(),
        ]);

        return $next($report);
    }

    private function addUserDefinedContext(Report $report): void
    {
        $throwable = $report->getThrowable();

        if ($throwable === null) {
            return;
        }

<<<<<<< HEAD
        if ($throwable instanceof ProvidesFlareContext) {
            // ProvidesFlareContext writes directly to context groups and is handled in the flare-client-php package.
            return;
        }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (! method_exists($throwable, 'context')) {
            return;
        }

        $context = $throwable->context();

        if (! is_array($context)) {
            return;
        }

<<<<<<< HEAD
        $exceptionContextGroup = [];
        foreach ($context as $key => $value) {
            $exceptionContextGroup[$key] = $value;
        }
        $report->group('exception', $exceptionContextGroup);
=======
        foreach ($context as $key => $value) {
            $report->context($key, $value);
        }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
