@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.admins.index') !!}">@lang('models/admins.plural')</a>
          </li>
          <li class="breadcrumb-item active">@lang('crud.edit')</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>@lang('models/admins.singular')@lang('crud.edit')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($admin, ['route' => ['admin.admins.update', $admin->id], 'method' => 'patch']) !!}

                                @include('admin.admins.fields', ['passwordForm' => false])

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection