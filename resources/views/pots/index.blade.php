@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Pot Types <br />
                    <a href='/pots/create'>Add Pot Type</a>
                </div>

                <div class="card-body">
                    <table class="table" border='1'>
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td></td>
                        </tr>
                        @foreach($pots as $pot)
                            <tr>
                                <td>{{ $pot['name'] }}</td>
                                <td>{{ $pot['comments'] }}</td>
                                <td><a href='/pots/edit/{{ $pot['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection