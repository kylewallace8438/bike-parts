<script setup >
import { ref } from "vue";
import { GoogleMap, Marker } from "vue3-google-map";

// Extract API key from the URL
const mapApiKey = "AIzaSyAbvyBxmMbFhrzP9Z8moyYr6dCr-pzjhBE";
// Define center and zoom level
const center = ref({ lat: 51.5074, lng: -0.1278 }); // London coordinates
const zoom = ref(15);
</script>
<template>
    <section class="container mb-5 pb-lg-5" id="map-location">
        <GoogleMap :api-key="mapApiKey" :center="center" :zoom="zoom" style="width: 100%; height: 500px;" class="interactive-map overflow-hidden rounded-3">
            <Marker :options="{ position: center }" />
        </GoogleMap>
    </section>
</template>
