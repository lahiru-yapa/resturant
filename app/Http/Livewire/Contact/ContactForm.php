<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use domain\Facades\Contact\ContactFacade;

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
            // 'contact.last_name' => 'required',
            // 'contact.email' => 'required',
            // 'contact.phone' => 'required',
            // 'contact.subject' => 'required',
            // 'contact.message' => 'required',
        ];
    }
    /**
     * messages
     *
     * @var array
     */
    protected $messages = [
        'contact.first_name.required' => 'Please enter first name.',
        // 'contact.last_name.required' => 'Please enter last name.',
        // 'contact.email.required' => 'Please enter email.',
        // 'contact.phone.required' => 'Please enter number.',
        // 'contact.subject.required' => 'Please enter subject.',
        // 'contact.message.required' => 'Please enter message.',
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
        dd($this->validate());
        ContactFacade::create($this->contact->toArray());

        // return redirect()->route('faq.all');
    }
}
