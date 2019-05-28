<?php

use App\Expenses;
use App\Senator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class SenatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Baixando senadores via api, por favor aguarde...');

            $client = new  Client();
            $response = $client->request('GET', 'http://meucongressonacional.com/api/001/senador');
            $body = json_decode($response->getBody()->getContents());

            foreach ($body as $bodys) {

                $senator = Senator::create([
                    'numero' => $bodys->id,
                    'nomeParlamentar' => $bodys->nomeParlamentar,
                    'nomeCompleto' => $bodys->nomeCompleto,
                    'cargo' => $bodys->cargo,
                    'partido' => $bodys->partido,
                    'mandato' => $bodys->mandato,
                    'sexo' => $bodys->sexo,
                    'uf' => $bodys->uf,
                    'telefone' => $bodys->telefone,
                    'email' => $bodys->email,
                    'nascimento' => $bodys->nascimento,
                    'fotoURL' => $bodys->fotoURL,
                    'gastoTotal' => $bodys->gastoTotal,
                    'gastoPorDia' => $bodys->gastoPorDia,

                ]);


            $response_expenses = $client->request('GET', 'http://meucongressonacional.com/api/001/senador/' . $senator->numero . '/gastos/2013');
            $body_expenses = json_decode($response_expenses->getBody()->getContents());


            foreach ($body_expenses as $value) {


                $data = explode("/", $value->dataEmissao);

                $dia = $data[0];
                $mes = $data[1];
                $ano = str_replace("113", "2013", $data[2]);


                Expenses::create([
                    'cnpjCpf' => $value->cnpjCpf,
                    'tipoGasto' => $value->tipoGasto,
                    'descricaoGasto' => $value->descricaoGasto,
                    'dataEmissao' => Carbon::createFromFormat('d/m/Y', $dia . '/' . $mes . '/' . $ano),
                    'valor' => $value->valor,
                    'senator_id' =>$senator->numero

                ]);

            }

        }


    }

}
