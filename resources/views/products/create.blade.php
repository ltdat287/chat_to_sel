@extends('master')

@section('lib_css')
@endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Inventory Adjust</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="shops.html">Inventory</a>
                </li>
                <li class="active">
                    <strong>Inventory Adjust</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        @include('partials.errors')

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ trans( 'labels.shop_create' ) }}</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            {{ Form::open(['url' => route('products.store'), 'method' => 'POST', 'role' => 'form']) }}

                                <div class="col-md-7 b-r">

                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.name' ) }}</label>

                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.description' ) }}</label>

                                        <textarea name="description" class="form-control" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.images' ) }}</label>
                                        <div class="btn-group">
                                            <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                                <input type="file" accept="image/*" name="images" id="inputImage"
                                                       class="hide" multiple>
                                                {{ trans( 'labels.upload_image' ) }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.price' ) }}</label>

                                        <input type="text" class="form-control" name="price">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.sku' ) }}</label>

                                        <input type="text" class="form-control" name="sku">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.quantity' ) }}</label>

                                        <input type="number" class="form-control" name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.weight' ) }}</label>

                                        <input type="number" class="form-control" name="weight">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label">{{ trans( 'labels.category' ) }}</label>

                                        {{ Form::select('type_id', [ trans( 'labels.select_type_option' ) ] + $types, null, ['class' => 'form-control m-b', 'style' => 'width: 300px;']) }}

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-lg-6 col-lg-offset-3 text-center">
                                            <button class="btn btn-white" type="submit">{{ trans( 'labels.cancel' ) }}</button>
                                            <button class="btn btn-primary" type="submit">{{ trans( 'labels.save' ) }}</button>
                                        </div>
                                    </div>
                                </div>

                            {{ Form::close() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection

@section('custom_js')

@endsection
