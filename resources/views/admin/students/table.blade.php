<div class="table-responsive-sm">
    <table class="table table-striped" id="students-table">
        <thead>
            <tr>
                <th>@lang('models/students.fields.id')</th>
                <th>@sortablelink('email_verified_at', __('models/students.fields.email_verified_at'))</th>
                <th>@lang('models/students.fields.name')</th>
                <th>@lang('models/students.fields.email')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->isVerified }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.students.show', [$student->id]) }}" class='btn btn-ghost-info'>@lang('crud.detail')</a>
                        {{-- <a href="{{ route('admin.students.edit', [$student->id]) }}" class='btn btn-ghost-info'>@lang('crud.edit')</a> --}}
                        {!! Form::button(__('crud.destroy'), ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $students->appends(\Request::except('page'))->render() !!}
</div>