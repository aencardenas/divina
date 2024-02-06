<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ------------------------------ POSTRES -------------------------

        // TARTAS
        Product::create(['product' => 'Tarquesita (Individual)', 'description' => 'Tarta de queso de bola con base de una masa quebrada y cubierta de ganche de chocolate y queso de bola', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarquesita (Chica)', 'description' => 'Tarta de queso de bola con base de una masa quebrada y cubierta de ganche de chocolate y queso de bola', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarquesita (Familiar)', 'description' => 'Tarta de queso de bola con base de una masa quebrada y cubierta de ganche de chocolate y queso de bola', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        Product::create(['product' => 'Tarta de chocolate con baylis (Individual)', 'description' => 'Tarta rellena de crema de chocolate y baylis', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de chocolate con baylis (Chica)', 'description' => 'Tarta rellena de crema de chocolate y baylis', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Nuez (Individual)', 'description' => 'Tarta rellena de manzana, nuez, miel de maple y cubierta con una masa crocante', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de Nuez (Chica)', 'description' => 'Tarta rellena de manzana, nuez, miel de maple y cubierta con una masa crocante', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Nuez (Familiar)', 'description' => 'Tarta rellena de manzana, nuez, miel de maple y cubierta con una masa crocante', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        Product::create(['product' => 'Tarta de Manzana (Individual)', 'description' => 'Tarta rellena de manzana, nuez, miel de maple y cubierta con una masa crocante', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de Manzana (Chica)', 'description' => 'Tarta rellena de manzana, nuez, miel de maple y cubierta con una masa crocante', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Manzana (Familiar)', 'description' => 'Tarta rellena de manzana, nuez, miel de maple y cubierta con una masa crocante', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        Product::create(['product' => 'Tarta de Frutas (Individual)', 'description' => 'Una mezcla vibrante de frutas de temporada cuidadosamente seleccionadas sobre una base de masa ligera y delicadamente dulce.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de Frutas (Chica)', 'description' => 'Una mezcla vibrante de frutas de temporada cuidadosamente seleccionadas sobre una base de masa ligera y delicadamente dulce.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Frutas (Familiar)', 'description' => 'Una mezcla vibrante de frutas de temporada cuidadosamente seleccionadas sobre una base de masa ligera y delicadamente dulce.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        Product::create(['product' => 'Tarta de Limon (Individual)', 'description' => 'El equilibrio perfecto entre lo dulce y lo agrio se funde en una cremosidad suave sobre una base de masa de galleta crujiente.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de Limon (Chica)', 'description' => 'El equilibrio perfecto entre lo dulce y lo agrio se funde en una cremosidad suave sobre una base de masa de galleta crujiente.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Limon (Familiar)', 'description' => 'El equilibrio perfecto entre lo dulce y lo agrio se funde en una cremosidad suave sobre una base de masa de galleta crujiente.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        Product::create(['product' => 'Tarta de Chocolate (Individual)', 'description' => 'Una indulgencia irresistible para los amantes del cacao. Capas de chocolate sedoso y rico se entrelazan con una base de masa decadente, creando una experiencia celestial.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de Chocolate (Chica)', 'description' => 'Una indulgencia irresistible para los amantes del cacao. Capas de chocolate sedoso y rico se entrelazan con una base de masa decadente, creando una experiencia celestial.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Chocolate (Familiar)', 'description' => 'Una indulgencia irresistible para los amantes del cacao. Capas de chocolate sedoso y rico se entrelazan con una base de masa decadente, creando una experiencia celestial.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        Product::create(['product' => 'Tarta de Calabaza (Individual)', 'description' => 'Una mezcla exquisita de calabaza fresca y especias aromáticas sobre una base de masa suave y delicada.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 8]);

        Product::create(['product' => 'Tarta de Calabaza (Chica)', 'description' => 'Una mezcla exquisita de calabaza fresca y especias aromáticas sobre una base de masa suave y delicada.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 5]);

        Product::create(['product' => 'Tarta de Calabaza (Familiar)', 'description' => 'Una mezcla exquisita de calabaza fresca y especias aromáticas sobre una base de masa suave y delicada.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 8, 'group_id' => 16]);

        // PASTELES

        Product::create(['product' => 'Pastel Tres Leches (Pastel)', 'description' => 'Pastel de biscuit de vainilla con relleno de crema de  tres leches y cubierto de Merengue', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Crepe Cake (Pastel)', 'description' => 'Pastel de crepas con relleno de queso, crema de avellanas, mermelada, fruta de temporada', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Mostachon de Fresas (Grande)', 'description' => 'Pastel de queso mascarpone, con base de nuez y cubierto de fresas', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 3]);

        Product::create(['product' => 'Mostachon de Fresas (Chico)', 'description' => 'Pastel de queso mascarpone, con base de nuez y cubierto de fresas', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 5]);

        Product::create(['product' => 'Mostachon de Fresas (Individual)', 'description' => 'Pastel de queso mascarpone, con base de nuez y cubierto de fresas', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 8]);

        Product::create(['product' => 'Carrot Cake (Rosca)', 'description' => 'Pastel de zanahoria cubierto de betún de queso', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 17]);

        Product::create(['product' => 'Carrot Cake (Individual)', 'description' => 'Pastel de zanahoria cubierto de betún de queso', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 8]);

        Product::create(['product' => 'Carrot Cake (Cup cake)', 'description' => 'Pastel de zanahoria cubierto de betún de queso', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 15]);

        Product::create(['product' => 'Carrot Cake (Pastel)', 'description' => 'Pastel de zanahoria cubierto de betún de queso', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel Helado de Chocolate (Pastel)', 'description' => 'Capas de helado de chocolate cremoso se entrelazan con pedacitos de brownie decadente y se coronan con una cobertura de ganache.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel Helado de Chocolate (Personalizado)', 'description' => 'Capas de helado de chocolate cremoso se entrelazan con pedacitos de brownie decadente y se coronan con una cobertura de ganache.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 9]);

        Product::create(['product' => 'Pastel Helado de Chocolate (Rebanada)', 'description' => 'Capas de helado de chocolate cremoso se entrelazan con pedacitos de brownie decadente y se coronan con una cobertura de ganache.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 2]);

        Product::create(['product' => 'Pastel de Fudge (Pastel)', 'description' => 'Pastel de chocolate, con relleno y cubierto de fudge', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel de Fudge (Personalizado)', 'description' => 'Pastel de chocolate, con relleno y cubierto de fudge', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 9]);

        Product::create(['product' => 'Pastel de Fudge (Rebanada)', 'description' => 'Pastel de chocolate, con relleno y cubierto de fudge', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 2]);

        Product::create(['product' => 'Pastel Fresas con Crema (Pastel)', 'description' => 'Pastel de biscuit de vainilla con relleno de fresas con crema y cubierto de Merengue', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel de Coco (Pastel)', 'description' => 'Seductoras capas de bizcocho de coco bañadas en una dulce mezcla de coco rallado y crema de coco. Delicadamente adornado con ralladura fresca de coco.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel de Coco (Personalizado)', 'description' => 'Seductoras capas de bizcocho de coco bañadas en una dulce mezcla de coco rallado y crema de coco. Delicadamente adornado con ralladura fresca de coco.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 9]);

        Product::create(['product' => 'Pastel de Coco (Rebanada)', 'description' => 'Seductoras capas de bizcocho de coco bañadas en una dulce mezcla de coco rallado y crema de coco. Delicadamente adornado con ralladura fresca de coco.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 2]);

        Product::create(['product' => 'Pastel Dulce de Leche (Pastel)', 'description' => 'Capas esponjosas de bizcocho bañadas en dulce y cremoso dulce de leche argentino.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel Dulce de Leche (Personalizado)', 'description' => 'Capas esponjosas de bizcocho bañadas en dulce y cremoso dulce de leche argentino.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 9]);

        Product::create(['product' => 'Pastel Dulce de Leche (Rebanada)', 'description' => 'Capas esponjosas de bizcocho bañadas en dulce y cremoso dulce de leche argentino.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 2]);

        Product::create(['product' => 'Pastel Queso de Bola (Pastel)', 'description' => 'Pastel de biscuit de vainilla con relleno de crema de queso de bola y cubierto de Merengue', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel de Moka (Pastel)', 'description' => 'Pastel de biscuit de vainilla con relleno de crema de Moka y cubierto de Merengue', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel de Red Velvet (Pastel)', 'description' => 'Pastel de biscuit de vainilla con relleno de crema de Moka y cubierto de Merengue', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 18]);

        Product::create(['product' => 'Pastel de Red Velvet (Cup cake)', 'description' => 'Pastel de biscuit de vainilla con relleno de crema de Moka y cubierto de Merengue', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 9, 'group_id' => 15]);

        // CHEESECAKE
        Product::create(['product' => 'Cheesecake New York (Familiar)', 'description' => 'Pastel cremoso de queso con compota de frutos rojos', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 16]);

        Product::create(['product' => 'Cheesecake New York (Individual)', 'description' => 'Pastel cremoso de queso con compota de frutos rojos', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 8]);

        Product::create(['product' => 'Cheesecake Oreo (Familiar)', 'description' => 'Pastel cremoso de queso y oreo con base de galletas oreo', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 16]);

        Product::create(['product' => 'Cheesecake Oreo (Individual)', 'description' => 'Pastel cremoso de queso y oreo con base de galletas oreo', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 8]);

        Product::create(['product' => 'Cheesecake Tortuga (Familiar)', 'description' => 'Este exquisito postre combina la suavidad del queso crema con un toque decadente de caramelo, nueces pecanas tostadas y un drizzle de chocolate.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 16]);

        Product::create(['product' => 'Cheesecake Tortuga (Individual)', 'description' => 'Este exquisito postre combina la suavidad del queso crema con un toque decadente de caramelo, nueces pecanas tostadas y un drizzle de chocolate.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 8]);

        Product::create(['product' => 'Cheesecake de Chocolate (Familiar)', 'description' => 'La sedosa mezcla de queso crema se fusiona con el sabor intenso del chocolate, reposando sobre una base de galleta crujiente.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 16]);

        Product::create(['product' => 'Cheesecake de Chocolate (Individual)', 'description' => 'La sedosa mezcla de queso crema se fusiona con el sabor intenso del chocolate, reposando sobre una base de galleta crujiente.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 10, 'group_id' => 8]);

        // CUPCAKE
        Product::create(['product' => 'Cupcake de Vainilla', 'description' => 'Un delicado bizcocho de vainilla, suave y esponjoso, coronado con una generosa porción de crema batida de vainilla.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 11, 'group_id' => 15]);

        Product::create(['product' => 'Cupcake de Chocolate', 'description' => 'Un bizcocho esponjoso y decadente de chocolate negro, rematado con una generosa capa de frosting de chocolate cremoso.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 11, 'group_id' => 15]);

        Product::create(['product' => 'Cupcake de Red Velvet', 'description' => 'El bizcocho de terciopelo rojo, suave y delicadamente húmedo, se equilibra perfectamente con una capa generosa de frosting de queso crema.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 11, 'group_id' => 15]);

        Product::create(['product' => 'Cupcake de Red Zanahoria', 'description' => 'Un bizcocho húmedo y esponjoso, repleto de zanahorias frescas ralladas, nueces picadas y una mezcla de especias aromáticas, coronado con una suave capa de frosting de queso crema.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 11, 'group_id' => 15]);

        Product::create(['product' => 'Cupcake de Tiramisu', 'description' => 'Un bizcocho esponjoso impregnado con el sabor del café y el licor de tu elección, cubierto con una delicada crema de mascarpone y espolvoreado con cacao en polvo.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 11, 'group_id' => 15]);

        // Brownies
        Product::create(['product' => 'Brownies Doble Chocolate (Pieza)', 'description' => 'Brownies esponjosos de doble chocolate', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 6]);

        Product::create(['product' => 'Brownies Doble Chocolate (Chica)', 'description' => 'Brownies esponjosos de doble chocolate', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 5]);

        Product::create(['product' => 'Brownies Doble Chocolate (Grande)', 'description' => 'Brownies esponjosos de doble chocolate', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 3]);

        Product::create(['product' => 'Brownies con Cheesecake (Pieza)', 'description' => 'Brownies esponjosos de cheesecake.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 6]);

        Product::create(['product' => 'Brownies con Cheesecake (Chica)', 'description' => 'Brownies esponjosos de cheesecake.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 5]);

        Product::create(['product' => 'Brownies con Cheesecake (Grande)', 'description' => 'Brownies esponjosos de cheesecake.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 3]);

        Product::create(['product' => 'Brownies con Fudge (Pieza)', 'description' => 'Brownies esponjosos con fudge.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 6]);

        Product::create(['product' => 'Brownies con Fudge (Chica)', 'description' => 'Brownies esponjosos con fudge.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 5]);

        Product::create(['product' => 'Brownies con Fudge (Grande)', 'description' => 'Brownies esponjosos con fudge.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 3]);

        Product::create(['product' => 'Brownies de Dulce de Leche (Pieza)', 'description' => 'Brownies esponjosos de dulce de leche.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 6]);

        Product::create(['product' => 'Brownies de Dulce de Leche (Chica)', 'description' => 'Brownies esponjosos de dulce de leche.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 5]);

        Product::create(['product' => 'Brownies de Dulce de Leche (Grande)', 'description' => 'Brownies esponjosos de dulce de leche.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 3]);

        Product::create(['product' => 'Brownies Brookie (Pieza)', 'description' => 'Brownies esponjosos tipo brookie con galleta.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 6]);

        Product::create(['product' => 'Brownies Brookie (Chica)', 'description' => 'Brownies esponjosos tipo brookie con galleta.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 5]);

        Product::create(['product' => 'Brownies Brookie (Grande)', 'description' => 'Brownies esponjosos tipo brookie con galleta.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 3]);

        Product::create(['product' => 'Brownies sin Azucar (Pieza)', 'description' => 'Brownies esponjosos sin azucar.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 6]);

        Product::create(['product' => 'Brownies sin Azucar (Chica)', 'description' => 'Brownies esponjosos sin azucar.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 5]);

        Product::create(['product' => 'Brownies sin Azucar (Grande)', 'description' => 'Brownies esponjosos sin azucar.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 12, 'group_id' => 3]);

        // Galletas
        Product::create(['product' => 'Alfajores (Pieza)', 'description' => 'Dos suaves y delicadas galletas de maicena abrazan un relleno de dulce de leche, y espolvoreadas con coco rallado o azúcar glas.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 13, 'group_id' => 6]);

        Product::create(['product' => 'Galletas Chispas de Chocolate (Pieza)', 'description' => 'Estas galletas recién horneadas son una combinación perfecta de masa suave y mantequillosa, cargada con abundantes chispas de chocolate semiamargo.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 13, 'group_id' => 6]);

        Product::create(['product' => 'Galletas Red Velvet (Pieza)', 'description' => 'Una suave masa de galleta, tierna y ligeramente dulce, mezclada con el distintivo sabor del cacao y un toque sutil de vainilla.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 13, 'group_id' => 6]);

        Product::create(['product' => 'Galletas de Nutella (Pieza)', 'description' => 'Una explosión de sabor a avellana y chocolate en cada mordisco. Suavidad y cremosidad en una galleta que deleitará a los amantes de la Nutella.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 13, 'group_id' => 6]);

        Product::create(['product' => 'Galletas Garabato (Pieza)', 'description' => 'Nuestras galletas son una combinación de masa suave y ligera, adornadas con chispas de chocolate, trocitos de caramelo, nueces picadas y una explosión de confites de colores.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 13, 'group_id' => 6]);

        Product::create(['product' => 'Galletas Decoradas (Pieza)', 'description' => 'Elaboradas con una masa suave y delicada, cada galleta es cuidadosamente decorada a mano con detalles intrincados y colores vibrantes.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 13, 'group_id' => 6]);

        // PAY DE QUESO
        Product::create(['product' => 'Pay de Queso Tradicional (Rebanada)', 'description' => 'Preparado con una base de galleta crujiente y relleno de una mezcla cremosa de queso suave y delicioso.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 14, 'group_id' => 2]);

        Product::create(['product' => 'Pay de Queso Tradicional (Grande)', 'description' => 'Preparado con una base de galleta crujiente y relleno de una mezcla cremosa de queso suave y delicioso.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 14, 'group_id' => 3]);

        Product::create(['product' => 'Pay de Queso de Bola (Rebanada)', 'description' => 'Preparado con una base de galleta crujiente y relleno de una mezcla cremosa de queso bola suave y delicioso.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 14, 'group_id' => 2]);

        Product::create(['product' => 'Pay de Queso de Bola (Grande)', 'description' => 'Preparado con una base de galleta crujiente y relleno de una mezcla cremosa de queso bola suave y delicioso.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 14, 'group_id' => 3]);

        Product::create(['product' => 'Pay de Queso con Guayaba (Rebanada)', 'description' => 'Esta exquisita creación combina la suavidad cremosa del relleno de queso con el toque agridulce y vibrante de la guayaba, reposando sobre una base de galleta crujiente. ', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 14, 'group_id' => 2]);

        Product::create(['product' => 'Pay de Queso con Guayaba (Grande)', 'description' => 'Esta exquisita creación combina la suavidad cremosa del relleno de queso con el toque agridulce y vibrante de la guayaba, reposando sobre una base de galleta crujiente. ', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 2, 'family_id' => 14, 'group_id' => 3]);

        // ------------------------------ ALIMENTOS -------------------------

        //SANDWICHON
        Product::create(['product' => 'Sandwichon Tradicional', 'description' => 'Capas perfectamente elaboradas de pan de caja suave y esponjoso se intercalan con una combinación exquisita de rellenos tradicionales como jamón, pechuga de pavo, queso amarillo, lechuga fresca, tomate y mayonesa.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 1, 'group_id' => 1]);

        Product::create(['product' => 'Sandwichon con Philadephia', 'description' => 'Capas de pan de caja suave se combinan con una generosa capa de queso crema Philadelphia, realzado con toques de dulzura como mermelada de fresa o frutos del bosque.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 1, 'group_id' => 1]);

        // PAY DANES
        Product::create(['product' => 'Pay Danes (Grande)', 'description' => 'Pay hojaldrado relleno de jamón de pavo, queso, queso crema, chicharos y pimiento.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 2, 'group_id' => 2]);

        // PASTAS
        Product::create(['product' => 'Pasta Alla Rabiata (# Personas)', 'description' => 'Con una salsa de tomate fresco y sofrito de ajo, aceite de oliva, guindilla y hierbas aromáticas, esta pasta despierta los sentidos con su sabor audaz y ligeramente picante.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 3, 'group_id' => 4]);

        Product::create(['product' => 'Pasta Carbonara (# Personas)', 'description' => 'Preparada con pasta al dente cubierta con una salsa cremosa y sedosa hecha con huevos frescos batidos, queso pecorino romano, panceta crujiente y pimienta negra molida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 3, 'group_id' => 4]);

        Product::create(['product' => 'Pasta Poblana (# Personas)', 'description' => 'Una pasta al dente se encuentra con una salsa cremosa y ligeramente picante, elaborada con chiles poblanos asados, crema, cebolla, ajo y una pizca de cilantro fresco.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 3, 'group_id' => 4]);

        Product::create(['product' => 'Pasta Alfredo (# Personas)', 'description' => 'Preparada con una pasta al dente y cubierta con una lujosa salsa hecha con mantequilla, nata, queso parmesano y pimienta negra molida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 3, 'group_id' => 4]);

        Product::create(['product' => 'Pasta Margarita (# Personas)', 'description' => 'Con una combinación de tomates maduros, albahaca fresca, ajo, aceite de oliva y mozzarella fresca, esta pasta al dente se viste con una salsa liviana y sabrosa.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 3, 'group_id' => 4]);

        Product::create(['product' => 'Pasta Tradicional (# Personas)', 'description' => 'Preparada con pasta al dente y una salsa clásica de tomate, ajo, aceite de oliva, hierbas frescas y quizás un toque de queso parmesano rallado.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 3, 'group_id' => 4]);

        // LASAGNA
        Product::create(['product' => 'Lasagna Italiana', 'description' => 'Alternamos láminas de pasta al horno con una salsa de tomate casera, carne molida sazonada a la perfección, quesos ricotta, mozzarella y parmesano, todo coronado con una generosa cobertura de más queso.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 4, 'group_id' => 4]);

        Product::create(['product' => 'Lasagna Quesos', 'description' => 'Entre las capas de pasta al horno, se encuentran una mezcla exquisita de quesos como mozzarella, provolone, ricotta y parmesano, combinados con una suave y aromática salsa blanca.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 4, 'group_id' => 4]);

        Product::create(['product' => 'Lasagna Vegetariana', 'description' => 'Entre las capas de pasta al horno, se encuentran una combinación vibrante de verduras frescas, como espinacas, zucchini, berenjenas, pimientos y champiñones, cocinadas con hierbas aromáticas y una suave salsa de tomate casera.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 4, 'group_id' => 4]);

        // PIB
        Product::create(['product' => 'Pib de Pollo (Chico)', 'description' => 'Pollo marinado en achiote, jugo de naranja agria y especias, cocido envuelto en hojas de plátano bajo tierra.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 5]);

        Product::create(['product' => 'Pib de Pollo (Grande)', 'description' => 'Pollo marinado en achiote, jugo de naranja agria y especias, cocido envuelto en hojas de plátano bajo tierra.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 3]);

        Product::create(['product' => 'Pib de Puerco (Chico)', 'description' => 'Puerco marinado en achiote, jugo de naranja agria y especias, cocido envuelto en hojas de plátano bajo tierra.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 5]);

        Product::create(['product' => 'Pib de Puerco (Grande)', 'description' => 'Puerco marinado en achiote, jugo de naranja agria y especias, cocido envuelto en hojas de plátano bajo tierra.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 3]);

        Product::create(['product' => 'Pib de Puerco y Pollo (Chico)', 'description' => 'Puerco y pollo marinado en achiote, jugo de naranja agria y especias, cocido envuelto en hojas de plátano bajo tierra.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 5]);

        Product::create(['product' => 'Pib de Puerco y Pollo (Grande)', 'description' => 'Puerco y pollo marinado en achiote, jugo de naranja agria y especias, cocido envuelto en hojas de plátano bajo tierra.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 3]);

        Product::create(['product' => 'Pib Espelon (Chico)', 'description' => 'Tamal en forma redonda o cuadrada, que se prepara con masa de maíz, tomate, manteca de cerdo, chile, cebolla, epazote y espelon.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 5]);

        Product::create(['product' => 'Pib Espelon (Grande)', 'description' => 'Tamal en forma redonda o cuadrada, que se prepara con masa de maíz, tomate, manteca de cerdo, chile, cebolla, epazote y espelon.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 5, 'group_id' => 3]);

        // CHILE EN NOGADA
        Product::create(['product' => 'Chile en Nogada', 'description' => 'Consiste en un chile poblano relleno de una mezcla de carne molida sazonada con frutas como manzanas, peras, duraznos, pasas, nueces y cubierto con una salsa de nogada, hecha con nueces de castilla, queso fresco y crema de leche.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 6, 'group_id' => 6]);

        // PIERNA
        Product::create(['product' => 'Pierna Claveteada (Kilo)', 'description' => 'Consiste en una pierna de cerdo o res que se marina con una mezcla de especias como clavo, ajo, pimienta, hierbas y adobos regionales, luego se hornea lentamente hasta alcanzar una jugosidad y sabor excepcionales.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 7, 'group_id' => 7]);

        Product::create(['product' => 'Pierna Nicaraguense (Kilo)', 'description' => 'Se prepara con una pierna de cerdo sazonada con una mezcla de especias locales y condimentos como ajo, comino, orégano y jugos cítricos como naranja agria o limón, que aportan un sabor único y vibrante.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 1, 'family_id' => 7, 'group_id' => 7]);

        // ------------------------------ MASCOTAS -------------------------

        // PASTEL
        Product::create(['product' => 'Pastel de Pollo', 'description' => 'Pastel hecho con pollo, nutriente para mascotas.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 4, 'family_id' => 19, 'group_id' => 5]);

        Product::create(['product' => 'Pastel de Res', 'description' => 'Pastel hecho con pollo, nutriente para mascotas.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 4, 'family_id' => 19, 'group_id' => 5]);

        Product::create(['product' => 'Pastel de Cereales', 'description' => 'Pastel hecho con cereales especificas para mascostas.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 4, 'family_id' => 19, 'group_id' => 5]);

        // GALLETAS
        Product::create(['product' => 'Galletas', 'description' => 'Galletas especiales para mascotas.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 4, 'family_id' => 20, 'group_id' => 6]);

        // ------------------------------ BEBIDAS -------------------------

        // CAFE
        Product::create(['product' => 'Cafe Americano (Chico)', 'description' => 'Una bebida simple, aromática y llena de carácter que resalta los sabores naturales del café.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 5]);

        Product::create(['product' => 'Cafe Americano (Mediano)', 'description' => 'Una bebida simple, aromática y llena de carácter que resalta los sabores naturales del café.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 10]);

        Product::create(['product' => 'Cafe Americano (Grande)', 'description' => 'Una bebida simple, aromática y llena de carácter que resalta los sabores naturales del café.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 3]);

        Product::create(['product' => 'Latte (Chico)', 'description' => 'Una armoniosa combinación de espresso suave y cremosa leche vaporizada, coronada con una sutil capa de espuma.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 5]);

        Product::create(['product' => 'Latte (Mediano)', 'description' => 'Una armoniosa combinación de espresso suave y cremosa leche vaporizada, coronada con una sutil capa de espuma.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 10]);

        Product::create(['product' => 'Latte (Grande)', 'description' => 'Una armoniosa combinación de espresso suave y cremosa leche vaporizada, coronada con una sutil capa de espuma.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 3]);

        Product::create(['product' => 'Capuchino (Chico)', 'description' => 'Una mezcla armoniosa de espresso, leche vaporizada y espuma de leche cremosa.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 5]);

        Product::create(['product' => 'Capuchino (Mediano)', 'description' => 'Una mezcla armoniosa de espresso, leche vaporizada y espuma de leche cremosa.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 10]);

        Product::create(['product' => 'Capuchino (Grande)', 'description' => 'Una mezcla armoniosa de espresso, leche vaporizada y espuma de leche cremosa.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 3]);

        Product::create(['product' => 'Expreso (Chico)', 'description' => 'Un elixir concentrado y poderoso, extraído con precisión a partir de granos de café finamente molidos y agua caliente bajo presión.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 3]);

        Product::create(['product' => 'Expreso (Mediano)', 'description' => 'Un elixir concentrado y poderoso, extraído con precisión a partir de granos de café finamente molidos y agua caliente bajo presión.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 3]);

        Product::create(['product' => 'Expreso (Grande)', 'description' => 'Un elixir concentrado y poderoso, extraído con precisión a partir de granos de café finamente molidos y agua caliente bajo presión.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 15, 'group_id' => 3]);

        // AGUA
        Product::create(['product' => 'Agua Natural (Medio)', 'description' => 'Agua natural para refrescarte.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 16, 'group_id' => 11]);

        Product::create(['product' => 'Agua Natural (Litro)', 'description' => 'Agua natural para refrescarte.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 16, 'group_id' => 12]);

        // REFRESCOS
        Product::create(['product' => 'Coca Cola (Lata)', 'description' => 'El refresco clásico de siempre.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 17, 'group_id' => 13]);

        Product::create(['product' => 'Coca Cola (Embase)', 'description' => 'El refresco clásico de siempre.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 17, 'group_id' => 14]);

        Product::create(['product' => 'Coca sin Azucar (Lata)', 'description' => 'El refresco clásico de siempre.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 17, 'group_id' => 13]);

        Product::create(['product' => 'Coca sin Azucar (Embase)', 'description' => 'El refresco clásico de siempre.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 17, 'group_id' => 14]);

        Product::create(['product' => 'Naranja (Lata)', 'description' => 'El refresco clásico de siempre.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 17, 'group_id' => 13]);

        Product::create(['product' => 'Naranja (Embase)', 'description' => 'El refresco clásico de siempre.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 17, 'group_id' => 14]);

        // FRAPPE
        Product::create(['product' => 'Frappe Capuchino (Chico)', 'description' => 'Una fusión irresistible de espresso suave, leche cremosa, hielo triturado y una capa de crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 5]);

        Product::create(['product' => 'Frappe Capuchino (Mediano)', 'description' => 'Una fusión irresistible de espresso suave, leche cremosa, hielo triturado y una capa de crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 10]);

        Product::create(['product' => 'Frappe Capuchino (Grande)', 'description' => 'Una fusión irresistible de espresso suave, leche cremosa, hielo triturado y una capa de crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 3]);

        Product::create(['product' => 'Frappe Moka (Chico)', 'description' => 'Una deliciosa combinación de espresso, chocolate, leche cremosa y hielo triturado, coronado con crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 5]);

        Product::create(['product' => 'Frappe Moka (Mediano)', 'description' => 'Una deliciosa combinación de espresso, chocolate, leche cremosa y hielo triturado, coronado con crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 10]);

        Product::create(['product' => 'Frappe Moka (Grande)', 'description' => 'Una deliciosa combinación de espresso, chocolate, leche cremosa y hielo triturado, coronado con crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 3]);

        Product::create(['product' => 'Frappe Oreo (Chico)', 'description' => 'Una deliciosa combinación de espresso, chocolate, leche cremosa y hielo triturado, coronado con crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 5]);

        Product::create(['product' => 'Frappe Oreo (Mediano)', 'description' => 'Una deliciosa combinación de espresso, chocolate, leche cremosa y hielo triturado, coronado con crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 10]);

        Product::create(['product' => 'Frappe Oreo (Grande)', 'description' => 'Una deliciosa combinación de espresso, chocolate, leche cremosa y hielo triturado, coronado con crema batida.', 'image' => '/img/crispy-onion-rings.webp', 'category_id' => 3, 'family_id' => 18, 'group_id' => 3]);





        











        







       


    
    }
}
