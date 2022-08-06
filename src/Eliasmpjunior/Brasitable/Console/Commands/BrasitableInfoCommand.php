<?php

namespace Eliasmpjunior\Brasitable\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Web64\Colors\Facades\Colors;
use Illuminate\Support\Facades\Log;

use Eliasmpjunior\Brasitable\Services\Brasitable;
use Eliasmpjunior\Brasitable\Contracts\BrasitableException;


class BrasitableInfoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brasitable:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tableHeader = array(
                            array(
                                'title' => 'Data',
                                'color' => 'light_green',
                            ),
                            array(
                                'title' => 'Value',
                                'color' => 'light_yellow',
                            ),
                        );

        $tableContent = array(
                            array(
                                'Name',
                                'eliasmpjunior/brasitable'
                            ),
                            array(
                                'Version',
                                '0.1.0 β'
                            ),
                            array(
                                'Author',
                                'eliasmpjunior'
                            ),
                            array(
                                'Email',
                                'elias@brasidata.com.br'
                            ),
                            array(
                                'Homepage',
                                'https://brasidata.com.br'
                            ),
                        );

        try
        {
            Brasitable::printTable($tableHeader, $tableContent);
        }
        catch (BrasitableException $e)
        {
            $e->printException();

            return 1;
        }

        return 0;
    }
}
