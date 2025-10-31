<!-- breadcrumb start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="breadcrumb-index">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-ul">
                        @foreach ($list as $item)
                        <li class="breadcrumb-li">
                            <a class="breadcrumb-link" href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
