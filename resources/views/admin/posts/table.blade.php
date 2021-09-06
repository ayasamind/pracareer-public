<div class="table-responsive-sm">
    <table class="table table-striped" id="posts-table">
        <thead>
            <tr>
                <th>@sortablelink('company_id', __('models/companies.fields.name'))</th>
                <th>@lang('models/posts.fields.title')</th>
                <th>@sortablelink('created_at', __('models/posts.fields.created_at'))</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->company->name }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('admin.posts.show', [$post->id]) }}" class='btn btn-ghost-success'>@lang('crud.detail')</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $posts->appends(\Request::except('page'))->render() !!}
</div>