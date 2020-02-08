@extends('admin.layouts.app')
<style>


.card-wrapper{
  padding:40px 30px;
}
.dashboard-card{
  height:190px;
  background-color: #d3d3d3;
}
.dashboard-card h4{
  text-align:center;
  font-size:18px;
  padding:25px;
  color:#fff;
}
.dashboard-card .card-block{
  text-align:center;
  font-size:28px;
}
.sales-card i{
  color: tomato;
}

.query-card i{
  color: purple;
}

.order-card i{
  color: green;
}

.payment-card i{
  color: steelblue;
}

.card-message{
  
  min-height:150px;
  overflow:hidden;
  background-color:#181D21;;
}

.card-message .card-title{
  
  color:#FFF;
  text-align:center;
  font-size:18px;
  padding:10px;
  text-decoration:underline;
  
}


</style>
@section('content')

<!-- Simple panel -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Simple panel</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
        <div class="row">
          <div class="col-md-3 card-wrapper">
            <div class="card dashboard-card sales-card" style="background-color:#f86c6b">
              <h4 class="card-title">New Booking</h4>
              <h5 style="font-size:60px; text-align:center;color#fff;">{{$Booking}}</h5>
            </div>
          </div>
          <div class="col-md-3 card-wrapper">
            <div class="card dashboard-card query-card" style="background-color:#fdaa2a; border-raduis:10%">
              <h4 class="card-title">Confirmed Booking</h4>
              <h5 style="font-size:60px; text-align:center;color#fff;">{{$Booking1}}</h5>
            
            </div>
          </div>
          <div class="col-md-3 card-wrapper" >
            <div class="card dashboard-card order-card" style="background-color:#2eadd3;">
              <h4 class="card-title">Packages</h4>
              <h5 style="font-size:60px; text-align:center;color#fff;">{{$Package}}</h5>
            
            </div>
          </div>
          <div class="col-md-3 card-wrapper" style=" margin-bottom:30px">
            <div class="card dashboard-card payment-card"  style="background-color:#187da0;">
              <h4 class="card-title">Users</h4>
              <h5 style="font-size:60px; text-align:center;color#fff;">{{$total}}</h5>
             
            </div>
          </div>
        </div>
    </div>

    <div class="panel-body">
        <h6 class="text-semibold"></p>

        <h6 class="text-semibold"></h6>
        <p class="content-group"></p>

        <h6 class="text-semibold"></h6>
        <p></p>
    </div>
</div>
<!-- /simple panel -->


<!-- Table -->
<!--<div class="panel panel-flat">-->
<!--    <div class="panel-heading">-->
<!--        <h5 class="panel-title">Basic table</h5>-->
<!--        <div class="heading-elements">-->
<!--            <ul class="icons-list">-->
<!--                <li><a data-action="collapse"></a></li>-->
<!--                <li><a data-action="close"></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="panel-body">-->
<!--        Starter pages include the most basic components that may help you start your development process - basic grid example, panel, table and form layouts with standard components. Nothing extra.-->
<!--    </div>-->

<!--    <div class="table-responsive">-->
<!--        <table class="table">-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>#</th>-->
<!--                    <th>First Name</th>-->
<!--                    <th>Last Name</th>-->
<!--                    <th>Username</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                <tr>-->
<!--                    <td>1</td>-->
<!--                    <td>Eugene</td>-->
<!--                    <td>Kopyov</td>-->
<!--                    <td>@Kopyov</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>2</td>-->
<!--                    <td>Victoria</td>-->
<!--                    <td>Baker</td>-->
<!--                    <td>@Vicky</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>3</td>-->
<!--                    <td>James</td>-->
<!--                    <td>Alexander</td>-->
<!--                    <td>@Alex</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>4</td>-->
<!--                    <td>Franklin</td>-->
<!--                    <td>Morrison</td>-->
<!--                    <td>@Frank</td>-->
<!--                </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->
<!-- /table -->


<!-- Grid -->
<div class="row">
    <div class="col-md-6">

        <!-- Horizontal form -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Horizontal form</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
               
            </div>
        </div>
        <!-- /horizotal form -->

    </div>

    <div class="col-md-6">

        <!-- Vertical form -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Vertical form</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
            
            </div>
        </div>
        <!-- /vertical form -->

    </div>
</div>
<!-- /grid -->
@endsection
