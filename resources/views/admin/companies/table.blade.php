<div class="table-responsive-sm">
    <table class="table table-striped" id="companies-table">
        <thead>
            <tr>
                <th>@lang('models/companies.fields.name')</th>
                <th>@lang('models/companies.fields.email')</th>
                <th>@lang('models/companies.fields.company_information')</th>
                <th>@lang('models/companies.fields.status')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->character ? '記入済み' : '未記入' }}</td>
                <td>{{ $company->status->description }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('admin.companies.show', [$company->id]) }}" class='btn btn-ghost-info'>@lang('crud.detail')</a>
                        {!! Form::open(['route' => ['admin.companies.changeStatus', $company->id], 'method' => 'post']) !!}
                        {!! Form::button(__('crud.change_status'), ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure_change_status').'")']) !!}
                        {!! Form::close() !!}
                        @if (!$company->posts)
                            {!! Form::open(['route' => ['admin.companies.destroy', $company->id], 'method' => 'delete']) !!}
                            {!! Form::button(__('crud.destroy'), ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $companies->appends(\Request::except('page'))->render() !!}
</div>