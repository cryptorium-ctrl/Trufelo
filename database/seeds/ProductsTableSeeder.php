<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fresh Summer Truffle
        Products::create([
            'name' => 'Summer Truffle',
            'category' => 'fresh-truffles',
            'description' => '
             <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             The summer truffle is the ideal accompaniment for meat, fish and pasta dishes. It gives a delicate flavour and aroma, milder than the Perigord truffle.
             </br></br>
             This true delicacy is collected in the summer period, at between 200 and 1000 metres above sea level. 
             Its outer form is similar to the Melanosporum truffle, but it has a more pronounced pyramidal skin. Its flesh is cream coloured with hazel tones.
            ',
            'price' => 50,
            'short_description' => 'Fresh Summer Truffle in a pack of 200g',
            'webPath' => 'shop.fresh-summer',
            'image' => 'products/dummy/fresh-truffles/summer_4oz_1.png',
        ]);

        //Fresh Winter Truffle
        Products::create([
            'name' => 'Winter Truffle',
            'category' => 'fresh-truffles',
            'description' => '
             <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>             
             Its potent aroma and its subtle and intense flavour make it an excellent delicacy for the most discerning palates.
             </br> </br>
             Known as the black gold of gastronomy, the large investment made by Spain in this type of cultivation has positioned the country as the main global producer.
             </br></br>                        
             ',
            'price' => 50,
            'short_description' => 'Fresh Winter Truffle in a pack of 200g',
            'webPath' => 'shop.fresh-winter',
            'image' => 'products/dummy/fresh-truffles/winter-fresh-black-truffle.jpg',
        ]);

        //Fresh White Truffle
        Products::create([
            'name' => 'White Truffle',
            'category' => 'fresh-truffles',
            'description' => '
             <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             Truffle Magnatum or White truffle of Alba is the variety of truffle most appreciated that exists. 
             It is characterized by having a very short harvesting season that goes from the end of September to the end of December.
             </br></br>
             Unlike the truffle Melansopsorum the truffle of Alba or "tartufo bianco" for the Italians, grows wild in some regions of Italy and is possessing an extraordinary flavor and aroma, 
             the latter very volatile so it does not support cooking.            
             ',
            'price' => 100,
            'short_description' => 'Fresh White Truffle in a pack of 200g',
            'webPath' => 'shop.fresh-white',
            'image' => 'products/dummy/fresh-truffles/white_truffles_alba.png',
        ]);

        //Black Truffle Oil
        Products::create([
            'name' => 'Black Truffle Oil',
            'category' => 'truffled-products',
            'description' => '
             <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             Fresh black truffles have a more robust flavor and can be paired with stronger foods, and the same is true for black truffle oil. 
             Add black truffle oil to sauces (after the sauce is cooked and in small quantities), drizzle over hearty meat dishes, wild mushroom ragout, 
             or add a tablespoon or so of black truffle oil to a vinaigrette. Use black truffle oil to enhance the flavor of fresh summer truffles or Burgundy truffles.
            ',
            'price' => 50,
            'short_description' => 'Black Truffle Oil in a bottle of 500ml',
            'webPath' => 'shop.black-truffle-oil',
            'image' => 'products/dummy/oil/black-truffle-oil.jpg',
        ]);

        //White Truffle Oil
        Products::create([
            'name' => 'White Truffle Oil',
            'category' => 'truffled-products',
            'description' => '
             <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             The slightly garlicky and peppery flavor of white truffle oil is a particularly good match with beef carpacio, white fleshed fish or shellfish, 
             rabbit meat, and other meats with a more delicate flavor.
            ',
            'price' => 50,
            'short_description' => 'White Truffle Oil in a bottle of 500ml',
            'webPath' => 'shop.white-truffle-oil',
            'image' => 'products/dummy/oil/white-truffle-oil.jpg',
        ]);

        //Truffle Vinegar
        Products::create([
            'name' => 'Truffle Vinegar',
            'category' => 'truffled-products',
            'description' => '
             <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             We use the finest Barrel-Aged Balsamic Vinegar of Modena IGP.  Only specific varieties of grapevine can be used in its production 
             and the finished product must be refined in high-quality wooden vessels. The result is a velvety smooth balsamic vinegar, 
             that we expertly blend with our unique flavour & the highest quality white truffle.
            ',
            'price' => 50,
            'short_description' => 'Truffle Vinegar in a bottle of 500ml',
            'webPath' => 'shop.truffle-vinegar',
            'image' => 'products/dummy/oil/truffle-vinegar.jpg',
        ]);

        //Truffle Condiments Package
        Products::create([
           'name' => 'Truffle Condiments Package',
           'category' => 'truffle-packages',
            'description' => '
            <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             What is the Trio Condiment Selection?
             This gift set contains three of our best selling condiments; Black Truffle Mustard (180g), Black Truffle Mayonnaise (180g) & 
             Black Truffle Ketchup (180g). The Black Truffle Mustard is made with authentic Dijon mustard imported from 
             France and expertly blended with the highest quality European Black Truffles (Tuber Aestivum). 
            ',
            'price' => 150,
            'short_description' => 'Truffle Mayonnaise, Truffle Ketchup and Truffle Mustard condiments into one package.',
            'webPath' => 'shop.truffle-condiments',
            'image' => 'products/dummy/packages/tripple-condiments.jpg'
        ]);

        //Truffle Oil & Vinegar Package
        Products::create([
            'name' => 'Truffle Oil & Vinegar Package',
            'category' => 'truffle-packages',
            'description' => '
            <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
            This luxury gift set contains our delicious single concentrated Black Truffle Oil & White Truffle Oil. 
            We shave the highest quality truffles and expertly blend them with our unique flavour & cold-pressed extra virgin olive oil. 
            Cold-pressing produces less oil than heated pressing but ensures that the delicate flavours & aromas are not damaged.        
            ',
            'price' => 120,
            'short_description' => 'Black and White Truffle Oil & Truffle Vinegar',
            'webPath' => 'shop.tripple-oil-package',
            'image' => 'products/dummy/packages/tripple-oil-package.jpg'
        ]);

        //Preserved Truffle Package
        Products::create([
            'name' => 'Preserved Truffle Package',
            'category' => 'truffle-packages',
            'description' => '
            <b>*To offer the best quality we send extra truffles, in any case we send pieces or truffles.</b>
             </br></br>
             <b>*All prices are inclusive of VAT.</b>
             </br></br>
             <b>*It is shipped with a porexpan packaging designed to guarantee maximum quality, aroma and freshness, 
             without breaking the cold chain during the entire shipping process.</b>
             </br></br>
             This gift set contains three of our most luxurious preserved black truffle products; Minced Black Truffle (50g), 
             Black Truffle Slices (50g) and Black Truffle Sauce (Tartufata) (50g).  
             We slice & preserve our fresh truffles at the peak of the season, when they are at their most flavourful allowing you 
             to enjoy the incredible taste of truffle at any time of year.
            ',
            'price' => 100,
            'short_description' => 'Black, White Truffle Oil & Truffle Vinegar',
            'webPath' => 'shop.preserved-truffle-package',
            'image' => 'products/dummy/packages/preserved-truffles-package.jpg'
        ]);
    }
}
