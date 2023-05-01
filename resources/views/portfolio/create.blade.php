@extends('layouts.master')
@section('content')
<div class="container">
<h1>Kenneth's Portofolio</h1>
<h2>Add Achievement</h2>


<form action="/portfolio/store" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id" placeholder="ID">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Achievement</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="achievement" placeholder="Achievement">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Placement</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="placement" placeholder="Placement">
        </div>
    </div>
        <input type="date" name="date" placeholder="Date"><br>
        <input type="submit" name="submit" value="Save"> 
</form>
@endsection