<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class ItemsController extends Controller
{
    
	// Index function. 
	// Passes through an array of existing shopping list items and navigates to the view.

	public function index() 
	{
		$items = Item::All();
		
		return view('items.index')->withItems($items);

	}

	// navigate to view containing form to create list items. 

	public function create()
	{

		return view('items.create');

	}

	// function to store a shopping list item based on user parameters.
	// validates data to ensure db integrity. for this case max. quantity of items a user can add is 100. 


	public function store(Request $request) 
	{

		$this->validate($request, [

			'itemName'=>'required',
			'quantity'=> 'required|numeric|max:100'

			]);

		$input = $request->all();

		Item::create($input);

		return redirect()->back(); 

	}

}
