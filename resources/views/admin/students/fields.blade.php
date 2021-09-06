<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/students.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/students.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_url', __('models/students.fields.image_url').':') !!}
    {!! Form::text('image_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', __('models/students.fields.birthday').':') !!}
    {!! Form::text('birthday', null, ['class' => 'form-control','id'=>'birthday']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#birthday').datetimepicker({
               format: 'YYYY-MM-DD',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', __('models/students.fields.gender').':') !!}
    <label class="radio-inline">
        {!! Form::radio('gender', 1, null) !!} 男性
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', 2, null) !!} 女性
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', 3, null) !!} その他
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.students.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
