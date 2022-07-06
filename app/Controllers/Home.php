<?php

namespace App\Controllers;

use App\Models\VisitorsModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    
    
    public function index()
    {
        $visitor = new VisitorsModel();
        $visitor->save([
            'type' => 2,
            'id_articles' => 1
        ]);

        
        return view('welcome_message');
    }

    
}
