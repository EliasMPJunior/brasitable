<?php

namespace Eliasmpjunior\Brasitable\Exceptions;

use Web64\Colors\Facades\Colors;

use Eliasmpjunior\Brasitable\Contracts\BrasitableException;

use RuntimeException;


class TableContentErrorException extends RuntimeException implements BrasitableException
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
        Colors::line('');

        Colors::nobr()->error(' ERROR ');
        Colors::deleted(' The table line '.$this->lineWithError.' is not a valid array.');

        Colors::line('');
    }
}