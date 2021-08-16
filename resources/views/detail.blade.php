<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="./files/layui.css">
    <link rel="stylesheet" href="./files/main.css">
    <link rel="shortcut icon" href="https://shop.985.moe/assets/style/favicon.ico">
    <style type="text/css">
        /*body {*/
        /*    margin: 0px;*/
        /*    padding: 0px;*/
        /*    background: #fff url('https://pics.yxkumad.com/api.php') center center fixed no-repeat;*/
        /*    background-size: cover;*/
        /*}*/
    </style>
    <link id="layuicss-layer" rel="stylesheet" href="./files/layer.css" media="all">
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.1.1/dist/echarts.min.js"></script>
</head>
<body style="">
<div class="header" style="">
    <div class="layui-row">
        <div class="layui-col-md8 layui-col-md-offset2 layui-col-sm12">
            <div class="header-box">
                <a href="#">
                    <div class="info"><h2>收益明细</h2></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main">
    <div class="layui-row">
        <div class="layui-col-md8 layui-col-md-offset2 layui-col-sm12">
            <div class="main-box">
                <div class="title goods">
                    <p style="    padding-bottom: 10px;">
                        <svg t="1602925747464" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="1270" data-spm-anchor-id="a313x.7781069.0.i4"
                             width="20" height="20">
                            <path
                                d="M619.52 578.56V808.96h194.56V660.48h-133.12v-81.92h215.04V849.92l-40.96 40.96h-276.48l-40.96-40.96V578.56z"
                                fill="#00EAFF" p-id="1271" data-spm-anchor-id="a313x.7781069.0.i0" class=""></path>
                            <path
                                d="M619.52 512V215.04h194.56v172.032h-133.12v81.92h174.08l40.96-40.96V174.08l-40.96-40.96h-276.48l-40.96 40.96v337.92z"
                                fill="#3C8CE7" p-id="1272" data-spm-anchor-id="a313x.7781069.0.i6" class=""></path>
                            <path
                                d="M445.44 890.88h-276.48l-40.96-40.96V619.52l40.96-40.96h174.08v81.92h-133.12V808.96h194.56V215.04h-194.56v172.032h133.12v81.92h-174.08l-40.96-40.96V174.08l40.96-40.96h276.48l40.96 40.96v675.84z"
                                fill="#3C8CE7" p-id="1273" data-spm-anchor-id="a313x.7781069.0.i3" class=""></path>
                        </svg>
                        <span>收益详情</span>
                    </p>


                    <div class="goods-list">
                        <a href="javascript:void(0);" class="goods-box" style="cursor:not-allowed;">
                            <div class="goods-name">总收益</div>
                            <div class="goods-price">1000 ETH</div>
                        </a>
                        <a href="javascript:void(0);" class="goods-box" style="cursor:not-allowed;">
                            <div class="goods-name">今日收益</div>
                            <div class="goods-price"> 111 ETH</div>
                        </a></div>
                </div>
                <div class="title">
                    <svg t="1602925747464" class="icon" viewBox="0 0 1024 1024" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" p-id="1270" data-spm-anchor-id="a313x.7781069.0.i4"
                         width="20" height="20">
                        <path
                            d="M619.52 578.56V808.96h194.56V660.48h-133.12v-81.92h215.04V849.92l-40.96 40.96h-276.48l-40.96-40.96V578.56z"
                            fill="#00EAFF" p-id="1271" data-spm-anchor-id="a313x.7781069.0.i0" class=""></path>
                        <path
                            d="M619.52 512V215.04h194.56v172.032h-133.12v81.92h174.08l40.96-40.96V174.08l-40.96-40.96h-276.48l-40.96 40.96v337.92z"
                            fill="#3C8CE7" p-id="1272" data-spm-anchor-id="a313x.7781069.0.i6" class=""></path>
                        <path
                            d="M445.44 890.88h-276.48l-40.96-40.96V619.52l40.96-40.96h174.08v81.92h-133.12V808.96h194.56V215.04h-194.56v172.032h133.12v81.92h-174.08l-40.96-40.96V174.08l40.96-40.96h276.48l40.96 40.96v675.84z"
                            fill="#3C8CE7" p-id="1273" data-spm-anchor-id="a313x.7781069.0.i3" class=""></path>
                    </svg>
                    <span>详情</span>
                </div>
                <div class="cate">

                    <form action="" style="padding-bottom: 10px">
                        开始日期 <input type="date" name="start_time" value="{{$_GET['start_time']}}"> 结束时间 <input type="date" name="end_time" value="{{$_GET['end_time']}}"> <input type="submit" value="查询">
                    </form>

                    <div id="main" style="width: 100%;height:400px;"></div>

                    <script>
                        var chartDom = document.getElementById('main');
                        var myChart = echarts.init(chartDom);
                        var option;

                        option = {
                            title: {
                                // text: '折线图堆叠'
                            },
                            tooltip: {
                                trigger: 'axis'
                            },
                            legend: {
                                data: ['超超', '栋', '康永', '涛哥']
                            },
                            grid: {
                                left: '3%',
                                right: '4%',
                                bottom: '3%',
                                containLabel: true
                            },
                            toolbox: {
                                feature: {
                                    saveAsImage: {}
                                }
                            },
                            xAxis: {
                                type: 'category',
                                boundaryGap: false,
                                data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日']
                            },
                            yAxis: {
                                type: 'value'
                            },
                            series: [
                                {
                                    name: '超超',
                                    type: 'line',
                                    stack: '总量',
                                    data: [120, 132, 101, 134, 90, 230, 210]
                                },
                                {
                                    name: '栋',
                                    type: 'line',
                                    stack: '总量',
                                    data: [220, 182, 191, 234, 290, 330, 310]
                                },
                                {
                                    name: '康永',
                                    type: 'line',
                                    stack: '总量',
                                    data: [150, 232, 201, 154, 190, 330, 410]
                                },
                                {
                                    name: '涛哥',
                                    type: 'line',
                                    stack: '总量',
                                    data: [320, 332, 301, 334, 390, 330, 320]
                                }


                            ]
                        };

                        option && myChart.setOption(option);
                    </script>
                </div>
                <div class="goods">
                    <p class="title-2">
                        <svg t="1602925988984" class="icon" viewBox="0 0 1024 1024" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" p-id="1945" width="17" height="17">
                            <path
                                d="M803.84 883.712h-163.84v-81.92h133.12l118.784-393.216-178.176 95.232-55.296-15.36L512 240.64 365.568 488.448l-55.296 15.36-178.176-95.232 118.784 393.216h133.12v81.92h-163.84l-38.912-28.672L25.6 336.896l58.368-47.104 230.4 122.88 162.816-272.384h69.632l162.816 272.384 230.4-122.88 58.368 47.104-155.648 518.144z"
                                fill="#3C8CE7" p-id="1946" data-spm-anchor-id="a313x.7781069.0.i17" class=""></path>
                            <path
                                d="M305.152 620.544h61.44v61.44h-61.44zM481.28 620.544h61.44v61.44h-61.44zM657.408 620.544h61.44v61.44h-61.44z"
                                fill="#00EAFF" p-id="1947" data-spm-anchor-id="a313x.7781069.0.i14" class=""></path>
                        </svg>
                        <span>选择商品</span>
                    </p>
                    <div class="goods-list"><a href="javascript:void(0);" class="goods-box" style="cursor:not-allowed;">
                            <div class="goods-name">F2s 虚拟机</div>
                            <div class="goods-price"> ￥230.00</div>
                            <div class="goods-num">
                                <div><p style="width: 0%;"></p></div>
                                <span>剩余0件</span></div>
                        </a> <a href="javascript:void(0);" class="goods-box" style="cursor:not-allowed;">
                            <div class="goods-name">F4s 虚拟机</div>
                            <div class="goods-price"> ￥370.00</div>
                            <div class="goods-num">
                                <div><p style="width: 0%;"></p></div>
                                <span>剩余0件</span></div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./files/layui.js"></script>
<script src="./files/jquery-3.4.1.min.js"></script>
<script src="./files/main.js"></script>
<script src="./files/layer.js"></script>

</body>
</html>
