import { FaLocationArrow } from "react-icons/fa";
export default function LocationButton() {
    return (
        <button className="flex flex-row font-medium bg-[rgba(28,30,33,0.04)] text-base gap-3 text-left items-center hover:bg-[#d3d3d3] hover:transition-all duration-300 rounded-lg py-2 px-3 border max-w-md md:px-0 md:border-0 md:bg-white">
            <FaLocationArrow className="text-xl text-[#AD9C4D]"/>
            <p>
                Calle 23  Núm. 285 C x 10 diag y 18, Santa María Chuburna,
                Mérida, Mexico, 97138
            </p>
        </button>
    );
};