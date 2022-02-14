<?php


namespace App\classes;


class User
{
    public function getALLUser()
    {
        return[
            0 => [
                'id' => 1,
                'name' => 'shehon',
                'email' => 'shehon@gmail.com',
                'password' => '11111'
            ],
            1 => [
                'id' => 2,
                'name' => 'nahid',
                'email' => 'nahid@gmail.com',
                'password' => '22222'
            ],
            2 => [
                'id' => 3,
                'name' => 'shorif',
                'email' => 'shorif@gmail.com',
                'password' => '33333'
            ],

        ];
    }

}