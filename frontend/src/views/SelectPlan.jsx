import React from "react";
import Dropdown from "../components/atoms/Dropdown/Dropdown";
import Button from "../components/atoms/Button/Button";

const SelectPlan = () => {
  return (
    <div className="flex flex-col">
      <div className="mt-44 ml-10">
        <h1 className="krona-one-regular text-white w-6/12 text-2xl mb-4">
          ESCOGE TU PLAN
        </h1>
        <Dropdown />
      </div>
      <div className="ml-16 mb-56">
        <Button buttonText="Siguiente" />
      </div>
    </div>
  );
};

export default SelectPlan;
