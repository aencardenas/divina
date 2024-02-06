import { FaArrowLeft } from "react-icons/fa";
import { Link } from "@inertiajs/react";
import { useCart } from "@/Context/CartContext";

export default function CartHeader() {
    const { getTotal } = useCart();
    return (

        <header className="flex justify-between items-center bg-black  h-20 px-4 py-2">
            <Link href="/products">
                <button className="flex gap-4 items-center text-white">
                    <FaArrowLeft />
                    Atrás
                </button>
            </Link>
            <div className="text-white">
                <p>Su carrito: </p>
                <p className="font-bold">MXN {getTotal()}</p>
            </div>

        </header>

    );
};