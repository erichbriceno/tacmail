<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailsController extends Controller {

	public function control()
    {
        dd('Control');
    }

    public function closed()
    {
        dd('Closed');
    }

    public function details($id)
    {
        dd('mail: '. $id);
    }
}
