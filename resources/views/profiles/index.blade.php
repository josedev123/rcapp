@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            img
        </div>
        <div class="col-md-8">
            <div><h1>{{ $user->username }}</h1></div>
            <a href="#">Add a Post</a>
            <div class="d-flex">
            
<div class="pr-5">153 Posts</div>
<div class="pr-5">23k followers</div>
<div class="pr-5">212 following</div>

            </div>
                
                <div>
                    Title: {{ $user->profile->title }} <br />
                    Url: {{ $user->profile->url }} <br />
                    Description: {{ $user->profile->description }} <br />
                </div>    
        </div>
         <div class="col-md-12"><hr /></div>
        <div class="col-md-4">image 1</div>
        <div class="col-md-4">image 1</div>
        <div class="col-md-4">image 1</div>
        <div class="col-md-4">image 1</div>
        <div class="col-md-4">image 1</div>
    </div>    

    <div class="row justify-content-center" style="display:none;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
