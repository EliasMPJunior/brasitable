<?php

namespace Eliasmpjunior\Brasitable\Exceptions;


class TableHeaderEmptyException extends BrasitableException
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
        $this->printMessage('The table header can not be empty.');
    }
}