<?php

namespace Spatie\LaravelIgnition\Recorders\DumpRecorder;

use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\HtmlDumper as BaseHtmlDumper;

class HtmlDumper extends BaseHtmlDumper
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct($output = null, string $charset = null, int $flags = 0)
    {
        parent::__construct($output, $charset, $flags);

        $this->setDumpHeader('');
    }
=======
    protected $dumpHeader = '';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected $dumpHeader = '';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function dumpVariable($variable): string
    {
        $cloner = new VarCloner();

        $clonedData = $cloner->cloneVar($variable)->withMaxDepth(3);

        return $this->dump($clonedData);
    }

    public function dump(Data $data, $output = null, array $extraDisplayOptions = []): string
    {
        return (string)parent::dump($data, true, [
            'maxDepth' => 3,
            'maxStringLength' => 160,
        ]);
    }
}
