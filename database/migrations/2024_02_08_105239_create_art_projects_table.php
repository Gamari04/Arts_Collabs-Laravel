<?php

use App\Models\Partner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('image');
            $table->foreignIdFor(Partner::class);
            $table->string('status');
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
        Schema::dropIfExists('art_projects');
    }
};
