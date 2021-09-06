<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/post_templates.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body', __('models/post_templates.fields.body').':') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.post_templates.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
