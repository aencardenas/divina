import { createContext, useState, useContext } from "react";

// Creamos el contexto
const CartContext = createContext();

// Hook personalizado para acceder al contexto
export const useCart = () => {
    return useContext(CartContext);
};

// Proveedor del contexto
export const CartProvider = ({ children }) => {
    const [cart, setCart] = useState([]);

    // Función para agregar un producto al carrito
    const addToCart = (product, quantityToAdd) => {
        console.log(product)
        console.log(quantityToAdd)
        const existingProductIndex = cart.findIndex((item) => item.id === product.id);

        if (existingProductIndex !== -1) {
            const updatedCart = [...cart];
            updatedCart[existingProductIndex].quantity += quantityToAdd;
            setCart(updatedCart);
        } else {
            setCart([...cart, { ...product, quantity: quantityToAdd }]);
        }
    };

    // Función para eliminar un producto del carrito
    const removeFromCart = (productId) => {
        setCart(cart.filter((product) => product.id !== productId));
    };

    // Función para vaciar el carrito
    const clearCart = () => {
        setCart([]);
    };

    // Obtener la cantidad de productos
    const getTotalQuantity = () => {
        let totalQuantity = 0;

        cart.forEach((item) => {
            totalQuantity += item.quantity;
        })

        return totalQuantity;
    }

    // Calculamos el total del carrito
    const getTotal = () => {
        return cart.reduce((total, product) => total + product.price.price * product.quantity, 0);
    };

    return (
        <CartContext.Provider
            value={{
                cart,
                addToCart,
                removeFromCart,
                clearCart,
                getTotal,
                getTotalQuantity,
            }}
        >
            {children}
        </CartContext.Provider>
    );
};
