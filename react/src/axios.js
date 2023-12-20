import axios from "axios";

const axiosClient = axios.create({
  baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`,
});

axiosClient.interceptors.request.use((config) => {
  const token = "123"; //TODO
  config.headers.Authorization = `Bearer ${token}`;
});

axiosClient.interceptors.response.use(
  (resp) => {
    return resp;
  },
  (error) => {
    if (error.resp && error.resp.status === 401) {
      router.navigate("/login");
      return error;
    }
    throw error;
  }
);

export default axiosClient;
