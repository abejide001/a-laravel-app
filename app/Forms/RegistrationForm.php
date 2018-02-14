<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class RegistrationForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'rules'=>'required'
            ])
            ->add('email', 'text', [
                'rules'=>'required'
            ])
            ->add('password', 'password',[
                'rules'=>'required|confirmed'
            ]);
    }
}
