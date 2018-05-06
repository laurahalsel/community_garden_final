@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Soil Types <br />
                    <a href='/soils/create'>Add Soil Type</a>
                </div>

                <div class="card-body">
                    <table class="table" border='1'>
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td></td>
                        </tr>
                        @foreach($soils as $soil)
                            <tr>
                                <td>{{ $soil['name'] }}</td>
                                <td>{{ $soil['comments'] }}</td>
                                <td><a href='/soils/edit/{{ $soil['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection