<script setup >
import { ref } from "vue";
import { GoogleMap, Marker } from "vue3-google-map";

// Extract API key from the URL
const mapApiKey = "AIzaSyCNFMAflviXn8eBkodZed7l-LBY-hvhTLY";
// Define center and zoom level
const center = ref({ lat: 21.0288308, lng: 105.8079139 }); // London coordinates
const zoom = ref(15);
</script>
<template>
    <section class="container mb-5 pb-lg-5" id="map-location">
        <GoogleMap :api-key="mapApiKey" :center="center" :zoom="zoom" style="width: 100%; height: 500px;" class="interactive-map overflow-hidden rounded-3">
            <Marker :options="{ position: center }" />
        </GoogleMap>
    </section>
</template>
