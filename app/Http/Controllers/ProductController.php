<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use App\Models\Product;
use App\Models\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['types'] = Type::pluck('type_name', 'id')->toArray();

        return view('products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductsRequest $request)
    {
        $shop = User::getShopActive();
        if (empty($shop)) {
            return redirect()->back()->withErrors([trans('labels.shop_not_found')]);
        }

        $product = Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'type_id' => $request->get('type_id'),
            'shop_id' => $shop->id
        ]);
        if (empty($product)) {
            return redirect()->back()->withErrors([trans('labels.create_product_error')]);
        }

        $slug_name = str_slug($request->get('name'));

        $product_variants = $product->product_variants()->create([
            'product_variant_name' => $slug_name,
            'sku' => $request->get('sku'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity'),
            'weight' => $request->get('weight')
        ]);

        if (empty($product_variants)) {
            $product->delete();

            return redirect()->back()->withErrors([trans('labels.create_product_error')]);
        }
        Session::flash('success', trans('labels.create_product_success'));

        return redirect(route('products.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['types'] = Type::pluck('type_name', 'id')->toArray();
        $shop = User::getShopActive();
        $product = Product::with('product_variants')->where('shop_id', $shop->id)->where('id', $id)->first();
        if (empty($product)) {
            return redirect()->back()->withErrors([trans('labels.product_not_found')]);
        }
        $data['product'] = $product;

        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductsRequest $request, $id)
    {
        $shop = User::getShopActive();
        $product = Product::with('product_variants')->where('shop_id', $shop->id)->where('id', $id)->first();
        if (empty($product)) {
            return redirect()->back()->withErrors([trans('labels.product_not_found')]);
        }

        $slug_name = str_slug($product->name);

        $product->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'type_id' => $request->get('type_id')
        ]);

        if (empty($product)) {
            return redirect()->back()->withErrors([trans('labels.update_product_error')]);
        }

        foreach ($product->product_variants as $variant) {
            if ($variant->product_variant_name === $slug_name) {
                $slug_name = str_slug($request->get('name'));
                $variant->update([
                    'product_variant_name' => $slug_name,
                    'sku' => $request->get('sku'),
                    'price' => $request->get('price'),
                    'quantity' => $request->get('quantity'),
                    'weight' => $request->get('weight')
                ]);
            }
        }

        Session::flash('success', trans('labels.update_product_success'));

        return redirect(route('products.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
