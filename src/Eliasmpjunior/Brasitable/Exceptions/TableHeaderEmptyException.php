<?php

namespace Eliasmpjunior\Brasitable\Exceptions;

use Web64\Colors\Facades\Colors;

use Eliasmpjunior\Brasitable\Contracts\BrasitableException;

use RuntimeException;


class TableHeaderEmptyException extends RuntimeException implements BrasitableException
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function printException()
    {
        Colors::line('');

        Colors::nobr()->error(' ERROR ');
        Colors::deleted(' The table header can not be empty.');

        Colors::line('');
    }
}