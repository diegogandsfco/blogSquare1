<div class="form-group col-sm-12">
    <div class="row">
        @if (!empty($entry))
            <div class="form-group col-sm-4 col-md-2 col-6">
                {{ Form::number('id', $entry->id, ['class' => 'form-control','min'=>'0','readOnly']) }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="form-group col-sm-8 col-md-5">
           {{ Form::text('title', empty($entry) ? old('title') : $entry->title, ['class' => 'form-control','maxlength'=>75,'required','placeHolder'=>'Titulo publicación']) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            {{ Form::textarea('description', empty($entry) ? old('description') : $entry->description, ['class' => 'form-control','required','placeHolder'=>'Publicación']) }}
        </div>
    </div>
</div>
<!-- Submit Field -->

