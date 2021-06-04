<?php

namespace App\Http\Controllers\Employes;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Models\Employe;

class EmployesController extends Controller
{
    public function index(PaginationRequest $request)
    {
        $data = $request->validated();
        $employes = Employe::active()->paginate($data['paginate'] ?? 10);
        return view('employes.employes', ['values' => $employes]);
    }

    public function show(PaginationRequest $request, $id)
    {
        $data = $request->validated();
        $employes = Employe::active()->where('department_id', $id)->paginate($data['paginate'] ?? 10);
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
//        $xml = XmlParser::load('employers.xml');
//        $user = $xml->parse([
//            'first_name' => ['uses' => 'first_name'],
//            'last_name' => ['uses' => ' last_name'],
//            'middle_name' => ['uses' => 'middle_name'],
//            'birthday' => ['uses' => 'birthday'],
//        ]);
//    }
}
