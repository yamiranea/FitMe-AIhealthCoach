import React from "react";
import useFetch from "../../../hooks/useFetch";
import Dropdown from "../../atoms/Dropdown/Dropdown";

const GenderDropdown = ({ setSelectedOption }) => {
  const { data: genders } = useFetch("/genders");

  if (!genders) {
    return null; // o puedes renderizar un componente de carga aquí
  }

  const genderNames = genders.map((gender) => gender.name_gender);

  return (
    <Dropdown options={genderNames} setSelectedOption={setSelectedOption} />
  );
};

export default GenderDropdown;
