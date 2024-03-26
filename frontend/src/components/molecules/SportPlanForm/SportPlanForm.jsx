import React, { useState } from "react";
import GenderDropdown from "../../atoms/GenderDropdown/GenderDropdown";

const SportPlanForm = () => {
  const [age, setAge] = useState("");
  const [error, setError] = useState("");

  const handleAgeChange = (e) => {
    setAge(e.target.value);
  };

  const handleAgeBlur = () => {
    if (age < 16) {
      setError("Debes tener 16 años o más");
    } else {
      setError("");
    }
  };

  return (
    <div>
      <form class="max-w-sm">
        <div class="mb-5">
          <label for="name" class="block mb-2 text-md font-medium text-white">
            Nombre
          </label>
          <input
            type="name"
            id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Ingresa tu nombre"
            required
          />
        </div>
        <div className="mb-5">
          <label
            htmlFor="age"
            className="block mb-2 text-md font-medium text-white"
          >
            Edad
          </label>
          <input
            type="number"
            id="age"
            className="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Ingresa tu edad"
            value={age}
            onChange={handleAgeChange}
            onBlur={handleAgeBlur}
            required
          />
          {error && <p className="text-red-400 mt-2">{error}</p>}
        </div>
        <GenderDropdown />

        <div class="flex items-start mb-5">
          <div class="flex items-center h-5">
            <input
              id="remember"
              type="checkbox"
              value=""
              class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
              required
            />
          </div>
          <label
            for="remember"
            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
          >
            Remember me
          </label>
        </div>
        <button
          type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Submit
        </button>
      </form>
    </div>
  );
};

export default SportPlanForm;
