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
            $data->price=$row[3];
            $data->save();
        }else{

            return new Product([
                'product_number' => trim($row[0]),
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
             '1' => ['required'],
             '2' => ['required'],
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
