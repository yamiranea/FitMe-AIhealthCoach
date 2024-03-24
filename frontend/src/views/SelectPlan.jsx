import React from "react";
import Dropdown from "../components/atoms/Dropdown/Dropdown";

const SelectPlan = () => {
  return (
    <div className="mt-44 flex flex-col ml-10">
      <h1 className="krona-one-regular text-white w-6/12 text-2xl mb-6">
        ESCOGE TU PLAN
      </h1>
      <Dropdown />
    </div>
  );
};

export default SelectPlan;
