@extends('layouts.master')
@section('content')
<div class="container">
<h1>Kenneth's Portofolio</h1>
<h2>Edit Achievement</h2>

<form action="/portfolio/{{ $portfolio->id }}" method="POST">
    @method('put')
    @csrf
        <input type="text" name="id" placeholder="ID" value="{{ $portfolio->id }}"><br>
        <input type="text" name="achievement" placeholder="Achievement" value="{{ $portfolio->achievement }}"><br>
        <input type="text" name="placement" placeholder="Placement" value="{{ $portfolio->placement }}"><br>
        <input type="date" name="date" placeholder="Date" value="{{ $portfolio->date }}"><br>
        <input type="submit" name="submit" value="Save"> 
</form>
@endsection