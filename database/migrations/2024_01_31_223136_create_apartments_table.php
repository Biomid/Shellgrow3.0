<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('local');
            $table->string('building');
            $table->integer('room_number');
            $table->integer('quantity_rooms');
            $table->float('area');
            $table->string('parking_number')->nullable();
            $table->boolean('extra_nanny')->default(0);
            $table->boolean('extra_laundry')->default(0);
            $table->boolean('extra_cabinet')->default(0);
            $table->string('file_owner_document');
            $table->string('file_power_of_attorney')->nullable();
            $table->string('file_property_management_letter')->nullable();
            $table->string('file_commercial_offer')->nullable();
            $table->string('file_contacts')->nullable();
            $table->string('DEWA_account');
            $table->string('DEWA_account_password');
            $table->string('AC_account');
            $table->string('AC_account_password');
            $table->string('internet_account');
            $table->string('internet_account_password');
            $table->string('GAS_supplier')->nullable();
            $table->string('GAS_account')->nullable();
            $table->float('apartment_price');
            $table->float('invest');
            $table->float('rental_price_sigin');
            $table->float('commission');
            $table->boolean('communal_payments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
