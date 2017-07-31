@extends('admin.layout')

@section('title')
Role Addition
@endsection

@section('content')

<div class="row">
  
<div class="table-responsive">
                                    <table >
                                        <thead>
                                            <tr>
                                               
                                                <th class="col-md-2"></th>
                                                <th class="col-md-2">ContestantId</th>
                                                <th class="col-md-2">Name</th>
                                                <!--<th class="col-md-2">Company</th>-->
                                                <th class="col-md-2"></th>
                                                <th class="col-md-2"></th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @forelse($conts as $cont)
                                            <tr style="padding-left: 40px">
                                           
                                                <td ><span class="text-muted"> </span></td>
                                                <td ><span class="text-muted">{{$cont->id}}</span></td>
                                                <td><span class="text-muted">{{$cont->name}}</span></td>
                                              <!-- <td><a class="btn btn-primary" href="">EDIT</a></td>
                                                
                        <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i><form action=""  method="POST">
                        {{csrf_field()}}
                        <input class="btn btn-sm btn-danger" type="submit" value="DELETE">
                     </form></span></td>-->
                                                                                                 
                                            </tr>
                                              @empty

                                                <h3>&nbsp;&nbsp;&nbsp;No Contestant in Database</h3>

                                            @endforelse
                                                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
    
    </div>
@endsection