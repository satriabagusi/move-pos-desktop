<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Dashboard extends Component
{

    public $product_stock_warn;

    public function mount(){
        $this->product_stock_warn = Product::where('stock', "<=", 20)->get();
    }

    public function render()
    {
        return view('livewire.dashboard')
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
