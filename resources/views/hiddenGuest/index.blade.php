@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=>['hidden-guest.store']]) !!}
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            {!! Form::text('answer', null, ['class'=>'form-control']) !!}
                            {{--<textarea name="answer" class="form-control" id="" cols="30" rows="10"></textarea>--}}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection