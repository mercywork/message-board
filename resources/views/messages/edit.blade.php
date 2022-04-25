@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="/css/edit.css">
@endpush

@section('content')

    <h1>id:{{ $message->id}}のメッセージ編集ページ</h1>

    @if (count($errors) > 0)
        <ul class="alert alert-danger text-center"  role="alert">
            @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put'])!!}

                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}    
        </div>
    </div>


@endsection