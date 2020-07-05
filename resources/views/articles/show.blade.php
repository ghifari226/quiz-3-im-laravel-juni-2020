@extends('layouts.master')

@section('title', 'Detail')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card col-6">

            <div class="card-body">
                Judul: {{ $article->judul }}<br>
                slug: {{ $article->slug }}<br><br>
                {{ $article->isi }}<br><br>
                <a class="btn btn-primary btn-success" style="color:white">{{ $article->tag }}</a>
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm" href="{{ url('/artikel/') }}" role="button">Back</a>
            </div>

            <!-- /.card-body -->
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection