@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <resultados-test
            :red="{{ $red }}"
            :blue="{{ $blue }}"
            :yellow="{{ $yellow }}"
            :green="{{ $green }}"
            ></resultados-test>
        </div>
    </div>
</div>
@endsection
