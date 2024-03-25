import React, { useState } from "react";

const Dropdown = ({ setSelectedOption }) => {
  const [isOpen, setIsOpen] = useState(false);

  const toggleOpen = () => setIsOpen(!isOpen);

  const selectOption = (option) => {
    setSelectedOption(option);
    setIsOpen(false);
  };

  return (
    <div className="mb-8 relative">
      <div>
        <button
          onClick={toggleOpen}
          id="dropdownHoverButton"
          data-dropdown-toggle="dropdownHover"
          data-dropdown-trigger="hover"
          className="krub-regular text-main-blue bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center inline-flex items-center"
          type="button"
        >
          Selecciona una opción{" "}
          <svg
            className="w-2.5 h-2.5 ms-3"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 10 6"
          >
            <path
              stroke="currentColor"
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="2"
              d="m1 1 4 4 4-4"
            />
          </svg>
        </button>

        {isOpen && (
          <div
            id="dropdownHover"
            className="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-60 absolute"
          >
            <ul
              className="py-4 text-md text-main-blue"
              aria-labelledby="dropdownHoverButton"
            >
              <li>
                <button
                  onClick={() => selectOption("NUTRICIONAL")}
                  className="block w-full px-8 py-3 hover:bg-red-400 hover:text-white"
                >
                  NUTRICIONAL
                </button>
              </li>
              <li>
                <button
                  onClick={() => selectOption("DEPORTIVO")}
                  className="block w-full px-8 py-3 hover:bg-red-400 hover:text-white"
                >
                  DEPORTIVO
                </button>
              </li>
            </ul>
          </div>
        )}
      </div>
    </div>
  );
};

export default Dropdown;
