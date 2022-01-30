@extends('app')

@section('title', 'Page Title')

@section('content')

    <h1>Chi tiết sản phẩm</h1>
    @foreach ($ctSanPham as $sp)
        <form >

            <input type="hidden" name="TrangThai" value="{{ $sp->TrangThai }}">
            <label for="">Tên sản phẩm: </label><input class="form-control" style="color: rgb(0, 255, 0)" name="tensp"
                value="{{ $sp->TenSanPham }}"> <br>

            <label for="">Loại sản phẩm: </label>
            <input class="form-control" style="color: rgb(0, 255, 0)" name="loaisanpham"
                value="@if ($listLoai[$sp->IdLoaiSanPham - 1]->id == $sp->IdLoaiSanPham)
                       @endif{{ $listLoai[$sp->IdLoaiSanPham - 1]->TenLoaiSanPham }}"> <br>    
                   
            <label for="">Giá: </label><input style="color: rgb(0, 255, 0)" class="form-control" name="gia"
                value="{{ $sp->Gia }}"> <br>

            <label for="">Size: </label>
            <select class="form-control" style="color: rgb(0, 255, 0)" name="idloaisanpham">   
                @foreach ($ctSP as $ct)
                    <option>
                        @if ($Size[$ct->IdSize-1]->id==$ct->IdSize)
                                
                        @endif{{ $Size[$ct->IdSize-1]->TenSize }}
                    </option>
                @endforeach
            </select><br>

            <label for="">Màu: </label>
            <select class="form-control" style="color: rgb(0, 255, 0)" name="idloaisanpham">   
                @foreach ($ctSP as $ct)
                    <option>
                        @if ($Mau[$ct->IdMau-1]->id==$ct->IdMau)
                        
                        @endif{{ $Mau[$ct->IdMau-1]->Màu }}
                    </option>
                @endforeach
            </select><br>
            <label for="">Số lượng: </label><input style="color: rgb(0, 255, 0)" name="soluong" class="form-control"
               value="{{ $sp->SoLuong }}"> <br>

            <label for="">Nhà cung cấp: </label><input class="form-control" style="color: rgb(0, 255, 0)" name="loaisanpham"
               value="@if ($listNhaCungCap[$sp->IdNhaCung - 1]->id == $sp->IdNhaCung)
               @endif{{ $listNhaCungCap[$sp->IdNhaCung - 1]->TenNhaCungCap }}"> <br>

            <label for="">Mô tả</label>
               <textarea name="mota" id="" class="form-control" style="color: rgb(0, 255, 0)" cols="25"
               rows="5">{{ $sp->MoTa }}</textarea> <br>

            <label for="">Hình</label>
               <img style="width: 100px;max-height: 100px;object-fit: contain" src="{{ $sp->HinhAnh }}"><br>
                <input type="file" class="form-control" name="hinhanh" value="{{ $sp->HinhAnh }}"><br>

            <a href="{{ route('SanPham.edit', ['SanPham' => $SanPham]) }}" type="button"
                class="btn btn-light btn-fw">Sửa</a><br><br>

            <form method="POST" action="{{ route('SanPham.destroy', ['SanPham' => $SanPham]) }}">
                @csrf
                @method('DELETE')

                <input type="hidden" name="TrangThai" value="0">
                <input class="btn btn-light btn-fw" type="submit" value="Xóa">
        </form>
    @endforeach

@endsection
