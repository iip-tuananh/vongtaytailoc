<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\models\product\Product;
use App\models\product\ProductBrands;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function listProductBrand($slug){
        $data['list'] = Product::where(['status'=>1,'brand_slug'=>$slug])
        ->orderBy('id','DESC')
        ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug', 'size')
        ->paginate(12);
        $data['brands'] = ProductBrands::where('status', 1)->get();
        $brand = ProductBrands::where('slug', $slug)->first();
        $data['title'] = 'Vòng theo '.$brand->name;
        return view('product.list',$data);
    }

    public function allProductBrand()
    {
        $data['list'] = Product::where(['status'=>1])->where('brand_id', '>', 0)
        ->orderBy('id','DESC')
        ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug', 'size')
        ->paginate(12);
        $data['brands'] = ProductBrands::where('status', 1)->get();
        $data['title'] = 'Tất cả vòng theo mệnh';
        return view('product.list', $data);
    }
}
