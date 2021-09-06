@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.students.index') !!}">@lang('models/students.plural')</a>
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
                              <strong>@lang('models/students.singular')@lang('crud.edit')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($student, ['route' => ['admin.students.update', $student->id], 'method' => 'patch']) !!}

                              @include('admin.students.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection