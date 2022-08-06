<?php

namespace Eliasmpjunior\Brasitable\Exceptions;


class TableContentColumnCountOverflowException extends BrasitableException
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
        $this->printMessage('The table line '.json_encode($this->columnCountOverFlow).' has '.count($this->columnCountOverFlow).' while '.$this->headerColumnCount.' is expected.');
    }
}