@extends('layouts.default')
@section('title',$user-> name)
@section('content')
    <div class="row">
        <div class = "col-md-8 offset-md-2" >
            <div class="col-md-12">
                <div class="offset-md-2 col-md-8">
                    <section class="user-info">
                        @include('shared._user_info')
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection