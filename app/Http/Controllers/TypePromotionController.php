<?php

namespace App\Http\Controllers;

use App\Models\TypePromotion;
use Illuminate\Http\Request;

class TypePromotionController extends Controller
{
    //
    public function pro_manage(){
        $promotions = TypePromotion::orderBy('id', 'desc')->get();
        return view('promotion.pro_manage',compact('promotions'));
    }
    public function create_pro(Request $request){

        $this->validate(request(),[
            'name_promotion' => 'required|max:255',
            'type_of_promotion' => 'required',
        ],[
            'name_promotion.required' => 'กรุณากรอกชื่อโปรโมชั่น',
            'type_of_promotion.required' => 'กรุณาเลือกประเภทโปรโมชั่น'
        ]);


        $promotion = new TypePromotion();
        $promotion->name_promotion = $request->get('name_promotion');
        $promotion->type_of_promotion = $request->get('type_of_promotion');
        $promotion->code_promotion = 'PR'.mt_rand(100000,999999);
        $promotion->save();
        return redirect(route('promotion.manage'))->with('success', 'สร้างโปรโมชั่นสำเร็จ');
    }

    public function delete_pro($id){
        $promotion = TypePromotion::find($id);
        $promotion->delete();
        return redirect()->route('promotion.manage')->with('success','ลบโปรโมชั่นสำเร็จ');
    }
}
