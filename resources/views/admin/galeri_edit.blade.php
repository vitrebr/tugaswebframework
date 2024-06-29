@extends('admin.index')

@section('form_edit')
    <div class="row d-flex justify-content-center">
        <div>
            <h4>Input Gambar</h4>
            <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="post" enctype="multipart/form-data"
                class="d-flex justify-content-center align-items-center">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $galeri->id }}">
                <table class="card p-3">
                    <tr>
                        <td class="col-4"><label for="judul">Judul</label></td>
                        <td><input type="text" name="judul" class="col-8" value="{{ $galeri->judul }}" /></td>
                    </tr>
                    <tr>
                        <td class="col-4"><label for="gambar">Gambar</label></td>
                        <td><input type="file" class="col-12" name="gambar" value="{{ $galeri->gambar }}"
                                accept="image/jpg, image/png, image/jpeg">
                        </td>
                    </tr>
                    <tr>
                        <td class="col-4"><label for="description">Deskripsi</label></td>
                        <td>
                            <textarea type="text" name="deskripsi" class="col-8" />{{ $galeri->deskripsi }}</textarea>
                        </td>
                    </tr>
                    <tr class="col-xl-6 mb-3 off">
                        <td><button type="submit" class="btn btn-primary btn-sm">Update</button></td>
                    </tr>
                </table>
                <div class="card pict">
                    <img src="{{ Storage::url($galeri->gambar) }}" name="gambar" alt="wao">
                </div>
            </form>
        </div>
    </div>
@endsection
