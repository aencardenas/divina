import { useState, useEffect } from "react";
import { FaClock, FaDotCircle } from 'react-icons/fa';
export default function OperationStatusButton() {

    const [isOpen, setIsOpen] = useState(false);

    useEffect(() => {

        //Get current time
        const currenTime = new Date().getHours();

        //Define the opening and closing hours
        const openingHour = 9;
        const closingHour = 23;

        //Check if it's open
        setIsOpen(currenTime >= openingHour && currenTime < closingHour)
    }, []);

    return (
        <button className="flex flex-row justify-around items-center bg-[#FFFFFFD6] border-none rounded-md shadow-md gap-2 font-bold p-2">
            <FaDotCircle style={{color: isOpen ? 'green' : 'red'}}/>
            <span>{isOpen ? 'Abierto' : 'Cerrado'}</span>
            <FaClock />
        </button>
    )

}