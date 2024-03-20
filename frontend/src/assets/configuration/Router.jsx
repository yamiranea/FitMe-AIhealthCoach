import { BrowserRouter, Routes, Route } from "react-router-dom";
import HomePage from "../../views/HomePage";
import SelectPlan from "../../views/SelectPlan";
import SportPlan from "../../views//SportPlan";
import NutritionalPlan from "../../views/NutritionalPlan";

function Router() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/selectplan" element={<SelectPlan />} />
        <Route path="/sportplan" element={<SportPlan />} />
        <Route path="/nutritionalplan" element={<NutritionalPlan />} />
      </Routes>
    </BrowserRouter>
  );
}

export default Router;
