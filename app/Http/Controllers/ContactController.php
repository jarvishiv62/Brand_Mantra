<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contact')
            ->with('success', 'नमस्ते! Your message has been received. We will reach out within 24 hours.');
    }
}