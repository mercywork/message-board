@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="/css/show.css">
@endpush

@section('content')

<h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <td>{{ $message->id }}</td>
    </tr>
    <tr>
        <th>メッセージ</th>
        <td>{{ $message->content }}</td>
    </tr>
</table>

<div class='edit-btn'>
{{-- メッセージ編集ページへのリンク --}}
{!! link_to_route('messages.edit', 'このメッセージを編集', ['message' => $message->id], ['class' => 'btn btn-primary']) !!}
</div>

<div class='destroy-btn'>
{{-- メッセージ削除フォーム --}}
{!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
{!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</div>

@endsection