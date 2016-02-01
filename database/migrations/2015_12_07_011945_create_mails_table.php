<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mails', function(Blueprint $table)
		{
			$table->increments('id');
            $table->enum('status', ['open', 'delete', 'block', 'close']);
            $table->integer('ore_id')->unsigned();
            $table->date('date_in');
            $table->enum('type', ['letter', 'suitcase', 'other']);

            $table->string('sender_ref');

            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('senders')->onDelete('cascade');
            $table->string('sender_details');
            $table->mediumText('issue');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->integer('dependence_id')->unsigned();
			$table->foreign('dependence_id')->references('id')->on('dependences')->onDelete('cascade');

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
		Schema::drop('mails');
	}

}
