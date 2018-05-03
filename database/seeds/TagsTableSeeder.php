<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = array('Glucose','Glucose intolerance','Hemoglobin A1c','Hyperglycemia','Insulin','Ketones','Lipohyertrophy','Macrovascular complications','Nephropathy','Pancreas','Protein','Retinopathy','Pre-diabetes',' Hypoglycemia
','Hyperglycemia','Diabetic ketoacidosis (DKA)');
        foreach ($tags as $tag){
            Tag::firstOrCreate(['title'=>$tag]);
        }
    }

}
