<?php


namespace App\repositories;


use Illuminate\Support\Facades\DB;

class RepositorieSenator
{

     //retorna senadores
     static function getSenators($id){

        $results = DB::select(DB::raw("
                                        SELECT sum(format(gastoPorDia,2,'de_DE')) as total,nomeParlamentar,fotoURL,numero FROM vue.senators
                                        join  expenses 
                                        on senators.numero = senator_id
                                        where dataEmissao 
                                        BETWEEN '2013-$id-01'
                                        AND '2013-$id-31'
                                        group by nomeParlamentar,fotoURL,numero
                                        order by total desc
                                        limit 0,5
                                      "));


        return json_encode($results);
    }




}