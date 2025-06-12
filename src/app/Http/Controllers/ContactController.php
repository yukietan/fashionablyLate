<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request -> only([
            'last_name','first_name','gender','email',
            'tel1', 'tel2','tel3','address','building',
            'detail', 'category_id'
        ]);
        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];
        return view('confirm',compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $input = $request -> only([
            'last_name','first_name','gender','email',
            'tel1', 'tel2','tel3','address','building',
            'detail', 'category_id'
        ]);
        $input['tel'] = $input['tel1'] . $input['tel2'] . $input['tel3'];
        unset($input['tel1'], $input['tel2'], $input['tel3']);
        Contact::create($input);
        return view('thanks');
    }


}
