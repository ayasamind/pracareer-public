<div class="table-responsive-sm">
    <table class="table table-striped" id="student_requests-table">
        <thead>
            <tr>
                <th>@lang('models/student_requests.fields.status')</th>
                <th>学生</th>
                <th>企業名</th>
                <th>募集</th>
                <th>申請日時</th>
            </tr>
        </thead>
        <tbody>
        @foreach($studentRequests as $studentRequest)
            <tr>
                <td>{{ $studentRequest->status->description }}</td>
                <td>
                    @if ($studentRequest->student)
                        <a href="{{ route('admin.students.show', $studentRequest->student->id) }}" target="_brank">{{ $studentRequest->student->name }}</a>
                    @else
                        削除済み
                    @endif
                </td>
                <td>
                    @if ($studentRequest->post)
                        <a href="{{ route('admin.companies.show', $studentRequest->post->company->id) }}" target="_brank">{{ $studentRequest->post->company->name }}</a>
                    @else
                        削除済み
                    @endif
                </td>
                <td>
                    @if ($studentRequest->post)
                        <a href="{{ route('admin.posts.show', $studentRequest->post->id) }}" target="_brank">{{ $studentRequest->post->title }}</a>
                    @else
                        削除済み
                    @endif
                </td>
                <td>{{ $studentRequest->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $studentRequests->appends(\Request::except('page'))->render() !!}
</div>