@extends('backend.layouts.app')
@section('title', 'All Messages ')
@section('content')


    <li class="breadcrumb-item active">Messages</li>


<div class="bg-white p-3">
<h3>All Messages</h3>

{{ legendaryart_notification($errors) }}

    @if (count($messages) > 0 )
    <table class="table table-bordered text-center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Message</th>
            <th>Action</th>
        </tr>

            @foreach ($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ ucfirst(strtok($message->name,' ')) }}</td>
                <td>{{ $message->phone }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}{{ str_limit($message->message,20) }}</td>
                <td><a href="{{ route('message.show',$message->slug) }}" class="btn btn-success">Show</a>
                </td>
            </tr>

            @endforeach
    </table>
        {{ $messages->onEachSide(5)->links() }}
    @else

    <p class="bg-info">No Message found yet</p>

    @endif

</div>
@endsection
