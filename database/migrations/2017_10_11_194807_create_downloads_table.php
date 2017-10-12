<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('downloads')) {
            Schema::create('downloads', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email');
                $table->string('profession_affiliation');
                $table->string('how_did_rec');
                $table->string('community');
                $table->string('business');
                $table->string('classroom');
                $table->string('research');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downloads');
    }
}
