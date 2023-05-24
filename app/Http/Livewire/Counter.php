<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $saveCounter = 0;

    public function render()
    {
        $this->saveCounter = \App\Models\Counter::find(1)->counter;

        return view('livewire.counter');
    }

    public function incrementCounter()
    {
        $counter = \App\Models\Counter::find(1);
        $this->saveCounter = $counter->counter++;
        $counter->save();
    }
}
