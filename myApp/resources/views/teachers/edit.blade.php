
    @extends('layoutes.crud')

@section('content')

    <div class="row ">
        <div class="col-lg-9">
            <h2>
                Edit Page
            </h2>
        </div>
        <div class="col-lg-2">
            <a href="{{ route('teachers.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="col-lg-6">
        <form action=" {{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-lable">Name</label>
                <input type="text" class="form-control" placeholder="Name..." name="name" value="{{ $teacher->name }}">
            </div>
            <div class="mb-3">
                <label class="form-lable">Addres</label>
                <textarea class="form-control" placeholder="Addres..." rows="3" name="addres">{{ $teacher->addres }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-lable">Email</label>
                <input type="email" class="form-control" placeholder="Email..." name="email" value="{{ $teacher->email }}">
            </div>
            <div class="mb-3">
                <label class="form-lable">Phone</label>
                <input type="text" class="form-control" placeholder="Phone..." name="phone" value="{{ $teacher->phone }}">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Yangilash">
            </div>
        </form>
    </div>

@endsection
