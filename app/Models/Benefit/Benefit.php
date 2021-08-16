<?php

namespace App\Models\Benefit;

use App\Models\BaseModel;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use QL\QueryList;

class Benefit extends BaseModel
{
    protected $table = 'benefit';

    public function analyseData()
    {

        try {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://www.f2pool.com/eth/0xcB2EE41D384aa5c71dDBbD8137F273823e5A45cC?draw=1&columns%255B0%255D%255Bdata%255D=name&columns%255B0%255D%255Bname%255D=&columns%255B0%255D%255Bsearchable%255D=true&columns%255B0%255D%255Borderable%255D=true&columns%255B0%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B0%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B1%255D%255Bdata%255D=local_hash&columns%255B1%255D%255Bname%255D=&columns%255B1%255D%255Bsearchable%255D=false&columns%255B1%255D%255Borderable%255D=true&columns%255B1%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B1%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B2%255D%255Bdata%255D=hashrate&columns%255B2%255D%255Bname%255D=&columns%255B2%255D%255Bsearchable%255D=false&columns%255B2%255D%255Borderable%255D=true&columns%255B2%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B2%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B3%255D%255Bdata%255D=hashrate_last_day&columns%255B3%255D%255Bname%255D=&columns%255B3%255D%255Bsearchable%255D=false&columns%255B3%255D%255Borderable%255D=true&columns%255B3%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B3%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B4%255D%255Bdata%255D=delayrate_last_day&columns%255B4%255D%255Bname%255D=&columns%255B4%255D%255Bsearchable%255D=false&columns%255B4%255D%255Borderable%255D=true&columns%255B4%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B4%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B5%255D%255Bdata%255D=stalerate_last_day&columns%255B5%255D%255Bname%255D=&columns%255B5%255D%255Bsearchable%255D=false&columns%255B5%255D%255Borderable%255D=true&columns%255B5%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B5%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B6%255D%255Bdata%255D=last_share&columns%255B6%255D%255Bname%255D=&columns%255B6%255D%255Bsearchable%255D=false&columns%255B6%255D%255Borderable%255D=true&columns%255B6%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B6%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B7%255D%255Bdata%255D=tag_name&columns%255B7%255D%255Bname%255D=&columns%255B7%255D%255Bsearchable%255D=false&columns%255B7%255D%255Borderable%255D=false&columns%255B7%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B7%255D%255Bsearch%255D%255Bregex%255D=false&columns%255B8%255D%255Bdata%255D=name&columns%255B8%255D%255Bname%255D=&columns%255B8%255D%255Bsearchable%255D=true&columns%255B8%255D%255Borderable%255D=false&columns%255B8%255D%255Bsearch%255D%255Bvalue%255D=&columns%255B8%255D%255Bsearch%255D%255Bregex%255D=false&start=0&length=50&search%255Bvalue%255D=&search%255Bregex%255D=false&account=0xcB2EE41D384aa5c71dDBbD8137F273823e5A45cC&currency=ETH&tagOnly=0&tagview=true&tab=all&action=anonymous_get_pagination_workers&filter=',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'GET',
                CURLOPT_HTTPHEADER     => array(
                    'authority: www.f2pool.com',
                    'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
                    'accept: application/json, text/javascript, */*; q=0.01',
                    'dnt: 1',
                    'x-requested-with: XMLHttpRequest',
                    'sec-ch-ua-mobile: ?0',
                    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36',
                    'sec-fetch-site: same-origin',
                    'sec-fetch-mode: cors',
                    'sec-fetch-dest: empty',
                    'referer: https://www.f2pool.com/eth/0xcB2EE41D384aa5c71dDBbD8137F273823e5A45cC',
                    'accept-language: zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7,zh-TW;q=0.6',
                    'Cookie: __cf_bm=ae5a9752fbab95ad5056cb0aa11550dbc9bbb181-1629115712-1800-AbOGpK87KrwSvMWxK/Ftz88E7nOAOXubFfoVytD9iAHszWB8I0toSebEiEW1WqeMXTMfZbv6NmnWPaEAx1XcjSA='
                ),
            ));

            $response = curl_exec($curl);

            $allMiner = Miner::all()->toArray();
            $allMiner = array_column($allMiner, null, 'name');

            $response = \GuzzleHttp\json_decode($response, 1);

            $insertData = [];

            $data = $response['data'];

            if(empty($data)){
                self::sendFsMsg('数据为空');
            }

            foreach ($data as $k => &$v) {
                if (array_key_exists($v['origin_name'], $allMiner)) {
                    $insertData[] = [
                        'mid'                => $allMiner[$v['origin_name']]['id'],
                        'benefit_15_minutes' => $v['hashrate'],
                        'benefit_24_hour'    => $v['hashrate_last_day'],
                        'last_update'        => date('Y-m-d H:i:s'),
                        'unit'               => ''
                    ];
                    unset($allMiner[$v['origin_name']]);
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
        } catch (\Exception $e) {
            self::sendFsMsg('异常报错了');
        }


        return;
    }


    public static function sendFsMsg($msg = '')
    {
        $client = new Client();

        $url = 'https://open.feishu.cn/open-apis/bot/v2/hook/4b9e1742-bd99-4dc0-8555-53071b30bb7b';


        $data = [
            'msg_type' => 'text',
            'content'  => json_encode([
                'text' => $msg
            ])
        ];

        $requestData = [
            RequestOptions::JSON => $data
        ];

        $client->post($url, $requestData);
    }
}
