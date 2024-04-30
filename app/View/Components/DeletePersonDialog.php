<?php

namespace App\View\Components;

use App\Models\Pessoa;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeletePersonDialog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Pessoa $pessoa)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-person-dialog');
    }
}
