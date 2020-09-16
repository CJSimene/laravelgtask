@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <a class="btn btn-primary" href="{{ route('posts.index') }}">Go Back</a>
        </div>
        <br><br><br></hr>
        <div class="pull-left">
            <h2> Viewing Record</h2>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name : </strong>
            {{ $post->fname}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name: </strong>
            {{ $post->lname}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address: </strong>
            {{ $post->address}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age: </strong>
            {{ $post->age}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Number: </strong>
            {{ $post->contact}}
        </div>
    </div>
</div>
@endsection
