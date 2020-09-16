<div class="pull-left">
   <a class="btn btn-primary" href="{{ route('posts.index') }}">Go Back</a>
</div>
<br><br><br><hr>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('fname','First Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('fname') ? 'has-error' : "" }}">
      {{ Form::text('fname',NULL, ['class'=>'form-control', 'id'=>'fname', 'placeholder'=>'Enter Your First Name']) }}
      {{ $errors->first('fname', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('lname','Last Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('lname') ? 'has-error' : "" }}">
      {{ Form::text('lname',NULL, ['class'=>'form-control', 'id'=>'lname', 'placeholder'=>'Enter Your Last Name']) }}
      {{ $errors->first('lname', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('address','Address') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('address') ? 'has-error' : "" }}">
      {{ Form::text('address',NULL, ['class'=>'form-control', 'id'=>'address', 'placeholder'=>'Enter Your Address']) }}
      {{ $errors->first('address', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('age','Age') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('age') ? 'has-error' : "" }}">
      {{ Form::text('age',NULL, ['class'=>'form-control', 'id'=>'age', 'placeholder'=>'Enter Your Age']) }}
      {{ $errors->first('age', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('contact','Contact #') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('contact') ? 'has-error' : "" }}">
      {{ Form::text('contact',NULL, ['class'=>'form-control', 'id'=>'contact', 'placeholder'=>'Enter Your Contact Number']) }}
      {{ $errors->first('contact', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>


<div class="form-group" style="float:right;">
  {{ Form::button(isset($model)? 'Update' : 'Save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
