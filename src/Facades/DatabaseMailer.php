<?php

namespace Kraziegent\DatabaseMailer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kraziegent\DatabaseMailer\DatabaseMailer
 */
class DatabaseMailer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kraziegent\DatabaseMailer\DatabaseMailer::class;
    }
}
