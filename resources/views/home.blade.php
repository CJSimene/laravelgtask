@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>WELCOME BACK! <u>{{ Auth::user()->name }}</u> </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales varius semper. Pellentesque tincidunt bibendum erat quis malesuada. Phasellus euismod, nisl sit amet consectetur efficitur, sem erat dictum nibh, vitae mattis nulla arcu vel eros. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras posuere, felis sed congue auctor, sapien nunc tincidunt ligula, eget condimentum sapien sapien ac eros. Ut interdum tristique faucibus. Nunc eget hendrerit ante. Nunc porta luctus pulvinar. Sed ac felis eleifend, finibus neque ac, rhoncus erat. Integer tristique, nisi sit amet convallis consequat, justo diam tempus nunc, sed egestas mi elit gravida massa. Cras nibh erat, rutrum ac ligula non, gravida scelerisque eros. Ut tristique orci vel magna interdum, eget elementum velit eleifend.</p>
                    <a href="{{route('posts.index')}}" class="btn btn-primary" style="float:right; margin-top: 50px;">View Employees</a>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
