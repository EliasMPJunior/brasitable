<?php

namespace Eliasmpjunior\Brasitable\Exceptions;


class TableHeaderColumnMissingTitleException extends BrasitableException
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
        $this->printMessage('The table header cell '.json_encode($this->headerColumn).' does not have a "title" key.');
    }
}