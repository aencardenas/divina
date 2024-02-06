import { useState } from "react";

export default function OrderConfirmationForm({ onSubmit, onClose }) {
    const [name, setName] = useState("");
    const [phone, setPhone] = useState("");
    const [nameError, setNameError] = useState("");
    const [phoneError, setPhoneError] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault();
        if (!validateForm()) return;

        onSubmit({ name, phone });
        onClose();
    };

    const validateForm = () => {
        let isValid = true;

        if (name.trim() === "") {
            setNameError("Por favor ingresa un nombre.");
            isValid = false;
        } else {
            setNameError("");
        }

        if (!/^\d{10}$/.test(phone)) {
            setPhoneError("Por favor ingresa un número de teléfono válido (10 dígitos).");
            isValid = false;
        } else {
            setPhoneError("");
        }

        return isValid;
    };

    return (
        <div className="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div className="bg-white p-6 rounded-lg shadow-lg">
                <h2 className="text-lg font-medium mb-4">Confirmar pedido</h2>
                <form onSubmit={handleSubmit} className="flex flex-col items-center gap-2">
                    <input
                        type="text"
                        placeholder="Nombre"
                        value={name}
                        onChange={(e) => setName(e.target.value)}
                        className="border border-gray-300 rounded-lg px-2 py-1"
                        required
                    />
                    {nameError && <p className="text-red-500 text-sm">{nameError}</p>}
                    <input
                        type="tel"
                        placeholder="Teléfono"
                        value={phone}
                        onChange={(e) => setPhone(e.target.value)}
                        className="border border-gray-300 rounded-lg px-2 py-1"
                        required
                    />
                    {phoneError && <p className="text-red-500 text-sm">{phoneError}</p>}
                    <div className="flex justify-center">
                        <button type="submit" className="bg-[#AD9C4D] text-white px-4 py-2 rounded-lg shadow-lg">Confirmar pedido</button>
                        <button type="button" onClick={onClose} className="ml-4 text-gray-600">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    );
}
