<?php

namespace App\Http\Controllers\Swagger;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Swagger\Annotations as SWG;


/**
 * Class ApiController
 * @package App\Http\Controllers\Swagger
 */
class ApiController extends Controller
{

    /**
     * 返回JSON格式的Swagger定义 主swagger定义必须定义
     *
     * @SWG\Swagger(
     *     schemes={"http","https"},
     *     host="demo.swagger.com",
     *     basePath="/",
     *     @SWG\Info(
     *         title="9斗鱼app api swagger 文档",
     *         version="4.0.0"
     *     )
     * )
     */
    public function config()
    {
        // swagger 扫描 指定路径
        $swagger = \Swagger\scan(app_path('Http/Controllers/'));

        return response()->json($swagger, 200);
    }

    public function index(){
        $swaggerJsonUrl = 'http://demo.swagger.com/swagger/config';
        return view('swagger-ui', ['url'=> $swaggerJsonUrl]);
    }

}
