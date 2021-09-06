<!-- Name Field -->
<div class="form-group">
    <strong>{!! Form::label('name', __('models/post_templates.fields.name').':') !!}</strong>
    <p>{{ $postTemplate->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    <strong>{!! Form::label('body', __('models/post_templates.fields.body').':') !!}</strong>
    <p>{!! nl2br($postTemplate->body) !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <strong>{!! Form::label('created_at', __('models/post_templates.fields.created_at').':') !!}</strong>
    <p>{{ $postTemplate->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <strong>{!! Form::label('updated_at', __('models/post_templates.fields.updated_at').':') !!}</strong>
    <p>{{ $postTemplate->updated_at }}</p>
</div>

