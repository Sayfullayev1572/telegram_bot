@extends('layoutes.crud')

@section('content')

    <div class="row ">
        <div class="col-lg-9">
            <h2>
                List
            </h2>
        </div>

        <div class="col-lg-2">
            <a href="{{ route('teachers.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    <div class="col-lg-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Addres</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>stastus</th>
                    <th>Create at</th>
                    <th>Update at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $teacher->id }}</th>
                    <td>{{ $teacher->name}}</td>
                    <td>{{ $teacher->addres}}</td>
                    <td>{{ $teacher->phone}}</td>
                    <td>{{ $teacher->email}}</td>
                    <td>{{ $teacher->status}}</td>
                    <td>{{ $teacher->created_at}}</td>
                    <td>{{ $teacher->updated_at}}</td>
                </tr>
            </tbody>
          </table>
    </div>

@endsection

