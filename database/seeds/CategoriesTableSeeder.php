<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $node = Category::create(
            [
                'title'=>'PreDiabetes',
                'description'=>'Prediabetes, also commonly referred to as borderline diabetes, is a metabolic condition and growing global problem that is closely tied to obesity.',
                'summary'=>'Prediabetes, also commonly referred to as borderline diabetes, is a metabolic condition and growing global problem that is closely tied to obesity.',
                'meta_keywords'=>'PreDiabetes'

            ]
        );$node = Category::create(
            [
                'title'=>'Type-1',
                'description'=>'Type 1 diabetes is an autoimmune disease that causes the insulin producing beta cells in the pancreas to be destroyed, preventing the body from being able to produce enough insulin to adequately regulate blood glucose levels.',
                'summary'=>'Type 1 diabetes is an autoimmune disease that causes the insulin producing beta cells in the pancreas to be destroyed, preventing the body from being able to produce enough insulin to adequately regulate blood glucose levels.',
                'meta_keywords'=>'Diabetes,Type-1 Diabetes'
            ]
        );$node = Category::create(
            [
                'title'=>'Type-2',
                'description'=>'Type 2 diabetes mellitus is a metabolic disorder that results in hyperglycemia (high blood glucose levels) due to the body:Being ineffective at using the insulin it has produced; also known as insulin resistance and/or Being unable to produce enough insulin',
                'summary'=>'Type 2 diabetes mellitus is a metabolic disorder that results in hyperglycemia (high blood glucose levels) due to the body:Being ineffective at using the insulin it has produced; also known as insulin resistance and/or Being unable to produce enough insulin',

                'meta_keywords'=>'Type-2, Type2, Type-2 Diabetes'
            ]
        );$node = Category::create(
            [
                'title'=>'Food+Recipes',
                'description'=>'Learning about food is one of the best ways to control type 2 diabetes, but eating a healthy diet can benefit all people with diabetes.',
                'summary'=>'Learning about food is one of the best ways to control type 2 diabetes, but eating a healthy diet can benefit all people with diabetes.',
                'meta_keywords'=>'Food,Type-2, Type-1',
                'children'=>[
                    ['title'=>'Food + Drink',
                        'description'=>'Learning about food is one of the best ways to control type 2 diabetes, but eating a healthy diet can benefit all people with diabetes.',
                        'summary'=>'Learning about food is one of the best ways to control type 2 diabetes, but eating a healthy diet can benefit all people with diabetes.',
                        'meta_keywords'=>'',],
                    ['title'=>'Food + Diet Guides',
                        'description'=>'Effective management of diabetes cannot be achieved without an appropriate diet.',
                        'summary'=>'Effective management of diabetes cannot be achieved without an appropriate diet.',
                        'meta_keywords'=>'Food + Diet Guides',],
                    ['title'=>'Nutrition',
                        'description'=>'Nutrition is a critical part of diabetes care. Balancing the right amount of carbohydrates, fat, protein along with fibre, vitamins and minerals helps us to maintain a healthy diet and a healthy lifestyle.',
                        'summary'=>'Nutrition is a critical part of diabetes care. Balancing the right amount of carbohydrates, fat, protein along with fibre, vitamins and minerals helps us to maintain a healthy diet and a healthy lifestyle.',
                        'meta_keywords'=>'Nutrition',],
                ]
            ]
        );$node = Category::create(
            [
                'title'=>'Living With Diabetes',
                'description'=>'Living with diabetes can be challenging, but you can still lead a near normal life. Diet and lifestyle are key components in living healthily with diabetes.',
                'summary'=>'Living with diabetes can be challenging, but you can still lead a near normal life. Diet and lifestyle are key components in living healthily with diabetes.',
                'meta_keywords'=>'Living with diabetes can be challenging, but you can still lead a near normal life. Diet and lifestyle are key components in living healthily with diabetes.',
                'children'=>[
                    [
                        'title'=>'Blood Glucose',
                        'description'=>'Blood glucose and blood sugar are interchangeable terms, and both are crucial to the health of the body; especially for people with diabetes.',
                        'summary'=>'Blood glucose and blood sugar are interchangeable terms, and both are crucial to the health of the body; especially for people with diabetes.',
                        'meta_keywords'=>'Blood Glucose',
                    ],[
                        'title'=>'Driving And Diabetes',
                        'description'=>'Driving And Diabetes',
                        'summary'=>'',
                        'meta_keywords'=>'Driving And Diabetes',
                    ],[
                        'title'=>'Emotions',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Emotions',
                    ],[
                        'title'=>'Employment & Benefits',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Employment & Benefits',
                    ],[
                        'title'=>'Exercise & Fitness',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Exercise & Fitness',
                    ],[
                        'title'=>'Pregnancy',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Pregnancy',
                    ],[
                        'title'=>'Sex',
                        'description'=>'Sex',
                        'summary'=>'',
                        'meta_keywords'=>'Sex',
                    ],[
                        'title'=>'Travel',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Travel',
                    ],[
                        'title'=>'Managing Diabetes',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Managing Diabetes',
                    ],[
                        'title'=>'Tools',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Tools',
                    ],
                ]
            ]
        );$node = Category::create(
            [
                'title'=>'Treatment',
                'description'=>'Successful treatment makes all the difference to long-term health, and achieving balanced diabetes treatment can be the key to living with both type 1 and type 2 diabetes.',
                'summary'=>'Successful treatment makes all the difference to long-term health, and achieving balanced diabetes treatment can be the key to living with both type 1 and type 2 diabetes.',
                'meta_keywords'=>'treatment, type-1 diabetes treatment',
                'children'=>[
                    [
                        'title'=>'Low Carb',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Low Carb',
                    ],[
                        'title'=>'Keto Diet',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Keto Diet',
                    ],[
                        'title'=>'Diabetes Drugs',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Diabetes Drugs',
                    ],[
                        'title'=>'Insulin',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Insulin',
                    ],[
                        'title'=>'Insulin Pumps',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Insulin Pumps',
                    ],[
                        'title'=>'Medication',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Medication',
                    ],[
                        'title'=>'Weight Loss',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Weight Loss',
                    ],[
                        'title'=>'Research',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Research',
                    ],
                ]
            ]
        );$node = Category::create(
            [
                'title'=>'Complications',
                'description'=>'Uncontrolled diabetes can lead to a number of short and long-term health complications, including hypoglycemia, heart disease, nerve damage and amputation, and vision problems.',
                'summary'=>'Uncontrolled diabetes can lead to a number of short and long-term health complications, including hypoglycemia, heart disease, nerve damage and amputation, and vision problems.',
                'meta_keywords'=>'',
                'children'=>[
                    [
                        'title'=>'Short Term Complications',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Complications',
                    ],[
                        'title'=>'Long Term Complications',
                        'description'=>'Long Term Complications',
                        'summary'=>'',
                        'meta_keywords'=>'Long Term Complications',
                    ],[
                        'title'=>'Embarrassing Conditions',
                        'description'=>'',
                        'summary'=>'',
                        'meta_keywords'=>'Embarrassing Conditions',
                    ],
                ]
            ]
        );
    }
}
