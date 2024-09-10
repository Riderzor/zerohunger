<?php

namespace App\Http\Controllers;
use App\Models\foodlisting;
use App\Models\User;
use App\Http\Requests\UpdatefoodlistingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\Acceptor;



class FoodlistingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $foods = foodlisting::all();
        
        try {
            $user = Auth::user();
            $userId = $user->id;
          
            $creatorId = $foods->creator->id;
            if ($userId === $creatorId) {

                return view('dashboard', compact('foods'));
            }
            // dd('inside try');

            abort(403);
        } catch (Exception $e) {
            // dd('this is catch');

            abort(403);
        }
        
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('asdasd');
        return view('AdminPanel.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foods = new foodlisting();
        
        $foods->name = $request->name;
        $foods->food_type = $request->food_type;
        $foods->contact = $request->contact;
        $foods->quantity = $request->quantity;
        
        $foods->address = $request->address;
        $foods->date = $request->date;
        $foods->time = $request->time;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('foods', $imagename);

            $foods->image = $imagename;
        }

        $foods->save();
        return redirect()->back()->with('message', 'Foods Listed successfully');


    
    
    }

    /**
     * Display the specified resource.
     */
    public function show(foodlisting $foodlisting)
    {
        $foods = foodlisting::all();
        

        return view('Foodlisting', compact('foods'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $value = $id;
        $data = (int)$id;

        $foods = foodlisting::find($data);
        // dd($foods);

        return view('AdminPanel.edit', compact('foods'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $foods = foodlisting::find($id);
        
        $foods->name = $request->name;
        $foods->food_type = $request->food_type;
        $foods->contact = $request->contact;
        $foods->quantity = $request->quantity;
        $foods->address = $request->address;
       
        $foods->date = $request->date;
        $foods->time = $request->time;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('foods', $imagename);

            $foods->image = $imagename;
        }
        $foods->save();

        return redirect()->back()->with('message', 'foods Update Successfully');
    
    }
    public function acceptfood(Request $request)
    {
        // $foods = new foodlisting();
        
        // $foods->user_name = $request->user_name;
        // $foods->user_email = $request->user_email;
        

        // return view('acceptfood', compact('foods'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $foods = foodlisting::findOrFail($id);

        $foods->delete();
        return redirect()->back();
    }
}
