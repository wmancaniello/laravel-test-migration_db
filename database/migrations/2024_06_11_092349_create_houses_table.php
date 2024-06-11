<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 
     * Traduzione in codice SQL
     * 
     * Run the migrations.
     * CREATE TABLE `houses` (
     *      `id` UNSIGNED BIGINT NOT NULL AUTO_INCREMENT,
     *      `address` VARCHAR(255) NOT NULL,
     *      `city` VARCHAR(255) NOT NULL,
     *      `state` VARCHAR(255) NOT NULL,
     *      `square_meters` UNSIGNED SMALLINT NOT NULL,
     *      `rooms_number` UNSIGNED TINYINT NOT NULL,
     *      `description` TEXT NULL,
     *      `price` DECIMAL(10,2) NOT NULL,
     *      `is_available` TINYINT NOT NULL DEFAULT(1),
     *      `created_at` TIMESTAMP NULL,
     *      `updated_at` TIMESTAMP NULL,
     *      PRIMARY KEY(`id`)
     * );
     */
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms_number')->unsigned();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
