@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-6">
                <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name"
                               value="{{old('name')}}" required>
                        @if($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>

                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter address"
                               value="{{old('address')}}" required>
                        @if($errors->has('address'))
                            <p class=" text-danger">{{ $errors->first('address') }}</p>

                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email"
                               value="{{old('email')}}" required>
                        @if($errors->has('email'))
                            <p class=" text-danger">{{ $errors->first('email') }}</p>

                        @endif
                    </div>
                    <div class="form-group">
                        <img id="image" alt="your image" width="100" height="100"/>

                        <input type="file"
                               onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile"
                        >
                        @if($errors->has('inputFile'))
                            <p class=" text-danger">{{ $errors->first('inputFile') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
