@extends('layout')

@section('content')
<div class="container">
    <div class="car">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>quan ly sv</h3>
                </div>
                    <div class="col-md-6">
                        <a href="{{route('student.creat')}}" class="btn btn-primary float-end">them moi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table_bordered">
            <thead>
                <tr>
                    <th>stt</th>
                    <th>masv</th>
                    <th>hoten</th>
                    <th>ngay sinh</th>
                    <th>gioitinh</th>
                    <th>sodt</th>
                    <th>diachi</th>
                    <th>thao tac</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sinhvien as $st)
                <tr>
                    <td>{{++ $i}}</td>
                    <td>{{$st ->masv  }}</td>
                    <td>{{$st->hovaten }}</td>
                    <td>{{$st->ngaysinh }}</td>
                    <td>{{$st->gioitinh }}</td>
                    <td>{{$st->dienthoai }}</td>
                    <td>{{$st->diachi }}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    
@endsection