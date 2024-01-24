import Header from "@/Components/Header";
import Banner from "@/Components/Banner";
import Welcome from "@/Components/Welcome";
import MenuButton from "@/Components/MenuButton";
import Footer from "@/Components/Footer";

export default function Home() {
    return (
        <div className="flex flex-col min-h-screen">
            <Header />
            <main className="mx-6">
                <Banner />
                <div className="flex flex-col gap-6 mt-16 md:flex-row md:items-center">
                    <div className="md:flex-1">
                        <Welcome />
                    </div>
                    <div className="flex flex-row justify-center md:flex-1 pb-6">
                        <MenuButton />
                    </div>
                </div>
            </main>
            <div className="mt-auto py-5l lg:mx-6 items-center">
                <Footer />
            </div>
        </div>
    );
};