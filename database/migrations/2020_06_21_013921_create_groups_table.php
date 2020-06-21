<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->char('name')->unique()->comment('组名称');
            $table->tinyInteger('site_nums')->default(3)->comment('可创建的站点数量');
            $table->boolean('is_default')->default(false)->comment('是否为默认组');
            $table->smallInteger('day')->default(365)->comment('可用天数');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
