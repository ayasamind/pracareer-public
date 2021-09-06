@extends('layouts.admin')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.post_templates.index') }}">@lang('models/post_templates.plural')</a>
            </li>
            <li class="breadcrumb-item active">@lang('crud.detail')</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                <strong>@lang('crud.detail')</strong>
                                <a href="{{ route('admin.post_templates.edit', [$postTemplate->id]) }}" class='btn btn-ghost-info'>@lang('crud.edit')</a>
                             </div>
                             <div class="card-body">
                                 @include('admin.post_templates.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
