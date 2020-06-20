<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ApiController;
use App\Http\Requests\PackageRequest;
use App\Models\Package;

class PackageController extends ApiController
{
    public function index()
    {
        return $this->json(Package::all());
    }


    public function store(PackageRequest $request, Package $package)
    {
        $package->name = $request->name;
        $package->save();
        return $this->success('添加成功', $package->toArray());
    }

    public function show(Package $package)
    {
        return $this->json($package);
    }

    public function update(PackageRequest $request, Package $package)
    {
        $package->name = $request->name;
        $package->save();
        return $this->success('更新成功');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return $this->success('删除成功');
    }
}
