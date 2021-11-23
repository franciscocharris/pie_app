<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE IF NOT EXISTS `social_profiles` (
            `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            `user_id` INT(10) UNSIGNED NOT NULL,
            `social_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `social_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `social_avatar` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `created_at` TIMESTAMP NULL DEFAULT NULL,
            `updated_at` TIMESTAMP NULL DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE INDEX `social_profiles_social_id_unique` (`social_id` ASC),
            INDEX `fk_social_profiles_users1_idx` (`user_id` ASC),
            CONSTRAINT `fk_social_profiles_users1`
              FOREIGN KEY (`user_id`)
              REFERENCES `users` (`id`)
              ON DELETE CASCADE
              ON UPDATE NO ACTION)
          ENGINE = InnoDB
          AUTO_INCREMENT = 6
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
        Schema::dropIfExists('social_profiles');
    }
}
