<?php

namespace Eliasmpjunior\Brasitable\Exceptions;


class TableContentErrorException extends BrasitableException
{
    protected $lineWithError = null;

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct($lineWithError)
    {
        $this->lineWithError = $lineWithError;
    }

    public function printException()
    {
        $this->printMessage(' The table line '.$this->lineWithError.' is not a valid array.');
    }
}