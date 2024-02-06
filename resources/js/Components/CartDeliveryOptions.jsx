import { FaStore, FaShoppingBag, FaMotorcycle } from "react-icons/fa";
import OrderConfirmationFormModal from "./OrderConfirmationFormModal";
import OrderSummaryModal from "./OrderSummaryModal";
import { v4 as uuidv4 } from "uuid";
import { useState } from "react";

export default function CartDeliveryOptions() {
    const [showOrderForm, setShowOrderForm] = useState(false);
    const [showOrderSummary, setShowOrderSummary] = useState(false);
    const [selectedService, setSelectedService] = useState("");
    const [orderInfo, setOrderInfo] = useState(null); // Estado para almacenar la información de la orden

    const sendWhatsAppMessage = (formData) => {

        //Generar numero de folio
        const folio = uuidv4();

        // Construir objeto de orden con información de la persona y el tipo de servicio
        const order = {
            name: formData.name,
            phone: formData.phone,
            serviceType: selectedService,
            folio: folio
            // Puedes agregar más información aquí, como los productos seleccionados
        };

        // Actualizar el estado con la información de la orden
        setOrderInfo(order);

        // Aquí puedes enviar el mensaje de WhatsApp con la información de la orden
        // ...

        setShowOrderSummary(true);
    };

    const handleFormClose = () => {
        setShowOrderForm(false);
    };

    const handleOrderSummaryClose = () => {
        setShowOrderSummary(false);
    };

    return (
        <section className="w-full flex flex-col items-center gap-2 bg-white bg-opacity-90 shadow-lg border-t border-[#ccc] py-4">
            <p className="text-sm font-medium">Selecciona el tipo de servicio</p>
            <div className="flex gap-4 text-white items-center whitespace-nowrap">
                <div className="flex flex-col">
                    <button
                        className="flex flex-col items-center bg-[#AD9C4D] rounded-lg px-4 py-2 text-sm flex-1"
                        onClick={() => { setShowOrderForm(true); setSelectedService("En sitio"); }}
                    >
                        <FaStore className="w-6 h-6" />
                        <span>En sitio</span>
                    </button>
                    <span className="text-black text-xs text-center">En el local</span>
                </div>
                <div className="flex flex-col">
                    <button
                        className="flex flex-col items-center bg-[#AD9C4D] rounded-lg px-4 py-2 text-sm flex-1"
                        onClick={() => { setShowOrderForm(true); setSelectedService("Para llevar"); }}
                    >
                        <FaShoppingBag className="w-6 h-6" />
                        <span>Para llevar</span>
                    </button>
                    <span className="text-black text-xs text-center">Retirar en el local</span>
                </div>
                <div className="flex flex-col">
                    <button
                        className="flex flex-col items-center bg-[#AD9C4D] rounded-lg px-4 py-2 text-sm flex-1"
                        onClick={() => { setShowOrderForm(true); setSelectedService("A domicilio"); }}
                    >
                        <FaMotorcycle className="w-6 h-6" />
                        <span>A domicilio</span>
                    </button>
                    <span className="text-black text-xs text-center">Delivery</span>
                </div>
            </div>
            {showOrderForm && <OrderConfirmationFormModal onSubmit={sendWhatsAppMessage} onClose={handleFormClose} />}
            {showOrderSummary && (
                <OrderSummaryModal orderInfo={orderInfo} onClose={handleOrderSummaryClose} />
            )}
        </section>
    );
};




