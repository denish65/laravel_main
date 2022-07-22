<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproducts', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("catid")->unsigned();
            $table->foreign("catid")->references("id")->on("tbl_addcategories");
            $table->string("pname");
            $table->string("pimage");
            $table->integer("qty");
            $table->string("price");
            $table->text("pdescriptions");
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
        Schema::dropIfExists('addproducts');
    }
}
