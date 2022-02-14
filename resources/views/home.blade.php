@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <h1>Cetak Ganjil Genap</h1>
        <hr>
        <h5>Program ini akan mencetak bilangan ganjil dan genap dari nilai a hingga b</h5>
        <br>
        <form action="/hasil" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="a" class="form-control" placeholder="Masukkan nilai a">
                </div>
                <div class="col-md-2">
                    <input type="text" name="b" class="form-control" placeholder="Masukkan nilai b">
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="Hasil">
                </div>
            </div>
        </form>
    </div>
@endsection