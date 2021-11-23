<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE IF NOT EXISTS `images` (
            `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
            `image_path` VARCHAR(255) NOT NULL,
            `imageable_id` BIGINT(20) NOT NULL COMMENT 'imagenes de productos,usuarios,promociones,devolucion,categoria,evidencia de pagos',
            `imageable_type` VARCHAR(255) NOT NULL,
            `created_at` TIMESTAMP NULL ,
            `updated_at` TIMESTAMP NULL ,
            PRIMARY KEY (`id`))
          ENGINE = InnoDB;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
