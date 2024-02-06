import React from "react";

const OrderSummaryModal = ({ orderInfo, onClose }) => {

    console.log(orderInfo)
    
  return (
    <div className="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div className="bg-white p-6 rounded-lg shadow-lg mx-4"> {/* Aquí se agrega la clase max-w-md para limitar el ancho del modal */}
        <h2 className="text-lg font-medium mb-4">Resumen de la Orden</h2>
        <div className="mb-4">
          <p>Nombre: {orderInfo.name}</p>
          <p>Teléfono: {orderInfo.phone}</p>
          <p>Tipo de servicio: {orderInfo.serviceType}</p>
          <p>Folio: {orderInfo.folio}</p>
          {/* Agrega más detalles de la orden según sea necesario */}
        </div>
        <button
          onClick={onClose}
          className="bg-[#AD9C4D] text-white px-4 py-2 rounded-lg shadow-lg"
        >
          Cerrar
        </button>
      </div>
    </div>
  );
};

export default OrderSummaryModal;
