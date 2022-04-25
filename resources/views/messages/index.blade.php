@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="/css/index.css">
@endpush

@section('content')

<h1 class="index">メッセージ一覧</h1>

@if(count($messages) > 0)
    <table class="table table-striped">

        <thead>
        <tr>
            <th>id</th>
            <th>タイトル</th>
            <th>メッセージ</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($messages as $message)
        <tr>
            
            <td>{!! link_to_route('messages.show', $message->id, ['message' => $message->id]) !!}</td>
            <td>{{ $message->title }}</td>
            <td>{{ $message->content }}</td>
            <td>{!! link_to_route('messages.edit', '編集', ['message' => $message->id], ['class' => 'btn btn-primary']) !!}</td>
            <td>{!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}</td>
        </tr>
        @endforeach
        </tbody>

        
    </table>
    @endif

    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection