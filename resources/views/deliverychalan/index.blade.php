@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/delivery.png')}}"> Delivery</div>
                <h3 align="center">Delivery Chalan List</h3>
                <div class="content-box-large">
                  <div class="card-body">       
                  <div class=col-md-10>
                    <h4>Delivery Chalan Details</h4>                   
                  </div>
                  <div class=col-md-2>
                      <a href="/deliverychalan/create" style="width: 35px" class=" btn btn-success btn-sm glyphicon glyphicon-plus"> </a>
                  </div>
        <div class="col-md-12">        
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">                   
                <thead>                   
                                  
                  <th style="font-weight: bold;color:black">Date</th>
                  <th style="font-weight: bold;color:black">Truck No</th>
                  <th style="font-weight: bold;color:black">Product</th>                     
                  <th style="font-weight: bold;color:black">Puerchase Order</th>                     
                  <th style="font-weight: bold;color:black">Description</th>                     
                  <th style="font-weight: bold;color:black">P.Code</th>                     
                  <th style="font-weight: bold;color:black">Box Qty</th>                     
                  <th style="font-weight: bold;color:black">Qty/Box</th>                     
                  <th style="font-weight: bold;color:black">Quantity</th>                     
                  <th style="font-weight: bold;color:black;padding-left: 45px;">Action</th>                      
                  

                </thead>
                <tbody>    
                  <tr>
                                            
                      <td>October 29, 2018</td>
                      <td>Truck 1</td>
                      <td>ABC</td>
                      <td>P.Order 1</td>
                      <td>Description 1</td>                    
                      <td>P.Code 1</td>                    
                      <td>15</td>                    
                      <td>10</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><a data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                     <a data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a>
                     <a href="/deliverychalan/report" data-placement="top" data-toggle="tooltip" title="Report"><button class="btn btn-warning btn-xs" ><span class="glyphicon glyphicon-print"></span></button></a></td>
                  </tr>
    
                  <tr>
                      
                     
                      <td>October 29, 2018</td>
                      <td>Truck 2</td>
                      <td>ABC</td>
                      <td>P.Order 2</td>
                      <td>Description 2</td>                    
                      <td>P.Code 2</td>                    
                      <td>25</td>                 
                      <td>20</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><a data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                     <a data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a>
                     <a href="/deliverychalan/report" data-placement="top" data-toggle="tooltip" title="Report"><button class="btn btn-warning btn-xs" ><span class="glyphicon glyphicon-print"></span></button></a></td>
                  </tr>
    
    
                  <tr>
                      
                      
                      <td >October 29, 2018</td>
                      <td >Truck 3</td>
                      <td >ABC</td>
                      <td>P.Order 3</td>
                      <td>Description 3</td>                    
                      <td>P.Code 3</td>                    
                      <td>35</td>                    
                      <td>30</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><a data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                     <a data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a>
                    <a href="/deliverychalan/report" data-placement="top" data-toggle="tooltip" title="Report"><button class="btn btn-warning btn-xs" ><span class="glyphicon glyphicon-print"></span></button></a></td>
                  </tr>    
    
                  <tr>
                      
                     
                      <td>October 29, 2018</td>
                      <td>Truck 4</td>
                      <td>ABC</td>
                      <td>P.Order 4</td>
                      <td>Description 4</td>                    
                      <td>P.Code 4</td>                    
                      <td>45</td>                    
                      <td>40</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><a data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                     <a data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a>
                     <a href="/deliverychalan/report" data-placement="top" data-toggle="tooltip" title="Report"><button class="btn btn-warning btn-xs" ><span class="glyphicon glyphicon-print"></span></button></a></td>
                  </tr>
    
    
                  <tr>
                      
                      
                      <td >October 29, 2018</td>
                      <td >Truck 5</td>
                      <td >ABC</td>
                      <td>P.Order 5</td>
                      <td>Description 5</td>                    
                      <td>P.Code 5</td>                    
                      <td>55</td>                    
                      <td>50</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><a data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                      <a data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a>
                      <a href="/deliverychalan/report" data-placement="top" data-toggle="tooltip" title="Report"><button class="btn btn-warning btn-xs" ><span class="glyphicon glyphicon-print"></span></button></a></td>
                  </tr>    
                </tbody>        
          </table>

          <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>                
          </div>            
        </div>

        <div  class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div  class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">        
                  <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                  <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>        
                </div>
              </div>
              <div class="modal-footer ">
                  <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
              </div>
            </div>
    <!-- /.modal-content --> 
        </div>
      <!-- /.modal-dialog --> 
      </div>   
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
              
          </div>
          <div class="modal-body">       
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
            </div>       
          </div>
          <div class="modal-footer ">
              <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
        </div>
    <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
@section('script')
  
<script type="text/javascript">
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });
        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();

});
</script>
@endsection
