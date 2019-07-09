<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use App\Customers;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customers::paginate(5);
        return view("list", compact("customers"));
    }

    public function create()
    {
        return view('create');
    }

    public function store(CreateCustomerRequest $request)
    {
        $customer = new Customers();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->email = $request->email;
        if ($request->hasFile('inputFile')) {
            $file = $request->inputFile;
            $path = $file->store('images', 'public');
            $customer->avatar = $path;
        }
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customers::findOrFail($id);
        return view('edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, $id)
    {
        $customer = Customers::findOrFail($id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        Customers::destroy($id);
        return redirect()->route('customers.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customers.index');
        }
        $customers = Customers::where('name', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);

        $cities = City::all();
        return view('list', compact('customers', 'cities'));
    }
}
