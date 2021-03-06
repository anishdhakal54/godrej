<?php

use App\CartProduct;
use App\Models\Category;
use App\Models\Configuration;
use App\Helpers\Image\LocalImageFile;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


function getProductSlug($id)
{

    $product = Product::findOrFail($id);

    return isset($product->slug) ? $product->slug : Str::slug($product->name);
}

function getProductImage($id, $size = null)
{
    $product = DB::table('products')
        ->leftJoin('product_images', 'products.id', '=', 'product_images.product_id')
        ->where('product_images.is_main_image', '=', 1)
        ->where('products.id', '=', $id)
        ->select('product_images.path')
        ->first();

    if (null === $product || empty($product)) {
        $defaultPath = "/img/default-product.jpg";
        $localImage = new LocalImageFile($defaultPath);
    } else {
        $localImage = new LocalImageFile($product->path);
    }

    switch ($size) {
        case "small":
            $imageUrl = $localImage->smallUrl;
            break;
        case "medium":
            $imageUrl = $localImage->mediumUrl;
            break;
        case "large":
            $imageUrl = $localImage->largeUrl;
            break;
        case "full":
            $imageUrl = $localImage->url;
            break;
        default:
            $imageUrl = $localImage->mediumUrl;
    }

    return $imageUrl;
}

function getUserAddress($user)
{
    return $user->addresses->first->toArray();
}

function isValidTimestamp($timestamp)
{
    if (preg_match("/^(\d{4})-(\d{2})-(\d{2}) ([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $timestamp, $matches)) {
        if (checkdate($matches[2], $matches[3], $matches[1])) {
            return true;
        }
    }

    return false;
}

function humanizeDate(Carbon $date)
{
    return $date->diffForHumans();
}

function excerpt($content, $length = 30)
{
    return Str::words(strip_tags($content), $length);
}

function getOrderStatusClass($status)
{
    switch ($status) {
        case 'Pending':
            $statusClass = "warning";
            break;
        case 'Delivered':
            $statusClass = "success";
            break;
        case 'Received':
            $statusClass = "info";
            break;
        case 'Canceled':
            $statusClass = "danger";
            break;
        default:
            $statusClass = "info";
    }

    return $statusClass;
}

function categorySeperator($string = '', $size)
{
    for ($i = 2; $i < $size; $i++) {
        $string .= $string;
    }

    return $string;
}

function getConfiguration($key)
{
    $config = Configuration::where('configuration_key', '=', $key)->first();
    if ($config != null) {
        return $config->configuration_value;
    }

    return null;
}

function getProductsByCategory($category)
{
    switch ($category) {
        case 'Latest':
            $products = Product::orderby('id', 'DESC')->take(10)->get();
            break;
        case 'Featured':
            $products = Product::where('is_featured', 1)->orderby('id', 'DESC')->take(10)->get();
            break;
        default:
            $category = Category::where('name', 'like', '%' . $category . '%')->firstOrFail();
            $products = $category->products->take(10);
    }


    return $products;
}

/**
 * @param $message_type
 * @param $title
 * @param $message
 * @param string $icon
 * @param string $anim
 * @param string $x
 * @param string $y
 * @return stdClass
 */
function json_notification($message_type, $title, $message, $icon = 'steadysets-newspaper', $anim = 'slideInRight', $x = 'right', $y = 'top')
{
    $message = [
        'type' => $message_type,
        'title' => $title,
        'message' => $message,
        'icon' => $icon,
        'anim' => $anim,
        'x' => $x,
        'y' => $y
    ];


    return response()->json(collect($message));
}

function getCategoryBySlug($slug)
{
    $category = Category::where('name', 'like', "%$slug%")->first();
    return $category;
}

function getProductPrice($product)
{
    return isset($product->prices->first()->sale_price) ? $product->prices->first()->sale_price : $product->prices->first()->regular_price;
}

function getSize($id)
{
    $size = \App\Size::find($id);
    return $size;
}

function getPerColorPrice()
{
    return 8;
}

function getPerFramePrice()
{
    return 400;
}

function getProductLimit()
{
    return 200;
}

function getDiscount($item_no)
{
    if ($item_no >= 5 && $item_no < 10) {
        return 5;
    }
    if ($item_no >= 10 && $item_no < 20) {
        return 8;
    }
    if ($item_no >= 20) {
        return 12;
    }
    return 0;
}

function getFrameRate($item_no, $color_no)
{
    if ($item_no >= getProductLimit()) {
        return 0;
    } else {
        return $color_no * getPerFramePrice();
    }
}

function cartCount()
{
    $cartCount = 0;
    if (Auth::check()) {

        $cartCount = \App\CartProduct::where('user_id', auth()->user()->id)->get()->count();
    }
    return $cartCount;
}

function cartTotal()
{
    $cartCount = 0;
    $total = 0;
    if (Auth::check()) {

        $carts = \App\CartProduct::where('user_id', auth()->user()->id)->get();
        foreach ($carts as $cart) {
            $total += $cart->price;
        }
    }
    return $total;
}

function cartQty($cart)
{
    if ($cart->product->disable_size) {
        return $cart->qty;
    }
    $total = 0;
    $total += $cart->xs;
    $total += $cart->s;
    $total += $cart->m;
    $total += $cart->xl;
    $total += $cart->xxl;
    $total += $cart->xxxl;
    return $total;
}

function sideCount($cart)
{
    $total = 0;
    $total += $cart->front;
    $total += $cart->back;
    $total += $cart->pocket;
    return $total;
}

function cartContent()
{
    return CartProduct::where('user_id', auth()->user()->id)->get();
}

function getSubtotal($cartContent)
{
    $product_price = $cartContent->product->getPrice();
    $subtotal = $product_price * cartQty($cartContent);
    return $subtotal;
}

function getTotal($cartContent, $has_frame)
{

    $color_no = $cartContent->color_no;
    $totalqty = cartQty($cartContent);
    $side_count = sideCount($cartContent);
    if ($cartContent->interest_logo) {
        $frame_price = getFrameRate($totalqty, $color_no);
        $color_price = $color_no * $side_count * getPerColorPrice() * $totalqty;
        if ($has_frame) {
            $frame_price = 0;
        }
    } else {
        $frame_price = 0;
        $color_price = 0;
    }
    $subtotal = getSubtotal($cartContent);

    // Discount price
    $discount = getDiscount($totalqty);
    $discount_amount = $subtotal * $discount / 100;

    $grand_total = $subtotal - $discount_amount + $frame_price + $color_price;
    //  dd("$subtotal - $discount_amount + $frame_price + $color_price");
    return $grand_total;
}

function getUniqueDiscount()
{
    return 2;
}

function getMitemDiscount($usercart)
{
    $arr = $usercart->pluck('product_id')->toArray();
    if (count(array_unique($arr)) > 1) {
        return getUniqueDiscount();
    }
    return 0;
}

function taxCalculation($usercart)
{
    //    dd($usercart);
    $total = 0;

    $tax = getConfiguration('tax_percentage');
    if ($tax == null) {

        return $total;
    } else {
        foreach ($usercart as $cart) {
            $sub = $cart->price * ($tax / 100);
            $total = $total + $sub;
        }

        return $total;
    }

    function checkdatefor4days()
    {
        $otherDate = Carbon::now()->addDay(7);
        $nowDate = Carbon::now();

        if ($nowDate->gt($otherDate)) {
            return true;
        } else {
            return false;
        }
    }
}
