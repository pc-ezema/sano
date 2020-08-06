<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class Products{
    public static function getProduct(){
        $datas = collect([

            //1
           (object) [
               'thumbnail' => '/images/sano-gallery/organic-chicken.jpg',
               'title' => 'Organic Chicken',
               'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
               incididunt ut labore et dolore magna aliqua',

           ],
            //2
            (object) [
                'thumbnail' => '/images/sano-gallery/scent-leaves-powder.jpg',
                'title' => 'Scent Leaves Powder',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.',
            ],
             //3
           (object) [
            'thumbnail' => '/images/sano-gallery/sweet-basil-powder.jpg',
            'title' => 'Sweet Basil Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],
         //4
         (object) [
            'thumbnail' => '/images/sano-gallery/thyme-leaves.jpg',
            'title' => 'Thyme Leaves',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],
         //5
         (object) [
            'thumbnail' => '/images/sano-gallery/bread.jpg',
            'title' => 'OFSP Bread',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //13
        (object) [
            'thumbnail' => '/images/sano-gallery/turmeric-powder.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //14
        (object) [
            'thumbnail' => '/images/sano-gallery/all-in-one.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //15
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //16
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-laps.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //17
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-parts.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //18
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-pieces.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //19
        (object) [
            'thumbnail' => '/images/sano-gallery/fresh-corn.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //20
        (object) [
            'thumbnail' => '/images/sano-gallery/fried-chicken.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //21
        (object) [
            'thumbnail' => '/images/sano-gallery/garri.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //22
        (object) [
            'thumbnail' => '/images/sano-gallery/hand-sanitizer.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //23
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-1.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //24
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-2.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //25
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-3.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //26
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-4.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //27
        (object) [
            'thumbnail' => '/images/sano-gallery/lemongrass-liquid-soap.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //28
        (object) [
            'thumbnail' => '/images/sano-gallery/mango-juice.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //29
        (object) [
            'thumbnail' => '/images/sano-gallery/meat.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //30
        (object) [
            'thumbnail' => '/images/sano-gallery/ofsp-garri.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //31
        (object) [
            'thumbnail' => '/images/sano-gallery/pineapple-juice.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //32
        (object) [
            'thumbnail' => '/images/sano-gallery/snail.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //33
        (object) [
            'thumbnail' => '/images/sano-gallery/lemongrass-hand-sanitizer.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //34
        (object) [
            'thumbnail' => '/images/sano-gallery/lemongrass-handwash.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //35
        (object) [
            'thumbnail' => '/images/sano-gallery/lemongrass-hydrosol.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        //36
        (object) [
            'thumbnail' => '/images/sano-gallery/lemongrass-liquid-soap.jpg',
            'title' => 'Turmeric Powder',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.',
        ],

        ])->all();

        return $datas;
    }
}