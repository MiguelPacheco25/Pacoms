<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function(Blueprint $table){
            $table->id();
            $table->string('TicketTypeTicket');
            $table->string('MoneyTypeTicket');
            $table->string('PayTypeTicket');
            $table->string('ServiceTypeTicket');
            $table->string('SubTotalTicket');
            $table->string('IGVTicket');
            $table->string('TotalTicket');
            $table->string('client_id');
            $table->string('created_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tickets');
    }
}
