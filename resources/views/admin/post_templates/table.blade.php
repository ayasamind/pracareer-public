<div class="table-responsive-sm">
    <table class="table table-striped" id="admins-table">
        <thead>
            <tr>
                <th>@lang('models/post_templates.fields.name')</th>
                <th>@lang('models/post_templates.fields.body')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($postTemplates as $template)
                <tr>
                    <td>{{ $template->name }}</td>
                    <td>{{ Str::limit($template->body, '100', '...') }}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.post_templates.destroy', $template->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.post_templates.show', [$template->id]) }}" class='btn btn-ghost-info'>@lang('crud.detail')</a>
                            <a href="{{ route('admin.post_templates.edit', [$template->id]) }}" class='btn btn-ghost-info'>@lang('crud.edit')</a>
                            {!! Form::button(__('crud.destroy'), ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $postTemplates->appends(\Request::except('page'))->render() !!}
</div>