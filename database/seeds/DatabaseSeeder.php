<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->truncateTables(array(
            'users',
            'senders',
            'mails',
            'historicals',
            'dependences',
        ));


        $this->call('DependenceTableSeeder');
        $this->call('SenderTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('MailTableSeeder');
        $this->call('HistoricalTableSeeder');


    }

    private function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        $this->checkForeignKeys(true);
    }

    private function checkForeignKeys($check)
    {
        $check = $check ? '1' : '0';
        DB::statement("SET FOREIGN_KEY_CHECKS = $check;");
    }

}
