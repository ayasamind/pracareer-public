<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/posts.fields.status').':') !!}
    <p>{{ $post->status->description }}</p>
</div>

<!-- Company Id Field -->
<div class="form-group">
    {!! Form::label('company_id', __('models/posts.fields.company_id').':') !!}
    <p>{{ $post->company->name }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/posts.fields.title').':') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', __('models/posts.fields.body').':') !!}
    <p>{!! $post->body !!}</p>
</div>

<!-- Jobtype Field -->
<div class="form-group">
    {!! Form::label('jobtype', __('models/posts.fields.jobtype').':') !!}
    <p>
        @if ($post->post_jobs)
            <ul>
                @foreach ($post->post_jobs as $job)
                    <li>{{ $job->job_id->description }}</li>
                @endforeach
            </ul>
        @endif
    </p>
</div>

<!-- Industry Field -->
<div class="form-group">
    {!! Form::label('industry', __('models/posts.fields.industry').':') !!}
    <p>
        @if ($post->post_industries)
            <ul>
                @foreach ($post->post_industries as $industry)
                    <li>{{ $industry->industry_id->description }}</li>
                @endforeach
            </ul>
        @endif
    </p>
</div>

<!-- Main Image Url Field -->
<div class="form-group">
    {!! Form::label('main_image_url', __('models/posts.fields.main_image_url').':') !!}
    <p><img src="{{ $post->main_image_url }}" width="100px"/></p>
</div>

<!-- Sub Image Url1 Field -->
<div class="form-group">
    {!! Form::label('sub_image_url1', __('models/posts.fields.sub_image_url1').':') !!}
    <p><img src="{{ $post->sub_image_url1 }}" width="100px"/></p>
</div>

<!-- Sub Image Url2 Field -->
<div class="form-group">
    {!! Form::label('sub_image_url2', __('models/posts.fields.sub_image_url2').':') !!}
    <p><img src="{{ $post->sub_image_url2 }}" width="100px"/></p>
</div>

<!-- Sub Image Url3 Field -->
<div class="form-group">
    {!! Form::label('sub_image_url3', __('models/posts.fields.sub_image_url3').':') !!}
    <p><img src="{{ $post->sub_image_url3 }}" width="100px"/></p>
</div>

<!-- Shift Field -->
<div class="form-group">
    {!! Form::label('shift', __('models/posts.fields.shift').':') !!}
    <p>{{ $post->shift }}</p>
</div>

<!-- Salary Field -->
<div class="form-group">
    {!! Form::label('salary', __('models/posts.fields.salary').':') !!}
    <p>{{ $post->salary }}</p>
</div>

<!-- Place Field -->
<div class="form-group">
    {!! Form::label('prefecture', __('models/posts.fields.prefecture').':') !!}
    <p>{{ $post->prefecture->description }}</p>
</div>


<!-- Place Field -->
<div class="form-group">
    {!! Form::label('place', __('models/posts.fields.place').':') !!}
    <p>{{ $post->place }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/posts.fields.created_at').':') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/posts.fields.updated_at').':') !!}
    <p>{{ $post->updated_at }}</p>
</div>

