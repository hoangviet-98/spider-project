<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    use StorageImageTrait;
    private $hv_category;
    private $hv_product;
    private $hv_product_image;

    public function __construct(Category $hv_category, Product $hv_product)
    {
        $this->category = $hv_category;
        $this->product = $hv_product;
    }

    public function index(Request $request)
    {
        $hv_product = Product::with('category:id,cat_name');
        if ($request->name) $hv_product->where('pro_name', 'like', '%' . $request->name . '%');
        if ($request->cat) $hv_product->where('pro_category_id', $request->cat);
        $hv_product = $hv_product->orderByDesc('id')->paginate(10);
        $hv_category = $this->getCategories();

        $viewData = [
            'hv_product' => $hv_product,
            'hv_category' => $hv_category
        ];
        return view('admin.products.index',$viewData, compact('hv_product'));
    }
    public function getCategories()
    {
        return Category::all();
    }
    public function create()
    {
        $hv_category = $this->getCategories();
        return view('admin.products.create', compact('hv_category'));
    }

    public function store(RequestProduct  $requestProduct)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'pro_name' => $requestProduct->pro_name,
                'pro_slug' => str_slug($requestProduct->pro_name),
                'pro_category_id' => $requestProduct->pro_category_id,
                'pro_price' => $requestProduct->pro_price,
                'pro_description' => $requestProduct->pro_description,
                'pro_status' => $requestProduct->pro_status,
                'cat_id' => $requestProduct->cat_id,
            ];
            $dataUploadImage = $this->storageTraitUpload($requestProduct, 'pro_image', 'product');
            if (!empty($dataUploadImage)) {
                $dataProductCreate['pro_imageName'] = $dataUploadImage['file_name'];
                $dataProductCreate['pro_image'] = $dataUploadImage['file_path'];
            }
            $hv_product = $this->product->create($dataProductCreate);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product saved!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }


    public function edit($id)
    {
        $hv_product = Product::find($id);
        $hv_category = $this->getCategories();
        return view('admin.products.edit', compact('hv_product', 'hv_category'));
    }


    public function update(RequestProduct $requestProduct, $id)
    {

    }

    public function delete($id)
    {
        try {
            Product::find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);

        } catch (\Exception $exception) {
            Log::error('message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ],500);
        }
    }

    public function action($action, $id)
    {
        if ($action)
        {
            $hv_product = Product::find($id);
            switch ($action)
            {
                case 'active':
                    $hv_product->pro_active = $hv_product->pro_active ? 0 : 1;
                    break;
                case 'hot':
                    $hv_product->pro_hot = $hv_product->pro_hot ? 0 : 1;
                    break;
            }
            $hv_product->save();
        }
        return redirect()->back();
    }
}
