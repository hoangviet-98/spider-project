<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Spa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminAuthController extends Controller
{
    private $admins;
    private $role;
    private $spa;

    public function __construct(Admin $admins, Role $role, Spa $spa)
    {
        $this->admins = $admins;
        $this->role = $role;
        $this->spa = $spa;
    }
    public function index()
    {

//        $admins = Admin::with('hv_spa:id,spa_name')->paginate(10);
        $admins = Admin::all();
        $role = $this->getRoles();

        $viewData = [
            'admins' => $admins,
            'role' => $role,

        ];
        return view('admin.admins.index', $viewData);
    }


    public function getSpa()
    {
        return Spa::all();
    }

    public function getRoles()
    {
        return Role::all();
    }

    public function create()
    {
        $spa = $this->getSpa();
        $roles = $this->getRoles();
        return view('admin.admins.create', compact('roles', 'spa'));
    }

    public function store(Request $request)
    {
        $admins = $this->admins->create([
            'name' => $request->name,
            'spa_id' => $request->spa_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $admins->roles()->attach($request->role_id);
        return redirect()->route('admin.get.list.admin');
    }
    public function edit($id)
    {
        $admins = $this->admins->find($id);
        $spa = $this->getSpa();
        $roles = $this->getRoles();
        $roleOfUser = $admins->roles;
        return view('admin.admins.edit', ['admins' => $admins,'spa' => $spa ,'role' => $roles, 'roleOfUser' => $roleOfUser]);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->admins->find($id)->update([
                'name' => $request->name,
                'spa_id' => $request->spa_id,
                'email' => $request->email,
//                'password' => Hash::make($request->password)
            ]);
            $admins = $this->admins->find($id);
            $admins->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('admin.get.list.admin');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . '--- Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        try {
            $this->admins->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);

        } catch (\Exception $exception) {
            Log::error('message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}
