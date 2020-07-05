@extends('layouts.master')

@section('title', 'Artikel')

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
        <h3 class="card-title"><a class="btn btn-primary" href="{{ url('/artikel/create') }}" role="button">Buat Artikel Baru</a></h3>

        @foreach($articles as $a)
        <div class="card col-6">
            <div class="card-header">
                <h2 class="card-title"><b>{{ $a->judul }}</b>
                </h2>
            </div>
            <div class="card-body">
                {{ $a->isi }}
            </div>
            <div class="card-body">
                Tags: {{ $a->tag }}
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm" href="{{ url('/artikel/'.$a->id) }}" role="button">Detail
                        Artikel</a>
                <a class="btn btn-warning btn-sm" href="{{ url('/artikel/'.$a->id.'/edit') }}" role="button">Edit</a>
                <form action="{{ url('/artikel/'.$a->id) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" a class="btn btn-danger btn-sm" href="{{ url('/artikel/'.$a->id) }}" role="button">Hapus</a>
                </form>
            </div>

        </div>
        @endforeach
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
