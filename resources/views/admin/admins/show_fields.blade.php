<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/admins.fields.name').':') !!}
    <p>{{ $admin->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/admins.fields.email').':') !!}
    <p>{{ $admin->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/admins.fields.created_at').':') !!}
    <p>{{ $admin->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/admins.fields.updated_at').':') !!}
    <p>{{ $admin->updated_at }}</p>
</div>

