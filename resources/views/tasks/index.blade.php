@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
        <h1>タスク一覧</h1>
    
        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thred>
                    <tr>
                        <th>id</th>
                        <th>状態</th>
                        <th>タスク</th>
                    </tr>
                </thred>
                <tbody>
                    <ul>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                                <td>{{ $task->status }}</td>
                                <td>{{ $task->content}}</td>
                            </tr>
                        @endforeach
                    </ul>
                </tbody>
            </table>
        @endif
    
        {!! link_to_route('tasks.create', 'タスクリストの投稿', null, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    
@endsection