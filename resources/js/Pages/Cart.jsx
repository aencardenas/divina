import CartHeader from "@/Components/CartHeader";
import CartSummary from "@/Components/CartSummary";
import CartDeliveryOptions from "@/Components/CartDeliveryOptions";

export default function Cart() {
    return (
        <div className="min-h-screen flex flex-col">
            <header>
                <CartHeader />
            </header>
            <main className="flex-grow px-4 py-4 sm:px-60 md:px-72 lg:px-96">
                <CartSummary />
            </main>
            <div className="mt-auto sticky bottom-0">
                <CartDeliveryOptions />
            </div>
        </div>
    );
};