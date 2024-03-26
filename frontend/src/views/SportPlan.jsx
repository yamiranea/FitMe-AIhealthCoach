import React from "react";
import SportPlanForm from "../components/molecules/SportPlanForm/SportPlanForm";

const SportPlan = () => {
  return (
    <div className="flex flex-col">
      <div className="mt-44 ml-10">
        <h1 className="krona-one-regular text-white w-6/12 text-xl mb-4">
          DATOS PARA CREAR TU PLAN
        </h1>
        <p className="krub-regular text-white text-lg mb-6">
          Con los siguientes datos generaremos la consulta para crear tu plan
          personalizado basándonos en tus características y objetivos.
        </p>
        <SportPlanForm />
      </div>
    </div>
  );
};

export default SportPlan;
