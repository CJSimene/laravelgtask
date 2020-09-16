@extends('layouts.app')
@section('content')

  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>VIEW EMPLOYEE CRUD</h2>
    </div>
  </div>
  </div>

  <a href="{{route('posts.create')}}" class="btn btn-success btn-sm" style="float:right; margin-bottom:20px;">Add Employee</a>
  <br>
  <table class="table table-bordered">
    <tr>
      <th with="80px">ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Age</th>
      <th>Contact Number</th>
      <th>Action</th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->fname }}</td>
        <td>{{ $value->lname }}</td>
        <td>{{ $value->address }}</td>
        <td>{{ $value->age }}</td>
        <td>{{ $value->contact }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
@endsection
