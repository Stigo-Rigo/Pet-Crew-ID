@extends('layouts.app')

@section('content')
<div class="container">
    <form action="#" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
            
                <div class="row">
                    <h1>Add a pet</h1>
                </div>
            </div>
        </div>
    </form>
</div>