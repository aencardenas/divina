import { Link } from "@inertiajs/react";

export default function MenuButton() {
    return (
        <Link href="/products" className=" flex justify-center items-center bg-[#BAA242] text-white text-lg font-bold w-full h-12 rounded-lg shadow-md hover:opacity-90 hover:scale-105 hover:duration-500 max-w-md lg:max-w-full">
            Menú
        </Link>

    );
};