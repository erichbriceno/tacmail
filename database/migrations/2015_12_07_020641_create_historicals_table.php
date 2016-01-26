<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historicals', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('mail_id')->unsigned();
            $table->foreign('mail_id')->references('id')->on('mails')->onDelete('cascade');

            $table->enum('action', ['create', 'refer', 'comment', 'delete', 'block', 'close']);
            $table->mediumText('comment');

            $table->integer('refer_user_id')->unsigned();


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
		Schema::drop('historicals');
	}

}
