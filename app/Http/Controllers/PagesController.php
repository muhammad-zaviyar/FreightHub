<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function blog()
    {
        return view('pages.pages.blog.blog');
    }

    public function blog_details()
    {
        return view('pages.pages.blog.blog-details');
    }

    public function blog_create()
    {
        return view('pages.pages.blog.blog-create');
    }

    public function chat()
    {
        return view('pages.pages.chat');
    }

    public function add_products()
    {
        return view('pages.pages.ecommerce.add-products');
    }

    public function cart()
    {
        return view('pages.pages.ecommerce.cart');
    }

    public function checkout()
    {
        return view('pages.pages.ecommerce.checkout');
    }

    public function edit_products()
    {
        return view('pages.pages.ecommerce.edit-products');
    }

    public function order_details()
    {
        return view('pages.pages.ecommerce.order-details');
    }

    public function orders()
    {
        return view('pages.pages.ecommerce.orders');
    }

    public function products()
    {
        return view('pages.pages.ecommerce.products');
    }

    public function product_details()
    {
        return view('pages.pages.ecommerce.product-details');
    }

    public function products_list()
    {
        return view('pages.pages.ecommerce.products-list');
    }

    public function wishlist()
    {
        return view('pages.pages.ecommerce.wishlist');
    }

    public function mail()
    {
        return view('pages.pages.email.mail');
    }

    public function mail_settings()
    {
        return view('pages.pages.email.mail-settings');
    }

    public function empty()
    {
        return view('pages.pages.empty');
    }

    public function faqs()
    {
        return view('pages.pages.faqs');
    }

    public function file_manager()
    {
        return view('pages.pages.file-manager');
    }

    public function invoice_create()
    {
        return view('pages.pages.invoice.invoice-create');
    }

    public function invoice_details()
    {
        return view('pages.pages.invoice.invoice-details');
    }

    public function invoice_list()
    {
        return view('pages.pages.invoice.invoice-list');
    }

    public function landing()
    {
        return view('pages.pages.landing');
    }

    public function pricing()
    {
        return view('pages.pages.pricing');
    }

    public function profile()
    {
        return view('pages.pages.profile');
    }
    
    public function profile_settings()
    {
        return view('pages.pages.profile-settings');
    }

    public function reviews()
    {
        return view('pages.pages.reviews');
    }

    public function search_results()
    {
        return view('pages.pages.search-results');
    }

    public function team()
    {
        return view('pages.pages.team');
    }

    public function terms_conditions()
    {
        return view('pages.pages.terms-conditions');
    }

    public function timeline()
    {
        return view('pages.pages.timeline');
    }

    public function todo_list()
    {
        return view('pages.pages.todo-list');
    }

}
