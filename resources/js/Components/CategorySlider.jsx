export default function CategorySlider({ categories, onSelectCategory, selectedCategoryId }) {

    const handleCategoryClick = (categoryId) => {
        onSelectCategory(categoryId);
    }

    return (
        <div className="overflow-x-auto border-t border-b border-gray-300">
            <ul className="flex list-none p-0 gap-6 py-2 xs:justify-center">
                {categories.map((category) => (
                    <li
                        className={`whitespace-nowrap cursor-pointer ${selectedCategoryId === category.id ? 'text-[#AD9C4D]' : ''}`}
                        key={category.id}
                    >
                        <p className="font-medium" onClick={() => handleCategoryClick(category.id)}>{category.category}</p>
                    </li>
                ))}
            </ul>
        </div>
    );
};