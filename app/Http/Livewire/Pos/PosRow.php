<?php

namespace App\Http\Livewire\Pos;

use Livewire\Component;

class PosRow extends Component
{
    public $item;
    public function render()
    {
        return view('livewire.pos.pos-row');
    }
}
