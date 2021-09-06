@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/admins.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @lang('models/admins.plural')
                             <a class="pull-right" href="{{ route('admin.admins.create') }}"><i class="fa fa-plus-square fa-lg"></i> @lang('crud.add_new')</a>
                         </div>
                         <div class="card-body">
                             @include('admin.admins.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

