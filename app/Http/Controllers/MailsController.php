<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailsController extends Controller {

	public function control()
    {
        return view('tickets/list');
    }

    public function closed()
    {
        return view('tickets/details');
    }

    public function details($id)
    {
        dd('mail: '. $id);
    }
}
