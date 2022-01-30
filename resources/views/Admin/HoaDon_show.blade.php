@extends('app')

@section('title', 'Page Title')


@section('content')
    {{-- <div class="col-lg-12 grid-margin stretch-card"> --}}
        <div class="card">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center">Hóa Đơn</h2>      
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="text-align: center">ID</th>                
                    <th style="text-align: center">Mã hóa đơn</th>
                    <th style="text-align: center">Tài khoản</th>
                    <th style="text-align: center">Ngày lập</th>
                    <th style="text-align: center">Địa chỉ giao hàng</th>
                    <th style="text-align: center">Sdt giao hàng</th>
                    <th style="text-align: center">Mã giảm giá</th>
                    <th style="text-align: center">Sản phẩm</th>
                    {{-- <th style="text-align: center">Số Lượng</th> --}}
                    {{-- <th style="text-align: center">Tổng tiền</th>
                    <th style="text-align: center">Trạng thái</th>
                    <th style="text-align: center">Sửa</th>              --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach ($HoaDon as $hd)
              
                    <tr> 
                      <td> 
                        <div style="color: rgb(8, 255, 8);text-align: center">{{ $hd->id }}</div>
                      </td>
                      <td style="text-align: center">
                        <a style="color: rgb(245, 134, 139)" >{{ $hd->Code }}</a>
                      </td>
                      <td>
                        <div style="text-align: center;color: rgb(255, 0, 191)">
                          @if ($user[$hd->IdTaiKhoan-1]->id==$hd->IdTaiKhoan)
                            
                          @endif{{ $user[$hd->IdTaiKhoan-1]->name }}
                        </div>
                      </td>
                      <td>
                        <div style="text-align: center;color: rgb(255, 0, 191)">{{ $hd->NgayLap }}</div>
                      </td>
                      <td>
                        <div style="text-align: center;color: rgb(0, 183, 255)">{{ $hd->DiaChiGiaoHang }}</div>
                      </td>
                      <td>
                        <div style="text-align: center;color: rgb(151, 132, 255)">{{ $hd->SDTGiaoHang }}</div>
                      </td>
                      <td>
                        <div style="text-align: center;color: rgb(241, 250, 121)">
                          @if ($mgg[$hd->IdMaGiamGia-1]->id==$hd->IdMaGiamGia)
                            
                          @endif{{ $mgg[$hd->IdMaGiamGia-1]->Code }}
                        </div>
                      </td>
                      <td>
                        <div style="text-align: center;color: rgb(255, 255, 255)">
                          @if ($hd[$listCT->IdHoaDon-1]->id==$listCT->IdHoaDon && $sp[$listCT->IdSanPham-1]->id==$listCT->IdSanPham)
                            
                          @endif{{ $sp[$listCT->IdSanPham-1]->TenSanPham }}
                        </div>
                      </td> 
                  
                      <td>
                        <div style="text-align: center;color: rgb(134, 119, 221)">{{ $hd->SoLuong }} </div>
                      </td>
                
                      
                      {{-- <td style="text-align: center">                  
                        @if ($hd->TrangThai == 1)
                          <a >Đang xử lý</a>
                        @elseif ($hd->TrangThai == 2)
                        <a >Đang giao hàng</a>
                        @elseif ($hd->TrangThai == 3)
                        <a >Đã giao hàng</a>
                        @elseif ($hd->TrangThai == 4)
                        <a >Đã hủy</a>
                        @endif                    
                      </td>  
                      <td>
                        <a href="{{ route('HoaDon.edit',['HoaDon'=>$hd]) }}" type="button" class="btn btn-light btn-fw">Sửa</a><br><br>
                      </td>  --}}
                    </tr>
                    @endforeach
                    
              </table>
            </div>
          </div>         
        </div>
@endsection


