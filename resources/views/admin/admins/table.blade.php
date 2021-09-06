<div class="table-responsive-sm">
    <table class="table table-striped" id="admins-table">
        <thead>
            <tr>
                <th>@lang('models/admins.fields.name')</th>
                <th>@lang('models/admins.fields.email')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.admins.destroy', $admin->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.admins.show', [$admin->id]) }}" class='btn btn-ghost-info'>@lang('crud.detail')</a>
                            <a href="{{ route('admin.admins.edit', [$admin->id]) }}" class='btn btn-ghost-info'>@lang('crud.edit')</a>
                            {{-- ログインユーザーは削除させない --}}
                            @if (Auth::id() !== $admin->id) 
                                {!! Form::button(__('crud.destroy'), ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                            @endif
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $admins->appends(\Request::except('page'))->render() !!}
</div>