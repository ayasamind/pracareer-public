@extends('layouts.admin')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.companies.index') }}">@lang('models/companies.plural')</a>
            </li>
            <li class="breadcrumb-item active">@lang('crud.detail')</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('flash::message')
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>@lang('crud.detail')</strong>
                            </div>
                            <div class="card-body">
                                @include('admin.companies.show_fields')
                                <a href="{{ route('admin.companies.index') }}"><button type="button" class="btn btn-secondary">@lang('crud.back')</button></a>
                                <a href="{{ route('admin.companies.password_reset', [
                                    'id' => $company->id
                                ]) }}">
                                    <button type="button" class="btn btn-danger" onclick="return confirm('{{ __('models/companies.confirm_password_reset') }}')">
                                        @lang('models/companies.password_reset')
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
    </div>
@endsection
