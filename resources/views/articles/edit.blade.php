@extends('layouts.master')

@section('title', 'Edit')

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
                <h3 class="card-title">Edit Artikel</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/artikel/'.$id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input hidden name="id" value="{{ $id }}">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul"
                            value="{{$article->judul}}">
                    </div>
                    <div class="form-group">
                        <label for="isi_artikel">Isi Artikel</label>
                        <input type="text" class="form-control" id="isian" name="isi" placeholder="Isi Artikel"
                            value="{{$article->isi}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-primary btn-sm" href="{{ url('/artikel/') }}" role="button">Cancel</a>
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