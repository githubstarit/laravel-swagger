<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    /**
     * @SWG\Post(
     *   path="/api/test",
     *   tags={"testTag"},
     *   summary="测试接口",
     *   @SWG\Parameter(
     *      name="age",
     *      in="formData",
     *      description="年龄",
     *      required=true,
     *      type="string",
     *      default="18",
     *   ),
     *    @SWG\Parameter(
     *      name="name",
     *      in="formData",
     *      description="姓名",
     *      required=true,
     *      type="string",
     *      default="hosea",
     *   ),
     *
     *   @SWG\Response(
     *     response=200,
     *     description="获取成功。",
     *   ),
     *   @SWG\Response(
     *     response=500,
     *     description="获取失败。",
     *   )
     * )
     */
    public function test(Request $request){
        $name = $request->input('name');
        $age  = $request->input('age');

        return ['name'=>$name, 'age'=>$age];
    }
}
