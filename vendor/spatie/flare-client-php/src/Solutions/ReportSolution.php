<?php

namespace Spatie\FlareClient\Solutions;

<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\ErrorSolutions\Contracts\RunnableSolution;
use Spatie\ErrorSolutions\Contracts\Solution;
use Spatie\Ignition\Contracts\RunnableSolution as IgnitionRunnableSolution;
use Spatie\Ignition\Contracts\Solution as IgnitionSolution;

class ReportSolution
{
    protected Solution|IgnitionSolution $solution;

    public function __construct(Solution|IgnitionSolution $solution)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Spatie\Ignition\Contracts\RunnableSolution;
use Spatie\Ignition\Contracts\Solution as SolutionContract;

class ReportSolution
{
    protected SolutionContract $solution;

    public function __construct(SolutionContract $solution)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->solution = $solution;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function fromSolution(Solution|IgnitionSolution $solution): self
=======
    public static function fromSolution(SolutionContract $solution): self
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function fromSolution(SolutionContract $solution): self
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return new self($solution);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $isRunnable = ($this->solution instanceof RunnableSolution || $this->solution instanceof IgnitionRunnableSolution);
=======
        $isRunnable = ($this->solution instanceof RunnableSolution);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $isRunnable = ($this->solution instanceof RunnableSolution);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return [
            'class' => get_class($this->solution),
            'title' => $this->solution->getSolutionTitle(),
            'description' => $this->solution->getSolutionDescription(),
            'links' => $this->solution->getDocumentationLinks(),
            /** @phpstan-ignore-next-line  */
            'action_description' => $isRunnable ? $this->solution->getSolutionActionDescription() : null,
            'is_runnable' => $isRunnable,
<<<<<<< HEAD
<<<<<<< HEAD
            'ai_generated' => $this->solution->aiGenerated ?? false,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];
    }
}
