@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Kenneth's Achievement</h1>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>ACHIEVEMENT</th>
                <th>PLACEMENT</th>
                <th>DATE</th>
                <th>EDIT</th>
            </tr>
            @foreach($portfolio as $p)
            <tr>
                <td>{{$p -> id}}</td>
                <td>{{$p -> achievement}}</td>
                <td>{{$p -> placement}}</td>
                <td>{{$p -> date}}</td>
                <td>
                <a href="/portfolio/{{ $p->id }}/edit">Edit</a>
                <form action='/portfolio/{{$p->id}}' method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
                </td>
            </tr>
            @endforeach
            
            <a class="btn btn-primary btn-lg" href="/portfolio/create">Add Data</a>
                
        </table>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection
