@extends('home')
@section('title', 'Danh sách khách hàng')
@section('content')

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-12">
        <div class="row">
            <h1>@lang('language.List_Customers')</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">@lang('language.Avatar')</th>
                    <th scope="col">@lang('language.Customer_name')</th>
                    <th scope="col">@lang('language.Address')</th>
                    <th scope="col">@lang('language.Email')</th>
                    <th scope="col">@lang('language.Action')</th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row" class="align-middle">{{ ++$key }}</th>
                            <th class="align-middle"> <img src="{{ asset('storage/' . $customer->avatar) }}"
                                                           alt="" style="width: 50px"></th>
                            <td class="align-middle">{{ $customer['name'] }}</td>
                            <td class="align-middle">{{ $customer['address'] }}</td>
                            <td class="align-middle">{{ $customer['email'] }}</td>
                            <td class="align-middle">
                                <a href="{{route('customers.edit',$customer->id)}}">
                                    <button type="submit" class="btn btn-outline-info">@lang('language.Edit')</button>
                                </a>
                                <a href="{{route('customers.delete',$customer->id)}}">
                                    <button type="submit" class="btn btn-outline-danger">@lang('language.Delete')</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                @endif

                </tbody>
            </table>
            <a class="btn btn-success" href="{{ route('customers.create') }}">@lang('language.Create')</a>
        </div>
    </div>
    <p></p>
    <div>{{$customers->links()}}</div>
</div>
</body>
</html>
@endsection