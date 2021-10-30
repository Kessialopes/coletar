<?php

namespace app\Sett;

use 

class UserSettingsSett extends Sett
{
    public function buildSett()
    {
        $this
            ->add('password',
                  'password',
                [
                  'rules' => 'required|min:6|max:10|confirmed'
                ])->add('password_confirmation', 'password');
    }
}