<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class SysClear extends Command
{
    private array $cmd = [
        'auth:clear-resets',
        'cache:clear',
        'config:clear',
        'event:clear',
        'optimize:clear',
        'route:clear',
        'view:clear'
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will execute [auth:clear-resets, cache:clear, config:clear, event:clear, optimize:clear, route:clear, view:clear]';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $consoleOutput = new ConsoleOutput();
        // $progressBar = new ProgressBar($consoleOutput, count($this->cmd));

        // $progressBar->setFormat('%cmd% [%current% of %max%] ');

        foreach ($this->cmd as $cmd) {
            // $progressBar->setMessage(sprintf("%s", $cmd), 'cmd');
            // $progressBar->advance();
            $this->info($cmd);
            $this->call($cmd);
        }

        $this->info("\nDone!");
    }
}
