@extends('layout.base-template', [
    'title' => 'Donate | Keys.lol',
])

@section('content')

    <div class="max-w-md mx-auto">

        <h1 class="mt-4">Donate</h1>

        <p class="text-md leading-normal mb-4">
            Keys.lol is a project made to educate people about Bitcoin and 256bit security. It is also pretty fun to try and find an active wallet.
            The code that runs this website is 100% <a class="font-bold underline" href="https://github.com/SjorsO/keys" target="_blank">open source</a>, licenced under the MIT licence.
            <br>
            <br>
            If you want to support keys.lol, you can make a donation. Any support is greatly appreciated.
        </p>


        <div class="flex items-center mb-4">
            <div class="mr-4 w-8 h-8">
                @include('components.svg.bitcoin')
            </div>
            <h3 class="mt-0">Bitcoin</h3>
        </div>

        <a href="bitcoin:1MSGtvPJ5nrtdqhsmnn4Fb6KjmkySLNGot">
            <img src="/images/bitcoin-qr.png" alt="1MSGtvPJ5nrtdqhsmnn4Fb6KjmkySLNGot" class="w-32 mb-2">
        </a>

        <pre class="mb-2 sm:overflow-x-auto overflow-x-scroll">1MSGtvPJ5nrtdqhsmnn4Fb6KjmkySLNGot</pre>
        <a href="https://blockchain.info/address/1MSGtvPJ5nrtdqhsmnn4Fb6KjmkySLNGot" title="Donate Bitcoin (BTC)" target="_blank" rel="nofollow">View on Blockchain.info</a>



        <div class="flex items-center mb-4 mt-16">
            <div class="mr-4 -mt-2 w-5 h-5">
                @include('components.svg.ethereum')
            </div>
            <h3 class="mt-0">Ethereum</h3>
        </div>

        <img src="/images/ethereum-qr.png" alt="0xC70e876b14eB5878Fe7Ae85431758c5b855902Fc" class="w-32 mb-2">

        <pre class="mb-2 break-words sm:overflow-x-auto overflow-x-scroll">0xC70e876b14eB5878Fe7Ae85431758c5b855902Fc</pre>
        <a href="https://etherscan.io/address/0xC70e876b14eB5878Fe7Ae85431758c5b855902Fc" title="Donate Ethereum (ETH)" target="_blank" rel="nofollow">View on Etherscan</a>

        <p class="mt-4">
            You can also use this address to donate any ERC20 token.
        </p>

    </div>

@endsection
