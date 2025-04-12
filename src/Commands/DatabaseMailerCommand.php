<?php

namespace Kraziegent\DatabaseMailer\Commands;

use Illuminate\Console\Command;

class DatabaseMailerCommand extends Command
{
    public $signature = 'filament-database-mailer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
