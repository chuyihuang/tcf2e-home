<!-- Title Form Input -->
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Location Form Input -->
<div class="form-group">
    {!! Form::label('location', 'Location:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Url Form Input -->
<div class="form-group">
    {!! Form::label('url', 'KKTIX Url:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Starts_at Form Input -->
<div class="form-group">
    {!! Form::label('starts_at', 'Starts At:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
        {!! Form::input('datetime-local', 'starts_at', $meetup->starts_at->format('Y-m-d\TH:i'), ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Ends_at Form Input -->
<div class="form-group">
    {!! Form::label('ends_at', 'Ends At:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
        {!! Form::input('datetime-local', 'ends_at', $meetup->ends_at->format('Y-m-d\TH:i'), ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Published_at Form Input -->
<div class="form-group">
    {!! Form::label('published_at', 'Publish At:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
        {!! Form::input('datetime-local', 'published_at', $meetup->published_at->format('Y-m-d\TH:i'), ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Image Form Uploader -->
<div class="form-group">
    {!! Form::label('image', 'Image file:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-9">
        {!! Form::file('image') !!}
    </div>
</div>

<!-- Submit Form Input -->
<div class="form-group">
    <div class="col-sm-9 col-sm-offset-2">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>