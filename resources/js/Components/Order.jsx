import { Link } from "@inertiajs/react";
import { useCart } from "@/Context/CartContext";

export default function Order() {

    const { getTotal, getTotalQuantity } = useCart();

    const getProducWord = () => {
        if (getTotalQuantity() > 1) {
            return 'productos';
        } else {
            return 'producto';
        }
    };

    return (

        <section className="w-full flex flex-row justify-between items-center py-4 px-8 box-border sticky z-50 bottom-0 bg-white bg-opacity-90 border-t border-solid border-[#ccc]">
            <div className="flex flex-col flex-1 gap-1">
                <p className="text-xs text-black font-medium">{getTotalQuantity()} {getProducWord()}</p>
                <p className="text-xl font-bold text-black">MXN {parseFloat(getTotal()).toFixed(2)}</p>
            </div>
            <Link
                href="/cart"
                className="flex flex-1 justify-center items-center bg-[#AD9C4D] text-white font-medium py-2 rounded-lg"
            >
                Ver mi pedido
            </Link>
        </section>

    );
};