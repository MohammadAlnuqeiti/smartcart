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
// WithHeadingRow ,
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


        $data = Product::where('product_number',$row[0])->where('merchant_id',$this->merchant)->first();
        if($data){
            //will update all existing products in excel sheet need to preform update only if the price is changed.
            $data->price=$row[3];
            $data->save();
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
                'product_number' => trim($row[0]),
                //product name is a translated field and translated name exists on other table please review DB structure.
                'product_name' => trim($row[1]),
                'product_descount' =>  trim($row[2]),
                'price' => trim($row[3]),
                'merchant_id' =>$this->merchant,
            ]);
        }


    }
    public function rules(): array
    {
        return [
             // Above is alias for as it always validates in batches
             '0' => ['required'],
            // item name must be at least 3 characters
             '1' => ['required'],
             '2' => ['required'],
            // add additional validation price should be less than 100
             '3' => ['required','numeric' , 'not_in:0'],
        ];
    }
    public function onFailure(Failure ...$failures)
    {
        // Handle the failures how you'd like.
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
