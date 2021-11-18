<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use domain\Facades\Contact\ContactFacade;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ContactForm extends Component
{
    public $contact;
    /**
     * mount
     *
     * @return void
     */
    public function mount()
    {
        $this->contact = new Contact();
    }


    /**
     * rules
     *
     * @return void
     */
    protected function rules()
    {
        return [
            'contact.first_name' => 'required',

        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'contact.first_name.required' => 'Please enter question.',

    ];

    /**
     * updated
     *
     * @param  string $propertyName
     *
     * @return void
     */
    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('Pages.contact.Components.contact_form');
    }
    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {
        $this->validate();
        dd("hhhhhhhhhhhhhhh");
        ContactFacade::create($this->contact->toArray());
        // Session::flash('alert-success', 'FAQ Created Successfully');
        // return redirect()->route('faq.all');
    }
}
