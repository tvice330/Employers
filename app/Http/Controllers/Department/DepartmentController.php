<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Models\Department;
use App\Models\Employe;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * @param PaginationRequest $request
     * @param $id
     * @return array|false|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|mixed
     */
    public function show(PaginationRequest $request, $id)
    {
        $data = $request->validated();
        $employes = Employe::active()->where('department_id', $id)->paginate($data['paginate'] ?? 10);
        $department = Department::get();
        if($employes->total() > 0) {
            return view('employes.department', [
                'employes' => $employes,
                'department' => $department,
                'id' => $id
            ]);
        }
        return redirect()->route('404');
    }
}
