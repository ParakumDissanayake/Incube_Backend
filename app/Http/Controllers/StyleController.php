<?php

namespace App\Http\Controllers;

use App\Models\Style;
use App\Models\StyleItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Traits\ApiResponse;

class StyleController extends Controller
{

  use ApiResponse;

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
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
      'style_no' => 'required|string|max:255',
      'style_name' => 'required|string|max:255',
      'style_status' => 'required|string',
      'style_qty' => 'required|numeric',
      'style_type' => 'required|string',
      'style_item_list' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->validationFailed($validator);
    }

    try {
      $style = Style::create([
        'styleNo' => $request->input('style_no'),
        'styleName' => $request->input('style_name'),
        'styleQuantity' => $request->input('style_qty'),
        'styleStatus' => $request->input('style_status'),
        'styleType' => $request->input('style_type')
      ]);

      $styleItemList = $request->input('style_item_list');

      foreach ($styleItemList as $styleItem) {
        $validator = Validator::make($styleItem, [
          'item_id' => 'required',
          'consumption' => 'required'
        ]);

        if ($validator->fails()) {
          return $this->validationFailed($validator);
        }

        $styleItemObj = StyleItems::create([
          'itemId' => $styleItem['item_id'],
          'styleId' => $style->id,
          'consumption' => $styleItem['consumption']
        ]);
      }

      return $this->generateResponse('style created', $style);

    } catch (Exception $ex) {
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
