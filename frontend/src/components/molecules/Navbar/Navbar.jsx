import React, { useState } from "react";
import { Link } from "react-router-dom";
import FitMeLogo from "../../../assets/images/FitMeLogo.png";

function Navbar() {
  const [isOpen, setIsOpen] = useState(false);

  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };

  return (
    <nav className="w-full main-blue fixed top-0 shadow-md z-10">
      <div className="max-w-full flex flex-wrap items-center justify-between mx-6 p-4">
        <Link to="/">
          <img src={FitMeLogo} className="h-16" alt="FitMe Logo" />
        </Link>
        <button
          onClick={toggleMenu}
          type="button"
          className="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-red-400 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-default"
          aria-expanded="false"
        >
          <span className="sr-only">Open main menu</span>
          <svg
            className="w-5 h-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
          >
            <path
              stroke="currentColor"
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="2"
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
        <div
          className={`w-full md:block md:w-auto ${isOpen ? "" : "hidden"}`}
          id="navbar-default"
        >
          <ul className="text-base font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-14 rtl:space-x-reverse md:mt-0 krona-one-regular">
            <li>
              <a
                href="#"
                className="block py-2 px-3 text-white rounded md:hover:text-red-400 md:p-0"
                aria-current="page"
              >
                Home
              </a>
            </li>
            <li>
              <a
                href="#"
                className="block py-2 px-3 text-white rounded md:hover:text-red-400 md:p-0"
              >
                About
              </a>
            </li>
            <li>
              <a
                href="#"
                className="block py-2 px-3 text-white rounded md:hover:text-red-400 md:p-0"
              >
                Contacto
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
