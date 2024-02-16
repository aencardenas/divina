// ProductBoard.js
import React, { useDebugValue, useEffect, useState } from "react";
import ProductCard from "./ProductCard";

export default function ProductBoard({ families, products, variationNames, handleToggleOrder }) {
  const [expandedFamilies, setExpandedFamilies] = useState([]);

  const toggleFamilyExpansion = (familyId) => {
    if (expandedFamilies.includes(familyId)) {
      setExpandedFamilies(expandedFamilies.filter((id) => id !== familyId));
    } else {
      setExpandedFamilies([...expandedFamilies, familyId]);
    }
  };

  useEffect(() => {
    const handleResize = () => {
      const smScreenSize = 800; // Tamaño sm (en px)
      const isSmScreen = window.innerWidth >= smScreenSize;
      if (isSmScreen) {
        const allFamilyIds = families.map((family) => family.id);
        setExpandedFamilies(allFamilyIds); // Expandir todas las familias en tamaño sm
      }
    };

    handleResize(); // Llamar a la función al montar el componente para verificar el tamaño de la pantalla

    window.addEventListener("resize", handleResize); // Agregar event listener para cambiar el estado cuando se redimensiona la ventana

    return () => {
      window.removeEventListener("resize", handleResize); // Limpiar event listener al desmontar el componente
    };
  }, [families]); // Ejecutar solo cuando cambie la lista de familias

  return (
    <section>
      <div className="sm:grid sm:grid-cols-2 sm:gap-4">
        {families.map((family) => (
          <div
            key={family.id}
            className="flex flex-col text-white font-medium rounded-md w-full mb-4"

          >
            <div
              className="bg-[#AD9C4D] flex justify-center items-center h-12 cursor-pointer rounded-xl"
              onClick={() => toggleFamilyExpansion(family.id)}
            >
              <p>{family.family}</p>
            </div>
            {expandedFamilies.includes(family.id) && (
              <div className="bg-white shadow-2xl flex flex-col gap-4 px-4 py-4 rounded-xl">
                {products
                  .filter((product) => product.family_id === family.id)
                  .map((product) => (
                    <ProductCard key={product.id} product={product} variationNames={variationNames} handleToggleOrder={handleToggleOrder} />
                  ))}
              </div>
            )}
          </div>
        ))}
      </div>
    </section>
  );
}
