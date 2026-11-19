<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('company_desc')->nullable();
            $table->text('company_address')->nullable();
            $table->text('company_visi')->nullable();
            $table->text('company_misi')->nullable();
            $table->string('company_no_telephone')->nullable();
            $table->string('company_founder_img')->nullable();
            $table->text('company_founder_desc')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
