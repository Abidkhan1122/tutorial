<?php
namespace App\View\Components; 
use Illuminate\View\Component;
use Illuminate\View\View;
class Marketing extends Component
{
    /**
     * Create the
     *  
     * @return void
     * */
    public function __construct(
        //  public string $type,
        //  public string $message,
    ) {}
    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\View\View
     * */
    public function render(): View
    {
        return view('components.Marketing');
    }
}