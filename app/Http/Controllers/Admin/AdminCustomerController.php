<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Traits\DeleteModelTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminCustomerController extends Controller
{
    use DeleteModelTrait;

    private $user;

    public function __construct(Customer $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->latest()->paginate(10);

        return view('admin.customer.index', compact('users'));
    }

    public function create()
    {
        return view('admin.customer.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'bail|required|min:6',
            'password_confirmation' => 'bail|required|same:password',

        ]);

        $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success','Bạn đã thêm dữ liệu thành công');
    }

    public function edit($id)
    {
        $user = $this->user->findOrFail($id);

        return view('admin.customer.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'bail|required|min:6',
            'password_confirmation' => 'bail|required|same:password',
        ]);
        $this->user->find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $this->user->find($id);

        return redirect()->route('admin.users.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->user);
    }
}
