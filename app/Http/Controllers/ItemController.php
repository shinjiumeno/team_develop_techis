<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
   /**
    * コンストラクタ
    *
    * @return coid
    */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * アイテム登録
     *
     * @param Request $request
     * @return Response
     */

    public function create(Request $request)
     {
        return view('item/create');
     }

     /**
      * アイテム編集
      */
    
    public function edit()
     {
    // $member=Member::find($id);

    return view('item.edit');
     }
    
}
