
    @extends('layoutes.crud')

    @section('content')

    <div class="row ">
        <div class="col-lg-9">
            <h2>
                Teachers
            </h2>
        </div>

        <div class="col-lg-2">
            <a href="{{ route('teachers.create') }}" class="btn btn-primary"> Create</a>
        </div>
    </div>

    <div class="row mt-3">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Addres</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Buttons</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                ?>
                @foreach($teachers as $teacher)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $teacher->name}}</td>
                        <td>{{ $teacher->addres}}</td>
                        <td>{{ $teacher->phone}}</td>
                        <td>{{ $teacher->email}}</td>
                        <td>
                            <a href="{{ route('teachers.show', $teacher->id)}} " class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('teachers.edit', $teacher->id)}}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    @endsection
