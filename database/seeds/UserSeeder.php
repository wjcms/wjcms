<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        $user =User::find(1);
        $user->name = '神兵小将';
        $user->password = 'admin888';
        $user->email = 'wjcms@qq.com';
        $user->save();

        $user =User::find(2);
        $user->name = 'wjcms';
        $user->password = 'admin888';
        $user->email = 'wjcms888@qq.com';
        $user->save();
    }
}
