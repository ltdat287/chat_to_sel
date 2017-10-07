@extends('layouts.master')

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
                        <h5>Inventory Adjust</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <form method="post" class="form-horizontal" action="{{ route('shops.store') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">Product</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="product_id" style="width: 300px;">
                                                @if (count($products))
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                            {!! $errors->first('product_id', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">Location</label>

                                        <div class="col-sm-10">
                                            <div class="btn-group hierarchy-select" data-resize="auto"
                                                 id="select_location">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown">
                                                    <span class="selected-label pull-left"> </span>
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu open">
                                                    <div class="hs-searchbox">
                                                        <input type="text" class="form-control" autocomplete="off">
                                                    </div>
                                                    <ul class="dropdown-menu inner" role="menu">
                                                        <li data-value="" data-level="1" class="level-1 active">
                                                            <a href="#">Select Location</a>
                                                        </li>

                                                        @if( count( $locations ) )
                                                            @foreach( $locations as $location )
                                                                <li data-value="{{ $location->id }}"
                                                                    data-level="{{ $location->level }}"
                                                                    class="level-{{ $location->level }}" {{ $location->parent_id ? 'data-parent='. $location->parent_id : '' }}>
                                                                    <a href="#">{{ $location->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                                <input class="hidden hidden-field" id="option_select" name="location_id"
                                                       readonly aria-hidden="true" type="text"/>
                                                {!! $errors->first('location_id', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('available_stock') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">Available Stock</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                   value="{{ old( 'available_stock', isset( $item_stock ) ? $item_stock->quantity : '' )  }}"
                                                   name="available_stock">
                                            {!! $errors->first('available_stock', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('damaged_quantity') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">Damaged Quantity</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                   value="{{ old( 'damaged_quantity', isset( $item_stock ) ? $item_stock->damage : '' )  }}"
                                                   name="damaged_quantity">
                                            {!! $errors->first('damaged_quantity', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group {{ $errors->has('comments') ? 'has-error' : ''}}">
                                        <label class="col-sm-2 control-label">Comments</label>
                                        <div class="col-sm-10">
                                            <textarea name="comments" class="form-control" value="" cols="30"
                                                      rows="10"></textarea>
                                            {!! $errors->first('comments', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-white">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
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
