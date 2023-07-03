<?php

namespace App\Http\Controllers\dashboard;


use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Storage;
use Validator;

use App\DataTables\RolesDataTable;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RolesDataTable $datatables)
    {
        return $datatables->render('dashboard.datatable', [
            'title' => trans('site.roles'),
            'model' => 'roles',
            'count' => $datatables->count()
        ]);
    }

    public function selecteddata(Request $request)
    {
        $role = Role::with('permissions')->find($request->name);
        $models = ['users', 'clients', 'roles',
            'zones', 'installments', 'blocks', 'units','invoices','employees','sections','notes','prices','unitstatus','repairs','services','reports','categories','products'
        ];


        $maps = ['create', 'update', 'read', 'delete'];
//        return $role->permissions;

        return view('dashboard.users.role',compact('role','models','maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $models = ['users', 'clients', 'roles',
            'zones', 'installments', 'blocks', 'units','invoices','employees','sections','notes','prices','unitstatus','repairs','services','reports','categories','products'
        ];


        $maps = ['create', 'update', 'read', 'delete'];


        return view('dashboard.roles.create', compact('models', 'maps'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::extend('without_spaces', function ($attr, $value) {
            return preg_match('/^\S*$/u', $value);
        });
        $request->validate([
            // 'name' => 'required|unique:roles',
            'name' => 'required|without_spaces|unique:roles|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
//            'display_name' => 'required|without_spaces|unique:roles|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
//            'permissions' => 'required|min:1'
        ]);
        $input = $request->except('permissions');

        $role = Role::create($input);
        if ($request->has('permissions')) {
            $all_permissions = array_merge($request->permissions, []);
            $role->syncPermissions($all_permissions);

        }


        return redirect()->route('dashboard.roles.index')->with('success', 'Role Added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findorFail($id);

        $models = ['users', 'clients', 'roles',
            'zones', 'installments', 'blocks', 'units','invoices','employees','sections','notes','prices','unitstatus','repairs','services','reports','categories','products'
        ];


        $maps = ['create', 'update', 'read', 'delete'];
        return view('dashboard/roles/edit', compact('role', 'models', 'maps'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $role = Role::findorFail($id);
        $input = $request->except('permissions');
        $role->update($input);
        if ($request->has('permissions')) {
            $all_permissions = array_merge($request->permissions, []);
            $role->syncPermissions($all_permissions);

        }


        return redirect()->route('dashboard.roles.index')->with('success', 'Role Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findorFail($id);

        $role->delete();
        return back();
    }


}
