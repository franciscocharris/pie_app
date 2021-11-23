<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE IF NOT EXISTS `password_resets` (
            `email` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `token` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `created_at` TIMESTAMP NULL DEFAULT NULL,
            INDEX `password_resets_email_index` (`email` ASC))
          ENGINE = InnoDB
          DEFAULT CHARACTER SET = utf8mb4
          COLLATE = utf8mb4_unicode_ci;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
