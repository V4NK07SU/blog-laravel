<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'  => 'facundo tanjausen',
            'email'              => 'facundo@gmail.com ',
            'username'                 => 'facundito',
            'password'                => hash::make('pito'),

        ]
        );
        User::create(['name'  => 'agapito di zousa',
            'email'              => 'agapito@gmail.com ',
            'username'                 => 'agapito',
            'password'                =>hash::make('pito')

        ]
        );
    }
}
