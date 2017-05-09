<center><h1>You Points :
    @foreach($data as $d)
          <h1>{{$d->point}}</h1>
    @endforeach
    ----------------------------------------------------------
    <style>
      table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
      }
      th, td {
          padding: 5px;
      }
      th,tr {
          text-align: center;
      }
    </style>
    <table  style="width:100%;">
      <tr>
        <th><h3>Points</h3></th>
        <th><h3>Description</h3></th>
      </tr>
      <tr>
        <td><h3>100 points</h3></td>
        <td><h3>hot amaricano (size s)</h3></td>
      </tr>
      <tr>
        <td><h3>200 points</h3></td>
        <td><h3>every coffee (size m)</h3></td>
      </tr>
      <tr>
        <td><h3>500 points</h3></td>
        <td><h3>coupon 200 baht</h3></td>
      </tr>
    </table>
  </div>
