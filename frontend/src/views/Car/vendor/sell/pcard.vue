<script lang="ts" setup>
import { ref } from "vue";
import { GoogleMap, Marker } from "vue3-google-map";
import vueFilePond from 'vue-filepond'

// Import FilePond styles
import 'filepond/dist/filepond.min.css'

// Import image preview plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'

// Import image preview and file type validation plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";

// Create component
const FilePond = vueFilePond(
    FilePondPluginFileValidateType,
    FilePondPluginImagePreview
);

const files = ref([]);
// Extract API key from the URL
const mapApiKey = "AIzaSyAbvyBxmMbFhrzP9Z8moyYr6dCr-pzjhBE";
// Define center and zoom level
const center = ref({ lat: 51.5074, lng: -0.1278 }); // London coordinates
const zoom = ref(15);
</script>

<template>
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row">
            <!-- Page content-->
            <div class="col-lg-8">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                        <li class="breadcrumb-item active" aria-current="page">Sell car</li>
                    </ol>
                </nav>
                <!-- Title-->
                <div class="mb-4">
                    <h1 class="h2 text-light mb-0">Sell car</h1>
                    <div class="d-lg-none text-light pt-3 mb-2">80% content filled</div>
                    <div class="progress progress-light d-lg-none mb-4" style="height: .25rem;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- Basic info-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                    <h2 class="h4 text-light mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Basic info</h2>
                    <div class="mb-3">
                        <label class="form-label text-light" for="sc-title">Title <span class="text-danger">*</span></label>
                        <input class="form-control form-control-light" type="text" id="sc-title" placeholder="Title for your property" value="Mercedes-Benz E 400 Cabriolet" required><span class="form-text text-light opacity-50">48 characters left</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-condition">Vehicle condition <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-condition" required>
                                <option value="" disabled hidden>Choose condition</option>
                                <option value="Used">Used</option>
                                <option value="New">New</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-label text-light fw-bold pt-3 pb-2">Are you listing on Finder as part of a company?</div>
                    <div class="form-check form-check-light">
                        <input class="form-check-input" type="radio" id="sc-dealer" name="sc-seller-type">
                        <label class="form-check-label" for="sc-dealer">I am a registered dealer</label>
                    </div>
                    <div class="form-check form-check-light">
                        <input class="form-check-input" type="radio" id="sc-individual" name="sc-seller-type" checked>
                        <label class="form-check-label" for="sc-individual">I am a private seller</label>
                    </div>
                </section>
                <!-- Price-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="price">
                    <h2 class="h4 text-light mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>Price</h2>
                    <label class="form-label text-light" for="sc-price">Price <span class="text-danger">*</span></label>
                    <div class="d-sm-flex mb-2">
                        <select class="form-select form-select-light w-25 me-2 mb-2">
                            <option value="usd">&#36;</option>
                            <option value="eur">&#8364;</option>
                            <option value="gbp">&#163;</option>
                            <option value="jpy">&#165;</option>
                        </select>
                        <input class="form-control form-control-light w-100 me-2 mb-2" type="number" id="sc-price" min="200" step="50" value="31900" required>
                    </div>
                    <div class="form-check form-switch form-switch-light">
                        <input class="form-check-input" type="checkbox" id="negotiated-price">
                        <label class="form-check-label" for="negotiated-price">Negotiated price</label>
                    </div>
                </section>
                <!-- Vehicle information-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="vehicle-info">
                    <h2 class="h4 text-light mb-4"><i class="fi-car text-primary fs-5 mt-n1 me-2"></i>Vehicle information</h2>
                    <div class="row pb-2">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-make">Make <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-make">
                                <option value="" disabled>Select make</option>
                                <option value="Acura">Acura</option>
                                <option value="BMW">BMW</option>
                                <option value="Citroen">Citroen</option>
                                <option value="Lexus">Lexus</option>
                                <option value="Mercedes-Benz" selected>Mercedes-Benz</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Toyota">Toyota</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-model">Model <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-model">
                                <option value="" disabled>Select model</option>
                                <option value="A-Class">A-Class</option>
                                <option value="B-Class">B-Class</option>
                                <option value="C-Class">C-Class</option>
                                <option value="E 220">E 220</option>
                                <option value="E 400" selected>E 400</option>
                                <option value="GLS 550">GLS 550</option>
                                <option value="GLE-Class">GLE-Class</option>
                                <option value="ML 350">ML 350</option>
                                <option value="Viano">Viano</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-year">Year <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-year">
                                <option value="" disabled>Select year</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018" selected>2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-mileage">Mileage <span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="number" id="sc-mileage" min="200" step="100" value="25000" placeholder="Enter mileage">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light" for="sc-vin">VIN</label>
                            <input class="form-control form-control-light" type="text" id="sc-vin" value="2VW821AU9JM754284" placeholder="Enter VIN code">
                        </div>
                    </div>
                    <div class="border-top border-light mt-2 pt-4">
                        <div class="row pb-2">
                            <div class="col-md-6">
                                <label class="form-label text-light" for="sc-body">Body type <span class="text-danger">*</span></label>
                                <select class="form-select form-select-light mb-3" id="sc-body">
                                    <option value="" disabled>Select body type</option>
                                    <option value="Compact">Compact</option>
                                    <option value="Convertible" selected>Convertible</option>
                                    <option value="Crossover">Crossover</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Family MPV">Family MPV</option>
                                    <option value="Pickup">Pickup</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Wagon">Wagon</option>
                                </select>
                                <label class="form-label text-light" for="sc-fuel">Fuel type <span class="text-danger">*</span></label>
                                <select class="form-select form-select-light mb-3" id="sc-fuel">
                                    <option value="" disabled>Select fuel type</option>
                                    <option value="Gasoline" selected>Gasoline</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="Electric">Electric</option>
                                </select>
                                <label class="form-label text-light" for="sc-engine">Engine <span class="text-danger">*</span></label>
                                <select class="form-select form-select-light mb-3" id="sc-engine">
                                    <option value="" disabled>Select engine</option>
                                    <option value="1.5 Turbo 3 Cylinder Engine">1.5 Turbo 3 Cylinder Engine</option>
                                    <option value="2.4L 4 Cylinder Engine">2.4L 4 Cylinder Engine</option>
                                    <option value="3.5L 4 Cylinder Engine">3.5L 4 Cylinder Engine</option>
                                    <option value="2.5L Turbo 6 Cylinder" selected>2.5L Turbo 6 Cylinder</option>
                                </select>
                                <label class="form-label text-light" for="sc-transmission">Transmission <span class="text-danger">*</span></label>
                                <select class="form-select form-select-light mb-3" id="sc-transmission">
                                    <option value="" disabled>Select transmission</option>
                                    <option value="Manual">Manual</option>
                                    <option value="Automatic" selected>Automatic</option>
                                </select>
                                <label class="form-label text-light" for="sc-drivetrain">Drivetrain <span class="text-danger">*</span></label>
                                <select class="form-select form-select-light mb-3" id="sc-drivetrain">
                                    <option value="" disabled>Select drivetrain</option>
                                    <option value="Front Wheel Drive" selected>Front Wheel Drive</option>
                                    <option value="Rear Wheel Drive">Rear Wheel Drive</option>
                                    <option value="All Wheel Drive">All Wheel Drive</option>
                                </select>
                                <label class="form-label text-light" for="sc-color">Color </label>
                                <input class="form-control form-control-light mb-3" type="text" id="sc-color" value="Aspen White" placeholder="Enter color">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-light mt-2 pt-4">
                        <label class="form-label text-light" for="sc-description">Description </label>
                        <textarea class="form-control form-control-light" id="sc-description" rows="5" placeholder="Describe your vehicle"></textarea><span class="form-text text-light opacity-50">3000 characters left</span>
                    </div>
                </section>
                <!-- Features-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="features">
                    <h2 class="h4 text-light mb-4"><i class="fi-check-circle text-primary fs-5 mt-n1 me-2"></i>Features</h2>
                    <div class="mb-4">
                        <label class="form-label d-block text-light fw-bold mb-2 pb-1">Exterior</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="alloy-wheels">
                                    <label class="form-check-label" for="alloy-wheels">Alloy wheels</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="sunroof">
                                    <label class="form-check-label" for="sunroof">Sunroof / moonroof</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="panoramic-roof">
                                    <label class="form-check-label" for="panoramic-roof">Panoramic roof</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="tinted-glass">
                                    <label class="form-check-label" for="tinted-glass">Tinted glass</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block text-light fw-bold mb-2 pb-1">Interior</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="ac">
                                    <label class="form-check-label" for="ac">Multi-zone A/C</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="heated-seats">
                                    <label class="form-check-label" for="heated-seats">Heated front seats</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="navi">
                                    <label class="form-check-label" for="navi">Navigation system</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="leather-seats">
                                    <label class="form-check-label" for="leather-seats">Leather seats</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="wipers">
                                    <label class="form-check-label" for="wipers">Intermittent wipers</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="memory-seat">
                                    <label class="form-check-label" for="memory-seat">Memory seat</label>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="moreInterior">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="premium-sound">
                                        <label class="form-check-label" for="premium-sound">Premium sound system</label>
                                    </div>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="bluetooth">
                                        <label class="form-check-label" for="bluetooth">Bluetooth</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="usb">
                                        <label class="form-check-label" for="usb">USB port</label>
                                    </div>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="leather-wheel">
                                        <label class="form-check-label" for="leather-wheel">Leather steering wheel</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="apple-play">
                                        <label class="form-check-label" for="apple-play">Apple CarPlay</label>
                                    </div>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="android-auto">
                                        <label class="form-check-label" for="android-auto">Android Auto</label>
                                    </div>
                                </div>
                            </div>
                        </div><a class="collapse-label collapsed fs-sm" href="#moreInterior" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="moreInterior"></a>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block text-light fw-bold mb-2 pb-1">Safety</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="airbag-driver">
                                    <label class="form-check-label" for="airbag-driver">Airbag: driver</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="airbag-pasenger">
                                    <label class="form-check-label" for="airbag-pasenger">Airbag: passenger</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="alarm">
                                    <label class="form-check-label" for="alarm">Alarm</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="antilock">
                                    <label class="form-check-label" for="antilock">Antilock brakes</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="stability-control">
                                    <label class="form-check-label" for="stability-control">Stability control</label>
                                </div>
                                <div class="form-check form-check-light">
                                    <input class="form-check-input" type="checkbox" id="fog-lights">
                                    <label class="form-check-label" for="fog-lights">Fog lights</label>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="moreSafety">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="adaptive-cruise">
                                        <label class="form-check-label" for="adaptive-cruise">Adaptive cruise control</label>
                                    </div>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="blind-monitor">
                                        <label class="form-check-label" for="blind-monitor">Blind spot monitor</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="brake-assist">
                                        <label class="form-check-label" for="brake-assist">Brake assist</label>
                                    </div>
                                    <div class="form-check form-check-light">
                                        <input class="form-check-input" type="checkbox" id="lane-warning">
                                        <label class="form-check-label" for="lane-warning">Lane departure warning</label>
                                    </div>
                                </div>
                            </div>
                        </div><a class="collapse-label collapsed fs-sm" href="#moreSafety" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="moreSafety"></a>
                    </div>
                </section>
                <!-- Photos / video-->
                <section class="card card-light card-body shadow-sm p-4 mb-4" id="photos">
                    <h2 class="h4 text-light mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>Photos / video</h2>
                    <div class="alert alert-warning text-warning bg-faded-warning border-warning mb-4" role="alert">
                        <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                            <p class="fs-sm mb-1">The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first.<br>The maximum video size is 10 MB. Formats: mp4, mov.</p>
                        </div>
                    </div>
                    <file-pond class="file-uploader file-uploader-grid bg-faded-light border-light pt-5" v-model="files" labelIdle='<div class="btn btn-primary mb-3"><i class="fi-cloud-upload me-1"></i>Upload photos / video</div><div class="pb-2 mb-4 text-light">or drag them in</div>' accepted-file-types="image/jpeg, image/png" allowMultiple="true" :maxFiles="4" :fileSizeBase="1024" />

                    <!-- <input class="file-uploader file-uploader-grid bg-faded-light border-light" type="file" multiple data-max-file-size="10MB" accept="image/png, image/jpeg, video/mp4, video/mov" data-label-idle="&lt;div class=&quot;btn btn-primary mb-3&quot;&gt;&lt;i class=&quot;fi-cloud-upload me-1&quot;&gt;&lt;/i&gt;Upload photos / video&lt;/div&gt;&lt;div class=&quot;text-light opacity-70&quot;&gt;or drag them in&lt;/div&gt;"> -->
                </section>
                <!-- Location-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="location">
                    <h2 class="h4 text-light mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Location</h2>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-country">Country / region <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-country" required>
                                <option value="" disabled>Choose country</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Canada">Canada</option>
                                <option value="Germany">Germany</option>
                                <option value="United States" selected>United States</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-state">State <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-state" required>
                                <option value="" disabled>Choose state</option>
                                <option value="Alabama">Alabama</option>
                                <option value="California">California</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Illinois" selected>Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Kansas">Kansas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 mb-3">
                            <label class="form-label text-light" for="sc-city">City <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="sc-city" required>
                                <option value="" disabled>Choose city</option>
                                <option value="Chicago" selected>Chicago</option>
                                <option value="Dallas">Dallas</option>
                                <option value="Los Angeles">Los Angeles</option>
                                <option value="New York">New York</option>
                                <option value="San Diego">San Diego</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="form-label text-light" for="sc-zip">Zip code <span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="text" id="sc-zip" placeholder="Enter Zip code" value="60603" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light" for="ap-address">Street address <span class="text-danger">*</span></label>
                        <input class="form-control form-control-light" type="text" id="ap-address" value="1904 S Michigan Avenue" required>
                    </div>
                    <div class="form-label text-light fw-bold pt-3 pb-2">Display on the map</div>
                    <GoogleMap :api-key="mapApiKey" :center="center" :zoom="zoom" style="width: 100%; height: 250px;" class="interactive-map overflow-hidden rounded-3">
                        <Marker :options="{ position: center }" />
                    </GoogleMap>
                    <!-- <div class="interactive-map rounded-3" data-map-options="{&quot;mapLayer&quot;: &quot;https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=5vRQzd34MMsINEyeKPIs&quot;, &quot;coordinates&quot;: [41.75, -87.7], &quot;zoom&quot;: 9, &quot;scrollWheelZoom&quot;: false, &quot;markers&quot;: [{&quot;coordinates&quot;: [41.75, -87.7], &quot;className&quot;: &quot;custom-marker-dot&quot;, &quot;popup&quot;: &quot;&lt;div class='p-3'&gt;&lt;h6 class='fs-base'&gt;Mercedes-Benz E 400&lt;/h6&gt;&lt;p class='fs-xs text-muted pt-1 mt-n3 mb-0'&gt;1904 S Michigan Avenue, Chicago, IL&lt;/p&gt;&lt;/div&gt;&quot;}]}" style="height: 250px;"></div> -->
                </section>
                <!-- Contacts-->
                <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                    <h2 class="h4 text-light mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>Contacts</h2>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-fn">First name <span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="text" id="sc-fn" value="Devon" placeholder="Enter your first name" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-sn">Second name <span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="text" id="sc-sn" value="Lane" placeholder="Enter your second name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-email">Email<span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="text" id="sc-email" value="devone_lane@email.com" placeholder="Enter your email">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label text-light" for="sc-phone">Phone number <span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="tel" id="sc-phone" data-format="custom" data-delimiter="-" data-blocks="3 3 4" value="316-442-0597" placeholder="000-000-0000">
                        </div>
                    </div>
                    <label class="form-label text-light" for="sc-website">Website</label>
                    <input class="form-control form-control-light mb-3" type="text" id="sc-website" placeholder="Enter company name">
                    <div class="text-light py-3">Social accounts</div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn btn-icon btn-translucent-light btn-xs rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-facebook"></i></div>
                        <input class="form-control form-control-light" type="text" placeholder="Your Facebook account">
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn btn-icon btn-translucent-light btn-xs rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-linkedin"></i></div>
                        <input class="form-control form-control-light" type="text" placeholder="Your LinkedIn account">
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn btn-icon btn-translucent-light btn-xs rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-twitter"></i></div>
                        <input class="form-control form-control-light" type="text" placeholder="Your Twitter account">
                    </div>
                    <div class="collapse" id="showMoreSocials">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn btn-icon btn-translucent-light btn-xs rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-instagram"></i></div>
                            <input class="form-control form-control-light" type="text" placeholder="Your Instagram account">
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn btn-icon btn-translucent-light btn-xs rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-pinterest"></i></div>
                            <input class="form-control form-control-light" type="text" placeholder="Your Pinterest account">
                        </div>
                    </div><a class="nav-link-light collapse-label collapsed d-inline-block fs-sm fw-bold pt-2 pb-3" href="#showMoreSocials" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="showMoreSocials"><i class="fi-arrow-down me-2"></i></a>
                </section>
                <div class="d-sm-flex justify-content-between pt-2"><a class="btn btn-outline-light btn-lg d-block mb-3 mb-sm-2" href="#preview-modal" data-bs-toggle="modal"><i class="fi-eye-on ms-n1 me-2"></i>Preview</a><router-link class="btn btn-primary btn-lg d-block mb-2" to="/car-finder-promotion">Save and continue</router-link></div>
            </div>
            <!-- Progress of completion-->
            <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
                <div class="sticky-top pt-5">
                    <h6 class="text-light pt-5 mt-3 mb-2">80% content filled</h6>
                    <div class="progress progress-light mb-4" style="height: .25rem;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link-light ps-1" href="#basic-info" data-scroll data-scroll-offset="20">Basic info</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link-light ps-1" href="#price" data-scroll data-scroll-offset="20">Price</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link-light ps-1" href="#vehicle-info" data-scroll data-scroll-offset="20">Vehicle information</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-light opacity-60 me-2"></i><a class="nav-link-light ps-1" href="#features" data-scroll data-scroll-offset="20">Features</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-light opacity-60 me-2"></i><a class="nav-link-light ps-1" href="#photos" data-scroll data-scroll-offset="20">Photos / video</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link-light ps-1" href="#location" data-scroll data-scroll-offset="20">Location</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link-light ps-1" href="#contacts" data-scroll data-scroll-offset="20">Contacts</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</template>