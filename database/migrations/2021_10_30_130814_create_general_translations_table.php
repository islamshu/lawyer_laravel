<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->longText('decription');
            $table->unique(['general_id', 'locale']);
            $table->foreign('general_id')->references('id')->on('generals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_translations');
    }
}
