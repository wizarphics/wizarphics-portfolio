<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Notifications\NewContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactFormRequest $request)
    {
        $data = $request->validated();
        $contact = Contact::create($data);

        Notification::send('wizarphics@gmail.com',  new NewContactSubmission($contact));
    }
}
