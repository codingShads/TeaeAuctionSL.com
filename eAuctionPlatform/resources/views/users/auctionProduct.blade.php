@extends('layout.user-layout')


@section('UserUI')



<div class="px-24 mx-52 my-5">
    <ul>
        {{-- @if (count($valuationready) > 0) --}}
            {{-- @foreach ( $valuationready as $valuationready ) --}}

        <li class="mx-5 my-5 py-2 ">
            <div class="grid grid-cols-2  ">
                <div>
                    <a href="#!">
                        <img class="" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                    </a>
                </div>
                <div class="mx-5 my-5 flex flex-col">
                    <div>
                            <p id="final-bid"></p>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" id="myButton">Finalize Auction</button>
                        </div>
                    <div>
                        <a href=""> {{ $valuationready->grade }}</a>
                    </div>
                    <div>
                        <p>Time remaining: <span id="timer"></span></p>
                    </div>
                    <div>
                        <div>Starting Price : {{ $valuationready->valuation }}</div>
                        <div class="flex">
                            <form action="" id="bid-form">
                                <label for="amount">Place a Bid</label>
                                <input type="number" step="0.01" name="bid-amount" id="amount">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Place Bid</button>
                            </form>
                        </div>
                    </div>
                        
                    <div>Selling Mark : {{ $valuationready->sellingmark }}</div>
                    <h2>Bidding history:</h2>
                        <ul id="bidding-history"></ul>
                </div>
                
            </div>
        </li>
        {{-- @endforeach --}}
        {{-- @else
            <tr>
                <td>No Bids Available</td>
            </tr>
        @endif --}}
    </ul>
</div>


<script>
    
    var startingBid = 700;
    var endTime = Date.now() + (15 * 1000); // 1 minute in milliseconds

    // get the timer element and update it every second
    var timerElem = document.getElementById('timer');
    setInterval(function() {
      var timeRemaining = endTime - Date.now();
      if (timeRemaining <= 0) {
        // auction has ended
        timerElem.textContent = "Auction has ended!";
        document.getElementById('final-bid').textContent = "Final highest bid: $" + startingBid.toFixed(2);
        document.getElementById("myButton").style.display = "block";
        return;
      }
      var secondsRemaining = Math.ceil(timeRemaining / 1000);
      timerElem.textContent = secondsRemaining + "s";
    }, 1000);

    // get the bidding history element and starting bid
    var biddingHistoryElem = document.getElementById('bidding-history');
    biddingHistoryElem.innerHTML = "<li>$" + startingBid + "</li>";

    // handle bid form submission
    var bidFormElem = document.getElementById('bid-form');
    bidFormElem.addEventListener('submit', function(event) {
      event.preventDefault();
      var bidAmount = parseFloat(event.target.elements['bid-amount'].value);
      if (isNaN(bidAmount) || bidAmount <= startingBid) {
        alert("Please enter a valid bid amount greater than $" + startingBid + ".");
        return;
      }
      biddingHistoryElem.innerHTML = "<li>$" + bidAmount.toFixed(2) + "</li>" + biddingHistoryElem.innerHTML;
      startingBid = bidAmount;
      endTime = Date.now() + (5 * 1000); // reset the end time to 10 seconds
      document.getElementById('final-bid').textContent = ""; // clear the final bid display
    });
    document.getElementById("myButton").style.display = "none";

</script>



@endsection