<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Categories;

class Category extends Component
{
    public function render()
    {

        $categories = Categories::select('id','name','description')->get();
     //$categories  = Categories::all();

       return view('livewire.category',compact('categories'));
    }
}
