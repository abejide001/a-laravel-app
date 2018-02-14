<?php

namespace App\Http\Controllers;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\RegistrationForm::class, [
            'method' => 'POST',
            'url' => route('register.store')
        ]);

        return view('register.create', compact('form'));
    }


    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\RegistrationForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        else{
            return redirect('/');
        }
    }

//    public function __construct(){
//        $this->middleware('guest');
//    }
//
//    public function create(){
//        return view('register.create');
//    }
//    public function store(){
//        $this->validate(request(),[
//            'name'=>'required',
//            'email'=>'required',
//            'password'=>'required|confirmed'
//
//        ]);
//        $user= User::create(request(['name', 'email', 'password']));
//        auth()->login($user);
//
//        return redirect('/');
//    }

    }
