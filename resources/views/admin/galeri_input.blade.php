@extends('admin.index')

@section('form')
    <div class="row d-flex justify-content-center">
        <div>
            <h4>Input Gambar</h4>
            <form action="{{ route('admin.galeri.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="card p-3">
                    <tr>
                        <td class="col-4"><label for="judul">Judul</label></td>
                        <td><input type="text" name="judul" class="col-8" /></td>
                    </tr>
                    <tr>
                        <td class="col-4"><label for="gambar">Gambar</label></td>
                        <td><input type="file" name="gambar" class="col-12" accept="image/jpg, image/png, image/jpeg">
                        </td>
                    </tr>
                    <tr>
                        <td class="col-4"><label for="description">Deskripsi</label></td>
                        <td>
                            <textarea type="text" name="deskripsi" class="col-8" /></textarea>
                        </td>
                    </tr>
                    <tr class="d-none">
                        <td class="col-4"><label for="status">Status</label></td>
                        <td>
                            <input type="text" name="status" class="col-8" value="Deactive" readonly />
                        </td>
                    </tr>
                    <tr class="col-xl-6 mb-3 off">
                        <td><button type="submit" class="btn btn-primary btn-sm">Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
