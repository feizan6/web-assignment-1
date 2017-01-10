<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class ItemsController extends Controller
{
    
	// Passes through the array of existing shopping list items and navigates to the view.

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


	// show an individual item.

	public function show($id)
	{

		$item = Item::findOrFail($id);

		return view('items.show')->withItem($item);
	}


	//  passes through $id of item the user wants to amend and provides asso. view. 

	public function edit($id)
	{

		$item = Item::findOrFail($id);

		return view('items.edit')->withItem($item);


	}


	// Store a item based on user parameters. Validates data to ensure db integrity. max. quantity of items a user can add is 100. 


	public function store(Request $request) 
	{

		$this->validate($request, [

			'itemName'=>'required',
			'quantity'=> 'required|numeric|min:1|max:100'

			]);

		$input = $request->all();

		Item::create($input);

		return redirect()->back(); 

	}

	// Updates an existing item in the database.

	public function update($id, Request $request) 
	{

		$item = Item::findOrFail($id);

		$this->validate($request, [

			'itemName'=>'required',
			'quantity'=> 'required|numeric|min:1|max:100'

			]);

		$input = $request->all();

		$item->fill($input)->save();

		return redirect('items');

	}



}