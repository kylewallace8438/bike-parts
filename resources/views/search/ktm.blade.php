@extends('layouts.app')
@section('content')
    <div class="uren-product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Tìm kiếm phụ tùng xe KTM</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <div>
                        <select class="nice-select wide">
                            <option value="">Mẫu xe</option>
                            <option value="duke">DUKE</option>
                            <option value="rc">RC</option>
                            {{-- <option value="adv">ADV</option> --}}
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <select class="nice-select wide">
                            <option value="">Dung tích</option>
                            <option value="duke">200</option>
                            <option value="rc">250</option>
                            <option value="adv">390</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <select class="nice-select wide">
                            <option value="">Năm</option>
                            <option value="2014">2014</option>
                            <option value="2016">2016</option>
                            <option value="2018">2018</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                </div>

                {{-- <div class="custom-search_col col-12">
                    <div class="hm-form_area">
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="header-search_btn" type="submit"><i
                                    class="ion-ios-search-strong"><span>Search</span></i></button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div>
                        <button class="uren-btn" type="submit"><span>Search</span></button>
                    </div>
                </div>
            </div>
        </div>
        @if (isset($categories) && count($categories) > 0)
        <div class="container mt-4">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-3 mb-4">
                    <div class="rounded border h-100 p-4">
                        <a class="h5 primary" href="">{{$category->translate}}</a>
                        <br>
                        <br>
                        <div style="width: 100%; height: auto">
                            <img src="{{ url('storage/' . $category->image_url) }}" alt="">
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        @else
            <h4>Không tìm thấy kết quả</h4>
        @endif
    </div>
@endsection
