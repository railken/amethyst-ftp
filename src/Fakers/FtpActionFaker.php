<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class FtpActionFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('ftp', FtpFaker::make()->parameters()->toArray());
        $bag->set('data_builder', DataBuilderFaker::make()->parameters()->toArray());
        $bag->set('class_name', \Railken\Amethyst\FtpActions\UploadSingleFileAction::class);

        return $bag;
    }
}
