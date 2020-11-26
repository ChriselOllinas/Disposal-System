<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $item->filename }}</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
            border: 1px solid black;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: black;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;

        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            
            color: #FFF;
            
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        .wrapper{
          width: 800px;

        }
        .table-header{
          border: 1px solid black;
          border-collapse: collapse;
          color: black;
          padding: 8px;

        }
        #table1{
          border: 1px solid black;
          border-collapse: collapse;
          color: black;
          padding: 8px;
        }
        .blacklabel{
         height: 15px; 
         width: 100%; 
         margin: 20px 0; 
         background: #222; 
         text-align: center; 
         color: white; 
         font: 13px Helvetica, Sans-Serif; 
         text-decoration: uppercase;  
         padding: 8px 0px;
        }
        h3{
          color: black;
          margin-left: 50px;
        }
        
    </style>

</head>
<body>
  <center>
<div class="wrapper">
  <div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 60%;">
                <img src="img/feu_logo.png" style="width: 400px;"><br>
                <h3><strong>Computer Services Office</strong></h3>
            </td>
            
            <td align="right" style="width: 31%;">
              <table class="table-header">
            <tr>
              <th colspan="2" class="blacklabel"><center>PROPERTY DISPOSAL FORM</center></th>
            </tr>
            <tr>
            <th id="table1">Item Status</th>
            <td id="table1">{{ $item->item_status }}</td>
          </tr>
          <tr>
            <th id="table1">Date</th>
            <td id="table1">{{ $item->created_at}}</td>
          </tr>
          <tr>
            <th id="table1">Control Number</th>
            <td id="table1">{{ $item->filename }}</td>
          </tr>
          </table>
            </td>
        </tr>

    </table>
</div>
<br>
<div class="invoice">
    
    <table id="table1" width="100%">
        <thead>
          <tr id="table1">
            <th id="table1">Item PID</th>
            <th id="table1">Item Serial Number</th>
            <th id="table1">Item Brand</th>
            <th id="table1">Item Model</th>
            <th id="table1">Status</th>
          </tr>
          </thead>
          <tbody>
          <tr id="table1">
            <td id="table1">{{ $item->item_pid }}</td>
            <td id="table1">{{ $item->item_serial }}</td>
            <td id="table1">{{ $item->item_brand }}</td>
            <td id="table1">{{ $item->item_model }}</td>
            <td id="table1">{{ $item->item_status }}</td>
          </tr>
          
          </tbody>
    </table><br>
    <hr>
    <table width="100%" >
      <tr >
      <td >
          <h3><strong>Prepared by:</strong></h3>
      </td> 
      <td >
          <h3><strong>Checked by:</strong></h3>
      </td>   
      </tr>
    </table>
    
    <table width="100%" >
      <tr>
      <td>
          <h3 style="text-decoration: overline;">Technical Support, CSO-MIS</h3>
      </td> 
      <td>
          <h3 style="text-decoration: overline;">Inventory Assistant</h3>
      </td>   
      </tr>
    </table><hr><br><hr>
    <table width="100%">
      <tr>
      <td>
          <h3><strong>Approved by:</strong></h3>
      </td> 
      <td >
          <h3><strong>Approved by:</strong></h3>
      </td>
      <td >
          <h3><strong>Approved by:</strong></h3>
      </td>   
      </tr>
    </table>
    <table width="100%">
      <tr>
      <td>
          <h3 style="text-decoration: overline;">Director, CSO-MIS</h3>
      </td> 
      <td >
          <h3 style="text-decoration: overline;">Director, Facilities Office</h3>
      </td>
      <td >
          <h3 style="text-decoration: overline;">Senior Director</h3>
      </td>   
      </tr>
    </table>
    <hr>
</div>
</div>
</center>
</body>
</html>