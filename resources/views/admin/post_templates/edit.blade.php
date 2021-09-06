@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.post_templates.index') !!}">@lang('models/post_templates.plural')</a>
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
                              <strong>@lang('models/post_templates.singular')@lang('crud.edit')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($postTemplate, ['route' => ['admin.post_templates.update', $postTemplate->id], 'method' => 'patch']) !!}

                                @include('admin.post_templates.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection