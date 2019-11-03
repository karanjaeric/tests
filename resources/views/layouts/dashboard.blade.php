@extends('layouts.layouts.outline')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>12, 543</h3>

              <p>Scholars</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>59<sup style="font-size: 20px">%</sup></h3>

              <p>Female </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>546</h3>

              <p>Global Scholars</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $a }}</h3>

              <p>W2F Alumni</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
  </section>

  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>ELP admission by year</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="myChart" style="height: 180px;"></canvas>
                    <script>
                                  var numberOfVotes = new Array();
                                  numberOfVotes[0] = {{ $a }};
                                  numberOfVotes[1] = {{ $b }};
                                  numberOfVotes[2] = {{ $c }};
                                  numberOfVotes[3] = {{ $d }};
                                  numberOfVotes[4] = {{ $e }};
                                  var numberOfCountries = new Array(20, 40, 35, 20, 14, 52, 43);
                                  var ctx = document.getElementById('myChart');
                                  var myChart = new Chart(ctx, {
                                      type: 'bar',
                                      data: {
                                          labels: ['green', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Red'],
                                          datasets: [{
                                              label: '# of Votes',
                                        data: numberOfVotes,
                                        backgroundColor: 'rgba(254, 99, 132, 0.2)'},{
                                        label: '# of counties',
                                        data: numberOfCountries,
                                        type: 'line',
                                              backgroundColor: [
                                                  /*'rgba(254, 99, 132, 0.2)',*/
                                                  'rgba(54, 162, 235, 0.2)',
                                                  'rgba(255, 206, 86, 0.2)',
                                                  'rgba(75, 192, 192, 0.2)',
                                                  'rgba(153, 102, 255, 0.2)',
                                                  'rgba(255, 159, 64, 0.2)'
                                              ],
                                              borderColor: [
                                                  'rgba(255, 99, 132, 1)',
                                                  'rgba(54, 162, 235, 1)',
                                                  'rgba(255, 206, 86, 1)',
                                                  'rgba(75, 192, 192, 1)',
                                                  'rgba(153, 102, 255, 1)',
                                                  'rgba(255, 159, 64, 1)'
                                              ],
                                              borderWidth: 1, 
                                        barThickness: 10
                                          }]
                                      },
                                      options: {
                                      animation: {
                                              duration: 1000 // general animation time
                                          },
                                      title: {
                                              display: true,
                                              text: 'Custom Chart Title'
                                          },
                                          scales: {
                                              yAxes: [{
                                          stacked: true ,
                                                  ticks: {
                                                      beginAtZero: true
                                                  }
                                              }]
                                          }
                                      }
                                  });
                            </script>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Summary</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Internships</span>
                    <span class="progress-number"><b>6,234</b>/ 15,678</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Chapters</span>
                    <span class="progress-number"><b>2,500</b>/4000</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Alumni</span>
                    <span class="progress-number"><b>7,890</b>/16,567</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">456</h5>
                    <span class="description-text">Joined this year</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">178</h5>
                    <span class="description-text">College counselling</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">67</h5>
                    <span class="description-text">Admissions</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">500</h5>
                    <span class="description-text">Joined chapters</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
  </div>
      <!-- /.row -->
@endsection
