<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

#[Title('E-commerce - Products')]
class ProductsPage extends Component
{
    use WithPagination;
    #[Url]
    public $selectd_categories = [];
    
    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selectd_categories)) {
            $productQuery->whereIn('category_id', $this->selectd_categories);
        }


        return view('livewire.products-page', [
            'products' => $productQuery->paginate(9),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}

