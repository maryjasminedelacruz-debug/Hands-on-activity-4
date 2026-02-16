<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $type;
    public $bgColor;

    /**
     * Create a new component instance.
     */
    public function __construct($message = null, $type = 'info')
    {
        $this->message = $message;
        $this->type = $type;

        if ($type === 'success') {
            $this->bgColor = 'bg-green-500';
        } elseif ($type === 'error') {
            $this->bgColor = 'bg-red-500';
        } else {
            $this->bgColor = 'bg-blue-500';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
