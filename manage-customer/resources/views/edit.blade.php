@extends('home')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-8"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-8">
                <form method="post" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                        @if($errors->has('name'))
                            <p class=" text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $customer->address }}" required>
                        @if($errors->has('address'))
                            <p class=" text-danger">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $customer->email }}" required>
                        @if($errors->has('email'))
                            <p class=" text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div>
                        <img src="{{ asset('storage/' . $customer->avatar) }}" id="image" alt="your image" width="100" height="100"/>

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
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection