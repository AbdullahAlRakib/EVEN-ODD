<?php


namespace App\classes;


class Series
{
    public function createSeries(){

        $data=(object)$_POST;
        $result=[];

        if($data->strating_number < $data->ending_number){
            if($data->choice=='odd'){
                for($i=$data->starting_number; $i<=$data->ending_number; $i++){
                   if($i%2!=0){
                       array_push($result,$i);
                   }
                    //$result .=$i.' ';


                }
            }
            elseif ($data->choice=='even'){
                for($i=$data->starting_number; $i<=$data->ending_number; $i++){
                    if($i%2==0){
                        array_push($result,$i);
                    }
                    //$result .=$i.' ';

                }
            }
            return $result;
        }



    }
}