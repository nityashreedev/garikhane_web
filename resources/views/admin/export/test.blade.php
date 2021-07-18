@foreach($karmabhomi as $karmabhomi)
<table>
    <tr>
        <th><strong>वार्षिक उत्पादन क्षमता (उत्त्पादित बस्तु)</strong></th>
        <th><strong>वार्षिक उत्पादन क्षमता (परिमाण)</strong></th>
        <th><strong>वार्षिक उत्पादन क्षमता (उत्पादन मूल्य)</strong></th>
        <th><strong>वार्षिक उत्पादन क्षमता (कैफियत)</strong></th>
    </tr>

    @foreach($karmabhomi->yearlyProduction as $production)
    <tr>
        <td>{{ $production->product }}</td>
        <td>{{ $production->qty }}</td>
        <td>{{ $production->price }}</td>
        <td>{{ $production->remarks }}</td>
    </tr>
    @endforeach
</table>

<table>
    <tr>
        <th><strong>खरिद गरिने मेशिनरी (मेशिनेरिको नाम)</strong></th>
        <th><strong>खरिद गरिने मेशिनरी (लागत)</strong></th>
        <th><strong>खरिद गरिने मेशिनरी (उपलब्दता)</strong></th>
        <th><strong>खरिद गरिने मेशिनरी (कैफियत)</strong></th>
    </tr>
        
    @foreach($karmabhomi->machinery as $machine)
        <tr>        
            <td>{{ $machine->machine_name }}</td> 
            <td>{{ $machine->total_expense }}</td>
            <td>{{ $machine->availability }}</td>
            <td>{{ $machine->remarks }}</td>
        </tr>        
   @endforeach
</table>
@endforeach