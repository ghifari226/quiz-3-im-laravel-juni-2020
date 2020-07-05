@extends('layouts.master')

@section('title', 'Artikel Baru')

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
            <div class="card-header">
                <h3 class="card-title">Artikel Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/artikel') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <textarea class="form-control" id="isi" name="isi" cols="30" rows="10"
                            placeholder="..."></textarea>
                    </div>
                    <input hidden name="slug" value="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="tag" name="tag" placeholder="Tags;">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection