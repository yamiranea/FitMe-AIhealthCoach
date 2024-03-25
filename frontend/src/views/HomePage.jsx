import React from "react";
import { useNavigate } from "react-router-dom";
import Button from "../components/atoms/Button/Button";
import Gallery from "../components/molecules/Gallery/Gallery";

const HomePage = () => {
  const navigate = useNavigate();

  const goToSelectPlan = () => {
    navigate("/selectplan");
  };

  return (
    <>
      <div className="mt-44 flex flex-col items-center gap-3">
        <h1 className="krona-one-regular text-white w-6/12 text-2xl text-center mx-auto">
          TU COACH NUTRICIONAL Y DEPORTIVO BASADO EN INTELIGENCIA ARTIFICIAL
        </h1>
        <h2 className="krub-regular text-xl text-white mx-auto mb-8">
          Haz tu consulta personalizada
        </h2>
        <Button buttonText="Comenzar" onClick={goToSelectPlan} />
      </div>
      <div>
        <Gallery />
      </div>
    </>
  );
};

export default HomePage;
