<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{

    private $queue;

    public function __construct() {
        $this->queue = new \SplQueue();
    }

    public function enqueue(Request $request) {
        $item = $request->input('item');
        $this->queue->enqueue($item);

        return response()->json(['message' => 'Item added to queue']);
    }

    public function dequeue(Request $request) {
        if ($this->queue->isEmpty()) {
            return response()->json(['message' => 'Queue is empty']);
        }

        $item = $this->queue->dequeue();

        return response()->json(['item' => $item]);
    }
}
