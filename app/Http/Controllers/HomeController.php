<?php

namespace App\Http\Controllers;

use domain\Facades\Contact\ContactFacade;
use domain\Facades\Order\OrderFacade;
use domain\Facades\Sub\SubFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('Pages.Home.index');
    }

    /**
     * about
     *
     * @return void
     */
    public function about()
    {
        return view('Pages.about.index');
    }


    /**
     * cake
     *
     * @return void
     */
    public function cake()
    {
        return view('Pages.cake.index');
    }
    /**
     * service
     *
     * @return void
     */
    public function hotel()
    {
        return view('Pages.hotel.index');
    }

    /**
     * bakery
     *
     * @return void
     */
    public function bakery()
    {
        return view('Pages.bakery.index');
    }

    /**
     * gallery
     *
     * @return void
     */
    public function gallery()
    {
        return view('Pages.gallery.index');
    }


    /**
     * gallery2
     *
     * @return void
     */
    public function gallery2()
    {
        return view('Pages.gallery.index2');
    }
    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('Pages.contact.index');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {

        ContactFacade::create($request->all());

        return back();
    }

    /**
     * order_store
     *
     * @param  mixed $request
     * @return void
     */
    public function order_store(Request $request)
    {

        OrderFacade::create($request->all());

        return back();
    }

    public function subcribe_store(Request $request)
    {

        SubFacade::create($request->all());

        return back();
    }
}
