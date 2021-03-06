@extends('back-end.sidebar')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Used Space</p>
            <h3 class="card-title">49/50
              <small>GB</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">warning</i>
              <a href="javascript:;">Get More Space...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">people_alt</i>
            </div>
            <p class="card-category">User Terdaftar</p>
            <h3 class="card-title">{{ $countUser }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">record_voice_over</i> User Terdaftar
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">feed</i>
            </div>
            <p class="card-category">Video Ads</p>
            <h3 class="card-title">{{ $countAds }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">local_offer</i> Video ads yg terdaftar
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="fa fa-twitter"></i>
            </div>
            <p class="card-category">Banner Iklan</p>
            <h3 class="card-title">{{ $countBannerIklan }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">update</i> Just Updated
            </div>
          </div>
        </div>
      </div>
    </div>

    {!! $chart->container() !!}
 
 <script src="{{ $chart->cdn() }}"></script>

 {{ $chart->script() }}

 
    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="80.76116071428572" x2="80.76116071428572" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="121.52232142857143" x2="121.52232142857143" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="162.28348214285714" x2="162.28348214285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="203.04464285714286" x2="203.04464285714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="243.80580357142858" x2="243.80580357142858" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="284.5669642857143" x2="284.5669642857143" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C80.761,79.2,80.761,79.2,80.761,79.2C121.522,103.2,121.522,103.2,121.522,103.2C162.283,79.2,162.283,79.2,162.283,79.2C203.045,64.8,203.045,64.8,203.045,64.8C243.806,76.8,243.806,76.8,243.806,76.8C284.567,28.8,284.567,28.8,284.567,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="80.76116071428572" y1="79.2" x2="80.77116071428573" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="121.52232142857143" y1="103.2" x2="121.53232142857144" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="162.28348214285714" y1="79.2" x2="162.29348214285713" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="203.04464285714286" y1="64.8" x2="203.05464285714285" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="243.80580357142858" y1="76.8" x2="243.81580357142857" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="284.5669642857143" y1="28.799999999999997" x2="284.57696428571427" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="40.761160714285715" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="80.76116071428572" y="125" width="40.761160714285715" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="121.52232142857143" y="125" width="40.76116071428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="162.28348214285714" y="125" width="40.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="203.04464285714286" y="125" width="40.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="243.80580357142858" y="125" width="40.761160714285694" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="284.5669642857143" y="125" width="40.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Daily Sales</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="320.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="320.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="320.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="320.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="320.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="320.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="51.680338541666664" x2="51.680338541666664" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="75.041015625" x2="75.041015625" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="98.40169270833333" x2="98.40169270833333" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="121.76236979166667" x2="121.76236979166667" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="145.12304687499997" x2="145.12304687499997" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="168.48372395833331" x2="168.48372395833331" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="191.84440104166666" x2="191.84440104166666" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="215.20507812499997" x2="215.20507812499997" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="238.56575520833331" x2="238.56575520833331" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="261.9264322916667" x2="261.9264322916667" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="285.287109375" x2="285.287109375" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="308.6477864583333" x2="308.6477864583333" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="23.360677083333332" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="63.36067708333333" y="125" width="23.360677083333332" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="86.72135416666666" y="125" width="23.360677083333336" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="110.08203125" y="125" width="23.36067708333333" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="133.44270833333331" y="125" width="23.36067708333333" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="156.80338541666666" y="125" width="23.360677083333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="180.1640625" y="125" width="23.360677083333314" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="203.52473958333331" y="125" width="23.360677083333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="226.88541666666666" y="125" width="23.360677083333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="250.24609375" y="125" width="23.360677083333314" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="273.6067708333333" y="125" width="23.360677083333314" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="296.96744791666663" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Email Subscriptions</h4>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-danger">
            <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="75.666015625" x2="75.666015625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="111.33203125" x2="111.33203125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="146.998046875" x2="146.998046875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="182.6640625" x2="182.6640625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="218.330078125" x2="218.330078125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="253.99609375" x2="253.99609375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="289.662109375" x2="289.662109375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="325.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,92.4C75.666,30,75.666,30,75.666,30C111.332,66,111.332,66,111.332,66C146.998,84,146.998,84,146.998,84C182.664,86.4,182.664,86.4,182.664,86.4C218.33,91.2,218.33,91.2,218.33,91.2C253.996,96,253.996,96,253.996,96C289.662,97.2,289.662,97.2,289.662,97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="75.666015625" y1="30" x2="75.676015625" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="111.33203125" y1="66" x2="111.34203125" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="146.998046875" y1="84" x2="147.008046875" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="182.6640625" y1="86.4" x2="182.6740625" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="218.330078125" y1="91.2" x2="218.340078125" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="253.99609375" y1="96" x2="254.00609375" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="289.662109375" y1="97.2" x2="289.672109375" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="75.666015625" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="111.33203125" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="146.998046875" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="182.6640625" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="218.330078125" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="253.99609375" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="289.662109375" y="125" width="35.666015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Completed Tasks</h4>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Tasks:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">bug_report</i> Bugs
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#messages" data-toggle="tab">
                      <i class="material-icons">code</i> Website
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">
                      <i class="material-icons">cloud</i> Server
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Create 4 Invisible User Experiences you Never Knew About</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="messages">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="settings">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">User Baru Terdaftar</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <tr><th>ID</th>
                <th>Nama</th>
                <th>Email</th>
              </tr></thead>
              <tbody>
              @php $no = 1; @endphp
              @foreach($userBaru as $u)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Pesan terkirim Hari ini!</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <tr><th>No</th>
                <th>Nama</th>
                <th>Email</th>
              </tr></thead>
              <tbody>
              @php $no = 1; @endphp
              @foreach($emailSend as $u)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $u->nama_penerima }}</td>
                  <td>{{ $u->email_tujuan }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $emailSend->links('vendor.pagination.bootstrap-4') }}
          </div>
        </div>
      </div>


  </div>
</div>
@endsection