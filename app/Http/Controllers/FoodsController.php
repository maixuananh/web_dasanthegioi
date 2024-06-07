<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use  App\Models\Uppercase;
use App\Rules\Upppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    public function index()
    {
        // Fetch all foods from the database
        // $food = Food::Where('name', '=', 'pho')
        // ->firstOrFail();
        $foods = Food::all();
        // Pass the foods data to the view
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    public function create()
    {
        // Return a view to create a new food item
        $categories= Category::all();
        return view('foods.create',['categories'=> $categories]);
    }

    // Add other methods for storing, updating, and deleting foods

    public function store(CreateValidationRequest $request)
    {
        // $food= new Food();
        // $food->name = $request->input ('name');
        // $food->count = $request->input ('count');
        // $food->description =$request->input('description');
          //  $request
            //$request->validate();



            ([
                'name'=> new Upppercase,
            // 'name' => 'required|unique:food|max:255',
                'count' => 'required|integer|min:0|max:1000',
                'category_id' => 'required|exists:categories_id',
                'description' => 'nullable|string',
                'image' => 'required|mimes:ipg,png,jpeg|max:5048',


            ]);
                $generatedImageName = 'image' . time() . '_'
                . $request->name . '_'
                . $request->image->extension();

                $request->image->move(public_path('images'), $generatedImageName);
        //if the validation is pass,it will come here!
        $food = Food:: create([
            'name' => $request->input ('name'),
            'count' => $request->input ('count'),
            'description' =>$request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        //save to database
        $food->save();
        return redirect('/foods');
        //dd('this is store funciton');
    }
    public function edit($id)
    {
       $food= Food::find($id);

        return view('foods.edit')->with('food',$food);
    }
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validate();
        $food = Food::Where('id' ,$id)
             ->update([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
        ]);
        return redirect('/foods');
    }

    public function show($id)
    {
      $food= Food::find($id);

      return view('foods.show')->with('food',$food);
    }

}
