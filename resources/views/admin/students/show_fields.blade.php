
<!-- Image Url Field -->
<div class="form-group">
    {!! Form::label('image_url', __('models/students.fields.image_url').':') !!}
    <br>
    <img src="{{ $student->image_url ? $student->image_url : asset('img/default_usericon.jpg') }}" width="100px">
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/students.fields.name').':') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/students.fields.email').':') !!}
    <p>{{ $student->email }}</p>
</div>

<!-- phone_number Field -->
<div class="form-group">
    {!! Form::label('phone_number', __('models/students.fields.phone_number').':') !!}
    <p>{{ $student->phone_number }}</p>
</div>

<!-- Birthday Field -->
<div class="form-group">
    {!! Form::label('birthday', __('models/students.fields.birthday').':') !!}
    <p>{{ $student->birthday }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', __('models/students.fields.gender').':') !!}
    <p>{{ $student->gender ? $student->gender->description : '' }}</p>
</div>

<!-- university Field -->
<div class="form-group">
    {!! Form::label('university', __('models/students.fields.university').':') !!}
    <p>{{ $student->university }}</p>
</div>

<!-- department Field -->
<div class="form-group">
    {!! Form::label('department', __('models/students.fields.department').':') !!}
    <p>{{ $student->department }}</p>
</div>

<!-- graduate_year Field -->
<div class="form-group">
    {!! Form::label('graduate_year', __('models/students.fields.graduate_year').':') !!}
    <p>{{ $student->graduate_year }}</p>
</div>

<!-- twitter_url Field -->
<div class="form-group">
    {!! Form::label('twitter_url', __('models/students.fields.twitter_url').':') !!}
    <p>{{ $student->twitter_url }}</p>
</div>

<!-- facebook_url Field -->
<div class="form-group">
    {!! Form::label('facebook_url', __('models/students.fields.facebook_url').':') !!}
    <p>{{ $student->facebook_url }}</p>
</div>

<!-- instagram_url Field -->
<div class="form-group">
    {!! Form::label('instagram_url', __('models/students.fields.instagram_url').':') !!}
    <p>{{ $student->instagram_url }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/students.fields.created_at').':') !!}
    <p>{{ $student->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/students.fields.updated_at').':') !!}
    <p>{{ $student->updated_at }}</p>
</div>

@if ($student->student_profile)
    <div class="l-student__group">
        <label class="l-student__label">希望職種</label>
        @if ($student->student_jobs)
            <ul class="l-student__tags">
                @foreach ($student->student_jobs as $job)
                    <li class="l-student__tag">{{ $job->job_id->description }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="l-student__group">
        <label class="l-student__label">希望業界</label>
        @if ($student->student_industries)
            <ul class="l-student__tags">
                @foreach ($student->student_industries as $industry)
                    <li class="l-student__tag">{{ $industry->industry_id->description }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="l-student__group">
        <label class="l-student__label">自分の強み（特に強いものを1~5つまで）※理想ではなく現状</label>
        @if ($student->student_strengths)
            <ul class="l-student__tags">
                @foreach ($student->student_strengths as $strength)
                    <li class="l-student__tag">{{ $strength->strength_id->description }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="form-group">
        {!! Form::label('terms', __('models/students.fields.terms').':') !!}
        <p>{{ $student->student_profile->terms->description }}</p>
    </div>

    <!-- self_pr Field -->
    <div class="form-group">
        {!! Form::label('self_pr', __('models/students.fields.self_pr').':') !!}
        <p>{{ $student->student_profile->self_pr }}</p>
    </div>
@endif