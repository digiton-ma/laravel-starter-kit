<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

final class IdeHelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper:generate-safe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate IDE Helper files only in non-production environments';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (app()->environment('production')) {
            $this->info('Skipping IDE Helper generation in production.');

            return 0;
        }

        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');

        return 0;
    }
}
