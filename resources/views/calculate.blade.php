
    <div class="row justify-content-center">
        <div class="col-md-6">
            {!! Form::open(['route' => 'calculate']) !!}
            <label class="form-label">
                id
            </label>
            <div class="form-group">
                {!! Form::text('id', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
