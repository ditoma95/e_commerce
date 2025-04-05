<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('E-commerce | Product Detail')]
class ProductDetailPage extends Component
{
    public $slug;
    public $quantity = 1;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function increaseQty(){
        $this->quantity++;
    }

    public function decreaseQty(){
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }


    public function addToCart($product_id){
        $total_count = CartManagement::addItemToCart($product_id);
        $this->dispatch('update-cart-count', total_count : $total_count)->to(Navbar::class);
        // $this->alert('success', 'Product added to cart successfully', [
        //     'position' => 'top-end',
        //     'timer' => 3000,
        //     'toast' => true,
        // ]);
    }

    public function render()
    {

        return view('livewire.product-detail-page', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ]);
    }
}
