@extends('layouts.app')
@section('content')
    <div class="uren-product_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <span class="h1">{{$bike_model}}</span> <i class="ion-arrow-right-c"></i> <span class="h3">{{$category_name}}</span>
                </div>
            </div>
        </div>
        @if (isset($bike_parts) && count($bike_parts) > 0)
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                    @if (isset($category_image))
                    <img src="{{ url('storage/' . $category_image) }}" alt="">
                    @else
                    @endif
                </div>
                <div class="col-xl-8 col-md-8 col-sm-12 col-12">
                    <table class="table table-responsive-md">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Mã</th>
                            <th scope="col">Giá order tham khảo</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($bike_parts as $bike_part)
                            <tr>
                                <th scope="row">{{$bike_part->number}}</th>
                                <td>{{$bike_part->translate ?? $bike_part->name}}</td>
                                <td>{{$bike_part->part}}</td>
                                <td>{{$bike_part->reference_price}}</td>
                            </tr>
                            @empty
                               <tr>
                                <th>
                                    <h4>Không tìm thấy kết quả</h4>
                                </th>
                               </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
            <h4>Không tìm thấy kết quả</h4>
        @endif
    </div>
@endsection
