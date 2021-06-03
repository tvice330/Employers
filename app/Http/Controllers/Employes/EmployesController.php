<?php

namespace App\Http\Controllers\Employes;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Models\Employe;
//use Illuminate\Http\Request;
//use Orchestra\Parser\Xml\Facade\XmlParser;

class EmployesController extends Controller
{
    public function index(PaginationRequest $request)
    {
        $employes = Employe::active()->paginate(10);
        return view('employes.employes', ['employes' => $employes ]);
    }

    public function show(PaginationRequest $request, $id)
    {
        $employes = Employe::active()->where('department_id', $id)->paginate(10);
        if($employes->total() > 0) {
            return view('employes.departments', ['employes' => $employes ]);
        }
        return redirect()->route('404');
    }

    public function notFound()
    {
        return view('employes.404');
    }

//    public function importEmployes()
//    {
//        $xml = XmlParser :: load ( 'путь / к / выше.xml' );
//        $user = $xml -> parse ([
//            'id' => [ 'uses' => 'user.id' ],
//            'first_name' => [ 'uses' => 'first_name' ],
//            'last_name' => [ 'uses' => ' last_name' ],
//            'middle_name' => [ 'uses' => 'middle_name' ],
//            'birthday' => [ 'uses' => 'birthday' ],
//]);
//    }
}
