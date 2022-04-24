@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="/css/create.css">
@endpush

@section('content')    

    <h1 class="create">メッセージ新規作成</h1>

    <div class="row"> 
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    

    
@endsection