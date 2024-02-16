import { useState } from 'react';

const VariationMenu = ({ product, variationNames}) => {
    const [showVariations, setShowVariations] = useState(false);

    const toggleVariations = () => {
        setShowVariations(!showVariations);
    };

    // Agrupar los toppings por el tipo de variación
    const groupedToppings = product.toppings.reduce((acc, topping) => {
        const variationId = topping.variation_id;
        if (!acc[variationId]) {
            acc[variationId] = [];
        }
        acc[variationId].push(topping);
        return acc;
    }, {});

    // Definir el orden de las variaciones
    const variationOrder = [1, 2, 3, 4, 5, 6];

    return (
        <div className="mt-4 text-black">
            <div className="flex items-center justify-between cursor-pointer" onClick={toggleVariations}>
                <p className="text-sm font-semibold">Variación</p>
                <svg xmlns="http://www.w3.org/2000/svg" className={`h-5 w-5 ${showVariations ? 'transform rotate-180' : ''}`} viewBox="0 0 20 20" fill="currentColor">
                    <path fillRule="evenodd" d="M6.293 7.293a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clipRule="evenodd" />
                </svg>
            </div>
            {showVariations && (
                <div className="mt-2 space-y-2">
                    {/* Iterar sobre las variaciones en el orden deseado */}
                    {variationOrder.map(variationId => (
                        groupedToppings[variationId] &&
                        <div key={variationId}>
                            <h3 className="text-sm font-semibold mt-2">{variationNames[variationId]}</h3>
                            {/* Iterar sobre los toppings de esta variación */}
                            {groupedToppings[variationId].map((topping, index) => (
                                <div key={index} className="flex items-center space-x-2">
                                    <input type="checkbox" id={`topping-${index}`} />
                                    <label htmlFor={`topping-${index}`} className="text-sm">{topping.topping}</label>
                                </div>
                            ))}
                        </div>
                    ))}
                </div>
            )}
        </div>
    );
};

export default VariationMenu;

