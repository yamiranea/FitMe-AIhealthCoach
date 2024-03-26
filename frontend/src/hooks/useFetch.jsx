import { useState, useEffect } from "react";

const API_BASE_URL = "http://127.0.0.1:8000/api";

const useFetch = (endpoint) => {
  const [data, setData] = useState(null);

  useEffect(() => {
    const getData = async (endpoint) => {
      try {
        let response = await fetch(`${API_BASE_URL}${endpoint}`);

        if (!response.ok) {
          throw new Error(`Failed to fetch data. Status: ${response.status}`);
        }

        let responseJson = await response.json();
        setData(responseJson);
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    };

    getData(endpoint);

    return () => {};
  }, [endpoint]);

  return { data };
};

export default useFetch;
