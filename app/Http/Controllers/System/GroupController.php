<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ApiController;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends ApiController
{
    public function index()
    {
        return $this->json(Group::all());
    }

    public function store(Request $request, Group $group)
    {
        $group->fill($request->input())->save();
        return $this->success('添加成功', $group->toArray());
    }

    public function show(Group $group)
    {
        return $this->json($group);
    }

    public function update(Request $request, Group $group)
    {
        $group->fill($request->input())->save();
        return $this->success('修改成功', $group->toArray());
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return $this->success('删除成功');
    }
}
