import OperationStatusButton from "./OperationStatusButton";
import SocialMediaIcons from "./SocialMediaIcons";

export default function Banner() {
    return (
        <section className="flex flex-row justify-between items-center">
            <div>
                <img src="/img/Logocolor.jpg" className="w-20 h-20 sm:w-32 sm:h-32"/>
            </div>
            <div className="flex flex-col gap-4">
                <OperationStatusButton />
                <SocialMediaIcons />
            </div>
        </section>
    );

};