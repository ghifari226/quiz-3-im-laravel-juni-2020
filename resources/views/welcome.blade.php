@extends('layouts.master')

@section('title', 'ERD')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <h3 class="card-title"><a class="btn btn-primary" href="{{ url('/artikel') }}" role="button">Lihat Artikel</a></h3>
            </div>
            <div class="row mb-2">    
                <h1>Entity Relationship Diagram</h1>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Image -->
        <img src="{{ asset('/images/ERD.png')}}" class="css-class" alt="alt text">
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection