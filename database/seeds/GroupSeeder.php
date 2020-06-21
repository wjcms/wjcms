<?php

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups=[
            ['name'=>'普通会员组','is_default'=>true],
            ['name'=>'VIP'],
        ];
        collect($groups)->map(function ($group) {
            Group::create($group);
        });
    }
}
