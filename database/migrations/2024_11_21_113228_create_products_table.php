<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create("products", function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("name");
      $table->decimal("price", total: 12, places: 2);
      $table->integer("stock")->default(0);
      $table->decimal("discount", total: 12, places: 2)->default(0);
      $table->text("keywords");
    });
  }

  public function down(): void
  {
      Schema::dropIfExists("products");
  }
};
