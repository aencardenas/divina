import CartProductCard from "./CartProductCard";
import { useCart } from "@/Context/CartContext";

export default function CartSummary() {

    const { cart } = useCart();

    return (

        <section className="flex flex-col gap-4">
            {cart.map((product) => (
                <div key={product.id}>
                    <CartProductCard product={product} />
                </div>
            ))}
        </section>

    );
};