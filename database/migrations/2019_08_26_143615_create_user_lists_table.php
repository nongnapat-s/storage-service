<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\UserList;
class CreateUserListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('role');
            $table->timestamps();
        });

        $admins = array(
            ['email' => 'n.ngnapat@gmail.com', 'role' => 'Admin'],
            ['email' => 'nong_com@hotmail.com', 'role' => 'Admin'],
        );

        foreach($admins as $admin){
            UserList::create($admin);
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_lists');
    }
}
