<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class Products{
    public static function getProduct($take = 100){
        $datas = collect([

            //1
           (object) [
               'thumbnail' => '/images/sano-gallery/organic-chicken.jpg',
               'title' => 'Organic Chicken',
               'description' => '
               <li> Improves immunity </li>
               <li> Reduces chances of cancer </li>
               <li> Improves heart health </li>
               <li> Improves sperm quality </li>
              ',

           ],
            //2
            // (object) [
            //     'thumbnail' => '/images/sano-gallery/scent-leaves-powder.jpg',
            //     'title' => 'Scent Leaves Powder',
            //     'description' => 'is a bright yellow-orange spice commonly used in curries and sauces. It comes from the turmeric root. The spice has been used for its medicinal, antioxidant, and anti-inflammatory properties.',
            // ],
             //3
           (object) [
            'thumbnail' => '/images/sano-gallery/sweet-basil-powder.jpg',
            'title' => 'Sweet Basil Powder',
            'description' => '<li> 	Boost the immune system  </li>
            <li>	Detoxifies the body: frees the body from toxins  </li>
            <li> 	Diabetes management: slows down the release of blood sugar  </li>
            ',
        ],
         //4
        //  (object) [
        //     'thumbnail' => '/images/sano-gallery/thyme-leaves.jpg',
        //     'title' => 'Thyme Leaves',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],
         //5
         (object) [
            'thumbnail' => '/images/sano-gallery/bread.jpg',
            'title' => 'OFSP Bread',
            'description' => '<li> 	Boost the immune system  </li>
            <li>  Treats stomach ulcers  </li>
            <li>  Controls diabetes  </li>
            <li>  Prevents Vitamin A deficiency </li>',
        ],
         
         //6
         (object) [
            'thumbnail' => '/images/sano-gallery/cookies.jpg',
            'title' => 'OFSP Cookies',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //7
        (object) [
            'thumbnail' => '/images/sano-gallery/chili-pepper-powder.jpg',
            'title' => 'Chili Pepper Powder',
            'description' => '<li> 	Boosts immunity </li>
            <li> 	Reduces severe headache  </li>
            <li> 	Natural pain relief</li>
            <li> 	Cardiovascular benefits </li>',
        ],

         //8
         (object) [
            'thumbnail' => '/images/sano-gallery/cupcake.jpg',
            'title' => 'Cup Cake',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //9
        (object) [
            'thumbnail' => '/images/sano-gallery/curry-powder.jpg',
            'title' => 'Curry Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //10
        (object) [
            'thumbnail' => '/images/sano-gallery/fried-rice-seasoning.jpg',
            'title' => 'Fried Rice Seasoning',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //11
        (object) [
            'thumbnail' => '/images/sano-gallery/pepper-soup-seasoning.jpg',
            'title' => 'Pepper Soup Seasoning',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //12
        (object) [
            'thumbnail' => '/images/sano-gallery/sano-thyme-leaves.jpg',
            'title' => 'Sano Thyme Leaves',
            'description' => '<li> 	Boosts immunity </li>
            <li> 	Lowers blood pressure  </li>
            <li> 	Treats sore throat and coughing </li>
            <li> 	Aids fresher breath: gets rid of bad breath </li>',
        ],

        //13
        (object) [
            'thumbnail' => '/images/sano-gallery/turmeric-powder.jpg',
            'title' => 'Turmeric Powder',
            'description' => '<li> Cancer prevention </li>
            <li> 	Boosts the immune system </li>
            <li> 	It gives a glowing and healthy skin </li>
            <li> 	Promotes heart and blood vessel health </li>',
        ],

        //14
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/all-in-one.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //15
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/chicken.jpg',
        //     'title' => ' Dressed Chicken',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //16
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-laps.jpg',
            'title' => ' Chicken Laps',
            'description' => '<li> Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Improves sperm quality </li>',
        ],

        //17
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-parts.jpg',
            'title' => ' 4 Parts Cut',
            'description' => '<li> Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Improves sperm quality </li>',
        ],

        //18
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-pieces.jpg',
            'title' => '8 Parts Cut',
            'description' => '<li> Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Improves sperm quality </li>
            ',
        ],

        //19
        (object) [
            'thumbnail' => '/images/sano-gallery/fresh-corn.jpg',
            'title' => 'Fresh Corn',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //20
        (object) [
            'thumbnail' => '/images/sano-gallery/fried-chicken.jpg',
            'title' => 'Grilled Chicken',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //21
        (object) [
            'thumbnail' => '/images/sano-gallery/garri.jpg',
            'title' => 'SANO Garri',
            'description' => '<li> Aids Digestion </li>
            <li> Improves Immune System </li>
            <li> Promotes Eye health </li>
            <li> Energizes and Cools the Body </li>',
        ],

        //22
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/hand-sanitizer.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //23
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-1.jpg',
            'title' => ' Fresh Scent Leaf ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //24
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-2.jpg',
            'title' => ' Fresh Mint Leaf',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //25
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-3.jpg',
            'title' => ' Fresh Sweet Basil ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //26
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-4.jpg',
            'title' => ' Fresh Lemongrass',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //27
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-liquid-soap.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //28
        (object) [
            'thumbnail' => '/images/sano-gallery/mango-juice.jpg',
            'title' => 'Lemongrass Mango Juice',
            'description' => '<li> 	Anti – stress: helps you relax better </li>
            <li> Protects your body against infection </li>
            <li> It gives a healthy skin </li>
            <li> It aids easy digestion </li>',
        ],

        //29
        (object) [
            'thumbnail' => '/images/sano-gallery/meat.jpg',
            'title' => 'Pork',
            'description' => '<li> Promotes joint and bone health </li>
            <li> Promotes heart and blood vessel health </li>
            <li> Lowers body temperature </li>
            <li> Improves sleep quality and promotes deeper / more restful sleep </li>',
        ],

        //30
        (object) [
            'thumbnail' => '/images/sano-gallery/ofsp-garri.jpg',
            'title' => 'OFSP Garri',
            'description' => '<li> 	Boosts immune system </li>
            <li> Treats stomach ulcers </li>
            <li> Protects your eyes from night blindness and age-related decline </li>
            <li> Prevents Vitamin A deficiency </li>',
        ],

        //31
        (object) [
            'thumbnail' => '/images/sano-gallery/pineapple-juice.jpg',
            'title' => 'Lemongrass Pineapple Juice',
            'description' => '<li> 	Anti – stress: helps you relax better </li>
            <li> Protects your body against infection </li>
            <li> It gives a healthy skin </li>
            <li> It aids easy digestion </li>',
        ],

        //32
        (object) [
            'thumbnail' => '/images/sano-gallery/snail.jpg',
            'title' => 'Snail',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //33
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-hand-sanitizer.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //34
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-handwash.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //35
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-hydrosol.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //36
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-liquid-soap.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        ])->take($take)->all();

        return $datas;
    }
}