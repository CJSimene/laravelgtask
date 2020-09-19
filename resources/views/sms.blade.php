@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row" style="margin-top:120px;">
            <div class="col-md-offset-3 col-md-6">

                @if(Session::has('success'))
                    <div class="alert alert-success alert=dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">-</button>
                        <h4><i class="icon fa fa-ban"></i> {{Session('success')}}</h4>
                    </div>
                @endif

                <form action="{{ url('sms') }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                    <label for="mymssg">Message</label>
                    <textarea class="form-control" name="mymssg" id="mymssg" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send SMS</button>
                </form>
            </div>
        </div>
    </div>


@endsection