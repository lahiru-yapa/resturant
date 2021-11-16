<?php

namespace App\Http\Controllers;

use domain\Facades\Contact\ContactFacade;
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
     * service
     *
     * @return void
     */
    public function service()
    {
        return view('Pages.services.index');
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
        dd($request);
        $response['item'] = ContactFacade::store($request->all());
        $response['category'] = ContactFacade::getcategory();

        return view('Pages.Item.edit')->with($response);
    }
}
