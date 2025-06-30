import axios from "axios";

export default axios.create({
    baseURL: import.meta.env.VITE_HOST_URL + "/api",
    headers: {
        "Content-Type": "application/json",
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
    },
});
