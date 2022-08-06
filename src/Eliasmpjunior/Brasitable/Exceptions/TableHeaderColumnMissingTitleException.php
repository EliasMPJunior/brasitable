<?php

namespace Eliasmpjunior\Brasitable\Exceptions;

use Web64\Colors\Facades\Colors;

use Eliasmpjunior\Brasitable\Contracts\BrasitableException;

use RuntimeException;


class TableHeaderColumnMissingTitleException extends RuntimeException implements BrasitableException
{
    protected $headerColumn = null;

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct($headerColumn)
    {
        $this->headerColumn = $headerColumn;
    }

    public function printException()
    {
        Colors::line('');

        Colors::nobr()->error(' ERROR ');
        Colors::deleted(' The table header cell '.json_encode($this->headerColumn).' does not have a "title" key.');

        Colors::line('');
    }
}