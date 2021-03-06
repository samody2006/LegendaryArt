@extends('backend.layouts.app')
@section('title', 'Create Permission ')
@section('content')



    <li class="breadcrumb-item">
        <a href="{{ route('permission.index') }}">Permission</a>
    </li>
    <li class="breadcrumb-item active">Create</li>





<form action="{{ route('permission.store') }}" method="POST" enctype="multipart/form-data" class="row">
    @csrf

    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            {{ legendaryart_notification($errors)}}
            <div class="bg-white p-3">
            <h3>Create permission</h3>

        <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Display Name</label>
                    <input type="text" class="form-control" name="display_name">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>

            </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="form-group bg-white p-3">
                    <input type="submit" value="Create" class="btn btn-primary btn-block">
                </div>

    </div>




    </form>

</div>
@endsection
