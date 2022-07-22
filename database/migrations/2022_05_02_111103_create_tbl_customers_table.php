<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("custname");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("email");
            $table->string("password");
            $table->bigInteger("phone");
            $table->integer("pincode");
            $table->text("address");
            $table->string("photo");
            $table->integer("cid")->unsigned();
            $table->foreign("cid")->references("id")->on("tbl_countries");

            $table->integer("sid")->unsigned();
            $table->foreign("sid")->references("id")->on("tbl_states");

            $table->integer("ctid")->unsigned();
            $table->foreign("ctid")->references("id")->on("tbl_cities");

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
        Schema::dropIfExists('tbl_customers');
    }
}
