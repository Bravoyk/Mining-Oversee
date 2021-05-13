<?php

namespace App\Models\Benefit;

use App\Models\BaseModel;
use QL\QueryList;

class Benefit extends BaseModel
{
    protected $table = 'benefit';

    public function analyseData()
    {
        $url = 'https://www.f2pool.com/eth/0xcB2EE41D384aa5c71dDBbD8137F273823e5A45cC';

        // 元数据采集规则
        $rules = [
            'worker_name' => ['.worker-name span', 'text'],
            'unit'        => ['.hash-15m span', 'text'],
            'hash-15m'    => ['.hash-15m', 'text', '-span'],
            'hash-24h'    => ['.hash-24h', 'text', '-span'],
        ];

        $range = '.worker-table tr';
        $data  = QueryList::get($url)->rules($rules)->range($range)->query()->getData();

        $allMiner = Miner::all()->toArray();
        $allMiner = array_column($allMiner, null, 'name');

        $insertData = [];
        foreach ($data as $k => &$v) {
            if (array_key_exists($v['worker_name'], $allMiner)) {
                $insertData[] = [
                    'mid'                => $allMiner[$v['worker_name']]['id'],
                    'benefit_15_minutes' => $v['hash-15m'],
                    'benefit_24_hour'    => $v['hash-24h'],
                    'last_update'        => date('Y-m-d H:i:s'),
                    'unit'               => $v['unit']
                ];
                unset($allMiner[$v['worker_name']]);
            }
        }

        foreach ($allMiner as $k => &$v) {
            $insertData[] = [
                'mid'                => $v['id'],
                'benefit_15_minutes' => 0,
                'benefit_24_hour'    => 0,
                'last_update'        => date('Y-m-d H:i:s'),
                'unit'               => ''
            ];
        }

        Benefit::insert($insertData);

        return ;
    }


    public function addRecode()
    {

    }

}
