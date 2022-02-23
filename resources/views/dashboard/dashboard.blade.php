@extends('layouts.app')
@push('css')
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div class="container">
        <dashboard-page></dashboard-page>
    </div>
@endsection
