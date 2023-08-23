<?php

namespace Soap\BladestrapUi\Commands;

use Illuminate\Console\Command;

class BladestrapUiCommand extends Command
{
    public $signature = 'bladestrap-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
