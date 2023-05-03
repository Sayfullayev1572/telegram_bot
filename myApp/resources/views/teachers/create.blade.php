
    @extends('layoutes.crud')

    @section('content')

    <div class="row ">
        <div class="col-lg-9">
            <h2>
                Teachers Page
            </h2>
        </div>
        <div class="col-lg-2">
            <a href="#" class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="col-lg-6">
        <form action=" {{ route('teachers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-lable">Name</label>
                <input type="text" class="form-control" placeholder="Name..." name="name">
            </div>
            <div class="mb-3">
                <label class="form-lable">Addres</label>
                <textarea class="form-control" placeholder="Addres..." rows="3" name="addres"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-lable">Email</label>
                <input type="email" class="form-control" placeholder="Email..." name="email">
            </div>
            <div class="mb-3">
                <label class="form-lable">Phone</label>
                <input type="text" class="form-control" placeholder="Phone..." name="phone">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>

    @endsection
