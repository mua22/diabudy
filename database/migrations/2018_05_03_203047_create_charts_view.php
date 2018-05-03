<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("
      CREATE VIEW charts AS
      (
        SELECT
  MIN(`readings`.`reading`) AS `min`,
  MAX(`readings`.`reading`) AS `max`,
  AVG(`readings`.`reading`) AS `average`,
  `readings`.`user_id` AS `user_id`,
  CAST(`readings`.`record_time` AS DATE) AS `date`
FROM `readings`
GROUP BY `readings`.`user_id`,CAST(`readings`.`record_time` AS DATE)
ORDER BY CAST(`readings`.`record_time` AS DATE)DESC
      )
    ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS charts');
    }
}
