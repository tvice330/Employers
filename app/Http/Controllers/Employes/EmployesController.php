<?php

namespace App\Http\Controllers\Employes;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Models\Department;
use App\Models\Employe;

class EmployesController extends Controller
{
    /**
     * @param PaginationRequest $request
     * @return array|false|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|mixed
     */
    public function index(PaginationRequest $request)
    {
        $data = $request->validated();
        $employes = Employe::active()
            ->with(['department', 'type_employe'])
            ->paginate($data['paginate'] ?? 10);
        $department= Department::get();
        return view('employes.employes', [
            'employes' => $employes,
            'department' => $department
        ]);
    }

    /**
     * @return array|false|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|mixed
     */
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
