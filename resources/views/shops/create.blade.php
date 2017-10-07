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
                            <div class="col-lg-7">
                                <form method="post" class="form-horizontal" action="{{ route('shops.store') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">{{ trans('labels.name') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                   value="{{ old( 'name', isset( $shop ) ? $shop->name : '' )  }}"
                                                   name="name">
                                            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">{{ trans('labels.url') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                   value="{{ old( 'url', isset( $shop ) ? $shop->url : '' )  }}"
                                                   name="url">
                                            {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">{{ trans('labels.avatar') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                   value="{{ old( 'avatar', isset( $shop ) ? $shop->avatar : '' )  }}"
                                                   name="avatar">
                                            {!! $errors->first('avatar', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('landing_image') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">{{ trans('labels.landing_image') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                   value="{{ old( 'landing_image', isset( $shop ) ? $shop->landing_image : '' )  }}"
                                                   name="landing_image">
                                            {!! $errors->first('landing_image', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <a href="{{ url()->previous() }}" class="btn btn-white">{{ trans('labels.cancel') }}</a>
                                            <button class="btn btn-primary" type="submit">{{ trans('labels.save') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
@endsection

@section('custom_js')

@endsection
