@props(['message' => []])

<!-- top notification start -->
<div class="top-notification-bar">
    <div class="container-fluid">
        <div class="notify-text">
            <ul class="grid-wrap">
                <li class="grid-wrapper">
                    <p class="notification-free">{{ $message }}</p>
                </li>
                <li class="grid-wrapper">
                    <!-- currency detils start -->
                    {{-- <div class="currency-wrap">
                        <div class="currency-wrapper">
                            <div class="local-currency">
                                <form method="post" action="javascript:void(0)" class="localization-form"
                                    enctype="multipart/form-data">
                                    <button class="currency-title">
                                        <span class="currency-iso-code">USD</span>
                                    </button>
                                    <button class="currency-title currency-title-lg">
                                        <span class="currency-iso-code">USD</span>
                                    </button>
                                    <ul class="acc-currency collapse" id="menu-currency-resp">
                                        <li class="active">
                                            <a href="javascript:void(0)">
                                                <span class="currency-iso-code">INR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="currency-iso-code">USD</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="currency-iso-code">CAD</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="currency-iso-code">EUR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="currency-iso-code">AED</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="currency-iso-code">GPB</span>
                                            </a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <!-- currency details end -->
                    <!-- language detils start -->
                    <div class="language-wrap">
                        <div class="language-wrapper">
                            <div class="local-language">
                                <form method="post" action="javascript:void(0)" class="localization-form"
                                    enctype="multipart/form-data">
                                    <button class="language-title">
                                        <span class="language-code">English</span>
                                    </button>
                                    <button class="language-title language-title-lg">
                                        <span class="language-code">English</span>
                                    </button>
                                    <ul class="acc-language collapse" id="menu-language-resp">
                                        <li class="active">
                                            <a href="javascript:void(0)">
                                                <span class="language-code">Vietnamese</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="language-code">English</span>
                                            </a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- language details end -->
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- top notification end -->
