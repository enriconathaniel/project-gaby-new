<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

  <div class="body-content">

    <div class="row">
      <div class="col-md-6">
        <!-- AREA CHART -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Area Chart</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="chart" id="revenue-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="561.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.546875" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">0</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,261H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">7,500</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,202H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">15,000</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,143H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="84.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000000000000028">22,500</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,84.00000000000003H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="25.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.000000000000028">30,000</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,25.00000000000003H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="449.44966965370594" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2013</tspan>
                </text><text x="238.45350470838395" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2012</tspan>
                </text>
                <path fill="#74a5c2" stroke="none" d="M62.046875,219.05493333333334C75.30619684082625,219.56626666666668,101.82484052247874,222.62345,115.08416236330498,221.10026666666667C128.34348420413124,219.57708333333335,154.8621278857837,209.1355825136612,168.12144972660997,206.86946666666668C181.23664850394897,204.6279825136612,207.46704605862698,204.88215,220.58224483596598,203.06986666666666C233.69744361330498,201.25758333333332,259.927841167983,194.9129178506375,273.043039945322,192.3712C286.30236178614825,189.80155118397084,312.8210054678007,182.51721666666668,326.080327308627,182.6244C339.33964914945324,182.73158333333333,365.8582928311057,204.18057122040074,379.11761467193196,193.22866666666667C392.23281344927096,182.39580455373408,418.46321100394897,101.94395359116024,431.578409781288,95.48533333333336C444.5494854951397,89.09768692449359,470.49163692284327,135.13802307692308,483.462712636695,141.8436C496.7220344775213,148.69818974358975,523.2406781591737,147.7554,536.5,149.726L536.5,261L62.046875,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                <path fill="none" stroke="#3c8dbc" d="M62.046875,219.05493333333334C75.30619684082625,219.56626666666668,101.82484052247874,222.62345,115.08416236330498,221.10026666666667C128.34348420413124,219.57708333333335,154.8621278857837,209.1355825136612,168.12144972660997,206.86946666666668C181.23664850394897,204.6279825136612,207.46704605862698,204.88215,220.58224483596598,203.06986666666666C233.69744361330498,201.25758333333332,259.927841167983,194.9129178506375,273.043039945322,192.3712C286.30236178614825,189.80155118397084,312.8210054678007,182.51721666666668,326.080327308627,182.6244C339.33964914945324,182.73158333333333,365.8582928311057,204.18057122040074,379.11761467193196,193.22866666666667C392.23281344927096,182.39580455373408,418.46321100394897,101.94395359116024,431.578409781288,95.48533333333336C444.5494854951397,89.09768692449359,470.49163692284327,135.13802307692308,483.462712636695,141.8436C496.7220344775213,148.69818974358975,523.2406781591737,147.7554,536.5,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                <circle cx="62.046875" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="115.08416236330498" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="168.12144972660997" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="220.58224483596598" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="273.043039945322" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="326.080327308627" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="379.11761467193196" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="431.578409781288" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="483.462712636695" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="536.5" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <path fill="#eaf3f6" stroke="none" d="M62.046875,240.02746666666667C75.30619684082625,239.8072,101.82484052247874,241.35496666666666,115.08416236330498,239.1464C128.34348420413124,236.93783333333334,154.8621278857837,223.33676429872497,168.12144972660997,222.35893333333334C181.23664850394897,221.39173096539162,207.46704605862698,233.23263333333333,220.58224483596598,231.36626666666666C233.69744361330498,229.4999,259.927841167983,209.2890577413479,273.043039945322,207.428C286.30236178614825,205.54649107468123,312.8210054678007,214.43916666666667,326.080327308627,216.39600000000002C339.33964914945324,218.35283333333336,365.8582928311057,232.37947613843352,379.11761467193196,223.08266666666668C392.23281344927096,213.88690947176687,418.46321100394897,148.2268241252302,431.578409781288,142.42573333333334C444.5494854951397,136.6883907918969,470.49163692284327,170.47037838827842,483.462712636695,176.92893333333336C496.7220344775213,183.53101172161175,523.2406781591737,190.23343333333335,536.5,194.66826666666668L536.5,261L62.046875,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                <path fill="none" stroke="#a0d0e0" d="M62.046875,240.02746666666667C75.30619684082625,239.8072,101.82484052247874,241.35496666666666,115.08416236330498,239.1464C128.34348420413124,236.93783333333334,154.8621278857837,223.33676429872497,168.12144972660997,222.35893333333334C181.23664850394897,221.39173096539162,207.46704605862698,233.23263333333333,220.58224483596598,231.36626666666666C233.69744361330498,229.4999,259.927841167983,209.2890577413479,273.043039945322,207.428C286.30236178614825,205.54649107468123,312.8210054678007,214.43916666666667,326.080327308627,216.39600000000002C339.33964914945324,218.35283333333336,365.8582928311057,232.37947613843352,379.11761467193196,223.08266666666668C392.23281344927096,213.88690947176687,418.46321100394897,148.2268241252302,431.578409781288,142.42573333333334C444.5494854951397,136.6883907918969,470.49163692284327,170.47037838827842,483.462712636695,176.92893333333336C496.7220344775213,183.53101172161175,523.2406781591737,190.23343333333335,536.5,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                <circle cx="62.046875" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="115.08416236330498" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="168.12144972660997" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="220.58224483596598" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="273.043039945322" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="326.080327308627" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="379.11761467193196" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="431.578409781288" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="483.462712636695" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="536.5" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
              </svg>
              <div class="morris-hover morris-default-style" style="left: 561.241px; top: 57px; display: none;">
                <div class="morris-hover-row-label">2012 Q4</div>
                <div class="morris-hover-point" style="color: #a0d0e0">
                  Item 1:
                  15,073
                </div>
                <div class="morris-hover-point" style="color: #3c8dbc">
                  Item 2:
                  5,967
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- DONUT CHART -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Donut Chart</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="chart" id="sales-chart" style="height: 300px; position: relative;"><svg height="300" version="1.1" width="561.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                <path fill="none" stroke="#3c8dbc" d="M280.75,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,368.9777551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                <path fill="#3c8dbc" stroke="#ffffff" d="M280.75,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,371.81364732624417,181.4248826052307L408.3651459070204,194.03833029452744A135,135,0,0,1,280.75,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                <path fill="none" stroke="#f56954" d="M368.9777551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,197.03484627831412,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                <path fill="#f56954" stroke="#ffffff" d="M371.81364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,194.34400205154566,107.40757544301087L155.17726941747117,88.10097469226493A140,140,0,0,1,413.0916327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                <path fill="none" stroke="#00a65a" d="M197.03484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,280.72067846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                <path fill="#00a65a" stroke="#ffffff" d="M194.34400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,280.71973599126824,246.3333285794739L280.7075884998742,284.9999933380171A135,135,0,0,1,159.6620097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="280.75" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.4577,0,0,1.4577,-128.4995,-69.1128)" stroke-width="0.6860119047619048">
                  <tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan>
                </text><text x="280.75" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.9444,0,0,1.9444,-265.2487,-143.5556)" stroke-width="0.5142857142857143">
                  <tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan>
                </text>
              </svg></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col (LEFT) -->
      <div class="col-md-6">
        <!-- LINE CHART -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Line Chart</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="chart" id="line-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="561.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px;">
                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.546875" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">0</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,261H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">5,000</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,202H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">10,000</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,143H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">15,000</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,84H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.546875" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">20,000</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M62.046875,25H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="449.44966965370594" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2013</tspan>
                </text><text x="238.45350470838395" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2012</tspan>
                </text>
                <path fill="none" stroke="#3c8dbc" d="M62.046875,229.5412C75.30619684082625,229.2108,101.82484052247874,231.53245,115.08416236330498,228.2196C128.34348420413124,224.90675000000002,154.8621278857837,204.50514644808743,168.12144972660997,203.0384C181.23664850394897,201.58759644808742,207.46704605862698,219.34895,220.58224483596598,216.5494C233.69744361330498,213.74984999999998,259.927841167983,183.43358661202186,273.043039945322,180.642C286.30236178614825,177.81973661202184,312.8210054678007,191.15875,326.080327308627,194.094C339.33964914945324,197.02925,365.8582928311057,218.06921420765028,379.11761467193196,204.124C392.23281344927096,190.33036420765026,418.46321100394897,91.8402361878453,431.578409781288,83.1386C444.5494854951397,74.5325861878453,470.49163692284327,125.20556758241756,483.462712636695,134.89339999999999C496.7220344775213,144.79651758241758,523.2406781591737,154.85015,536.5,161.50240000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                <circle cx="62.046875" cy="229.5412" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="115.08416236330498" cy="228.2196" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="168.12144972660997" cy="203.0384" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="220.58224483596598" cy="216.5494" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="273.043039945322" cy="180.642" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="326.080327308627" cy="194.094" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="379.11761467193196" cy="204.124" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="431.578409781288" cy="83.1386" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="483.462712636695" cy="134.89339999999999" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                <circle cx="536.5" cy="161.50240000000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
              </svg>
              <div class="morris-hover morris-default-style" style="left: 475.453px; top: 94px; display: none;">
                <div class="morris-hover-row-label">2013 Q2</div>
                <div class="morris-hover-point" style="color: #3c8dbc">
                  Item 1:
                  8,432
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- BAR CHART -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Bar Chart</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <div class="chart" id="bar-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="561.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px;">
                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.859375" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">0</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M45.359375,261H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">25</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M45.359375,202H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">50</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M45.359375,143H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">75</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M45.359375,84H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">100</tspan>
                </text>
                <path fill="none" stroke="#aaaaaa" d="M45.359375,25H536.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="501.4185267857143" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2012</tspan>
                </text><text x="361.09263392857144" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2010</tspan>
                </text><text x="220.76674107142858" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2008</tspan>
                </text><text x="80.44084821428572" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2006</tspan>
                </text>
                <rect x="54.12974330357143" y="25" width="24.811104910714285" height="236" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="81.94084821428572" y="48.60000000000002" width="24.811104910714285" height="212.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="124.29268973214286" y="84" width="24.811104910714285" height="177" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="152.10379464285714" y="107.6" width="24.811104910714285" height="153.4" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="194.45563616071428" y="143" width="24.811104910714285" height="118" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="222.26674107142856" y="166.60000000000002" width="24.811104910714285" height="94.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="264.6185825892857" y="84" width="24.811104910714285" height="177" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="292.4296875" y="107.6" width="24.811104910714285" height="153.4" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="334.78152901785717" y="143" width="24.811104910714285" height="118" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="362.59263392857144" y="166.60000000000002" width="24.811104910714285" height="94.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="404.9444754464286" y="84" width="24.811104910714285" height="177" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="432.7555803571429" y="107.6" width="24.811104910714285" height="153.4" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="475.107421875" y="25" width="24.811104910714285" height="236" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                <rect x="502.9185267857143" y="48.60000000000002" width="24.811104910714285" height="212.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
              </svg>
              <div class="morris-hover morris-default-style" style="left: 46.4252px; top: 112px; display: none;">
                <div class="morris-hover-row-label">2006</div>
                <div class="morris-hover-point" style="color: #00a65a">
                  CPU:
                  100
                </div>
                <div class="morris-hover-point" style="color: #f56954">
                  DISK:
                  90
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col (RIGHT) -->
    </div>

  </div>

  <script>
    $(function() {
      "use strict";

      // AREA CHART
      var area = new Morris.Area({
        element: 'revenue-chart',
        resize: true,
        data: [{
            y: '2011 Q1',
            item1: 2666,
            item2: 2666
          },
          {
            y: '2011 Q2',
            item1: 2778,
            item2: 2294
          },
          {
            y: '2011 Q3',
            item1: 4912,
            item2: 1969
          },
          {
            y: '2011 Q4',
            item1: 3767,
            item2: 3597
          },
          {
            y: '2012 Q1',
            item1: 6810,
            item2: 1914
          },
          {
            y: '2012 Q2',
            item1: 5670,
            item2: 4293
          },
          {
            y: '2012 Q3',
            item1: 4820,
            item2: 3795
          },
          {
            y: '2012 Q4',
            item1: 15073,
            item2: 5967
          },
          {
            y: '2013 Q1',
            item1: 10687,
            item2: 4460
          },
          {
            y: '2013 Q2',
            item1: 8432,
            item2: 5713
          }
        ],
        xkey: 'y',
        ykeys: ['item1', 'item2'],
        labels: ['Item 1', 'Item 2'],
        lineColors: ['#a0d0e0', '#3c8dbc'],
        hideHover: 'auto'
      });

      // LINE CHART
      var line = new Morris.Line({
        element: 'line-chart',
        resize: true,
        data: [{
            y: '2011 Q1',
            item1: 2666
          },
          {
            y: '2011 Q2',
            item1: 2778
          },
          {
            y: '2011 Q3',
            item1: 4912
          },
          {
            y: '2011 Q4',
            item1: 3767
          },
          {
            y: '2012 Q1',
            item1: 6810
          },
          {
            y: '2012 Q2',
            item1: 5670
          },
          {
            y: '2012 Q3',
            item1: 4820
          },
          {
            y: '2012 Q4',
            item1: 15073
          },
          {
            y: '2013 Q1',
            item1: 10687
          },
          {
            y: '2013 Q2',
            item1: 8432
          }
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto'
      });

      //DONUT CHART
      var donut = new Morris.Donut({
        element: 'sales-chart',
        resize: true,
        colors: ["#3c8dbc", "#f56954", "#00a65a"],
        data: [{
            label: "Download Sales",
            value: 12
          },
          {
            label: "In-Store Sales",
            value: 30
          },
          {
            label: "Mail-Order Sales",
            value: 20
          }
        ],
        hideHover: 'auto'
      });
      //BAR CHART
      var bar = new Morris.Bar({
        element: 'bar-chart',
        resize: true,
        data: [{
            y: '2006',
            a: 100,
            b: 90
          },
          {
            y: '2007',
            a: 75,
            b: 65
          },
          {
            y: '2008',
            a: 50,
            b: 40
          },
          {
            y: '2009',
            a: 75,
            b: 65
          },
          {
            y: '2010',
            a: 50,
            b: 40
          },
          {
            y: '2011',
            a: 75,
            b: 65
          },
          {
            y: '2012',
            a: 100,
            b: 90
          }
        ],
        barColors: ['#00a65a', '#f56954'],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['CPU', 'DISK'],
        hideHover: 'auto'
      });
    });
  </script>
</div>