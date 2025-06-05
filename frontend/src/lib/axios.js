// src/lib/axios.js
import axios from 'axios'

const apiUrl = import.meta.env.VITE_API_URL
const token = localStorage.getItem('token') ?? null
const api = axios.create({
  baseURL: apiUrl, // Your API base URL
  headers: {
    'Content-Type': 'application/json',
    // You can set Authorization here if needed
    'Authorization': `Bearer ${token}`
  },
  withCredentials: true, // for Sanctum or cookie-based auth
})

export default api
