@extends('master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Inventories</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">
                    <a href="inventories.html">Inventories</a>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-5 m-b-xs">
                            </div>
                            <div class="col-sm-4 m-b-xs">

                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="Product name" class="input-sm form-control">
                                    <span class="input-group-btn">
											<button type="button" class="btn btn-sm btn-default"><i
                                                        class="fa fa-search"></i> Search</button> </span></div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th width="300px" class="text-center">Name</th>
                                    <th width="100px" class="text-center">Quantity</th>
                                    <th width="150px" class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">Ha Noi</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown"
                                                    class="btn btn-primary btn-sm dropdown-toggle"><i
                                                        class="fa fa-bolt m-r-xs"></i> Actions.. <span
                                                        class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="inventories_count.html"><i class="fa fa-pencil m-r-xs"></i>
                                                        Count</a></li>
                                                <li><a href="inventories_new.html"><i class="fa fa-history m-r-xs"></i>
                                                        Adjust</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">Ha Noi</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown"
                                                    class="btn btn-primary btn-sm dropdown-toggle"><i
                                                        class="fa fa-bolt m-r-xs"></i> Actions.. <span
                                                        class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="inventories_count.html"><i class="fa fa-pencil m-r-xs"></i>
                                                        Count</a></li>
                                                <li><a href="inventories_new.html"><i class="fa fa-history m-r-xs"></i>
                                                        Adjust</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">Ha Noi</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown"
                                                    class="btn btn-primary btn-sm dropdown-toggle"><i
                                                        class="fa fa-bolt m-r-xs"></i> Actions.. <span
                                                        class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="inventories_count.html"><i class="fa fa-pencil m-r-xs"></i>
                                                        Count</a></li>
                                                <li><a href="inventories_new.html"><i class="fa fa-history m-r-xs"></i>
                                                        Adjust</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-white">1</button>
                                    <button class="btn btn-white  active">2</button>
                                    <button class="btn btn-white">3</button>
                                    <button class="btn btn-white">4</button>
                                    <button class="btn btn-white">5</button>
                                    <button class="btn btn-white">6</button>
                                    <button class="btn btn-white">7</button>
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
