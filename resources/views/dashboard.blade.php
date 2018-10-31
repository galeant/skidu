@extends('layout.index')
@section('title','Dashboard')
@section('css')
<style>
    .image_plus{
        width:100%;
    }
</style>
@endsection
@section('page')
<div class="row">
    
    <!-- sale 2 card start -->
    
    <div class="col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>User</h5>
            </div>
            <div class="card-block">
                <div class="row p-t-20 p-b-30">
                    <div class="col-md-2">
                        <img src="{{ session()->get('user')->picture_url}}" alt="user image" class="img-radius image_plus">
                    </div>
                    <div class="col p-l-5">
                        <h6>{{ session()->get('user')->email }}.</h6>
                        <p class="text-muted m-b-0">{{ session()->get('user')->name }}</p>
                        <p class="text-muted m-b-0">Last Login: {{ session()->get('user')->last_login }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sale 2 card end -->

</div>
@endsection