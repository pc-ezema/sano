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

        ])->all();

        return $datas;
    }
}