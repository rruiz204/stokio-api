<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\Sample\SampleHandler;

class SampleController extends Controller
{
    private SampleHandler $handler;

    public function __construct(SampleHandler $handler)
    {
        $this->handler = $handler;
    }

    public function index()
    {
        $response = $this->handler->handle();
        return response()->json($response, 200);
    }
}
