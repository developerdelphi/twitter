<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    protected $listeners = ['tweet::created' => '$refresh'];
    public $perPage = 10;

    public function render()
    {
        return view('livewire.timeline',[
            'tweets' => Tweet::query()->latest()->paginate($this->perPage),
        ]);
    }

    public function loadMore()
    {
        $this->perPage += 10;
    }
}
