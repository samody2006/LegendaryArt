@extends('backend.layouts.app')
@section('title', 'Show Message ')
@section('content')


    <li class="breadcrumb-item">
        <a href="{{ route('message.index') }}">Messages</a>
    </li>
    <li class="breadcrumb-item active">Show</li>



<div class="container">
<h2>Message Details</h2>

{{ legendaryart_notification($errors) }}
    <table class="table table-bordered text-center">
        <tr>
            <th>Id</th>

            <td>
                    {{ $message->id }}
                </td>

        </tr>

    <tr>
            <th>Sender's Name</th>

            <td>
                    {{ $message->name }}
                </td>

        </tr>

        <tr>
            <th>Sender's Phone</th>


            <td>{{ $message->phone }}</td>


        </tr>

        <tr>
                <th>Message</th>

                <td>{{ $message->message }}</td>

            </tr>




                <tr>

                <th>Actions</th>

        <td class="d-flex justify-content-center">

        <form action="{{ route('message.destroy',$message->slug) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Del">
        </form>
{{--            <a href="{{ route('service.edit',$service->slug) }}" class="btn btn-success ml-3">Edit</a>--}}

        </td>


                    </tr>

    </table>

</div>
@endsection
