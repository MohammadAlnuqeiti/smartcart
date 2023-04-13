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
    public function  __construct( $merchant)
    {
        $this->merchant = $merchant;
    }
    public function model(array $row )
    {


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

            return new Product([
                'product_number' => trim($row['number']),
                //product name is a translated field and translated name exists on other table please review DB structure.
                'product_name' => trim($row['name']),
                'product_descount' =>  trim($row['discount']),
                'price' => trim($row['price']),
                'merchant_id' =>$this->merchant,
            ]);
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
