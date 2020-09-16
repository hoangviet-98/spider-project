<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProcessViewService;

class ProductDetailController extends FrontendController
{
    public function productDetail(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        if ($id = array_pop($url))
        {
            $productDetail = Product::where('pro_active', Product::STATUS_PUBLIC)->find($id);

            $viewData = [
                'productDetail'   => $productDetail,
                'productSuggests' => $this->getProductSuggests($productDetail->pro_category_id)
            ];
            ProcessViewService::view('hv_product', 'pro_view', 'productDetail', $id);

            return view('frontend.pages.product_detail.index' ,$viewData);
        }
        return redirect()->to('/');
    }

    public function getProductSuggests ($categoryID)
    {
        $products = Product::where([
            'pro_category_id' => $categoryID,
            'pro_active'      => 1
        ])
            ->orderBy('id', 'DESC')
            ->select('id', 'pro_name', 'pro_slug', 'pro_avatar', 'pro_price')
            ->limit(4)
            ->get();

        return $products;
    }
}
