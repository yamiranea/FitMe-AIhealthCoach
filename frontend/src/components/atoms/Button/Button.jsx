import React from "react";

const Button = ({ buttonText, onClick }) => {
  return (
    <div>
      <button
        type="button"
        onClick={onClick}
        className="text-white bg-red-400 focus:ring-4 focus:ring-red-200 rounded-2xl text-base px-8 py-3.5 me-2 mb-8 focus:outline-none krona-one-regular transform transition-transform duration-300 hover:scale-110"
      >
        {buttonText}
      </button>
    </div>
  );
};

export default Button;
