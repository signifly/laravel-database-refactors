<?php

namespace Signifly\DatabaseRefactors\Commands;

use Exception;
use ReflectionClass;
use Illuminate\Console\Command;

class RefactorDbCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:refactor {--class=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refactor database by specified refactor class';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $class = $this->option('class');

        if (! class_exists($class)) {
            throw new Exception('Invalid refactor class: '.$class);
        }

        if (! (new ReflectionClass($class))->hasMethod('run')) {
            throw new Exception('Method run does not exist on: '.$class);
        }

        (new $class)->run();
    }
}
