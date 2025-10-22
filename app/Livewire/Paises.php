<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{

    public $paises = ['México', 'Argentina', 'Colombia', 'Perú', 'Chile'];
    public $pais;

    public function save()
    {
        array_push($this->paises, $this->pais);
        $this->reset('pais');
    }

    public function delete($index)
    {
        unset($this->paises[$index]);
    }
    public function render()
    {
        return view('livewire.paises');
    }
}
