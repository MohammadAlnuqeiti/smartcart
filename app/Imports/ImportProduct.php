<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Maatwebsite\Excel\Validators\Failure;


//heading row not handled please refer to the link:- https://docs.laravel-excel.com/3.1/imports/heading-row.html
class ImportProduct implements ToModel ,
WithHeadingRow ,
SkipsEmptyRows,
WithValidation ,
SkipsOnFailure ,
WithBatchInserts ,
WithChunkReading

{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $merchant;
    public $lang=['en' , 'ar'];
    public function  __construct( $merchant)
    {
        $this->merchant = $merchant;
    }
    public function model(array $row )
    {


        $ar_to_en = new GoogleTranslate('en', 'ar');
        $en_to_ar = new GoogleTranslate('ar', 'en');

        $data = Product::where('product_number',$row['number'])->where('merchant_id',$this->merchant)->first();
        if($data){
            if($data->price != $row['price']){
                //will update all existing products in excel sheet need to preform update only if the price is changed.
                $data->price=$row['price'];
                $data->save();
            }
        }else{

			/*
			sample code of creating new product

			$product = new Product();
			$product->is_active = false;
			$product->is_featuer = false;
			$product->price = $request->price;
			$product->save();

            if (!empty($product)) {
				// create translation using package Astrotomic/laravel-translatable
                foreach ($this->lang as $lang) {
                    $product->translateOrNew($lang['code'])->title = trim($request->get('title_' . $lang['code']));
                    $product->translateOrNew($lang['code'])->description = trim($request->get('description_' . $lang['code']));
                    $product->save();
                }
            }


			*/
            $product = new Product();
			$product->product_number = trim($row['number']);
			$product->is_active = 0;
			$product->is_featuer = 0;
			$product->merchant_id = $this->merchant;
			$product->product_descount = trim($row['discount']);
			$product->price = trim($row['price']);
            $product->translateOrNew('ar')->title = trim($row['name']);
            // $product->translateOrNew('ar')->title = $en_to_ar->translate(trim($row['name']));
            $product->translateOrNew('en')->title = $ar_to_en->translate(trim($row['name']));
			$product->save();

            // if (!empty($product)) {
			// 	// create translation using package Astrotomic/laravel-translatable
            //     foreach ($this->lang as $lang) {
            //         $product->translateOrNew($lang['code'])->title = trim($request->get('title_' . $lang['code']));
            //         $product->translateOrNew($lang['code'])->description = trim($request->get('description_' . $lang['code']));
            //         $product->save();
            //     }
            // }

        }


    }
    public function rules(): array
    {
        return [
             // Above is alias for as it always validates in batches
             'number' => ['required'],
            // item name must be at least 3 characters
             'name' => ['required','min:3'],
             'discount' => ['required'],
            // add additional validation price should be less than 100
             'price' => ['required','numeric' , 'not_in:0', 'lt:100'],
        ];
    }
    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
    }
    public function headingRow(): int
    {
        return 9;
    }
    //للتحكم بعدد الادخالات في كل دفعة اذا كانت حجم البيانات كبير جدا مما يوفر استهلاك الذاكرة
    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
