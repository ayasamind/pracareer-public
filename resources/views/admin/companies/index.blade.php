@extends('layouts.admin')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/companies.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            @lang('models/companies.plural')
                            <a class="pull-right" href="{{ route('admin.companies.create') }}"><i class="fa fa-plus-square fa-lg"></i> @lang('crud.add_new')</a>
                        </div>
                         <div class="card-body">
                             @include('admin.companies.table')
                            <div class="pull-right mr-3">
                                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>

    @if (Session::has('registeredCompany'))
        <!-- Modal -->
        <div class="modal fade" id="companyModal" tabindex="-1" role="dialog" aria-labelledby="companyModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="companyModalLabel">@lang('models/companies.registered')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <h4>ログイン情報</h4>
                    <p>会社名:  {{ session('registeredCompany.name') }}</p>
                    <p>メールアドレス: {{ session('registeredCompany.email') }}</p>
                    <p>パスワード: {{ session('registeredCompany.password') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('models/companies.close')</button>
                </div>
            </div>
            </div>
        </div>
        @push('scripts')
            <script>
                $('#companyModal').modal().show()
            </script>
        @endpush
    @endif
@endsection
