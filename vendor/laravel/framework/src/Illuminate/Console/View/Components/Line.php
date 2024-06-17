<?php

namespace Illuminate\Console\View\Components;

use Illuminate\Console\Contracts\NewLineAware;
use Symfony\Component\Console\Output\OutputInterface;

class Line extends Component
{
    /**
     * The possible line styles.
     *
     * @var array<string, array<string, string>>
     */
    protected static $styles = [
        'info' => [
            'bgColor' => 'blue',
            'fgColor' => 'white',
            'title' => 'info',
        ],
        'warn' => [
            'bgColor' => 'yellow',
            'fgColor' => 'black',
            'title' => 'warn',
        ],
        'error' => [
            'bgColor' => 'red',
            'fgColor' => 'white',
            'title' => 'error',
        ],
    ];

    /**
     * Renders the component using the given arguments.
     *
     * @param  string  $style
     * @param  string  $string
     * @param  int  $verbosity
     * @return void
     */
    public function render($style, $string, $verbosity = OutputInterface::VERBOSITY_NORMAL)
    {
        $string = $this->mutate($string, [
            Mutators\EnsureDynamicContentIsHighlighted::class,
            Mutators\EnsurePunctuation::class,
            Mutators\EnsureRelativePaths::class,
        ]);

        $this->renderView('line', array_merge(static::$styles[$style], [
<<<<<<< HEAD
<<<<<<< HEAD
            'marginTop' => $this->output instanceof NewLineAware ? max(0, 2 - $this->output->newLinesWritten()) : 1,
=======
            'marginTop' => ($this->output instanceof NewLineAware && $this->output->newLineWritten()) ? 0 : 1,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'marginTop' => ($this->output instanceof NewLineAware && $this->output->newLineWritten()) ? 0 : 1,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'content' => $string,
        ]), $verbosity);
    }
}
