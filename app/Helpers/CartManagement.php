<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement
{
   // add item to cart
   static public function addItemToCart($product_id){
    $cart_ittems = self::getCartItemsFromCookie();

    $existing_item = null;

    foreach ($cart_ittems as $key => $item) {
        if ($item['product_id'] == $product_id) {
            $existing_item = $key;
            break;
        }
    }

    if ($existing_item != null) {
        $cart_ittems[$existing_item]['quantity']++;
        $cart_ittems[$existing_item]['total_amount'] = $cart_ittems[$existing_item]['quantity'] * $cart_ittems[$existing_item]['unit_amount'];
    }else{
        $product = Product::where('id', $product_id)->first(['id', 'name', 'price', 'images']);
        if ($product) {
            $cart_ittems[] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'image' => $product->images[0],
                'quantity' => 1,
                'unit_amount' => $product->price,
                'total_amount' => $product->price
            ];
        }
    }

    self::addCartItemsToCookie($cart_ittems);
    return count($cart_ittems);
   }

   // remove item from cart
   static public function removeCartItem($product_id){
    $cart_ittems = self::getCartItemsFromCookie();

    foreach ($cart_ittems as $key => $item) {
        if ($item['product_id'] == $product_id) {
            unset($cart_ittems[$key]);
            break;
        }
    }
   }

   //add cart items to cookies
   static public function addCartItemsToCookie($cart_ittems){
    Cookie::queue('cart_items', json_encode($cart_ittems), 60 * 24 *30);
   }

   //clear cart items from cookies
   static public function clearCartItems(){
    Cookie::queue(Cookie::forget('cart_items'));
   }

   //get cart items from cookies
   static public function getCartItemsFromCookie(){
       $cart_ittems = json_decode(Cookie::get('cart_items'), true);
       if (!$cart_ittems) {
        $cart_ittems = [];
       }
       return $cart_ittems;
   }

   //increment item quantity
   static public function incrementQuantityToCartItem($product_id){
       $cart_ittems = self::getCartItemsFromCookie();

        foreach ($cart_ittems as $key => $item) {
          if ($item['product_id'] == $product_id) {
            $cart_ittems[$key]['quantity']++;
            $cart_ittems[$key]['total_amount'] = $cart_ittems[$key]['quantity'] * $cart_ittems[$key]['unit_amount'];
          }
       }

       self::addCartItemsToCookie($cart_ittems);
       return $cart_ittems;
   }

   //decrement cart item quantity
   static public function decrementQuantityToCartItem($product_id){
       $cart_ittems = self::getCartItemsFromCookie();

       foreach($cart_ittems as $key => $item){
        if ($item['product_id'] == $product_id) {
            if ($cart_ittems[$key]['quantity'] > 1) {
                $cart_ittems[$key]['quantity']--;
                $cart_ittems[$key]['total_amount'] = $cart_ittems[$key]['quantity'] * $cart_ittems[$key]['unit_amount'];
            }
        }
       }

       self::addCartItemsToCookie($cart_ittems);
       return $cart_ittems;
   }

   //calculate cart total
   static public function calculateGrandTotal($items){
    return array_sum(array_column($items, 'total_amount'));
   }
}