import { FaPlusSquare, FaMinusSquare, FaTimesCircle} from "react-icons/fa";
import { useCart } from "@/Context/CartContext";
import { useState } from "react";

export default function ProductCard({ product, handleToggleOrder }) {

    const { addToCart } = useCart();
    const [quantity, setQuantity] = useState(1);
    const [modal, setModal] = useState(false);

    const toggleModal = () => {
        setModal(!modal);
        setQuantity(1);
        handleToggleOrder(false);
    };

    const decreaseQuantity = () => {
        if (quantity > 1) {
            setQuantity(quantity - 1);
        }
    };

    const increaseQuantity = () => {
        setQuantity(quantity + 1);
    };

    return (
        <>
            <article className="flex gap-4 pb-4 border-b border-[#0000001F] box-border">
                <figure>
                    <img
                        src={product.image}
                        className="max-w-24 max-h-24 rounded-lg object-cover"
                        alt="Product Image"
                    />
                </figure>
                <div className="flex flex-col justify-between w-full">
                    <div className="flex flex-col gap-1">
                        <div className="text-base text-black">{product.product}</div>
                        <div className="text-xs line-clamp-2 overflow-hidden text-[#00000080] font-medium">{product.description}</div>
                    </div>
                    <div className="flex justify-between items-end">
                        <p className="font-bold text-black">MXN 100.00</p>
                        <FaPlusSquare onClick={toggleModal} className="w-8 h-8 text-[#AD9C4D] cursor-pointer" />
                    </div>
                </div>
            </article>

            {modal && (
                <div className="fixed top-0 left-0 w-screen h-screen bg-black bg-opacity-50 flex justify-center items-center">
                    <div className="flex flex-col gap-3 bg-white rounded-lg p-6 w-screen h-screen  overflow-y-auto sm:w-1/2">

                        <FaTimesCircle onClick={toggleModal} className="text-2xl self-end text-[#AD9C4D] cursor-pointer" />

                        {/* Modal Content*/}
                        <img
                            src={product.image}
                            className="max-w-64 self-center h-auto rounded-lg mb-4 xs:w-1/2 xs:self-center md:w-1/3"
                            alt="Product Image"
                        />
                        <h2 className="text-black text-xl font-bold">{product.product}</h2>
                        <p className="text-sm text-gray-500">{product.description}</p>
                        <p className="font-bold text-black">MXN 100.00</p>

                        {/* Sticky Container */}
                        <div className="sticky bottom-0 bg-white w-full py-3 px-1 flex justify-between items-center border-t border-gray-200">
                            {/* Quantity Control */}
                            <div className="flex justify-between gap-4 items-center rounded-lg shadow-lg px-2 py-2">
                                <FaMinusSquare onClick={decreaseQuantity} className="w-5 h-5 text-[#AD9C4D] cursor-pointer select-none" />
                                <span className="text-black">{quantity}</span>
                                <FaPlusSquare onClick={increaseQuantity} className="w-5 h-5 text-[#AD9C4D] cursor-pointer select-none" />
                            </div>
                            {/* Add to Cart Button */}
                            <button onClick={() => {
                                addToCart(product, quantity); 
                                toggleModal();
                                }} className="bg-[#AD9C4D] text-white px-4 py-2 rounded-lg shadow-lg select-none">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            )}
        </>

    );

};