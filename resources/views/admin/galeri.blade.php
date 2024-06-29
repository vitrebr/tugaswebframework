@extends('admin.index')

@section('galeris') 
    Ini adalah halaman galeri admin
    <div class="d-flex justify-content-start">
        @foreach ($galeris as $galeri)
        <div class="card m-5 d-flex justify-content-center p-4 h-auto progress" style="width: 350px;">
            <img src="{{ Storage::url($galeri->gambar) }}" name="gambar" class="w-auto h-auto progress">
            <h3>{{ $galeri->judul }}</h3>
            <p>{{ $galeri->deskripsi }}</p>
                <div class="d-flex justify-content-between mt-5" style="bottom: 0; position: relative;">
                    <form action="{{ route('admin.galeri.delete', $galeri->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="icon-trash"></i>Hapus</button>
                    </form>
                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}"><button class="btn btn-dark">Edit<i class="mdi mdi-file-check btn-icon-append"></i></button></a>
                </div>
            </div>
        @endforeach
        <a href="{{ route('admin.galeri_input') }}" class="text-dark" style="text-decoration: none;">
            <div class="card m-5 d-flex justify-content-center align-items-center p-4 progress hover-add"
                style="width: 200px; height: 200px;">
                <i class="icon icon-square-plus text-lg-center" style="font-size: 40px"></i>
                <p>Create Album</p>
            </div>
        </a>
    </div>
@endsection
