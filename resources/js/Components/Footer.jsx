import { Link } from "@inertiajs/react";
import { useState, useEffect } from "react";

export default function Footer() {
    const currentPage = window.location.pathname;

    const [isLG, setIsLG] = useState(false);

    useEffect(() => {
        const checkScreenSize = () => {
            // Obtener el ancho actual de la ventana
            const windowWidth = window.innerWidth;

            // Comparar con el punto de quiebre de Tailwind para lg
            const lgBreakpoint = 1100; // Este valor puede variar según tus necesidades

            // Actualizar el estado según el tamaño de la pantalla
            setIsLG(windowWidth >= lgBreakpoint);
        };

        // Verificar el tamaño de la pantalla al cargar la página
        checkScreenSize();

        // Agregar un listener para verificar cambios en el tamaño de la pantalla
        window.addEventListener('resize', checkScreenSize);

        // Limpiar el listener al desmontar el componente
        return () => {
            window.removeEventListener('resize', checkScreenSize);
        };
    }, []);

    const getFooterInfo = () => {
        if (currentPage === '/') {
            return (
                <Link href="/products">Menú Digital de Divina Gula</Link>
            );
        } else if (currentPage === '/products') {
            return <Link href="/">Inicio de Divina Gula</Link>
        }
    }
    return (
        <footer className="flex flex-col text-sm gap-3 items-center text-center lg:flex-row-reverse lg:whitespace-nowrap">
            <div className="w-full lg:flex lg:justify-end lg:gap-6">
                <div className="pt-3 pb-3 hover:bg-[#d3d3d3] hover:duration-300 cursor-pointer border-b border-t border-[#17263414] lg:border-none">
                    <p>{getFooterInfo()}</p>
                </div>
                {isLG && (
                    <div className="w-px bg-[#17263414] h-8"></div>
                )}
                <div className="pt-3 pb-3 border-b border-[#17263414]">
                    <p>Reportar algo</p>
                </div>
            </div>
            <div className="pb-3">
                <p>Desarrollado por <strong><a href="https://idnconsultores.com/">IDN Consultores</a></strong></p>
            </div>
        </footer>
    );
};