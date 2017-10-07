<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShopRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
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
        $user = Auth::user();
        // Create data to display in create new shop
        $shop = new Shop;
        $shop->avatar = empty($user->user_detail->avatar) ? '' : $user->user_detail->avatar;
        $data['shop'] = $shop;

        return view('shops.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateShopRequest $request)
    {
        $user = Auth::user();

        // Create new shop with count products and types is zero
        $data = $request->all();
        $data['user_id'] = $user->id;

        // Check exists and unique of slug_name
        if ($request->has('name') && !empty($request->get('name'))) {
            $slug_name = str_slug($request->get('name'));
            $exist = Shop::where('slug_name', $slug_name)->first();
            if ($exist) {
                return redirect()->back()->withErrors([trans('labels.shop_slug_name_error')])->withInput();
            }
            $data['slug_name'] = $slug_name;
        }

        $shop = Shop::create($data);
        if (empty($shop)) {
            return redirect()->back()->withErrors([trans('labels.create_shop_error')])->withInput();
        }

        // Set products count and type count is zero
        $shop->products_count = 0;
        $shop->types_count = 0;
        $shop->save();
        if ($shop) {
            Session::flash('success', trans('labels.create_shop_success'));
        }

        return redirect(route('shops.create'));
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
        // Check exist Shop of user login
        $shop = $this->checkExistShop($id);
        if (!$shop) {
            return redirect()->back()->withError([trans('labels.shop_not_found')]);
        }

        $data['shop'] = $shop;

        return view('shops.edit', $data);
    }

    /**
     * @param string $id
     * @return bool
     */
    private function checkExistShop($id = '')
    {
        $user = Auth::user();
        // Check exist Shop of user login
        $shop = Shop::where('user_id', $user->id)->where('id', $id)->first();
        if (empty($shop)) {
            return false;
        }

        return $shop;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateShopRequest $request, $id)
    {
        $data = $request->all();
        // Check exist Shop of user login
        $shop = $this->checkExistShop($id);
        if (!$shop) {
            return redirect()->back()->withError([trans('labels.shop_not_found')]);
        }

        // Check duplicate of slug_name of shop
        if ($request->has('name') && !empty($request->get('name'))) {
            $slug_name = str_slug($request->get('name'));
            $exist = Shop::where('slug_name', $slug_name)->where('id', '!=', $id)->first();
            if ($exist) {
                return redirect()->back()->withErrors([trans('labels.shop_slug_name_error')])->withInput();
            }
            $data['slug_name'] = $slug_name;
        }

        $shop->update($data);
        if ($shop) {
            Session::flash('success', trans('update_shop_success'));
        }

        return redirect(route('shops.edit', ['id' => $id]));
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
