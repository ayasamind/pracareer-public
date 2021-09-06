
<div class="card">
    <div class="card-header">連絡先</div>
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('name', __('models/students.fields.name').':') !!}
            @if ($studentRequest->isApproved)
                <p>{{ $studentRequest->student->name }}</p>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('email', __('models/students.fields.email').':') !!}
            @if ($studentRequest->isApproved)
                <p>{{ $studentRequest->student->email }}</p>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('phone_number', __('models/students.fields.phone_number').':') !!}
            @if ($studentRequest->isApproved)
                <p>{{ $studentRequest->student->phone_number }}</p>
            @endif
        </div>

        @if ($studentRequest->student->twitter_url)
            <div class="form-group">
                {!! Form::label('twitter_url', __('models/students.fields.twitter_url').':') !!}
                @if ($studentRequest->isApproved)
                    <p>{{ $studentRequest->student->twitter_url }}</p>
                @endif
            </div>
        @endif
            
        @if ($studentRequest->student->facebook_url)
            <div class="form-group">
                {!! Form::label('facebook_url', __('models/students.fields.facebook_url').':') !!}
                @if ($studentRequest->isApproved)
                    <p>{{ $studentRequest->student->facebook_url }}</p>
                @endif
            </div>
        @endif

        @if ($studentRequest->student->instagram_url)
            <div class="form-group">
                {!! Form::label('instagram_url', __('models/students.fields.instagram_url').':') !!}
                @if ($studentRequest->isApproved)
                    <p>{{ $studentRequest->student->instagram_url }}</p>
                @endif
            </div>
        @endif
        
    </div>
</div>


<!-- Image Url Field -->
<div class="form-group">
    {!! Form::label('image_url', __('models/students.fields.image_url').':') !!}
    <br>
    <img src="{{ $studentRequest->student->image_url ? $studentRequest->student->image_url : asset('img/default_usericon.jpg') }}" width="100px">
</div>

<!-- Birthday Field -->
<div class="form-group">
    {!! Form::label('birthday', __('models/students.fields.birthday').':') !!}
    <p>{{ $studentRequest->student->birthday }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', __('models/students.fields.gender').':') !!}
    <p>{{ $studentRequest->student->gender->description }}</p>
</div>

<!-- university Field -->
<div class="form-group">
    {!! Form::label('university', __('models/students.fields.university').':') !!}
    <p>{{ $studentRequest->student->university }}</p>
</div>

<!-- department Field -->
<div class="form-group">
    {!! Form::label('department', __('models/students.fields.department').':') !!}
    <p>{{ $studentRequest->student->department }}</p>
</div>

<!-- graduate_year Field -->
<div class="form-group">
    {!! Form::label('graduate_year', __('models/students.fields.graduate_year').':') !!}
    <p>{{ $studentRequest->student->graduate_year }}</p>
</div>

ES情報
@if ($studentRequest->student->student_profile)
    <!-- address Field -->
    <div class="form-group">
        {!! Form::label('address', __('models/students.fields.address').':') !!}
        <p>{{ $studentRequest->student->student_profile->address }}</p>
    </div>

    <!-- come_from Field -->
    <div class="form-group">
        {!! Form::label('come_from', __('models/students.fields.come_from').':') !!}
        <p>{{ $studentRequest->student->student_profile->come_from }}</p>
    </div>

    <!-- skill Field -->
    <div class="form-group">
        {!! Form::label('skill', __('models/students.fields.skill').':') !!}
        <p>{{ $studentRequest->student->student_profile->skill }}</p>
    </div>

    <!-- belongs_to Field -->
    <div class="form-group">
        {!! Form::label('belongs_to', __('models/students.fields.belongs_to').':') !!}
        <p>{{ $studentRequest->student->student_profile->belongs_to }}</p>
    </div>

    <!-- self_pr Field -->
    <div class="form-group">
        {!! Form::label('self_pr', __('models/students.fields.self_pr').':') !!}
        <p>{{ $studentRequest->student->student_profile->self_pr }}</p>
    </div>

    <!-- value Field -->
    <div class="form-group">
        {!! Form::label('value', __('models/students.fields.value').':') !!}
        <p>{{ $studentRequest->student->student_profile->value }}</p>
    </div>

    <!-- character Field -->
    <div class="form-group">
        {!! Form::label('character', __('models/students.fields.character').':') !!}
        <p>{{ $studentRequest->student->student_profile->character }}</p>
    </div>

    <!-- challenge Field -->
    <div class="form-group">
        {!! Form::label('challenge', __('models/students.fields.challenge').':') !!}
        <p>{{ $studentRequest->student->student_profile->challenge }}</p>
    </div>
@endif