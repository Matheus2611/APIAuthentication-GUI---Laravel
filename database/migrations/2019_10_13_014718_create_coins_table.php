<?php

use App\Coins;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('market_cap');
            $table->double('price');
            $table->double('volume_24h');
            $table->double('percent_change_24h');
            $table->timestamps();
        });

        Coins::create([
            'name' => 'bitcoin',
            'market_cap' => '1.1',
            'price' => '2.1',
            'volume_24h' => '3.55',
            'percent_change_24h' => '5.32',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
}
