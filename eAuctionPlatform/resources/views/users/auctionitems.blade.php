@extends('layout.user-layout')


@section('UserUI')


<div class="px-24 mx-52 my-5 border-solid border-2 border-fuchsia-950 rounded-lg">
    {{-- <ul> --}}
        @if (count($auctionList) > 0)
            @foreach ( $auctionList as $auctionList )
        {{-- <li class="mx-5 my-5 py-2 border-solid border-2 border-fuchsia-950 rounded-lg"> --}}
            <div class="flex mx-5 my-5 py-2 border-solid border-2 border-fuchsia-950 rounded-lg" style="justify-content: space-around">
                <div class="ml-2">
                    <a href="{{ route('auctionboard', $auctionList->id) }}">
                        <img class=" w-64" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                    </a>
                </div>
                <div class="mx-5 my-5" style="width: 350px">
                    <a href="">{{ $auctionList->grade }}</a>
                    <div>
                        <div>{{ $auctionList->valuation }}</div>
                        <span>{{ $auctionList->charactesristics }}</span>
                        <div>{{ $auctionList->sellingmark }}</div>
                    </div>
                </div>
            </div>
        {{-- </li> --}}
        @endforeach
        @else
            <tr>
                <td>No Bids Available</td>
            </tr>
        @endif
    {{-- </ul> --}}
</div>




@endsection