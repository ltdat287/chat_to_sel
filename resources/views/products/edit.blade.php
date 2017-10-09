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
                            {{ Form::open(['url' => route('products.update', [ 'id' => $product->id ]), 'method' => 'PUT', 'role' => 'form']) }}

                            @include('products.fields')

                            <div class="col-md-12">
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-lg-6 col-lg-offset-3 text-center">
                                        <button class="btn btn-white"
                                                type="submit">{{ trans( 'labels.cancel' ) }}</button>
                                        <button class="btn btn-primary"
                                                type="submit">{{ trans( 'labels.save' ) }}</button>
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
