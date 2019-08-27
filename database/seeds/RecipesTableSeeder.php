<?php

use App\Recipes;
use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Minced Turkey
        Recipes::create([
            'name' => 'Minced Turkey',
            'description' => '<b>Try something extra special this Thanksgiving</b>',
            'preparationTime' => 30,
            'cookingTime' => 10,
            'ingredients' => '<span>&#8226;</span> 5-6 kg Turkey </br>
                              <span>&#8226;</span> 250 g Butter </br>
                              <span>&#8226;</span> 400 g Onion </br>                            
                              <span>&#8226;</span> 8 tbs Mixed Herbs: Oregano, Thyme, Rosemary</br>                            
                              <span>&#8226;</span> 10–12 tsp Minced <a href="../shop/fresh-summer">Black Truffle</a> </br>                            
                              <span>&#8226;</span> 8 tbs Honey </br>',
            'method' => '
            <b>Step 1:</b> Pre heat oven to 200C. Start by making the stuffing, melting 170g of the butter in a
            heavy frying pan and adding the finely chopped onion and garlic. 
            Sweat gently over a low heat until translucent. 
            Add the chopped herbs and the Minced Black Truffle, setting aside to cool.
            </br></br>
            <b>Step 2:</b> Rinse the Turkey and remove any giblets, dry with kitchen paper towel. Place on a
            chopping board and now begin to stuff the
            bird by pushing the cooled mixture under the skin, in the breast and into the body cavity.
              </br></br>
            <b>Step 3:</b>   To make the glaze, melt the remaining butter in a saucepan over a low heat and stir
             in the White Truffle Honey. Place the Turkey, cavity side down into a roasting tray and coat in
             the glaze, loosely covering with aluminium tin foil. Roast for 3.5 – 4 hours, basting several
             times until golden. Remove the tin foil for the last 45 minutes to ensure the skin is crisp and
             golden.
            ',
            'webPath' => 'recipes.minced-turkey',
            'thumbImagePath' => 'recipes/minced-turkey.jpg',
            'image' => 'recipes/minced-turkey-header.jpg',
        ]);

        //Seared Scallops
        Recipes::create([
            'name' => 'Seared Scallops',
            'description' => '<b>A wonderful dish for entertaining.  Why not impress your guests not only with seared scallops but a marvellous truffle cauliflower and chorizo crumb. 
            Get ready for your Michelin Star!</b>',
            'preparationTime' => 30,
            'cookingTime' => 15,
            'ingredients' => '<span>&#8226;</span> 12 live scallops </br>
                              <span>&#8226;</span> 1 tbs clarified butter </br>
                              <span>&#8226;</span> Cauliflower Puree </br>                            
                              <span>&#8226;</span> 100ml whole milk</br>                            
                              <span>&#8226;</span> 25g butter</br>                            
                              <span>&#8226;</span> 250g cauliflower, roughly chopped</br>                            
                              <span>&#8226;</span> Maldon sea salt</br>                            
                              <span>&#8226;</span> 12 Slices of <a href="../shop/fresh-summer">Black Truffle</a> </br>                            
                              <span>&#8226;</span> 8 tbs Honey </br>,
                              <span>&#8226;</span> 2 tbs <a href="../shop/white-truffle-oil">White Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b> Begin by preparing the scallops. Once opened, remove the muscle and discard the roe. 
            Clean under running water, pat dry and keep cool in the refrigerator.
            </br></br>
            <b>Step 2:</b> For the crumb, remove the chorizo from its outer skin and blitz in a blender. Add the breadcrumbs, 
            anchovies and lemon zest, pulsing to combine. Melt the butter in a frying pan and toss the mixture until coated. 
            Fry over a moderate heat until it starts to crisp but not brown. Drain onto kitchen paper and set aside.
            </br></br>
            <b>Step 3:</b>   For the cauliflower puree, melt the butter in a pan and once foaming, add the cauliflower and coat in butter. 
            Add the milk and salt, cooking on a moderate heat until tender.
            In a blender, together with the milk blend to a smooth puree. Add 2 tablespoons of White Truffle Oil. Set aside in a saucepan and keep warm.
            </br></br>
            <b>Step 4:</b> Over a high heat, add the clarified butter to a heavy cast iron skillet or frying pan. Season the scallops on both sides and add to the pan once smoking. 
            Sear the scallops for approximately 1 ½ minutes per side.
            </br></br>
            <b>Step 5:</b>To serve spoon the cauliflower puree onto the middle of the plate, top with scallops and Black Truffle Slices, scattering with chorizo crumb. Garnish with watercress or micro greens.
            ',
            'webPath' => 'recipes.seared-scallops',
            'thumbImagePath' => 'recipes/seared-scallops.jpg',
            'image' => 'recipes/seared-scallops.jpg',
        ]);

        //Ribeye With Truffles
        Recipes::create([
            'name' => 'Ribeye With Truffles',
            'description' => '<b>A fantstic dish for your friends!</b>',
            'preparationTime' => 30,
            'cookingTime' => 15,
            'ingredients' => '<span>&#8226;</span> 10 ml ground espresso coffee beans </br>
                              <span>&#8226;</span> 10 ml coriander seeds </br>
                              <span>&#8226;</span> 5 ml garlic salt </br>                            
                              <span>&#8226;</span> 5 ml barbeque spice</br>                            
                              <span>&#8226;</span> 5 ml coarse salt</br>                            
                              <span>&#8226;</span> 5 ml black peppercorns</br>                            
                              <span>&#8226;</span> 5 ml treacle sugar</br>                            
                              <span>&#8226;</span> 12 Slices of <a href="../shop/fresh-summer">Black Truffle</a> </br>                            
                              <span>&#8226;</span> 2 x 300 g (bone-in) rib eye steaks, about 4 cm thick </br>,
                              <span>&#8226;</span> 15 ml <a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b> Grind all of the ingredients for the spice rub together using a mortar and pestle.
            Generously rub the steaks with the spice rub mix and allow to stand for at least 30 minutes, or overnight if possible. 
            If the steaks have a rind of fat, be sure to score to prevent curling in the pan.
            </br>
            In a large heavy-based frying pan, heat the butter and oil until bubbling. Tie the herbs together with the kitchen string to form a ‘brush’ and add to the bubbling fat.
            Over high heat, render the fat on each steak by standing upright in the pan, then allow the steaks to brown for a minute or two on each size until nicely caramelised.      
            </br></br>
            <b>Step 2:</b> In the same frying pan, add the butter, cognac and garlic to the pan juices and simmer until reduced by half. 
            Add the cream and simmer gently until the cream has thickened, it should coat a wooden spoon. 
            </br>
            Stir in the truffle oil and mix until well combined – heat through for a few seconds.
            Season to taste – use with restraint however, because there will be a lot of flavour and seasoning from the rub in the pan juices.
            Serve the steaks with generous amounts of sauce.
            Delicious served with crispy fries or green beans.',
            'webPath' => 'recipes.ribeye-with-truffle',
            'thumbImagePath' => 'recipes/ribeye-with-truffle-header.jpg',
            'image' => 'recipes/ribeye-with-truffle.jpg',
        ]);

        //Truffle Gravy
        Recipes::create([
            'name' => 'Truffle Gravy',
            'description' => '<b>When we talk about gravy at, we mean real gravy. Thick and rich with lots of aromatic black truffle. 
            Luxurious enough for your next dinner party, comforting enough for your next Wednesday night, sausage dinner. 
            Our recipe is made in a saucepan but it can also be made in the bottom of your roasting tray, filled with the juices from your latest roast.</b>',
            'preparationTime' => 15,
            'cookingTime' => 30,
            'ingredients' => '<span>&#8226;</span> One glass of red wine </br>
                              <span>&#8226;</span> 1 litre of meat or vegetable stock </br>                                                    
                              <span>&#8226;</span> 3 Slices of <a href="../shop/fresh-summer">Black Truffle</a> </br>                            
                              <span>&#8226;</span> One tablespoon of good quality gravy granules </br>,
                              <span>&#8226;</span> 25 g cold butter</a></br>',
            'method' => '
            <b>Step 1:</b> Apply heat to saucepan (or roasting tray). Pour in the glass of red wine and reduce it by two thirds. 
            Poor in your stock and reduce again by two thirds. The sauce will begin to thicken.
            </br></br>
            <b>Step 2:</b> Add the tablespoon of gravy granules and remove from the heat, the rich gravy should now coat the back of a spoon.
            </br></br>
            <b>Step 3:</b>   For richness, vigorously stir the cold butter into the gravy until melted. Fold in the heaped teaspoon of Minced Black Truffle.
            </br></br>
            <b>Step 4:</b> Pour over everything.
            </br></br>
            <b>Step 5:</b>To serve spoon the cauliflower puree onto the middle of the plate, top with scallops and Black Truffle Slices, scattering with chorizo crumb. Garnish with watercress or micro greens.
            ',
            'webPath' => 'recipes.truffle-gravy',
            'thumbImagePath' => 'recipes/truffle-gravy.jpg',
            'image' => 'recipes/truffle-gravy.jpg',
        ]);

        //Truffle Potatoes
        Recipes::create([
            'name' => 'Truffle Potatoes',
            'description' => '<b>Enjoy the taste of truffle with this simple recipe.  We choose leek and bacon for these delicious filled potato skins, 
            simply leave out the bacon for a vegetarian option or adapt this recipe to your choice of filling. 
            Just remember to add Truffle Oil for that extra special truffle taste.</b>',
            'preparationTime' => 10,
            'cookingTime' => 45 ,
            'ingredients' => '<span>&#8226;</span> 2 Baking Potatoes </br>
                              <span>&#8226;</span> Olive Oil </br>
                              <span>&#8226;</span> Sea Salt </br>                            
                              <span>&#8226;</span> 1 Leek, halved lengthways and sliced</br>                            
                              <span>&#8226;</span> 2 Rashers of bacon, cut into strips</br>                            
                              <span>&#8226;</span> 75g Grated Cheddar Cheese</br>                            
                              <span>&#8226;</span> 25g Butter</br>                                                       
                              <span>&#8226;</span> 1 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b>  Set the oven to 200C. Prick the potatoes all over with a fork, rubbing in olive oil and salt and bake for 30 minutes. 
            Meanwhile, fry the bacon, adding the leaks and stir over a moderate heat until cooked.
            </br></br>
            <b>Step 2:</b> Once the potatoes have softened, remove from the oven, cool and split in half to scoop out the centre. 
            Lay the empty skins cut side up and back onto the baking tray.
            </br></br>
            <b>Step 3:</b> Mix the potato filling with the leek and bacon, adding butter, crème fraiche and the Black Truffle Oil. 
            Adjust the seasoning with salt and fill the potato skins with the mixture. 
            Finally, scatter the filled potatoes with cheese and pop under the grill for 5-10 minutes or until the cheese has melted. Delicious!',
            'webPath' => 'recipes.truffle-potatoes',
            'thumbImagePath' => 'recipes/truffle-potatoes-header.jpg',
            'image' => 'recipes/truffle-potatoes-header.jpg',
        ]);

        //Truffle Eggs
        Recipes::create([
            'name' => 'Truffle Eggs',
            'description' => '<b>This is an old favourite from childhood and tastes so much better than the bought imitations. 
            Served with our Black Truffle Mustard made with rich black Truffles this is one seriously good recipe.</b>',
            'preparationTime' => 30,
            'cookingTime' => 10,
            'ingredients' => '<span>&#8226;</span> 4 eggs </br>
                              <span>&#8226;</span> 240g sausage meat </br>
                              <span>&#8226;</span> Sea Salt </br>                            
                              <span>&#8226;</span> 1 tsp chopped sage</br>                            
                              <span>&#8226;</span> 1 tsp chopped thyme</br>                            
                              <span>&#8226;</span> 100g homemade breadcrumbs </br>                            
                              <span>&#8226;</span> 1 egg, beaten</br>                                                       
                              <span>&#8226;</span> 1 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b>  Bring a pan of salted water to a rolling boil and then add two whole eggs. After 6 minutes remove the eggs with a slotted spoon, plunging them into a bowl of iced water. 
            Once the eggs are cool, peel and set aside.
            </br></br>
            <b>Step 2:</b> Remove the sausages from their skins and mix together the meat in a bowl with the salt, mustard and chopped herbs.
            </br></br>
            <b>Step 3:</b> Divide the sausage mixture equally (approx. 60g per egg) and cover the eggs completely and evenly. Put the flour, beaten egg and breadcrumbs into three separate bowls. 
            Dust each egg with flour, then the beaten egg and finally coat evenly in breadcrumbs. Set aside until all the eggs have been done.
             </br></br>
            <b>Step 4:</b> Heat the oil to approx. 160C (using a temperature thermometer) in a heavy saucepan. Note that hot oil is extremely dangerous so be careful not to overheat. 
                Lower the eggs gently with a slotted spoon and fry for 8-10 minutes until golden and crispy. Drain on kitchen paper and serve immediately with Black Truffle Mustard.
            ',
            'webPath' => 'recipes.truffle-eggs',
            'thumbImagePath' => 'recipes/truffle-eggs.jpg',
            'image' => 'recipes/truffle-eggs.jpg',
        ]);

        //Truffle Sausages
        Recipes::create([
            'name' => 'Truffle Sausages',
            'description' => '<b>This is a twist on a quick and simple dish enjoyed at parties.  
            Next time you are hosting a party treat your guests to the taste of Truffles and wow them with sausages coated in Black Truffle Mustard and Honey.</b>',
            'preparationTime' => 10,
            'cookingTime' => 25,
            'ingredients' => '<span>&#8226;</span> 12 Uncooked Cocktail Sausages </br>
                              <span>&#8226;</span> 1tbs Olive oil </br>                                                                            
                              <span>&#8226;</span> 2 tbs <a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b>  Preheat the oven to 180C. In a bowl, mix together the sausages and olive oil and roast for 20 minutes. Meanwhile mix the Black Truffle and pour over the sausages, returning to the oven for a further 5 minutes. 
            Serve immediately.
            </br></br>
            <b>Step 2:</b> Remove the sausages from their skins and mix together the meat in a bowl with the salt, mustard and chopped herbs.
            </br></br>
            <b>Step 3:</b> Divide the sausage mixture equally (approx. 60g per egg) and cover the eggs completely and evenly. Put the flour, beaten egg and breadcrumbs into three separate bowls. 
            Dust each egg with flour, then the beaten egg and finally coat evenly in breadcrumbs. Set aside until all the eggs have been done.
            </br></br>
            <b>Step 4:</b> Heat the oil to approx. 160C (using a temperature thermometer) in a heavy saucepan. Note that hot oil is extremely dangerous so be careful not to overheat. 
                Lower the eggs gently with a slotted spoon and fry for 8-10 minutes until golden and crispy. Drain on kitchen paper and serve immediately with Black Truffle Mustard.
            ',
            'webPath' => 'recipes.truffle-sausages',
            'thumbImagePath' => 'recipes/truffle-sausages.jpg',
            'image' => 'recipes/truffle-sausages.jpg',
        ]);

        //Truffle Risotto
        Recipes::create([
            'name' => 'Truffle Risotto',
            'description' => '<b>This recipe has a real wow factor. The Black Truffle matches superbly with the wild mushrooms. 
            A simple but elegant dish with wonderful flavours. Sufficient quantity to make a starter for 4 persons.</b>',
            'preparationTime' => 30,
            'cookingTime' => 10,
            'ingredients' => '<span>&#8226;</span> 180 grams Carnaroli or Arborio rice </br>
                              <span>&#8226;</span> 250 grams mixed Wild Mushrooms, sliced into large pieces </br>
                              <span>&#8226;</span> 1 litre of Vegetable stock </br>                            
                              <span>&#8226;</span> 1 small onion, chopped very fine</br>                            
                              <span>&#8226;</span> 1 tbsp Extra Virgin Olive Oil</br>                            
                              <span>&#8226;</span> 250ml (1 cup) dry white wine </br>                            
                              <span>&#8226;</span> 40 g finely grated Parmesan or Grana Padano </br>                            
                              <span>&#8226;</span> 40 g <a href="../shop/black-truffle-oil">Black Truffle</a>, diced</br>                                                       
                              <span>&#8226;</span> 1 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b>  Using a fine cheese grater, grate the cheese, and dice the butter.  
            Set aside. Bring a small saucepan to the boil with the vegetable stock and keep on slow simmer. 
            Meanwhile using a heavy based flat bottomed pan on a gentle heat, saute the onion in the Olive oil until translucent. 
             the rice to the onion and heat through until all grains are hot and coated in oil.  Take care not to brown the onion.
            </br></br>
            <b>Step 2:</b> Turn up the heat slightly and add 1 cup of wine to the rice, stir every 30 seconds or so until the liquid is almost dissolved. 
            Then add 1 cup of hot stock, again stir the rice occasionally until the liquid is almost dissolved.
            </br></br>
            <b>Step 3:</b> After approx. 5 minutes of cooking the rice add the Wild Mushrooms.  Keep adding small quantities of stock, stirring as above until the rice is cooked. 
            This will take approx. 15 minutes from adding 1st cup of wine. Rice should be al dente, not too runny, but moist with no excess liquid remaining.
             </br></br>
            <b>Step 4:</b> When the rice is cooked, turn off the heat, and add the grated cheese, diced butter and Black Truffle Oil.  
            Quickly beat into the risotto until you get a creamy finish. Leave for 1 minute and serve.
            ',
            'webPath' => 'recipes.truffle-risotto',
            'thumbImagePath' => 'recipes/mushroom-risotto.jpg',
            'image' => 'recipes/truffle-risotto-header.jpg',
        ]);

        //Kale With Truffle
        Recipes::create([
            'name' => 'Kale With Truffle',
            'description' => '<b>A lovely hearty truffle recipe to keep you warm on winter nights in, enjoy this as a family or treat your guests to the taste of truffle.</b>',
            'preparationTime' => 30,
            'cookingTime' => 30,
            'ingredients' => '<span>&#8226;</span> 2 tbs Olive Oil </br>
                              <span>&#8226;</span> 300g Chicken Breasts </br>
                              <span>&#8226;</span> Sea Salt </br>                            
                              <span>&#8226;</span> 100g Lardons</br>                            
                              <span>&#8226;</span> 250g Button Mushrooms</br>                            
                              <span>&#8226;</span> 1 Onion Diced </br>                            
                              <span>&#8226;</span> 2 Cloves of Garlic </br>                            
                              <span>&#8226;</span> 300ml Stock</br>                                                       
                              <span>&#8226;</span> 2 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b>  Heat the olive oil in a heavy bottomed saucepan, over a medium heat. Slice the chicken into 3cm pieces, seasoning generously with sea salt and fry each side until golden brown.
            </br></br>
            <b>Step 2:</b> Remove the chicken with a slotted spoon and add the mushrooms and lardons to the saucepan, frying until they have changed colour. Remove and set aside with the chicken.
            </br></br>
            <b>Step 3:</b> Over a lower heat, melt the butter and stir in the flour to make a roux. Allow to cook for a few minutes, whisking continuously and gradually add the stock, followed by the cream.
             </br></br>
            <b>Step 4:</b> Return the chicken, mushrooms and lardons to the pan, stirring into the creamy sauce. 
            Add the Black Truffle Oil and finally the kale, stirring and allowing to cook for 2 – 3 minutes. Check the seasoning, adjust accordingly
            </br></br>
            <b>Step 5:</b> Heat the oven to 220C. On a floured surface, roll the pastry out thinly and cover the pie, tucking the sides into the dish. 
            With a pastry brush, coat the surface with the beaten egg. Bake for 30 minutes, until the pastry is crispy and golden.
            ',
            'webPath' => 'recipes.kale-with-truffle',
            'thumbImagePath' => 'recipes/kale-with-truffle-header.jpg',
            'image' => 'recipes/kale-with-truffle.jpg',
        ]);

        //Truffle French Fries
        Recipes::create([
            'name' => 'Truffle French Fries',
            'description' => '<b>This recipe has a real wow factor. The Black Truffle matches superbly with the wild mushrooms. 
            A simple but elegant dish with wonderful flavours. Sufficient quantity to make a starter for 4 persons.</b>',
            'preparationTime' => 10,
            'cookingTime' => 10,
            'ingredients' => '<span>&#8226;</span> 800g (1lb 8oz) maris piper potatoes</br>
                              <span>&#8226;</span> 1 tbs salt </br>
                              <span>&#8226;</span> Chopped rosemary </br>                                                                                 
                              <span>&#8226;</span> 4 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b> Pre-heat the oven to 200C (400F). Peel the potatoes, cut in half (or quarters if large) and set aside in cold water.
            </br></br>
            <b>Step 2:</b> Bring a pan of water to a rolling boil, adding 1 tablespoon of salt. Add the potatoes and simmer for 10 minutes.
            </br></br>
            <b>Step 3:</b> Meanwhile add the Truffle Oil to the roasting tin so it covers the surface in a thin layer and heat in the oven for 10 minutes.
             </br></br>
            <b>Step 4:</b> Drain the potatoes into a colander, gently shaking excess water out.
            ',
            'webPath' => 'recipes.truffle-french-fries',
            'thumbImagePath' => 'recipes/truffle-french-fries-header.jpg',
            'image' => 'recipes/truffle-french-fries.jpg',
        ]);

        //Egg Toeast With Truffles
        Recipes::create([
            'name' => 'Egg Toeast With Truffles',
            'description' => '<b>A simple but elegant dish with wonderful flavours.</b>',
            'preparationTime' => 30,
            'cookingTime' => 10,
            'ingredients' => '<span>&#8226;</span> 1 x 3cm/1¼in thick slice of crusty white bread </br>
                              <span>&#8226;</span> 80g/2¾oz fontina cheese grated </br>
                              <span>&#8226;</span> flaky sea salt and black pepper </br>                            
                              <span>&#8226;</span> 1 small onion, chopped very fine</br>                                                                                                         
                              <span>&#8226;</span> 1 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b> Pre-heat the oven to 200C (400F). Peel the potatoes, cut in half (or quarters if large) and set aside in cold water.  
            </br></br>
            <b>Step 2:</b> Lightly toast the bread on both sides
            </br></br>
            <b>Step 3:</b> Put the bread on a tray. Use a very sharp knife to carefully cut a shallow well into the centre of the bread, about a 5cm/2in square. 
            To do this cut the edges and push down the centre. 
            Remember this is a well not a hole. It is important that you don’t cut all the way through!
             </br></br>
            <b>Step 4:</b> Distribute the fontina evenly around the rim of the well
            </br></br>
            <b>Step 5:</b> Mix the yolks together with the Black Truffle Oil and pour them into the well then bake for 3-5 minutes until the cheese melts.
            </br></br>
            <b>Step 6:</b> Take the toast out and give the yolk a little stir then sprinkle with salt and pepper. Eat immediately
            ',
            'webPath' => 'recipes.egg-toeast-with-truffles',
            'thumbImagePath' => 'recipes/egg-toeast-with-truffles-header.jpg',
            'image' => 'recipes/egg-toeast-with-truffles.jpg',
        ]);

        //Truffle Bacon Sandwich
        Recipes::create([
            'name' => 'Truffle Bacon Sandwich',
            'description' => '<b>The bread must be white, chewy and a little sour, the bacon must be thickly cut and smoked, 
            the cheese must be sweet and nutty and most importantly the tomato ketchup must be loaded with black summer truffles!</b>',
            'preparationTime' => 30,
            'cookingTime' => 30,
            'ingredients' => '<span>&#8226;</span> White sourdough loaf </br>
                              <span>&#8226;</span> 3 rashers of smoked back bacon </br>
                              <span>&#8226;</span> Gruyere cheese </br>                            
                              <span>&#8226;</span> Buttere</br>                                                                              
                              <span>&#8226;</span> 1 tbs<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b> Cut your sourdough bread into slices. We prefer a thickness of around 1cm, the trick is not to cut it too thin, or thick.
            </br></br>
            <b>Step 2:</b> We prefer to grill our back bacon until the fat crisps and renders and the bacon starts to curl. 
            Be careful, you want crispy fat but you don’t want to dry the bacon out too much. 
            To achieve this preheat the grill on the highest setting possible before putting your bacon under it.
            </br></br>
            <b>Step 3:</b> Slice the Gruyere cheese and butter your bread in anticipation of it meeting the hot, crispy bacon. 
            Smother one side of the bread with TruffleHunter’s Black Truffle Ketchup.   On the other side of the bread, layer the bacon 
            first so the butter starts to slightly melt under the heat of the crispy bacon. 
            We like to ‘top and tail’ our bacon, so that each slice has a bite of the crispy top end of bacon rasher and the meaty bottom end.
             </br></br>
            <b>Step 4:</b> Layer the cheese on top, close the sandwich, slice down the middle. Enjoy at breakfast, lunch and dinner!
            ',
            'webPath' => 'recipes.bacon-sandwich-and-truffle-sauce',
            'thumbImagePath' => 'recipes/truffle-bacon-sandwich-header.jpg',
            'image' => 'recipes/truffle-bacon-sandwich.jpg',
        ]);

        //Burger With Truffles
        Recipes::create([
            'name' => 'Burger With Truffles',
            'description' => '<b>Homemade Burgers. Everyone has their own secret ingredient. We make no secret of ours! Black Truffle Mustard. 
            We fold it into the meat and we smother it on our buns. It’s a little bit of luxury, handmade by you for everyday living.</b>',
            'preparationTime' => 30,
            'cookingTime' => 30,
            'ingredients' => '<span>&#8226;</span> Two finely diced cloves of garlic </br>
                              <span>&#8226;</span> One tablespoon of olive oil </br>
                              <span>&#8226;</span> One tablespoon of chopped parsley </br>                            
                              <span>&#8226;</span> One tablespoon of flaked sea salt </br>                            
                              <span>&#8226;</span> One teaspoon of cracked black pepper</br>                            
                              <span>&#8226;</span> 500g of quality minced beef </br>                            
                              <span>&#8226;</span> Four quality burger buns </br>                            
                              <span>&#8226;</span> A handful of mixed salad leaves</br>                                                       
                              <span>&#8226;</span> Three and a half, heaped tablespoons of<a href="../shop/black-truffle-oil">Black Truffle Oil</a></br>',
            'method' => '
            <b>Step 1:</b>  In a large bowl mix the minced beef, three heaped teaspoons of Black Truffle Mustard, garlic, parsley, salt, and pepper.
            </br></br>
            <b>Step 2:</b> Mix thoroughly and divide into four even sized balls, pat each ball into a flat, round shape about 2cm thick.
            </br></br>
            <b>Step 3:</b> To cook the burgers, heat a frying pan until it starts to smoke and drizzle the olive oil over both sides of the patties.   
            ook the burgers in batches for four minutes either side, only turning when necessary.
             </br></br>
            <b>Step 4:</b> Halve the burger buns and lightly toast under a preheated grill. 
            Place the salad leaves onto the bottom half of the toasted bun, smother the top half of the bun with the remaining Black Truffle Oil and place the cooked patty in the bun. 
            Serve and enjoy.
            ',
            'webPath' => 'recipes.burger-with-truffles',
            'thumbImagePath' => 'recipes/burger-with-truffles-header.jpg',
            'image' => 'recipes/burger-with-truffles.jpg',
        ]);
    }
}
