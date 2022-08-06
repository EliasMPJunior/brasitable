<?php

namespace Eliasmpjunior\Brasitable\Exceptions;

use Web64\Colors\Facades\Colors;

use Eliasmpjunior\Brasitable\Contracts\BrasitableException;

use RuntimeException;


class TableContentColumnCountOverflowException extends RuntimeException implements BrasitableException
{
    protected $headerColumnCount = null;
    protected $columnCountOverFlow = null;

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct(array $columnCountOverFlow, int $headerColumnCount)
    {
        $this->headerColumnCount = 
        $this->columnCountOverFlow = $columnCountOverFlow;
    }

    public function printException()
    {
        Colors::line('');

        Colors::nobr()->error(' ERROR ');
        Colors::deleted(' The table line '.json_encode($this->columnCountOverFlow).' has '.count($this->columnCountOverFlow).' while '.$this->headerColumnCount.' is expected.');

        Colors::line('');
    }
}