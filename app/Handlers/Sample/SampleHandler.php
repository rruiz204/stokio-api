<?php

namespace App\Handlers\Sample;

class SampleHandler
{
    public function handle(): array
    {
        return ["message" => "hello world from handler!!!"];
    }
}