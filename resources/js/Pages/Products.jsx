import Header from "@/Components/Header";
import Banner from "@/Components/Banner";

export default function Products() {

    return(
        <div className="flex flex-col min-h-screen">
            <Header />
            <div className="mx-5">
                <Banner />
            </div>
        </div>
    );
}