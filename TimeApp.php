<?php

namespace Anna\Lab13;

use Carbon\Carbon;

class TimeApp
{
    public function getCurrentDate()
    {
        return Carbon::now()->format('d.m.Y H:i:s');
    }
}