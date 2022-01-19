@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <resultados-test
            :send_email="{{ $send_email }}"
            :id="{{ $id }}"
            :red="{{ $red }}"
            :blue="{{ $blue }}"
            :yellow="{{ $yellow }}"
            :green="{{ $green }}"
            ></resultados-test>
        </div>
    </div>
</div>
@endsection
