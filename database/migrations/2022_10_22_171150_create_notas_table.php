<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create Model
     *  - php artisan make:model Nota -m
     *
     * Run the migrations.
     *  - php artisan migrate
     *  - php artisan migrate:rollback
     *  - php artisan migrate:reset
     *  - php artisan migrate add_fields_to_notas
     *  - php artisan make:migration create_notas_table
     *
     *  - php artisan migrate:refresh
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->text('descripcion');

        });
        /*Schema::table('notas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->text('descripcion');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
