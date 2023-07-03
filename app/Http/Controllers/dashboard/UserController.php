<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\UserDataTable;
use App\Models\User;
use Illuminate\Routing\Controller;
use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UserController extends controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $usersDatatables)
    {
//        return response()->json($usersDatatables);
        return $usersDatatables->render('dashboard.users.index', [
            'title' => trans('site.users'),
            'model' => 'users',
            'count' => $usersDatatables->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::get();
        return view('dashboard.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string|unique:users',
            'phone' => 'required|string|unique:users',

            'password' => 'required|confirmed',

        ]);


        $request_data = $request->except('_token', '_method', 'image');
        $request_data['password'] = bcrypt($request->password);
        $user = User::create($request_data);

        if (isset($request->roles)) {
            $user->syncRoles($request->roles);
        }
        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(100, 100)->save(public_path('images/users' . '/' . $filename));
            $user->image = $filename;
            $user->save();
        }

        return redirect(route('dashboard.users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::get();
        $models = ['users', 'clients', 'roles',
            'zones', 'installments', 'blocks', 'units','invoices','employees','sections','notes','prices','unitstatus','repairs','services'
        ];


        $maps = ['create', 'update', 'read', 'delete'];

       $role= $user->roles()->first();
        return view('dashboard.users.edit', compact('user', 'roles','role','models','maps'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::find($id);
        $request->validate([
            'email' => ['required', Rule::unique('users')->ignore($user->id),],
            'phone' => ['required', Rule::unique('users')->ignore($user->id),],
            'password' => 'nullable|confirmed',


        ]);
        $request_data = $request->except('_token', '_method');
        $request_data['password'] = bcrypt($request->password) ?? '';
        $user->update($request_data);
        if (isset($request->roles)) {
            $user->syncRoles($request->roles);
        }

        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(100, 100)->save(public_path('images/users' . '/' . $filename));
            $user->image = $filename;
            $user->save();
        }
        return redirect(route('dashboard.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return back();
    }
}
