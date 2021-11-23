<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE IF NOT EXISTS `failed_jobs` (
            `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            `connection` TEXT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `queue` TEXT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `payload` LONGTEXT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `exception` LONGTEXT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `failed_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP() NOT NULL,
            PRIMARY KEY (`id`))
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
        Schema::dropIfExists('failed_jobs');
    }
}
