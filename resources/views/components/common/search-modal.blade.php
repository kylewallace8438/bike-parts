 <!-- search-modal start -->
 <div class="search-modal modal fade" id="searchmodal">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container-fluid">
                     <div class="search-content">
                         <div class="search-box">
                             <button type="button" class="search-close" data-bs-dismiss="modal"><span><i
                                         class="feather-x"></i></span></button>
                             <form method="get" action="/search" class="search-form">
                                 <div class="search-bar">
                                     <div class="form-search">
                                         <input type="search" name="search-input" class="search-input" value=""
                                             placeholder="Tìm kiếm sản phẩm" required="">
                                         <button type="button" onclick="location.href='search.html'" class="search-btn"
                                             disabled=""><i class="feather-search"></i></button>
                                     </div>
                                     <div class="search-results">
                                         <p class="search-for">Tìm kiếm <span class="search-text">a</span></p>
                                         <ul>
                                             <li>
                                                 <a href="product-template.html">
                                                     <img src="{{ asset('store/image/home2/product/product-1.jpg') }}" class="img-fluid"
                                                         alt="p-1">
                                                     <span>Earbuds</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="product-template.html">
                                                     <img src="{{ asset('store/image/home2/product/product-6.jpg') }}" class="img-fluid"
                                                         alt="p-6">
                                                     <span>IPad mini6</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="product-template.html">
                                                     <img src="{{ asset('store/image/home2/product/product-8.jpg') }}" class="img-fluid"
                                                         alt="p-8">
                                                     <span>Nokia 1434</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="product-template.html">
                                                     <img src="{{ asset('store/image/home2/product/product-12.jpg') }}" class="img-fluid"
                                                         alt="p-10">
                                                     <span>Smartwatch</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="product-template.html">
                                                     <img src="{{ asset('store/image/home2/product/product-13.jpg') }}" class="img-fluid"
                                                         alt="p-13">
                                                     <span>Mouse</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="product-template.html">
                                                     <img src="{{ asset('store/image/home2/product/product-14.jpg') }}" class="img-fluid"
                                                         alt="p-12">
                                                     <span>Camera</span>
                                                 </a>
                                             </li>
                                         </ul>
                                         <p class="search-more"><a href="search.html">Xem tất cả kết quả (12)</a></p>
                                         <p class="search-fail">Không tìm thấy kết quả</p>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- search-modal end -->
