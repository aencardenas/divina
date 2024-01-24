import LocationButton from "./LocationButton";
import { FaStore, FaShoppingBag, FaMotorcycle } from "react-icons/fa";

export default function Welcome() {
    return (

        <section>
            <div className="flex flex-col gap-6 items-center md:items-start">
                <h1 className="font-bold text-4xl text-[#172634] sm:text-5xl">🤩Bienvenid@s</h1>
                <div className="flex flex-row gap-6 lg:whitespace-nowrap">
                    <div className="flex flex-col items-center lg:flex-row lg:gap-6">
                        <FaStore className="text-4xl text-[#BAA242]" />
                        <p>En sitio</p>
                    </div>
                    <div className="w-px bg-[#17263414]"></div>
                    <div className="flex flex-col items-center lg:flex-row lg:gap-6">
                        <FaShoppingBag className="text-4xl text-[#BAA242]" />
                        <p>Para llevar</p>
                    </div>
                    <div className="w-px bg-[#17263414]"></div>
                    <div className="flex flex-col items-center lg:flex-row lg:gap-6">
                        <FaMotorcycle className="text-4xl text-[#BAA242]" />
                        <p>A domicilio</p>
                    </div>
                </div>
                <LocationButton />
            </div>
        </section>

    );
};