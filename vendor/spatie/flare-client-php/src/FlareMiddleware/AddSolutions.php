<?php

namespace Spatie\FlareClient\FlareMiddleware;

use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\ErrorSolutions\Contracts\SolutionProviderRepository;
use Spatie\FlareClient\Report;
use Spatie\Ignition\Contracts\SolutionProviderRepository as IgnitionSolutionProviderRepository;

class AddSolutions implements FlareMiddleware
{
    protected SolutionProviderRepository|IgnitionSolutionProviderRepository $solutionProviderRepository;

    public function __construct(SolutionProviderRepository|IgnitionSolutionProviderRepository $solutionProviderRepository)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Spatie\FlareClient\Report;
use Spatie\Ignition\Contracts\SolutionProviderRepository;

class AddSolutions implements FlareMiddleware
{
    protected SolutionProviderRepository $solutionProviderRepository;

    public function __construct(SolutionProviderRepository $solutionProviderRepository)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->solutionProviderRepository = $solutionProviderRepository;
    }

    public function handle(Report $report, Closure $next)
    {
        if ($throwable = $report->getThrowable()) {
            $solutions = $this->solutionProviderRepository->getSolutionsForThrowable($throwable);

            foreach ($solutions as $solution) {
                $report->addSolution($solution);
            }
        }

        return $next($report);
    }
}
