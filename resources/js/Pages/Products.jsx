import Header from "@/Components/Header";
import Banner from "@/Components/Banner";
import ProductBoard from "@/Components/ProductBoard";
import CategorySlider from "@/Components/CategorySlider";
import Order from "@/Components/Order";
import Footer from "@/Components/Footer";
import { useCart } from "@/Context/CartContext";
import { useEffect, useState } from "react";

export default function Products({ categories, families, products }) {

    const [selectedCategoryId, setSelectedCategoryId] = useState(1);

    const [showOrder, setShowOrder] = useState(false);

    const { getTotalQuantity } = useCart();

    const handleToggleOrder = (show) => {
        setShowOrder(show);
    };

    const handleCategorySelect = (categoryId) => {
        setSelectedCategoryId(categoryId);
    };

    const filteredFamilies = families.filter((family) => family.category_id === selectedCategoryId)
    const filteredProducts = products.filter((product) => product.category_id === selectedCategoryId)

    // Function to show the order
    useEffect(() => {
        const quantity = getTotalQuantity();
        setShowOrder(quantity > 0); // Mostrar la orden si la cantidad total es mayor que 0
    }, [getTotalQuantity]);


    return (
        <div className="flex flex-col min-h-screen">
            <Header />
            <div className="flex flex-col gap-6 mx-5">
                <Banner />
                <CategorySlider categories={categories} onSelectCategory={handleCategorySelect} selectedCategoryId={selectedCategoryId} />
                <ProductBoard families={filteredFamilies} products={filteredProducts} handleToggleOrder={handleToggleOrder} />
            </div>
            {(showOrder) && <Order />}
            <div className="lg:mx-6 mt-auto">
                <Footer />
            </div>
        </div>
    );
}