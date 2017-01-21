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
			'quantity'=> 'required|numeric|min:1|max:100',
			'price'=>'required|numeric'

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
			'quantity'=> 'required|numeric|min:1|max:100',
			'price'=>'required|numeric'

			]);

		$input = $request->all();

		$item->fill($input)->save();

		return redirect('items');

	}

	// Deletes an item in the database.

	public function destroy($id)
	{

		$item = Item::findOrFail($id);

		$item->delete();

		return redirect()->route('items.index');

	}

	

	public static function results(Request $request)
	{

			// Gets the query string from our form submission 
    $query = $request->input('search');
    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
  	$items = \DB::table('items')->where('itemName', 'LIKE', '%' . $query . '%')->paginate(10);
        
	// returns a view and passes the view the list of articles and the original query.
    return view('items.search', compact('items', 'query'));


   	
 	}


	// function to calculate total price for items added to the basket.
	// 

	public static function total()
    {

    	$items = Item::select([
    	'*', \DB::raw('ROUND(quantity * price, 2) AS total')
		])
		->get();

		return $items->sum('total');

	}



}
