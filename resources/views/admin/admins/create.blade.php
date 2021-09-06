@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('admin.admins.index') !!}">@lang('models/admins.plural')</a>
      </li>
      <li class="breadcrumb-item active">@lang('crud.add_new')</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>@lang('models/admins.singular')@lang('crud.add_new')</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'admin.admins.store']) !!}

                                    @include('admin.admins.fields', ['passwordForm' => true])

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
