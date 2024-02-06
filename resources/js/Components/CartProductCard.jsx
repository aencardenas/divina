import { FaMinus, FaPlus } from "react-icons/fa";
import { useCart } from "@/Context/CartContext";

export default function CartProductCard({ product }) {

    const { removeFromCart, addToCart } = useCart();

    const handleDecreaseQuantity = () => {
        if (product.quantity > 1) {
            addToCart(product, -1); // Disminuir la cantidad en 1
        } else {
            removeFromCart(product.id); // Eliminar el producto del carrito si la cantidad es 1
        }
    };

    const handleIncreaseQuantity = () => {
        addToCart(product, 1); // Aumentar la cantidad en 1
    };

    return (
        <article className="flex items-center justify-between gap-4 pb-4 border-b border-gray-300 box-border">
            <figure>
                <img
                    src={product.image}
                    className="max-w-16 max-h-16 rounded-lg object-cover"
                    alt="Product Image"
                />
            </figure>
            <div className="flex flex-col justify-between text-xs min-w-40 max-w-40">
                <div className="flex flex-col gap-1">
                    <div className="text-base text-black">{product.product}</div>
                    <p className="font-bold text-black">MXN 100.00</p>
                </div>
            </div>
            <div className="flex items-center gap-4 text-[#AD9C4D]">
                <FaMinus onClick={handleDecreaseQuantity} className="cursor-pointer" />
                <span className="text-black">{product.quantity}</span>
                <FaPlus onClick={handleIncreaseQuantity} className="cursor-pointer"/>
            </div>
        </article>
    );
};