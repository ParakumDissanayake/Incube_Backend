<?php 

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Traits\ApiResponse;

class ItemController extends Controller 
{
  use ApiResponse;
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = Item::all()->with('ItemCategory');
    return $this->generateResponse('items retrived', $items);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    // General validation
    $validator = Validator::make(request()->all(), [
      'item_code' => 'required|string|max:255',
      'item_name' => 'required|string|max:255',
      'category_id' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->validationFailed($validator);
    }

    try {
      $style = Item::create([
        'itemName' => $request->input('item_name'),
        'itemCode' => $request->input('item_code'),
        'categoryID' => $request->input('category_id')
      ]);
      return $this->generateResponse('item created', $style);
    }
    catch(Exception $ex){
      return $this->generateResponse($ex->getMessage(), '', 'Failed', 500);
    }

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>