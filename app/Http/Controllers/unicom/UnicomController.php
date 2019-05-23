<?php

namespace App\Http\Controllers\unicom;

use App\Http\Requests\unicom\SubmitFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnicomController extends Controller
{
    public function index()
    {
        $feeset = \DB::table('telecom_feeset')->get(['name', 'feeset']);
        return view('index', ['feeset' => $feeset]);
    }

    //提交表单参数
    public function submit(SubmitFormRequest $request)
    {
        $data = $request->all();
        \DB::table('user_apply')->insert([
            'username' => $data['name'],
            'mobile' => $data['phone'],
            'cardnumber' => $data['cardnum'],
            'address'=>$data['addr'],
            'email'=>$data['email'],
            'description'=>$data['remark'],
            'feeset'=>$data['feeset']
        ]);
        return response('表单验证通过');
    }

    public function unicom(Request $request)
    {
        if (!$request->has('taocan')) {
            return redirect(url('/'));
        }
        return view('unicom', ['feeset' => $request->get('taocan')]);
    }

}
