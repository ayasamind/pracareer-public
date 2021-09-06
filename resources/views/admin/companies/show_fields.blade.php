<!-- Name Field -->
<div class="form-group">
    {!! Form::label('company_img', __('models/companies.fields.company_img').':') !!}
    <p><img src="{{ $company->company_img }}" width="100px"></p>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/companies.fields.name').':') !!}
    <p>{{ $company->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/companies.fields.email').':') !!}
    <p>{{ $company->email }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('project', __('models/companies.fields.project').':') !!}
    <p>{{ $company->project }}</p>
</div>

<div class="form-group">
    {!! Form::label('description', __('models/companies.fields.description').':') !!}
    <p>{{ $company->description }}</p>
</div>

<div class="form-group">
    {!! Form::label('character', __('models/companies.fields.character').':') !!}
    <p>{{ $company->character }}</p>
</div>

<div class="form-group">
    {!! Form::label('site_url', __('models/companies.fields.site_url').':') !!}
    <p><a href="{{ $company->site_url }}" target="_brank">{{ $company->site_url }}</a></p>
</div>

<div class="form-group">
    {!! Form::label('twitter_url', __('models/companies.fields.twitter_url').':') !!}
    <p><a href="{{ $company->twitter_url }}" target="_brank">{{ $company->twitter_url }}</a></p>
</div>

<div class="form-group">
    {!! Form::label('facebook_url', __('models/companies.fields.facebook_url').':') !!}
    <p><a href="{{ $company->facebook_url }}" target="_brank">{{ $company->facebook_url }}</a></p>
</div>

<div class="form-group">
    {!! Form::label('instagram_url', __('models/companies.fields.instagram_url').':') !!}
    <p><a href="{{ $company->instagram_url }}" target="_brank">{{ $company->instagram_url }}</a></p>
</div>

<div class="form-group">
    {!! Form::label('address', __('models/companies.fields.address').':') !!}
    <p>{{ $company->address }}</p>
</div>

<div class="form-group">
    {!! Form::label('established_at', __('models/companies.fields.established_at').':') !!}
    <p>{{ $company->established_at }}</p>
</div>

<div class="form-group">
    {!! Form::label('member_count', __('models/companies.fields.member_count').':') !!}
    <p>{{ $company->member_count }}</p>
</div>

<div class="form-group">
    {!! Form::label('average_age', __('models/companies.fields.average_age').':') !!}
    <p>{{ $company->average_age }}</p>
</div>
