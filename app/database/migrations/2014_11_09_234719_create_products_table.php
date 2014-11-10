<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->text('descripcion');
			$table->integer('presentacion')->unsigned()->index();
			$table->foreign('presentacion')->references('id')->on('presentationtypes');
			$table->date('fevencimiento');
			$table->double('precio');
			$table->double('iva');
			$table->integer('cantidad');
			$table->integer('proveedor')->unsigned()->index();
			$table->foreign('proveedor')->references('id')->on('providers');
			$table->integer('multiple');
			$table->integer('padre');
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
		Schema::drop('products');
	}

}
