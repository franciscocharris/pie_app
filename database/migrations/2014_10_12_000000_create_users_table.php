<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE IF NOT EXISTS `users` (
                `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `document_type` VARCHAR(45) NULL,
                `document` BIGINT(15) UNSIGNED  NULL,
                `name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
                `email` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
                `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
                `password` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
                `terms` BOOLEAN NULL,
                `remember_token` VARCHAR(100) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
                `created_at` TIMESTAMP NULL DEFAULT NULL,
                `updated_at` TIMESTAMP NULL DEFAULT NULL,
                PRIMARY KEY (`id`),
                UNIQUE INDEX `users_email_unique` (`email` ASC))
                ENGINE = InnoDB
                AUTO_INCREMENT = 1
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
        Schema::dropIfExists('users');
    }
}
