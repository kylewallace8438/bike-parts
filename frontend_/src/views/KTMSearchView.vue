<template>
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
        <div class="container mt-4">
            <div class="row">
                <div class="col-3 mb-4">
                    <div class="rounded border h-100 p-4">
                        <a class="h5 primary" href="">category</a>
                        <br>
                        <br>
                        <div style="width: 100%; height: auto">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script setup>
// import axios from "axios"
console.log('KTMSearchView mounted')
// axios.get('http://127.0.0.1:8000/api/search/ktm/1').then((response) => {
//   console.log(response)
// }).catch(error => {
//   console.log(error)
// })
</script>
