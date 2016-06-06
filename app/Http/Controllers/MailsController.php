<?php namespace TacMail\Http\Controllers;

use TacMail\Http\Requests;
use TacMail\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailsController extends Controller {

	public function control()
    {
        return view('mails/control');
    }

    public function upload()
    {
        return view('mails/upload');
    }


    public function querySuitcases()
    {
        return view('mails/querySuitcases');
    }

    public function queryDocs()
    {
        return view('mails/queryDocs');
    }

    public function details($id)
    {
        dd('mail: '. $id);
    }

    public function stats()
    {
        dd("Stats");
    }
}
